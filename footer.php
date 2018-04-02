<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<div class="footer c-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-9">
                <div class="row c-row">
                    <div class="col-sm-6 col-md-4 c-col">
                        <div class="box">
                            <h2 class="cst-title">WEB DEVELOPMENT</h2>
                            <div class="clrul">
                                <ul>
                                    <li><a href="">Website Design</a></li>
                                    <li><a href="">Magento Web Development</a></li>
                                    <li><a href="">WordPress Web Development</a></li>
                                    <li><a href="">PHP Web Development</a></li>
                                    <li><a href="">ASP.Net Web Development</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 c-col">
                        <div class="box">
                            <h2 class="cst-title">FRAMEWORKS</h2>
                            <div class="clrul">
                                <ul>
                                    <li><a href="">Laravel</a></li>
                                    <li><a href="">Symfony</a></li>
                                    <li><a href="">CodeIgniter</a></li>
                                    <li><a href="">Zend</a></li>
                                    <li><a href="">Yii</a></li>
                                    <li><a href="">CakePHP</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 c-col">
                        <div class="box">
                            <h2 class="cst-title">E-COMMERCE</h2>
                            <div class="clrul">
                                <ul>
                                    <li><a href="">Magento</a></li>
                                    <li><a href="">WooCommerce</a></li>
                                    <li><a href="">Shopify</a></li>
                                    <li><a href="">OpenCart</a></li>
                                    <li><a href="">Virtuemart</a></li>
                                    <li><a href="">osCommerce</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 c-col">
                        <div class="box">
                            <h2 class="cst-title">CMS</h2>
                            <div class="clrul">
                                <ul>
                                    <li><a href="">WordPress</a></li>
                                    <li><a href="">Drupal</a></li>
                                    <li><a href="">Joomla</a></li>
                                    <li><a href="">Typo3</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 c-col">
                        <div class="box">
                            <h2 class="cst-title">APP DEVELOPMENT</h2>
                            <div class="clrul">
                                <ul>
                                    <li><a href="">iOS App Development</a></li>
                                    <li><a href="">Android App Development</a></li>
                                    <li><a href="">Hybrid App Development</a></li>
                                    <li><a href="">Ionic App Development</a></li>
                                    <li><a href="">React Native App Development</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 c-col">
                        <div class="box">
                            <h2 class="cst-title">FRONT END</h2>
                            <div class="clrul">
                                <ul>
                                    <li><a href="">AngularJS</a></li>
                                    <li><a href="">Backbone.js</a></li>
                                    <li><a href="">jQuery</a></li>
                                    <li><a href="">Responsive Design</a></li>
                                    <li><a href="">UI & UX Design</a></li>
                                    <li><a href="">React JS</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-3">
                <div class="box">
                    <h2 class="cst-title">Contact Info</h2>
                    <div class="clrul">
                        <ul>
                            <li class="clearfix"><span class="icon-box"><i class="fa fa-map-marker" aria-hidden="true"></i></span><p><?php echo ot_get_option('address'); ?></p></li>
                            <li class="clearfix"><span class="icon-box"><i class="fa fa-phone" aria-hidden="true"></i></span><p><?php echo ot_get_option('number'); ?></p></li>
                            <li class="clearfix"><span class="icon-box"><i class="fa fa-skype" aria-hidden="true"></i></span><p><?php echo ot_get_option('skypy'); ?></p></li>
                            <li class="clearfix"><span class="icon-box"><i class="fa fa-envelope" aria-hidden="true"></i></span><p><?php echo ot_get_option('business_email'); ?></p></li>
                        </ul>
                    </div>
                </div>
                <div class="box text-center">
                    <img src="<?php bloginfo('template_directory');?>/assets/apt/images/badge.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="secondry-footer">
    <div class="container">
        <div class="pull-left">
            <img class="footer-logo s-icon icon-apt-footer" src="<?php bloginfo('template_directory'); ?>/assets/apt/images/apt.gif" alt="Apt Webdesign">
            <p class="footer-copy">APT Web Design © 2017 All Rights Reserved</p>
        </div>
        <div class="pull-right">
            <ul class="clrul text-right footer-social">
                <li><a href="echo ot_get_option('skypy_link_');"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                <li><a href="<?php echo ot_get_option('facebook');?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="<?php echo ot_get_option('twitee');?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<script src="<?php bloginfo('template_directory'); ?>/assets/apt/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/apt/js/bootstrap.min.js" ></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/apt/js/owl.carousel.min.js" ></script>
<script>
    jQuery("document").ready(function($){
        var nav = $('.navbar');
        $(window).scroll(function () {
            if ($(this).scrollTop() > 91) {
                nav.addClass("active-nav");
            } else {
                nav.removeClass("active-nav");
            }
        });
        var ww = $(window).width();
        if(ww<767){
            $('.client-logo-section .owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                autoplay:true,
                autoplayTimeout: 3000,
                autoplaySpeed: 2000,
                mouseDrag:true,
                touchDrag:true,
                pullDrag:true,
                dots:false,
                responsive:{
                    0:{
                        items:2
                    },
                    480:{
                        items:4
                    }
                }
            });
        }
        $('.technology .owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            autoplay:true,
            autoplayTimeout: 3000,
            autoplaySpeed: 2000,
            mouseDrag:true,
            touchDrag:true,
            pullDrag:true,
            dots:false,
            responsive:{
                0:{
                    items:3
                },
                600:{
                    items:4
                },
                1000:{
                    items:8
                }
            }
        })
        $('.project-demo').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            items:1,
            smartSpeed:250,
            mouseDrag:false,
            touchDrag:true,
            pullDrag:true,
            autoplay:true,
            dots:false,
            navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>']
        })
        $('.client-talk .owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            items:1,
            autoplay:true,
            autoHeight:false
        })
    });
</script>
		<!--</div><!-- #content -->

	<!--	<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">-->
				<?php
/*				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) : */?>
					<!--<nav class="social-navigation" role="navigation" aria-label="<?php /*/*esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); */?>">
						--><?php
/*							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
							) );
						*/?>
    <!--</nav>*/<!-- .social-navigation -->
				<?php /*endif;

				get_template_part( 'template-parts/footer/site', 'info' );
				*/?>
		<!--	</div>*/<!-- .wrap -->
		<!--</footer>*/<!-- #colophon -->
	<!--</div>*/<!-- .site-content-contain -->
<!--</div>*/<!-- #page -->

<?php //wp_footer(); ?>

</body>
</html>
