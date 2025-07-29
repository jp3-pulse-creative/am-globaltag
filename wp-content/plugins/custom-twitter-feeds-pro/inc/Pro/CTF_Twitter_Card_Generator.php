<?php
/**
 * Class SB_Instagram_Parse
 *
 * The structure of the data coming from the Instagram API is different
 * for the old API vs the new graph API. This class is used to parse
 * whatever structure the data has as well as use this to generate
 * parts of the html used for image sources.
 *
 * @since 2.0/5.0
 */
namespace TwitterFeed\Pro;

use TwitterFeed\CtfOpenGraph;

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

class CTF_Twitter_Card_Generator {

	private $url;

	private $twitter_card_data;

	private $open_graph_data;

	private $debug_mode;

	public function __construct( $url, $debug_mode = false ) {
		$this->url = $url;

		$this->twitter_card_data = array();

		$this->open_graph_data = array();

		$this->debug_mode = $debug_mode;
	}

	public function generate() {
		$url = $this->url;
		$options = get_option( 'ctf_options' );
		$use_curl = isset( $options['curlcards'] ) ? $options['curlcards'] : true;
		$values = array();

		if ( $use_curl && is_callable( 'curl_init' ) ) {
			$meta = $this->get_meta_tags_curl( $url );
		} else {
			$meta = @get_meta_tags( $url );
		}

		if ( ! empty( $meta ) ) {
			$values['twitter:card'] = isset( $meta['twitter:card'] ) ? sanitize_text_field( $meta['twitter:card'] ) : '';
			$values['twitter:site'] = isset( $meta['twitter:site'] ) ? sanitize_text_field( $meta['twitter:site'] ) : '';
			$values['twitter:site:id'] = isset( $meta['twitter:site:id'] ) ? sanitize_text_field( $meta['twitter:site:id'] ) : '';
			$values['twitter:creator'] = isset( $meta['twitter:creator'] ) ? sanitize_text_field( $meta['twitter:creator'] ) : '';
			$values['twitter:creator:id'] = isset( $meta['twitter:creator:id'] ) ? sanitize_text_field( $meta['twitter:creator:id'] ) : '';
			$values['twitter:title'] = isset( $meta['twitter:title'] ) ? $this->encode_helper( $meta['twitter:title'] ) : '';
			$values['twitter:description'] = isset( $meta['twitter:description'] ) ? $this->encode_helper( $meta['twitter:description'] ) : '';
			$values['twitter:image'] = isset( $meta['twitter:image'] ) ? esc_url( urldecode( $meta['twitter:image'] ) ) : '';
			if ( $values['twitter:image'] === '' && isset( $meta['twitter:image:src'] ) ) {
				$values['twitter:image'] = esc_url( urldecode( $meta['twitter:image:src'] ) );
			}
			if ( $values['twitter:title'] === '' && isset( $meta['og:title'] ) ) {
				$values['twitter:title'] = $this->encode_helper( $meta['og:title'] );
			}
			if ( $values['twitter:description'] === '' && isset( $meta['og:description'] ) ) {
				$values['twitter:description'] = $this->encode_helper( $meta['og:description'] );
			}
			if ( $values['twitter:image'] === '' && isset( $meta['og:image'] ) ) {
				$values['twitter:image'] = $meta['og:image'];
			}
			$values['twitter:image:alt'] = isset( $meta['twitter:image:alt'] ) ? sanitize_text_field( $meta['twitter:image:alt'] ) : '';

			$parsed_main = parse_url( $url );
			if ( $values['twitter:image'] !== '' ) {
				if ( strpos( $values['twitter:image'], 'http' ) === false ) {
					$start = ! empty( $parsed_main['scheme'] ) ? $parsed_main['scheme'] : 'http';
					$host = ! empty( $parsed_main['host'] ) ? $parsed_main['host'] : '';
					$values['twitter:image'] = $start .'://' . trailingslashit( $host ) . $values['twitter:image'];
				}
			}

			if ( ! empty( $values['twitter:image'] ) && ! file_is_valid_image( $values['twitter:image'] ) ) {
				$values['twitter:image'] = '';
			}

			if ( $values['twitter:card'] === 'player' ) {
				$values['twitter:player'] = isset( $meta['twitter:player'] ) ? sanitize_text_field( $meta['twitter:player'] ) : '';
			}

			if ( $values['twitter:card'] == '' && $values['twitter:description'] !== '' ) {
				$values['twitter:card'] = 'summary';
			}

			if ( $values['twitter:card'] === 'amplify' ) {
				$values['twitter:image:src'] = isset( $values['twitter:image'] ) ? $values['twitter:image'] : '';
				$values['twitter:amplify:teaser_segments_stream'] = isset( $meta['twitter:amplify:teaser_segments_stream'] ) ? sanitize_text_field( $meta['twitter:amplify:teaser_segments_stream'] ) : '';
				$vmap_url = isset( $meta['twitter:amplify:vmap'] ) ? sanitize_text_field( $meta['twitter:amplify:vmap'] ) : '';
				$media_src = $this->request_amplify_card_video_source( $vmap_url );
				$values['twitter:amplify:media:ctfsrc'] = $media_src ? trim( $media_src ) : '';
			}

			if ( $values['twitter:card'] === '' && ! empty( $values['twitter:image'] ) && ! empty( $values['twitter:title'] ) ) {
				$values['twitter:card'] = 'summary_large_image';
			}

		}

		$this->twitter_card_data = $values;

		if ( $this->open_graph_data_needed() ) {
			$this->request_open_graph_data();
		}

		$this->process_twitter_card_data();
	}

