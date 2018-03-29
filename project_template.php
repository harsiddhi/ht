<?php
/**
 * Template Name: project gallery
 *
 */

?>

    <script src="<?php echo get_template_directory_uri() ?>/assets/apt/js/jquery.min.js"></script>

<?php ?>

    <script type="text/javascript">
        var category_click_id;
        $(document).on("click","#link_cat",function(){
            category_click_id = $(this).data("show");
            //alert(category_click_id);


            //alert(category_click_id);
        });

        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
        var page = 2;
        //  category_click_id ;



        jQuery(function ($) {
            jQuery('body').on('click', '.loadmore', function () {

               // alert(category_click_id);
                var data = {
                    'action': 'load_posts_by_ajax',
                    'page': page,
                    'click_id':category_click_id,

                   // 'cat':category_click_id,
                    'security': '<?php echo wp_create_nonce("load_more_posts"); ?>'
                };

                jQuery.post(ajaxurl, data, function (response) {

                    //alert(xhttp.response());

                    $('.work-list').append(response);
                    //alert(data);
                    page++;
                    //   alert(page);
                });
                //alert(response);


            });
        });

    </script>

<?php get_header(); ?>
<?php //var_dump(get_post_type_archive_link( 'easymediagallery' ));
?>
    <body class="home">
    <div class="common-banner">
        <?php if (has_post_thumbnail($post->ID)){ ?>
            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
            <div class="banner-img" style="background-image: url('<?php echo $image[0]; ?>')">
            </div>
        <?php }
        else
        {
        ?>
        <div class="banner-img"
             style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/apt/images/contact.png');">
            <?php }
            ?>
            <h1 class="big-title"><?PHP echo ot_get_option('about_ue_header_text'); ?></h1>
        </div>
        <div class="c-container">
            <div class="container">
                <div class="filter">
                    <div class="form-group">
                        <select class="form-control visible-xs">
                            <?php $a = get_taxonomies();
                            $b = $a['emediagallery'];
                            $terms = get_terms($b);
                            ?>
                            <option value="all">All</option> <?php foreach
                            ($terms as $t) {

                                ?>
                                <option id ="option_val" value="<?php print_r($t->term_id); ?>"> <?php print_r($t->name); ?> </option>
                            <?php } ?>


                        </select>
                    </div>
                    <ul class="clrul work-list-filter hidden-xs">
                        <li><a name ="demo_script" class="active all" data-show="all" href="javascript:void(0);">All</a></li>
                        <?php foreach ($terms as $t) { ?>
                            <li><a id="link_cat" name ="demo_script" href="javascript:void(0);"
                                   data-show="<?php print_r($t->term_id); ?>"><?php print_r($t->name); ?></a></li>

                        <?php } ?>
                    </ul>
                    <div class="line-filter hidden-xs"></div>
                </div>

                <?php
                $post_page = 3;
                $cat_temp = 7;
                $query = new WP_Query(array
                    ('post_type' => 'easymediagallery',
                      'post_status' =>'publish',
                     'posts_per_page' => $post_page,
                      'paged' => 1,


                    /*'tax_query'     => array(
                        array(
                            'taxonomy'  => 'emediagallery',
                            'field'     => 'id',
                            'terms'     => 7
                        )
                    )*/
                ));
                $posts = $query->posts;
                ?>
                    <div class="work-list row">
                        <?php foreach ($posts as $all_posts) {
                            $meta = get_post_meta($all_posts->ID);
                            $per = get_the_permalink($all_posts->ID);

                            $category = get_the_terms($all_posts->ID, 'emediagallery');

                            $title = $meta['easmedia_metabox_title'][0];

                            $term_post_id = get_the_terms($all_posts->ID, 'emediagallery');

                            foreach ($term_post_id as $term_id) {
                                $temp_post_arr[] = $term_id->term_id;

                                //echo $term_id->term_id ;
                                ?>


                            <?php }
                            $temp_post_ids = implode(' ', $temp_post_arr);
                           // print_r($temp_post_ids);
                            unset($temp_post_arr);

//print_r($temp_post_ids);
//die();
                            ?>

                            <div class="col-sm-4 work-box <?php echo $temp_post_ids ?>">

                                <a href="<?php echo $per ?>">
                                    <!-- http://localhost/aptweb/easymedia/water-jug/ -->
                                    <?php ?>
                                    <img src="<?php echo $meta['easmedia_metabox_img'][0] ?>" alt="">
                                    <span class="data-cont">
                <span class="data-inner">
                  <span class="data">
                    <span class="title"><?php echo $all_posts->post_title ?></span>
                    <hr>
                    <span class="content">
                      <?php //print_r(($category[0]->name));
                      // die();
                      $count = 0;
                      $category_count = sizeof($category);
                      ?>

                      <?php foreach ($category as $cat) {
                          $count++;
                          $category_name = strtoupper($cat->name);


                          if ($category_count == $count) {
                              echo $category_name;
                          } else {
                              echo $category_name . "  " . "/ ";
                          }


                      } ?>

                </span>
                  </span>
                </span>
              </span>
                                </a>
                            </div>
                        <?php } ?>

                    </div>


                <?php
                $query = new WP_Query(array
                    ('post_type' => 'easymediagallery',

                    )
                );
                $posts = $query->posts; ?>
                <?php $totalproject = sizeof($posts);
                //echo $totalproject;
                // echo $totalproject ."totalproject";


                //$totalpage = floor($totalproject / $post_page) ;
                $totalpage = $totalproject / $post_page;
              //  echo $totalpage;



                if (is_integer($totalpage)) {
                    $totalpage = $totalpage - 1 ;
                    //echo $totalpage;
                } else {
                    $totalpage = floor($totalproject / $post_page);
                }
                //print_r($totalpage);


                if (isset($_POST['value_cap'])) {
                    $btn_click = $_POST['value_cap'] + 1;

                    }


                ?>


            </div>
            <br><br>
            <center>
                <button class="loadmore" value="" onclick="add()" id="btn" name="btn" style="color:white;margin">Load
                    More...
                </button>
            </center>


        </div>
        <script type="text/javascript">
            var capnum = 1;

            function add() {
                //alert("script run");

                cap = capnum++;

                value_page = "<?php echo $totalpage ?>";
                val12 = (parseInt(value_page));
              //  alert(val12);
                if (parseInt(cap, 10) === parseInt(val12, 10)) {
                    var x = document.getElementById("btn");
                    x.style.display = "none";
                }
                //alert(val12);

                //alert(typeof cap );
                /*$.ajax({
                    type: 'post',
                    data: {value_cap: cap},
                    success: function(response){
                        // Code
                    }
                });*/

            }
        </script>
        <script>
            jQuery("document").ready(function ($) {
                var nav = $('.navbar');
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 91) {
                        nav.addClass("active-nav");
                    } else {
                        nav.removeClass("active-nav");
                    }
                });
                var x = $('.line-filter');

                function resetLine() {
                    var d = $('.work-list-filter a.active');
                    x.width(d.outerWidth());
                    var p = d.position();
                    x.css('left', p.left);
                }

                resetLine();
                $('.work-list-filter a').click(function (event) {
                    $('.work-list-filter a').removeClass('active');
                    $(this).addClass('active');
                    resetLine();
                    var k = $(this).data('show');
                    if ($(this).hasClass('all')) {
                        $('.work-box').fadeIn();
                    } else {
                        $('.work-box').hide();
                        $('.' + k).fadeIn();
                    }
                });

                $('select').on('change', function () {
                    var k = this.value;
                    if (k == 'all') {
                        $('.work-box').fadeIn();
                    } else {
                        $('.work-box').hide();
                        $('.' + k).fadeIn();
                    }
                })
            });
        </script>

<?php get_footer() ?>