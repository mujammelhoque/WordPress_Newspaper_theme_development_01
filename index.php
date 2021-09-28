<?php get_header() ?>
<?php get_template_part('hero') ?>

<div class="container-fluid paddding mb-5">
    <div class="row mx-0">
        <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
            <?php
            $a= array(
                    'post_type' => 'post',
                    'posts_per_page' => 1,
                    'post__not_in' => get_option( 'sticky_posts' )

            );
            $foot_post= new WP_Query($a);
            ?>
<?php if ($foot_post->have_posts()):while ($foot_post->have_posts()):$foot_post->the_post(); ?>
            <div class="fh5co_suceefh5co_height">
                <?php the_post_thumbnail('medium',['class'=>'img-fluid']); ?>
                <div class="fh5co_suceefh5co_height_position_absolute"></div>
                <div class="fh5co_suceefh5co_height_position_absolute_font">
                    <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp<?php the_date() ?>
                        </a></div>
                    <div class=""><a href="<?php the_permalink(); ?>" class="fh5co_good_font"> <?php the_title() ?></a></div>
                </div>
            </div>
<?php endwhile; ?>
<?php endif; ?>
        </div>
        <div class="col-md-6">
            <div class="row">
                <?php
                $a= array(
                        'post_type' => 'post',
                        'posts_per_page' => 4,
                        'post__not_in' => get_option( 'sticky_posts' )


                    );
                    $foot_post= new WP_Query($a);
                    ?>
                    <?php if ($foot_post->have_posts()):while ($foot_post->have_posts()):$foot_post->the_post(); ?>
                <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co_suceefh5co_height_2">
                        <?php the_post_thumbnail('medium',['class'=>'img-fluid']); ?>
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                            <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;<?php the_date() ?> </a></div>
                            <div class=""><a href="<?php the_permalink(); ?>" class="fh5co_good_font"> <?php the_title() ?></a></div>
                        </div>
                    </div>
                </div>

                    <?php endwhile; ?>
                    <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pt-3">
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">National</div>
        </div>
        <div class="owl-carousel owl-theme js" id="slider1">

                <?php
                $cat_arg= array(
                'cat'=> 17,
                'post_type'      => 'post',
                );
                $sport_post = new WP_Query($cat_arg);
                ?>
            <?php if ($sport_post->have_posts()):while ($sport_post->have_posts()):$sport_post->the_post(); ?>
            <div class="item px-2">
                <div class="fh5co_latest_trading_img_position_relative">
                    <div class="fh5co_latest_trading_img b-img">
                        <?php the_post_thumbnail('medium',['class'=>'img-fluid fh5co_img_special_relative']); ?>

                    </div>
                    <div class="fh5co_latest_trading_img_position_absolute"></div>
                    <div class="fh5co_latest_trading_img_position_absolute_1">
                        <a href="<?php the_permalink(); ?>" class="text-white"> <?php the_title() ?> </a>
                        <div class="fh5co_latest_trading_date_and_name_color"> <?php the_author() ?>- <?php echo get_the_date();?></div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</div>
<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">International</div>
        </div>
        <div class="owl-carousel owl-theme" id="slider2">
            <?php
            $cat_arg= array(
                    'cat'=> 20,
                    'post_type'      => 'post',
            );
            $sport_post = new WP_Query($cat_arg);
            ?>
            <?php if ($sport_post->have_posts()):while ($sport_post->have_posts()):$sport_post->the_post(); ?>
            <div class="item px-2">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img">
                        <?php the_post_thumbnail('medium',['class'=>'img-fluid']); ?>
                    </div>
                    <div>
                        <a href="<?php the_permalink(); ?>" class="d-block fh5co_small_post_heading"><span class=""><?php $title= the_title(); echo mb_substr($title,0,30); ?></span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i> <?php echo get_the_date();?></div>
                    </div>
                </div>
            </div>

            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="container-fluid fh5co_video_news_bg pb-4">
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom pt-5 pb-2 mb-4  text-dark">Business</div>
        </div>
        <div>
            <div class="owl-carousel owl-theme" id="slider3">

                <?php
                $cat_arg= array(
                        'cat'=> 2,
                        'post_type'      => 'post',
                );
                $sport_post = new WP_Query($cat_arg);
                ?>
                <?php if ($sport_post->have_posts()):while ($sport_post->have_posts()):$sport_post->the_post(); ?>
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img">
                                <?php the_post_thumbnail('medium',['class'=>'img-fluid']); ?>
                            </div>
                            <div>
                                <a href="<?php the_permalink(); ?>" class="d-block fh5co_small_post_heading"><span class=""><?php $title= the_title(); echo mb_substr($title,0,30); ?></span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> <?php echo get_the_date();?></div>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Latest News</div>
                </div>
                    <?php
                    $cat_arg= array(
                            'post_type'      => 'post',
                            'post__not_in' => get_option( 'sticky_posts' )
                    );
                    $sport_post = new WP_Query($cat_arg);
                    ?>
                    <?php if ($sport_post->have_posts()):while ($sport_post->have_posts()):$sport_post->the_post(); ?>
                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img">
                                <?php the_post_thumbnail('medium',['class'=>'img-fluid']); ?>
                            </div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7 animate-box">
                        <a href="<?php the_permalink(); ?> " class="fh5co_magna py-2"> <?php the_title() ?> </a>

                        <a href="single.html" class="fh5co_mini_time py-3"><?php the_author() ?> - <?php echo get_the_date();?></a>
                        <div class="fh5co_consectetur"> <?php the_excerpt(); ?>
                        </div>
                    </div>
                </div>
                    <?php endwhile; ?>
                    <?php endif; ?>

            </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags Cloud</div>
                </div>
                <div class="clearfix"></div>
                <div class="fh5co_tags_all">
                    <?php
                    if (is_active_sidebar('tags')){
                        dynamic_sidebar('tags');
                    }
                    ?>
                </div>
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Most Popular RSS </div>
                </div>
                <div class="row pb-3">

                    <?php
                    if (is_active_sidebar('sidebar-rss')){
                        dynamic_sidebar('sidebar-rss');
                    }
                    ?>
                </div>
        </div>
        <div class="row mx-0 animate-box" data-animate-effect="fadeInUp">
            <div class="col-12 text-center pb-4 pt-4">
                <?php echo the_posts_pagination(array(
                        "screen_reader_text" => ' '
                )); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>