	public function get_twitter_card_data() {
		return $this->twitter_card_data;
	}

	public static function encode_helper( $string ) {
		$encoding_fixes_for_text = str_replace(
			array( 'â','â', 'â', '“', '”', '’', '‘', 'â', 'Ã¼', 'â', 'â', 'Ã', 'Ã¤', 'Ã¶', 'Ãº', 'Ã¡', 'Ã©', 'Ã³', 'Ã', 'í±', 'Â¡', 'Â', 'Ã¥', 'í¥' ),
			array( '&#8220;', '&#8221;', '&#8221;', '&#8220;', '&#8221;', '&#8217;', '&#8216;', '&#8216;', '&#252;', '&#8220;', '&#8220;', '&#223;', '&#228;', '&#246;', '&#250;', '&#225;', '&#233;', '&#243;', '&#237;', '&#241;', '&#161;', '', '&#229;' /*å*/, '&#229;' /*å*/ ),
			$string
		);

		$final_text = apply_filters( 'ctf_tc_text', $encoded_text );

		return wp_strip_all_tags( $final_text );
	}

	private function get_user_agent( $url ) {
		if ( strpos( $url, 'https://www.amazon.com' ) !== false
			|| strpos( $url, 'https://amzn.to' ) !== false ) {
			return 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)';
		}

