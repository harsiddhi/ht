<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header();
$currentID = get_the_ID();?>
<div class="c-container">
      <div class="container">
        <div class="ttl"><h1 class="prime-title"><?php  the_title();?></h1></div>
        <div class="row">
          <div class="col-md-7">
            <div class="main-slider owl-carousel owl-theme">


<?php
  $loop = new WP_Query( array( 'post_type' => 'easymediagallery') );
  $images_detail = get_field('img_gallery');
  $images_slider_arr = explode(",",$images_detail);
  //var_dump($images_detail);
   $page = get_page_by_title( 'OUR WORK' ); //as an e.g.
  //$images_slider_arr = explode(",",$images_slider);
foreach ($images_slider_arr as $im1) {

	?>

                      <div class="item">
<?php $img_s = wp_get_attachment_image($im1);?>
                      	<img class="owl-lazy" data-src="<?php echo $img_s?>">
                      </div>
                      <?php } ?>

            </div>
          </div>
          <div class="col-md-4 col-md-offset-1 row-data">

      <h3><?php the_title();?></h3>

		<?php $text_data = get_field('project',$page);
  echo $text_data; ?>



      </div>
        </div>
      </div>
    </div>
    <?php
                $query = new WP_Query( array( 'post_type' => 'easymediagallery', 'posts_per_page'         => '3','post__not_in' => array($currentID)) );
                $posts = $query->posts;
              //  print_r($posts);
               // die();
?>

     <div class="c-container">
      <div class="container">
        <div class="text-center">
          <h2 class="cst-title bordered spacer">Dont be shy look here too..</h2>
        </div>
        <div class="work-list row">
<?php foreach($posts as $all_posts){
$meta = get_post_meta($all_posts->ID);
$category = get_the_terms($all_posts->ID,'emediagallery');
$title = $meta['easmedia_metabox_title'][0];?>
              <div class="col-sm-4 work-box">
              	<?php  $per = get_the_permalink($all_posts->ID); ?>
        <a href="<?php echo $per ?>">
         <img src='<?php echo $meta['easmedia_metabox_img'][0] ?>'>
          <span class="data-cont">
          <span class="data-inner">
            <span class="data">
            <span class="title"><?php echo $all_posts->post_title ?></span>
            <hr>
            <span class="content"> <?php foreach ($category as $cat){
                                $category_name = strtoupper($cat->name);
                                echo $category_name . "  "."/ ";
                                } ?></span>
            </span>
          </span>
          </span>
        </a>
        </div>
<?php } ?>

        </div>
      </div>
    </div>
<div class="c-container get-quote">
  <div class="container">
  <div class="footer-contact">
    <div class="text-center title-sec"><h2 class="cst-title bordered">get a quick quote</h2></div>
    <div role="form" class="wpcf7" id="wpcf7-f303-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<?php
    $investor_content_query = new WP_Query( array(
        'pagename'=> 'OUR WORK'
    ) );
    if ( $investor_content_query->have_posts() ) {
        while ( $investor_content_query->have_posts() )
        {
            $investor_content_query->the_post();
            the_content();
        }
    }
    wp_reset_postdata();
?>

</div> </div>
  </div>
</div>



<!--<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main"> -->

			<?php
			/* Start the Loop */
			/*while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/post/content', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				the_post_navigation( array(
					'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
					'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
				) );

			endwhile; // End of the loop.
			*/
			?>

		<!--</main><!-- #main -->
	<!--</div><!-- #primary -->
	<?php //get_sidebar(); ?>
<!--</div><!-- .wrap -->

<?php get_footer();?>
<script>
     jQuery("document").ready(function($){

    $('.main-slider').owlCarousel({
      items:1,
      lazyLoad:true,
      loop:true,
      dots:false,
      nav:true,
      navText:['<span class="left-nav"></span>','<span class="right-nav"></span>'],
      margin:10
    });


    $('.get-quote .form-control').on('focus blur', function (e) {
      $(this).parents('.form-group').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
    }).trigger('blur');


  });
</script>

