<?php
/* Template Name: Archive Video */

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
$p_type = $_GET['type'];
$p_sort = $_GET['sort'];
?>

<?php get_header(); ?>


<div class="hero-row">
  <?php include(TEMPLATEPATH . '/includes/services/video-hero03.php'); ?>
</div>

<div id="videos" class="pepi-row archive-page">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="filter-bar">


          <div id="section-filter">
            <div class="container">
              <div class="row">
                <div class="filter-table">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                      <tr>
                        <td width="123px" align="center" valign="middle">FILTER BY:</td>
                        <td width="140px" align="left" valign="middle" class=""><select id="typeSel" value="">
                            <option value="" selected="selected">Type</option>
                            <?php
                            $categories = get_categories(array(
                              'orderby' => 'name',
                              'parent' => 78
                            ));
                            foreach ($categories as $category) {
                            ?>
                              <option value="<?php echo $category->slug ?>"><?php echo $category->name ?></option>
                            <?php } ?>
                          </select></td>
                        <td width="140px" align="left" valign="middle" class=""><select id="sortSel" value="">
                            <option value="" selected="selected">Sort</option>
                            <option value="alphabetical">Alphabetical</option>
                            <option value="date">By Year</option>
                          </select></td>
                        <td class="mob-line" width="105px" align="left" valign="top"><a id="sel-filter" class="read-btn" href="<?php echo get_site_url() ?>/videos">Apply</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <script>
                $('#section-filter select').change(function() {
                  var link = "<?php echo get_site_url() ?>/videos/?type=";
                  link = link.concat($("#typeSel").val());
                  link = link.concat('&sort=');
                  link = link.concat($("#sortSel").val());
                  $('#sel-filter').attr('href', link);
                });
              </script>
            </div>
          </div>


        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
      </div>
    </div>
    <div class="row">
      <?php

      $cat_search = "";
      if ($p_type != "") {
        $cat_search = $p_type;
      }
      if ($p_sort == "date") {
        $orderby = "date";
        $order = 'DESC';
      }
      $args_max = array(
        'post_type' => 'video',
        'category_name' => $cat_search,
        'posts_per_page' => 999
      );
      $max_list = new WP_Query($args_max);
      $max_count = (int) $max_list->found_posts;
      $max_p = ceil($max_count / 15);
      $archive_args = array(
        'post_type' => 'video',
        'category_name' => $cat_search,
        'posts_per_page' => 15,
        'offset' => $p_page * 15,
        'meta_key' => 'sorting',
        'orderby' => 'meta_value',
        'order' => 'ASC',
      );

      if ($p_sort == "date") {
        $archive_args = array(
          'post_type' => 'video',
          'category_name' => $cat_search,
          'posts_per_page' => 15,
          'offset' => $p_page * 15,
          'orderby' => 'date',
          'order' => 'DESC',
        );
      }

      $archive_query = new WP_Query($archive_args);
      if ($archive_query->have_posts()): while ($archive_query->have_posts()): $archive_query->the_post();
      ?>
          <div class="col-sm-6 col-md-4">
            <div class="insight-block">
              <div class="insight-img" style="background-image:url(<?php echo get_the_post_thumbnail_url($insight, 'post-thumbnail'); ?>)">
                <div class="blue-overlay"></div><span role="img" aria-label="<?php echo get_the_title() ?>"> </span>
              </div>
              <!--<label class="date"><?php echo get_the_date('F d, Y') ?></label>-->
              <h3><?php echo mb_strimwidth(get_the_title(), 0, 55, '...'); ?></h3>
              <div class="short-border"></div>
              <a class="plain-btn" href="<?php echo get_field('video_url') ?>" target="_blank" data-lity>Watch Video <i class="fas fa-caret-right"></i></a>
            </div>
          </div>

        <?php endwhile; ?>

        <div class="col-sm-12">
          <div class="insight-pages">
            <?php if ($p_page > 0) { ?>

              <a href="<?php echo $prepage_url ?>&pg=<?php echo $p_page - 1 ?>" class="pg-btn"><?php echo $p_page; ?></a>

            <?php } ?>

            <a href="#" class="pg-btn active"><?php echo $p_page + 1; ?></a>

            <?php if ($p_page + 2 <= $max_p) { ?>
              <a href="<?php echo $prepage_url ?>&pg=<?php echo $p_page + 1 ?>" class="pg-btn"><?php echo $p_page + 2; ?></a>
            <?php } ?>
          </div>
        </div>

      <? else : ?>

        <div class="col">
          <h1>No entries found.</h1>
        </div>
      <?php endif;
      wp_reset_postdata(); ?>
    </div>
  </div>
</div>


<?php get_footer(); ?>