		return '';
	}

	private function get_meta_tags_curl( $url ) {
		$user_agent = $this->get_user_agent( $url );
		$user_agent = apply_filters( 'ctf_tc_user_agent', $user_agent );

		$upload = wp_upload_dir();
		$upload_dir = $upload['basedir'];
		$cookie_file = trailingslashit( $upload_dir ) . CTF_UPLOADS_NAME . '/cookie.txt';

		$ch = curl_init();

		curl_setopt( $ch, CURLOPT_URL, $url );
		curl_setopt( $ch, CURLOPT_TIMEOUT, 10 );
		curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false ); // must be false to connect without signed certificate
		curl_setopt( $ch, CURLOPT_ENCODING, '' );
		curl_setopt( $ch, CURLOPT_HEADER, 1);
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1 );
		curl_setopt( $ch, CURLOPT_AUTOREFERER, true );
		curl_setopt( $ch, CURLOPT_MAXREDIRS, 10 );
		curl_setopt( $ch, CURLOPT_COOKIEJAR, $cookie_file );
		if ( ! empty( $user_agent ) ) {
			curl_setopt( $ch, CURLOPT_USERAGENT, $user_agent );
		}

		$html = curl_exec( $ch );

		curl_close( $ch );

		if ( $this->debug_mode ) {
			var_dump( $html );
		}

		// delete the cookie jar if one was created
		if ( is_file( $cookie_file ) ) {
			unlink( $cookie_file );
		}
		libxml_use_internal_errors(true);
		//parsing begins here:
		$doc = new \DOMDocument();
		if ( ! empty( $html ) ) {
			@$doc->loadHTML( $html );

			//get and display what you need:
			$metas = $doc->getElementsByTagName( 'meta' );

			$twitter_card_names = array(
				'twitter:card',
				'twitter:site',
				'twitter:site:id',
				'twitter:title',
				'twitter:description',
				'twitter:image',
				'twitter:image:src',
				'twitter:image:alt',
				'twitter:card',
				'twitter:player',
				'twitter:amplify:teaser_segments_stream',
				'twitter:image:src',
				'twitter:amplify:vmap',
				'twitter:amplify:media:ctfsrc',
				'og:title',
				'og:image',
				'og:description'
			);

			$twitter_card_meta = array();

			for ( $i = 0; $i < $metas->length; $i++ ) {
				$meta = $metas->item( $i );

				if ( in_array( $meta->getAttribute( 'name' ), $twitter_card_names, true ) ) {
					if ( $meta->getAttribute( 'content' ) !== '' ) {
						$twitter_card_meta[ $meta->getAttribute( 'name' ) ] = $meta->getAttribute( 'content' );
					} elseif( $meta->getAttribute( 'value' ) !== '' ) {
						$twitter_card_meta[ $meta->getAttribute( 'name' ) ] = $meta->getAttribute( 'content' );
					}
				} elseif ( in_array( $meta->getAttribute( 'property' ), $twitter_card_names, true ) ) {
					if ( $meta->getAttribute( 'content' ) !== '' ) {
						$twitter_card_meta[ $meta->getAttribute( 'property' ) ] = $meta->getAttribute( 'content' );
					} elseif( $meta->getAttribute( 'value' ) !== '' ) {
						$twitter_card_meta[ $meta->getAttribute( 'property' ) ] = $meta->getAttribute( 'content' );
					}
				}
			}

			return $twitter_card_meta;
		}
		libxml_clear_errors();
		libxml_use_internal_errors(false);
		return array();

	}

	/**
	 * checks to see if any critical data for twitter cards is missing after first request
	 *
	 * @return bool whether or not more data is needed
	 */
	private function open_graph_data_needed()
	{
		if ( ! empty( $this->twitter_card_data['twitter:card'] ) ) {
			if ( empty( $this->twitter_card_data['twitter:title'] ) || empty( $this->twitter_card_data['twitter:site'] ) || empty( $this->twitter_card_data['twitter:description'] ) || empty( $this->twitter_card_data['twitter:image'] ) ) {
				return true;
			}
		}

		return false;
	}

	/**
	 * connect to external website and retrieve other open graph info
	 *
	 * @param $url string url to get meta data from
	 */
	private function request_open_graph_data()
	{
		$url = $this->url;

		$values = array();

		$graph = CtfOpenGraph::fetch( $url );

		$values['twitter:title'] = isset( $graph->title ) ? sanitize_text_field( $graph->title ) : '';
		$values['twitter:description'] = isset( $graph->description ) ? sanitize_text_field( $graph->description ) : '';
		$values['twitter:image'] = isset( $graph->image ) ? esc_url( urldecode( $graph->image ) ) : '';

		if ( ! empty( $values['twitter:image'] ) && ! file_is_valid_image( $values['twitter:image'] ) ) {
			$values['twitter:image'] = '';
		}

		$this->open_graph_data = $values;
	}

	public static function parse_api_card_data( $data ) {
		$return = array(
			'twitter:title' => '',
			'twitter:description' => '',
			'twitter:image' => '',
			'twitter:site' => '',
			'twitter:card' => '',

		);

		if ( ! empty( $data['name'] ) ) {
			$return['twitter:card'] = $data['name'];
		}

		if ( ! empty( $data['url'] ) ) {
			$return['twitter:site'] = $data['url'];
		}

		if ( ! empty( $data['binding_values']['title']['string_value'] ) ) {
			$return['twitter:title'] = $data['binding_values']['title']['string_value'];
		}

		if ( ! empty( $data['binding_values']['description']['string_value'] ) ) {
			$return['twitter:description'] = $data['binding_values']['description']['string_value'];
		}
		if ( ! empty( $data['binding_values']['thumbnail_image_large']['image_value']['url'] ) ) {
			$return['twitter:image'] = self::save_cdn_image_to_local($data['binding_values']['thumbnail_image_large']['image_value']['url'], 'thumbnail_image_large');
		} elseif ( ! empty( $data['binding_values']['thumbnail_image']['image_value']['url'] ) ) {
			$return['twitter:image'] = self::save_cdn_image_to_local($data['binding_values']['thumbnail_image']['image_value']['url'], 'thumbnail_image');
		} elseif ( ! empty( $data['binding_values']['thumbnail_image_small']['image_value']['url'] ) ) {
			$return['twitter:image'] = self::save_cdn_image_to_local($data['binding_values']['thumbnail_image_small']['image_value']['url'], 'thumbnail_image_small');
		}

		// Broadcast Card Video
		if ($data['name'] === 'broadcast_video') {
			$return['twitter:broadcast_url'] = !empty($data['broadcastUrl']) ? $data['broadcastUrl'] : null;
			$return['twitter:embed_url'] = !empty($data['embedBroadcastUrl']) ? $data['embedBroadcastUrl'] : null;

			$return['twitter:broadcaster'] = [

				'display_name' => !empty($data['binding_values']['broadcaster_display_name']['string_value'])
					? $data['binding_values']['broadcaster_display_name']['string_value']
					: null,

					'username' => !empty($data['binding_values']['broadcaster_username']['string_value'])
					? $data['binding_values']['broadcaster_username']['string_value']
					: null

				];
		}

		return $return;
	}

	private function process_twitter_card_data()
	{
		$options = get_option( 'ctf_options', array() );
		$ssl_only = isset( $options['sslonly'] ) ? $options['sslonly'] : false;
		$tc_data = array();
		$tc_meta = $this->twitter_card_data;
		$og_meta = $this->open_graph_data;

		foreach( $tc_meta as $key => $value ) {
			$tc_data[$key] = ! empty( $tc_meta[$key] ) ? $tc_meta[$key] : ( isset( $og_meta[$key] ) ? $og_meta[$key] : '' );
		}

		// sometimes the card type is not one of the 4 accepted types but might still work
		if ( isset( $tc_data['twitter:card'] ) ) {
			if ( $tc_data['twitter:card'] !== ''
			     && $tc_data['twitter:card'] !== ''
			     && $tc_data['twitter:card'] !== 'summary_large_image'
			     && $tc_data['twitter:card'] !== 'summary'
			     && $tc_data['twitter:card'] !== 'amplify'
			     && $tc_data['twitter:card'] !== 'player'
				 && $tc_data['twitter:card'] !== 'broadcast_video' ) {
				$tc_data['twitter:card'] = 'summary_large_image';
			}
		}

		$tc_data['local'] = false;
		if ( ! empty( $tc_data['twitter:image'] ) ) {
			$tc_data['local'] = $this->create_local_image( $tc_data['twitter:image'] );
		}

		if ( $ssl_only && isset( $tc_data['twitter:image'] ) && strpos( $tc_data['twitter:image'], 'https' ) !== 0 ) {
			$tc_data['twitter:image']  = '';
		}

		$tc_data = apply_filters( 'ctf_tc_data', $tc_data );

		$this->twitter_card_data = $tc_data;
	}

	/**
	 * Save CDN image to local
	 * @since 2.4
	 *
	 * @param string $cdn_image_url
	 * @param string $size_name
	 *
	 * @return string
	 */
	public static function save_cdn_image_to_local($cdn_image_url, $size_name)
	{
		// save image to local
		$local_image = self::create_local_image($cdn_image_url, $size_name);
		// if local image can not be created then return the CDN image
		if (!$local_image) {
			return $cdn_image_url;
		}
		// get the upload
		$upload = wp_upload_dir();
		$upload_url = trailingslashit( $upload['baseurl'] ) . CTF_UPLOADS_NAME;
		return $upload_url. '/' . $local_image['800'];
	}

	public static function create_local_image( $url, $size_name = false ) {
		$img_name = sha1( preg_replace( "/[^a-zA-Z0-9]+/", "", $url ) );
		$resizer = new CTF_Resizer();

		if ($resizer->image_resizing_disabled()) {
			return false;
		}

		// get the upload dir
		$upload = wp_upload_dir();
		$upload_dir = trailingslashit($upload['basedir']) . CTF_UPLOADS_NAME;

		$local = array();
		$generated = false;
		$sizes = $resizer->get_image_sizes();
		foreach ( $sizes as $size ) {
			$name_parameter = $size_name ? $size_name : $size;
			$this_image_file_name = $img_name. '-' . $name_parameter . '.jpg';
			$card_image = $upload_dir . '/' . $this_image_file_name;
			if (!file_exists($card_image)) {
				$generated = $resizer->single_resize( $url, $this_image_file_name, $size );
			}

			if ( $generated ) {
				$local[ $size ] = $this_image_file_name;
			} else {
				$local = false;
			}
		}

		return $local;
	}

	/**
	 * connect to external website and retrieve other open graph info
	 *
	 * @param $url string url to get meta data from
	 * @return $src url of media file
	 */
	public static function request_amplify_card_video_source( $url )
	{
		$xml_str = file_get_contents( $url );

		$p = xml_parser_create();
		xml_parse_into_struct( $p, $xml_str, $data, $index );
		xml_parser_free( $p );

		$src = ! empty( $data[6]["value"] ) ? $data[6]["value"] : false;

		return $src;
	}
}
