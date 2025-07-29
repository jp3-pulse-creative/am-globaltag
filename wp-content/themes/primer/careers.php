<?php
/* Template Name: Archive Careers */

$url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
$escaped_url = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
$prepage_url = $escaped_url;
$pg_loc = strpos($escaped_url, "pg=");
if ($pg_loc > 0) {
  $prepage_url = substr($escaped_url, 0, $pg_loc);
}

if (substr($prepage_url, -1) == "/") {
  $prepage_url = $prepage_url . "?";
}

$p_page = (int)$_GET['pg'];
$p_loc = $_GET['loc'];
$p_pos = $_GET['pos'];
$p_search = $_GET['search'];

?>

<?php get_header(); ?>

<div class="hero-row">
  <div class="row">
    <div class="col-sm-12">
      <div class="hero-image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/careers-bg.jpg)">
        <h1>Careers</h1>
      </div>
    </div>
  </div>
</div>

<div id="careers" class="pepi-row mrg-t-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="filter-bar">

          <div class="search-bar">
            <input class="quicksearch" type="text" placeholder="">
            <a id="career-search" href="#"><i class="fas fa-search"></i></a>
          </div>
          <div class="career-filter">
            <?php
            $field_key = "field_5efa51b8dac1c";
            $field = get_field_object($field_key);
            ?>
            <a href="#" data-val=".<?php echo $field_key ?>-list">
              <div class="plus-btn">
                <div class="line line-1"></div>
                <div class="line line-2"></div>
              </div> Position
            </a>
            <?php
            if ($field) {
              echo '<ul class="filter-list position-list ' . $field['key'] . '-list">';
              foreach ($field['choices'] as $k => $v) {
                echo '<li data-value=".' . $k . '">' . $v . '</li>';
              }
              echo '</ul>';
            }
            ?>
          </div>

          <div class="career-filter mrg-b-0">
            <?php
            $field_key = "field_5efa51f5dac1d";
            $field = get_field_object($field_key);
            ?>
            <a href="#" data-val=".<?php echo $field_key ?>-list">
              <div class="plus-btn">
                <div class="line line-1"></div>
                <div class="line line-2"></div>
              </div> Location
            </a>
            <?php
            if ($field) {
              echo '<ul class="filter-list location-list ' . $field['key'] . '-list">';
              foreach ($field['choices'] as $k => $v) {
                echo '<li data-value=".' . $k . '">' . $v . '</li>';
              }
              echo '</ul>';
            }
            ?>
          </div>
        </div>

        <div class="culture-bar desktop-only">
          <p>OUR CULTURE</p>
          <div class="related-insight">
            <div class="ri-img" style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/culture-icon01.jpg)"><span role="img" aria-label="The PEPI Team"> </span>
            </div>
            <div class="ri-text">
              <a href="<?php echo site_url(); ?>/videos">Meet the PEPI Team</a>
            </div>
          </div>
          <div class="related-insight">
            <div class="ri-img" style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/culture-icon02.jpg)"><span role="img" aria-label="Core Values"> </span>
            </div>
            <div class="ri-text">
              <a href="<?php echo site_url(); ?>/why-am-pepi/#core-values">Our Core Values</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-9">
        <div class="careers-listing">
          <?php

          $archive_args = array(
            'post_type' => 'career',
            'posts_per_page' => 999,
            'meta_key'      => 'position',
            'orderby'     => 'meta_value',
            'order'       => 'ASC'
          );

          $archive_query = new WP_Query($archive_args);
          if ($archive_query->have_posts()): while ($archive_query->have_posts()): $archive_query->the_post();
              $c_locs = get_field('location');
          ?>

              <div class="career-ctn <?php
                                      foreach ($c_locs as $c_loc) {
                                        echo $c_loc['value'];
                                        echo ' ';
                                      } ?> <?php echo get_field('position') ?>">
                <div class="career-title">
                  <h3><?php echo get_the_title() ?></h3>
                  <p><i class="fas fa-map-marker-alt"></i> <?php
                                                            foreach ($c_locs as $c_loc) {
                                                              echo $c_loc['label'];
                                                              echo ' <span class="line-d">|</span> ';
                                                            }  ?></p>
                </div>
                <div class="grey-divider"></div>
                <div class="career-content">
                  <?php the_content() ?>

                  <a href="<?php echo get_field('outbound_link') ?>" class="cta-btn" target="_blank">
                    <div class="cta-inner d-flex align-items-center"><span
                        class="arrow_carrot-right text-white"></span><span
                        class="btn-label">Learn More</span></div>
                  </a>
                </div>
              </div>

            <?php endwhile; ?>


          <? else : ?>

            <div class="career-ctn">
              <div class="career-title">
                <h1>No open job postings</h1>
              </div>
            </div>

          <?php endif; ?>

        </div>
        <div class="culture-bar mobile-only">
          <div class="related-insight">
            <div class="ri-img" style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/culture-icon01.jpg)"><span role="img" aria-label="The PEPI Team"> </span>
            </div>
            <div class="ri-text">
              <a href="<?php echo site_url(); ?>/videos">Meet the PEPI Team</a>
            </div>
          </div>
          <div class="related-insight">
            <div class="ri-img" style="background-image:url(<?php echo get_template_directory_uri(); ?>/library/images/culture-icon02.jpg)"><span role="img" aria-label="Core Values"> </span>
            </div>
            <div class="ri-text">
              <a href="<?php echo site_url(); ?>/why-am-pepi/#core-values">Our Core Values</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php //include (TEMPLATEPATH . '/includes/general/contact-form02.php'); 
