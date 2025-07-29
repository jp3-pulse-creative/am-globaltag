<?php add_action('wp_ajax_myfilter', 'misha_filter_function'); // wp_ajax_{ACTION HERE}
add_action('wp_ajax_nopriv_myfilter', 'misha_filter_function');

function misha_filter_function(){
	$args = array(
		'post_type' => 'team_member',
		'orderby' => 'meta_value', // we will sort posts by date
		'meta_key'	=> 'last_name',
		'order' => 'ASC',
		'posts_per_page' => -1,

	);






			if( isset( $_POST['filter-region'] ) ) {
				$args['tax_query'][] = array(
					'taxonomy' => 'filter_region',
					'field' => 'id',
					'terms' => $_POST['filter-region']
				);

			}
			if( isset( $_POST['filter-country'] ) ) {
				$args['tax_query'][] = array(
					'taxonomy' => 'filter_country',
					'field' => 'id',
					'terms' => $_POST['filter-country']
				);

			}





			$query = new WP_Query( $args );

			if( $query->have_posts() ) :
		 ?>
<style>
	.post-grid__col{
		opacity: 0;
		display: none;
	}
</style>
<div class="row my-3 post-grid">
	<?php
				while( $query->have_posts() ): $query->the_post(); /* grab the url for the full size featured image */

				$name = get_field('first_name').' '.get_field('last_name');
				$title = get_field( 'title' );
				$gl_title = get_field( 'gl_area' );
				$city = get_field( 'city' );

				$job_title = get_field('job_title');
				$featured_image = get_the_post_thumbnail_url( null, 'full' );

				?>
										<div class="member-ctn">

											<a class="member-link <?php echo get_field('location')?> <?php echo $job_title['value'] ?>"
												<?php if(get_field('external_link')):?> href="<?php echo get_field('external_link')?>"
												target="_blank" <?php else:?> style="pointer-events:none;" <?php endif;?>>
												<div class="mem-img">
													<img src="<?php if($featured_image){echo $featured_image ;}else{echo  site_url() ."/wp-content/uploads/2022/01/TAXAND_Redesign_OurTeam_Headshot_Placeholder@2x.jpeg";}?>"
														alt="<?php echo $name;?>" />
												</div>
												<div class="mem-text">
													<p><strong><?php echo get_the_title(); ?></strong></p>
													<p><?php echo $title;?></p>
													<p><?php echo implode( ' & ', $city );?></p>
												</div>

											</a>
										</div>
					<?php

								endwhile;
								?>


						</div>
	<?php wp_reset_postdata();?>

				<?php else :
					echo '<div class="post-grid__col col-12 px-0 mt-5 pt-5 no-results-found">
					<div class="post-card h-100 border-right-0">
					<p class="display-4">No results found.</p>
					</div>
					</div>';
				endif;
				die();
			}