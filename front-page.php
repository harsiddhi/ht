<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<?php  $img_home = get_field('home_page_img');
          //  print_r($img_home['url']);

    ?>

<div class="banner-section" style="background-image:url(<?php print_r($img_home['url'])?>)">




    <h1 class="banner-text"><?PHP echo get_field('home_page_banner_text'); ?></h1>
    <!-- <img src="<?php //echo get_template_directory_uri()?>/assets/apt/images/banner-text.png" alt="" class="banner-text hidden-xs"> -->
    <!-- <img src="<?php //echo get_template_directory_uri()?>/assets/apt/images/banner-text-mobile.png" alt="" class="banner-text visible-xs"> -->
</div>
<div class="about-us-section c-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 about-detail">

                <span class="big-think"><?PHP echo ot_get_option('we_think'); ?>
                    <span><?php echo ot_get_option('big_title'); ?></span></span>
                <p>
                    <?php echo get_field('we_think_big'); ?>
                </p>
                <div class="text-center"><a href="<?php bloginfo('template_directory');?>/about-us/" class="cst-btn"><?php echo ot_get_option('who_we_are__title_'); ?><i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
            </div>
            <div class="col-sm-6 project-slider">
                <div>
                    <h2 class="cst-title"><?php echo ot_get_option('creative_webdesign_agency'); ?></h2>
                </div>
                <div class="owl-carousel owl-theme project-demo"><?php
 $images_agency = get_field('agency_image_');
                      $images_arr_agency = explode(",",$images_agency);
                      $size = 'large'; // (thumbnail, medium, large, full or custom size)?>
<?php if($images_agency) {  ?>
     <?php foreach($images_arr_agency as $im) { ?>
                    <div class="item">
                            <div class="pro-info">

                               <?php while (have_posts()) : the_post();the_content();endwhile;
                                ?>

                            </div>

                        <div class="pro-image">

                            <?php $a = wp_get_attachment_image_src($im,$size);

                            ?>
                            <img src="<?php print_r($a[0])?>">


                        </div>

                    </div>
                    <?php } ?>
                    <?php } ?></div>
                <div class="explore-all-project pull-right"><a href=<?php bloginfo('template_directory');?>/about-us/" class="cst-btn"><?php echo ot_get_option('who_we_are__title_'); ?><i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
            </div>
        </div>
    </div>
    <!-- <div class="bg-sec"><img src="<?php echo get_template_directory_uri()?>/assets/apt/images/wood.png" class="bottom-table" alt=""></div> -->
</div>
<div class="client-talk c-container">
    <div class="container">
        <div class="text-center">
            <h2 class="cst-title bordered invert">

            <?php echo ot_get_option('what_our_clients_say_'); ?></h2>
        </div>
        <div class="owl-carousel owl-theme">

			<?php
				$query = new WP_Query( array( 'post_type' => 'testimonial' ) );
				$posts = $query->posts;


				foreach($posts as $all_posts){
				?>
					<div class="item">
						<p class="client-quote"><?php echo $all_posts->post_content; ?></p>
						<p class="client-name">-<?php echo $all_posts->post_title; ?></p>
					</div>
				<?php
				}
			?>

        </div>
    </div>
