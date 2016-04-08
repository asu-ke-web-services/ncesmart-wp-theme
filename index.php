<?php
  $title = "National Center of Excellence on Sustainable Materials and Renewable Technologies";
  get_header();
?>


  <script>
    $(function(){
    $("#slides").slides({
      play: 5000,
      hoverPause: false,
      effect: 'slide'

    });
    });
  </script>


  <style type="text/css">
  .slides_container {
    width:566px;
    height:315px;
  }
  .slides_container div {
    width:566px;
    height: 315px;
    display:auto;
  }

 .pagination {
 display: none;
 }

 .prev_arrow {
  float:left;
  font-size: 36px;
  letter-spacing: -1px;
  font-weight: bold;
 }

 .next_arrow {
  float:right;
  font-size: 36px;
  letter-spacing: -1px;
  font-weight: bold;
  margin: 0 10px 0 0;
 }

 .prev_arrow:hover {
  color: #666666;
 }

 .next_arrow:hover {
  color: #666666;
 }

 #front_left {
  background: #FFFFFF;
 }

  </style>


  <div id="front_left">

  <div id="slides">




  <div class="slides_container" style="float:left;">
  <?php echo do_shortcode('[nemus_slider id="1011"]')?>
  </div>

   </div>

      <br style="clear:both" />


  </div>

          <a href="/research/climate" class="systems"></a>

                    <a href="/research/energy" class="energy"></a>

            <a href="/research/materials" class="materials"></a>

                    <div class="clear"></div>

        <div id="front_blurb">
          <h1 class="home_blurb">Sustainability systems, climate, energy and materials</h1>
          <p class="front">The National Center of Excellence (NCE) on SMART Innovations provides climate and energy system solutions based on sound science and engineering to governments and industries around the globe.</p>
          <p class="front">Our research seeks to quantify complex climate-energy system interactions resulting from all phases of a product or technology's life cycle and to develop cost effective solutions to reduce any negative impacts.</p>
        </div>
                <div id="front_news_container">
                    <div class="front_col_news_bar"><h1 class="front_news">News</h1></div>
                    <?php
          $posts = get_posts('numberposts=6&offset=0&category=7');
          foreach($posts as $post) :
          setup_postdata($post);
            ?>
            <div class="news_col">
            <p class="post_date"><?php the_time('F j, Y'); ?></p>
            <h4 class="blog_front"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

            <!-- <?php the_excerpt(); ?> -->

          </div>
          <?php endforeach; ?>
                </div>
                <div class="clear"></div>



<?php
  get_footer();
?>
