
<div class="container-fluid fh5co_footer_bg pb-3">
    <div class="container animate-box">
        <div class="row">
            <div class="col-12 spdp_right py-5">
                <?php $custom_logo_id = get_theme_mod('custom_logo');
                $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                ?>
                <a href="<?php bloginfo('url'); ?>">
                    <img src=" <?php echo $image[0] ?>" alt="Logo">
                </a> <br>
            </div>
            <div class="clearfix"></div>
            <div class="col-12 col-md-4 col-lg-3">
                <div class="footer_main_title py-3"> About</div>
                <?php if (is_active_sidebar('Left Footer')){
                    dynamic_sidebar('Left Footer');
                } ?>
            </div>
            <div class="col-12 col-md-3 col-lg-2">
                <div class="footer_main_title py-3"> Category</div>
                <?php if (is_active_sidebar('after-left-footer')){
                    dynamic_sidebar('after-left-footer');
                } ?>
            </div>
            <div class="col-12 col-md-5 col-lg-3 position_footer_relative">
                <div class="footer_main_title py-3"> Calender</div>
                <?php if (is_active_sidebar('search-side-calender')){
                    dynamic_sidebar('search-side-calender');
                } ?>
            </div>
            <div class="col-12 col-md-12 col-lg-4 ">
                <div class="footer_main_title py-3"> Last Modified Posts</div>
                <?php
                $a= array(
                        'posts_per_page' => 9,
                        'post__not_in' => get_option( 'sticky_posts' )
                );
                $foot_post= new WP_Query($a);
                ?>
                <?php if ($foot_post->have_posts()):while ($foot_post->have_posts()):$foot_post->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="footer_img_post_6"><?php the_post_thumbnail('medium',['class'=>'img-fluid']); ?></a>
                <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
        <div class="row justify-content-center pt-2 pb-4">
            <div class="col-12 col-md-8 col-lg-7 ">
                <div class="input-group">
                    <span class="input-group-addon fh5co_footer_text_box" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                    <input type="text" class="form-control fh5co_footer_text_box" placeholder="Enter your email..." aria-describedby="basic-addon1">
                    <a href="#" class="input-group-addon fh5co_footer_subcribe" id="basic-addon12"> <i class="fa fa-paper-plane-o"></i>&nbsp;&nbsp;Subscribe</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid fh5co_footer_right_reserved">
    <div class="container">
        <div class="row  ">
            <div class="col-12 col-md-6 py-4 Reserved"> © Copyright 2018, All rights reserved. Design by <a href="#" >Mujammel</a>. </div>
            <div class="col-12 col-md-6 spdp_right py-4">
                <?php wp_nav_menu(
                        array(
                                'theme_location' => 'top-left-header-menu',
                                'menu_id' => "top-left-menu",
                        )
                ); ?>
        </div>
    </div>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/owl.carousel.min.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<!-- Waypoints -->
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery.waypoints.min.js"></script>
<!-- Main -->
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>