</div>
<div class="our-client c-container">
    <div class="container">
        <?php echo get_field('our_valuable_clients'); ?>
        <div class="client-logo-section text-center clrul">
            <div class="fade-box">
                <?php
                    $images = get_field('client_imgs');
                      $images_arr = explode(",",$images);
                                            //var_dump($images_arr);
 $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
                    if($images): ?>
                <ul class="owl-carousel owl-theme">

                     <?php foreach($images_arr as $im) { ?>

                    <li class="item">
                        <?php print_r(wp_get_attachment_image($im)) ?>


                    </li>

                    <?php } ?>

                </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="technology c-container">
    <div class="container clrul">
        <div class="fade-box">
            <ul class="owl-carousel owl-theme">
                <li class="item"><img class="icon-android s-icon" src="<?php echo get_template_directory_uri()?>/assets/apt/images/apt.gif" alt="android"></li>
                <li class="item"><img class="icon-angular s-icon" src="<?php echo get_template_directory_uri()?>/assets/apt/images/apt.gif" alt="angular"></li>
                <li class="item"><img class="icon-aweber s-icon" src="<?php echo get_template_directory_uri()?>/assets/apt/images/apt.gif" alt="aweber"></li>
                <li class="item"><img class="icon-codeignitor s-icon" src="<?php echo get_template_directory_uri()?>/assets/apt/images/apt.gif" alt="codeignitor"></li>
                <li class="item"><img class="icon-drupal s-icon" src="<?php echo get_template_directory_uri()?>/assets/apt/images/apt.gif" alt="drupal"></li>
                <li class="item"><img class="icon-ionic s-icon" src="<?php echo get_template_directory_uri()?>/assets/apt/images/apt.gif" alt="ionic"></li>
                <li class="item"><img class="icon-ios s-icon" src="<?php echo get_template_directory_uri()?>/assets/apt/images/apt.gif" alt="ios"></li>
                <li class="item"><img class="icon-laravel s-icon" src="<?php echo get_template_directory_uri()?>/assets/apt/images/apt.gif" alt="laravel"></li>
                <li class="item"><img class="icon-magento s-icon" src="<?php echo get_template_directory_uri()?>/assets/apt/images/apt.gif" alt="magento"></li>
                <li class="item"><img class="icon-mailchimp s-icon" src="<?php echo get_template_directory_uri()?>/assets/apt/images/apt.gif" alt="mailchimp"></li>
                <li class="item"><img class="icon-mastercard s-icon" src="<?php echo get_template_directory_uri()?>/assets/apt/images/apt.gif" alt="mastercard"></li>
                <li class="item"><img class="icon-mysql s-icon" src="<?php echo get_template_directory_uri()?>/assets/apt/images/apt.gif" alt="mysql"></li>
                <li class="item"><img class="icon-paypal s-icon" src="<?php echo get_template_directory_uri()?>/assets/apt/images/apt.gif" alt="paypal"></li>
                <li class="item"><img class="icon-php s-icon" src="<?php echo get_template_directory_uri()?>/assets/apt/images/apt.gif" alt="php"></li>
                <li class="item"><img class="icon-realex s-icon" src="<?php echo get_template_directory_uri()?>/assets/apt/images/apt.gif" alt="realex"></li>
                <li class="item"><img class="icon-shopify s-icon" src="<?php echo get_template_directory_uri()?>/assets/apt/images/apt.gif" alt="shopify"></li>
                <li class="item"><img class="icon-skrill s-icon" src="<?php echo get_template_directory_uri()?>/assets/apt/images/apt.gif" alt="skrill"></li>
                <li class="item"><img class="icon-swift s-icon" src="<?php echo get_template_directory_uri()?>/assets/apt/images/apt.gif" alt="swift"></li>
                <li class="item"><img class="icon-symfony s-icon" src="<?php echo get_template_directory_uri()?>/assets/apt/images/apt.gif" alt="symfony"></li>
                <li class="item"><img class="icon-visa s-icon" src="<?php echo get_template_directory_uri()?>/assets/apt/images/apt.gif" alt="visa"></li>
                <li class="item"><img class="icon-woocommerce s-icon" src="<?php echo get_template_directory_uri()?>/assets/apt/images/apt.gif" alt="woocommerce"></li>
                <li class="item"><img class="icon-wordpress s-icon" src="<?php echo get_template_directory_uri()?>/assets/apt/images/apt.gif" alt="wordpress"></li>
                <li class="item"><img class="icon-zend s-icon" src="<?php echo get_template_directory_uri()?>/assets/apt/images/apt.gif" alt="zend"></li>
            </ul>
        </div>
    </div>
</div>

<?php get_footer(); ?>