?>

<script>
  $(document).ready(function() {

    var clist = $('.careers-listing').isotope({
      // options
      itemSelector: '.career-ctn',
      filter: function() {
        return qsRegex ? $(this).text().match(qsRegex) : true;
      }
    });

    var gpos = '';
    var gloc = '';
    var qsRegex;

    function filterList() {

      if (gpos != '') {
        if (gloc != '') {
          clist.isotope({
            filter: gpos + gloc
          });
        } else {
          clist.isotope({
            filter: gpos
          });
        }
      } else {
        if (gloc != '') {
          clist.isotope({
            filter: gloc
          });
        } else {
          clist.isotope({
            filter: '*'
          });
        }
      }

    }

    // use value of search field to filter
    var $quicksearch = $('.quicksearch').keyup(debounce(function() {

      gpos = '';
      gloc = '';
      $('.filter-list li').removeClass('active');

      clist.isotope({
        filter: function() {
          return qsRegex ? $(this).text().match(qsRegex) : true;
        }
      });

      qsRegex = new RegExp($quicksearch.val(), 'gi');
      clist.isotope();
    }, 200));

    // debounce so filtering doesn't happen every millisecond
    function debounce(fn, threshold) {
      var timeout;
      threshold = threshold || 100;
      return function debounced() {
        clearTimeout(timeout);
        var args = arguments;
        var _this = this;

        function delayed() {
          fn.apply(_this, args);
        }
        timeout = setTimeout(delayed, threshold);
      };
    }

    $('.position-list li').click(function() {
      if ($(this).hasClass('active')) {
        $(this).removeClass('active');
        gpos = '';
      } else {
        $('.position-list li').removeClass('active');
        $(this).addClass('active');
        var temp = $(this).data('value');
        gpos = temp;
      }
      filterList();
    });

    $('.location-list li').click(function() {
      $(this).toggleClass('active');
      var temp = $(this).data('value');
      if (gloc.search(temp) > -1) {
        if (gloc.search(temp + ', ') > -1) {
          gloc = gloc.replace(temp + ', ', '');
        } else if (gloc.search(', ' + temp) > -1) {
          gloc = gloc.replace(', ' + temp, '');
        } else {
          gloc = gloc.replace(temp, '');
        }
      } else if (gloc != '') {
        gloc = gloc + ', ' + temp;
      } else {
        gloc = temp;
      }
      filterList();
    });

    $('.career-filter a').click(function(e) {
      e.preventDefault();
      var target = $(this).data('val');
      console.log(target);
      $(this).toggleClass('active');
      $(target).toggleClass('active');
    });

    $('#career-search').click(function(e) {
      e.preventDefault();

      filterList();
    });
  });
</script>

<?php get_footer(); ?>