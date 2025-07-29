<?php
/* Template Name: Global Leadership */

?>

<?php get_header(); ?>
<div id="global-leadership-content" data-show-map="content-global">
  <div id="section-glv3" class="moby tabby tabby2 pt-5">
    <div class="glv3-map-container pt-5">
      <?php get_template_part('includes/global-leadership/map'); ?>
      <!--desktop nav-->
      <div class="glv3-map-nav">
        <ul>
          <li class="aa glv3-a" data-toggle="collapse" data-target-map="content-global"> <a
              href="#global">GLOBAL</a>
          </li>
          <li class="bb glv3-b" data-toggle="collapse" data-target-map="content-asia"><a href="#asia">ASIA</a></li>
          <li class="gg glv3-g" data-toggle="collapse" data-target-map="content-australia"><a href="#australia">AUSTRALIA</a></li>

          <li class="cc glv3-c" data-toggle="collapse" data-target-map="content-europe"><a href="#europe">EUROPE & MIDDLE EAST (EMEA)</a>
          </li>
          <li class="dd glv3-d" data-toggle="collapse" data-target-map="content-india"><a href="#india">INDIA</a>
          </li><br>
          <li class="ee glv3-e" data-toggle="collapse" data-target-map="content-latinamerica"><a href="#latinamerica">LATIN
              AMERICA</a></li>
          <li class="ff glv3-f" data-toggle="collapse" data-target-map="content-northamerica"><a href="#northamerica">U.S. &amp; CANADA</a></li>

        </ul>
      </div>
      <!--/desktop nav-->
    </div>
  </div>
  <?php get_template_part('includes/global-leadership/grid'); ?>

</div>

<script>
  // $(document).ready(function() {
  //   ////////////global ////////////
  //   ////////////global ////////////
  //   $(".glv3-map-nav li").click(function() {

  //     $('html, body').animate({
  //       scrollTop: $('#global-leaders').offset().top - 280
  //     }, 'slow');


  //   });


  //   $(".glv3-map-nav li").on('click', function() {
  //     var targetMap = $(this).attr('data-target-map');
  //     $('#global-leadership-content').attr('data-show-map', targetMap);

  //   });

  //   $(".glv3-map-nav li").on('mouseenter', function() {
  //     var targetMap = $(this).attr('data-target-map');
  //     $('#global-leadership-content').attr('data-show-map', targetMap);
  //   });
  //   $("[data-map-hover]").on('click', function() {
  //     var targetMap = $(this).attr('data-map-hover');
  //     $('#global-leadership-content').attr('data-show-map', targetMap);
  //   });
  //   $("[data-map-hover]").on('mouseenter', function() {
  //     var targetMap = $(this).attr('data-map-hover');
  //     $('#global-leadership-content').attr('data-show-map', targetMap);
  //   });


  // });

  $(document).ready(function() {
    function glFiltersGo(region) {
      var glWrap = $(".global-leaders .container");
      var card = $(".gl-card");
      var regionClass = {
        'content-asia': 'asia',
        'content-australia': 'australia',
        'content-europe': 'europe',
        'content-india': 'india',
        'content-northamerica': 'north-america',
        'content-latinamerica': 'latin-america',
        'content-global': 'global'
      } [region];

      var cardsActive = regionClass === 'global' ? card : $(".gl-card." + regionClass + ".region-show");

      glWrap.animate({
        "opacity": "0"
      }, 250).promise().then(function() {
        return card.hide().promise().then(function() {
          return cardsActive.show().promise().then(function() {
            return glWrap.animate({
              "opacity": "1.0"
            }, 250);
          });
        });
      });
    }

    function updateURLHash(region) {
      var regionHash = {
        'content-asia': '#asia',
        'content-australia': '#australia',
        'content-europe': '#emea',
        'content-india': '#india',
        'content-northamerica': '#north-america',
        'content-latinamerica': '#latin-america',
        'content-global': '#global'
      } [region];
      window.location.hash = regionHash;
    }

    function disablePointerEvents() {
      $('body').css('pointer-events', 'none');
    }

    function enablePointerEvents() {
      $('body').css('pointer-events', 'auto');
    }

    $(".glv3-map-nav li").click(function() {
      disablePointerEvents();
      var targetMap = $(this).attr('data-target-map');
      $('#global-leadership-content').attr('data-show-map', targetMap);
      glFiltersGo(targetMap);
      updateURLHash(targetMap);

      $('html, body').animate({
        scrollTop: $('#global-leaders').offset().top - 280
      }, 'slow', function() {
        enablePointerEvents();
      });
    });

    $(".glv3-map-nav li").on('mouseenter', function() {
      var targetMap = $(this).attr('data-target-map');
      $('#global-leadership-content').attr('data-show-map', targetMap);
      glFiltersGo(targetMap);
      updateURLHash(targetMap);
    });

    $("[data-map-hover]").on('mouseenter', function() {
      var targetMap = $(this).attr('data-map-hover');
      $('#global-leadership-content').attr('data-show-map', targetMap);
      glFiltersGo(targetMap);
      updateURLHash(targetMap);
    });

    $("[data-map-hover]").click(function() {
      disablePointerEvents();
      $('html, body').animate({
        scrollTop: $('#global-leaders').offset().top - 280
      }, 'slow', function() {
        enablePointerEvents();
      });
    });

    // Check URL hash on page load
    var initialRegion = window.location.hash.substring(1);
    if (initialRegion) {
      var regionMap = {
        'asia': 'content-asia',
        'australia': 'content-australia',
        'emea': 'content-europe',
        'india': 'content-india',
        'north-america': 'content-northamerica',
        'latin-america': 'content-latinamerica',
        'global': 'content-global'
      } [initialRegion];
      if (regionMap) {
        $('#global-leadership-content').attr('data-show-map', regionMap);
        glFiltersGo(regionMap);
      }
    }
  });
</script>


<?php get_footer(); ?>