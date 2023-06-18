<?php get_header();
/*if (!defined('ABSPATH')) exit;
        get_header();*/
?>

<!-- ==========    Start Body    ========== -->

<!-- ================ Start carousel ================ -->
<section id="cover" class="hpage-cover d-lg-block d-md-block d-sm-block d-block">

    <div class="homepage-cover">
        <div class="overlay">

            <h2>دليلك إلى عالم السيارات</h2>
            <p>كل ما يتعلق بالسيارات من معلومات وأخبار وصور وأحدث العروض</p>

            <br>
            <br>

            <?php get_search_form(); ?>

        </div>
    </div>


</section><!-- End carousel -->

<!-- ================ Start Categories ================ -->
<section class="home-categories container d-none">
    <div class="row section-content">

        <?php
        // if (have_posts()){
        // while (have_posts()){        
        ?>
        <div class="col-md-1 col-sm-2 col-3">
            <div class="categories-content">
                <p><?php category_description() ?><img src="" alt=""></p>
                <h4><?php single_cat_title() ?>أودي</h4>
            </div>
        </div>
        <?php
        //        }
        //  }
        ?>
    </div>
</section><!-- End Categories -->

<!-- ================ Start Home Page  ================ -->
<div class="home-page container">
    <div class="row">
        <div class="home-page-content col-lg-8 col-md-12 col-12">

            <!-- ================ Start Posts ================ -->
            <div class="home-posts">
                <?php

                $latest_posts_arguments = array(
                    'posts_per_page'      => 6,
                    'category_name'       => 'new-cars',
                    'tag__not_in'         => array(43, 44)
                    //'category__not_in'    => array(1, 3, 4, 5, 6, 7, 8)
                );

                $query = new WP_Query($latest_posts_arguments);
                if ($query->have_posts()) {
                ?>

                    <div class="post-header">
                        <h2>أحدث السيارات</h2>
                        <a href="<?php echo bloginfo('url') . '/cars'; ?>">للمزيد</a>
                    </div>
                    <div class="content">

                        <?php
                        while ($query->have_posts()) {
                            $query->the_post();
                        ?>

                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="main-post all-cars">
                                    <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 15); ?></a></h3>

                                    <div class="post-information d-none">
                                        <span class="post-author"><i class="fa-regular fa-user d-none"></i> <?php the_author_posts_link(); ?> </span>
                                        <span class="post-date"><i class="fa-solid fa-calendar-days d-none"></i><?php the_time('F j, Y'); ?> </span>
                                        <span class="post-comments"><i class="fa-sharp fa-solid fa-comment d-none"></i>
                                            <?php comments_popup_link('0 Comments', '% comments', 'comment_url', 'comments_disable'); ?>
                                        </span>
                                    </div>

                                    <div class="post-thumbnail">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                                <?php the_post_thumbnail('', ['class' => 'img-responsive img-thumbnail', 'title' => 'Post Image']); ?>
                                            </a>
                                        <?php endif; ?>
                                    </div>

                                    <p class="post-content">
                                        <?php the_excerpt(); ?>
                                        <a href='<?php the_permalink(); ?>'><button class="btn btn-primary d-none">للمزيد</button></a>
                                    </p>



                                    <div class="post-category-tags d-none">
                                        <p class="post_catigories"><i class="fa-sharp fa-solid fa-tags d-none"></i> <?php the_category(); ?></p>
                                        <p class="post_tags"><i class="fa-sharp fa-solid fa-tags d-none"></i>
                                            <?php
                                            if (has_tag()) {
                                                the_tags();
                                            } else {
                                                echo 'Tags: لا توجد كلمات دلالية';
                                            }
                                            ?>
                                        </p>
                                    </div>

                                </div>
                            </div>

                    <?php
                        }
                        echo '</div>';
                    }
                    ?>

                    </div>

                    <!-- ================ Start Posts ================ -->
                    <div class="home-posts">
                        <?php

                        $latest_posts_arguments = array(
                            'posts_per_page'      => 6,
                            'category_name'       => 'news',
                            'tag__not_in'         => array(43, 44)
                        );

                        $query = new WP_Query($latest_posts_arguments);
                        if ($query->have_posts()) {
                        ?>

                            <div class="post-header">
                                <h2>آخر الأخبار</h2>
                                <a href="<?php echo bloginfo('url') . '/news'; ?>">للمزيد</a>
                            </div>
                            <div class="content">

                                <?php
                                while ($query->have_posts()) {
                                    $query->the_post();
                                ?>

                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                        <div class="main-post">
                                            <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 15); ?></a></h3>

                                            <div class="post-information d-none">
                                                <span class="post-author"><i class="fa-regular fa-user d-none"></i> <?php the_author_posts_link(); ?> </span>
                                                <span class="post-date"><i class="fa-solid fa-calendar-days d-none"></i><?php the_time('F j, Y'); ?> </span>
                                                <span class="post-comments"><i class="fa-sharp fa-solid fa-comment d-none"></i>
                                                    <?php comments_popup_link('0 Comments', '% comments', 'comment_url', 'comments_disable'); ?>
                                                </span>
                                            </div>

                                            <div class="post-thumbnail">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                                        <?php the_post_thumbnail('', ['class' => 'img-responsive img-thumbnail', 'title' => 'Post Image']); ?>
                                                    </a>
                                                <?php endif; ?>
                                            </div>

                                            <p class="post-content">
                                                <?php the_excerpt(); ?>
                                                <a href='<?php the_permalink(); ?>'><button class="btn btn-primary d-none">للمزيد</button></a>
                                            </p>

                                        </div>
                                    </div>

                            <?php
                                }
                                echo '</div>';
                            }
                            ?>

                            </div>


                            <!-- ================ Start Posts ================ -->
                            <div class="home-posts">
                                <?php

                                $latest_posts_arguments = array(
                                    'posts_per_page'      => 3,
                                    'category_name'       => 'offers',
                                    'tag__not_in'         => array(43, 44)
                                );

                                $query = new WP_Query($latest_posts_arguments);
                                if ($query->have_posts()) {
                                ?>

                                    <div class="post-header">
                                        <h2>أفضل العروض</h2>
                                        <a href="<?php echo bloginfo('url') . '/offers'; ?>">للمزيد</a>
                                    </div>
                                    <div class="content">

                                        <?php
                                        while ($query->have_posts()) {
                                            $query->the_post();
                                        ?>

                                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                <div class="main-post">
                                                    <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 15); ?></a></h3>

                                                    <div class="post-information d-none">
                                                        <span class="post-author"><i class="fa-regular fa-user d-none"></i> <?php the_author_posts_link(); ?> </span>
                                                        <span class="post-date"><i class="fa-solid fa-calendar-days d-none"></i><?php the_time('F j, Y'); ?> </span>
                                                        <span class="post-comments"><i class="fa-sharp fa-solid fa-comment d-none"></i>
                                                            <?php comments_popup_link('0 Comments', '% comments', 'comment_url', 'comments_disable'); ?>
                                                        </span>
                                                    </div>

                                                    <div class="post-thumbnail">
                                                        <?php if (has_post_thumbnail()) : ?>
                                                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                                                <?php the_post_thumbnail('', ['class' => 'img-responsive img-thumbnail', 'title' => 'Post Image']); ?>
                                                            </a>
                                                        <?php endif; ?>
                                                    </div>

                                                    <p class="post-content">
                                                        <?php the_excerpt(); ?>
                                                        <a href='<?php the_permalink(); ?>'><button class="btn btn-primary d-none">للمزيد</button></a>
                                                    </p>

                                                </div>
                                            </div>

                                    <?php
                                        }
                                        echo '</div>';
                                    }
                                    ?>

                                    </div>

                                    <!-- ================ Start Posts ================ -->
                                    <div class="home-posts">
                                        <?php
                                        $latest_posts_arguments = array(
                                            'posts_per_page'      => 3,
                                            'category_name'       => 'information, advices',
                                            'tag__not_in'         => array(43, 44)
                                        );

                                        $query = new WP_Query($latest_posts_arguments);
                                        if ($query->have_posts()) {
                                        ?>

                                            <div class="post-header">
                                                <h2>نصائح ومعلومات</h2>
                                                <a href="<?php echo bloginfo('url') . '/information-advices'; ?>">للمزيد</a>
                                            </div>
                                            <div class="content">

                                                <?php
                                                while ($query->have_posts()) {
                                                    $query->the_post();
                                                ?>

                                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                        <div class="main-post">
                                                            <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 15); ?></a></h3>

                                                            <div class="post-information d-none">
                                                                <span class="post-author"><i class="fa-regular fa-user d-none"></i> <?php the_author_posts_link(); ?> </span>
                                                                <span class="post-date"><i class="fa-solid fa-calendar-days d-none"></i><?php the_time('F j, Y'); ?> </span>
                                                                <span class="post-comments"><i class="fa-sharp fa-solid fa-comment d-none"></i>
                                                                    <?php comments_popup_link('0 Comments', '% comments', 'comment_url', 'comments_disable'); ?>
                                                                </span>
                                                            </div>

                                                            <div class="post-thumbnail">
                                                                <?php if (has_post_thumbnail()) : ?>
                                                                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                                                        <?php the_post_thumbnail('', ['class' => 'img-responsive img-thumbnail', 'title' => 'Post Image']); ?>
                                                                    </a>
                                                                <?php endif; ?>
                                                            </div>

                                                            <p class="post-content">
                                                                <?php the_excerpt(); ?>
                                                                <a href='<?php the_permalink(); ?>'><button class="btn btn-primary d-none">للمزيد</button></a>
                                                            </p>

                                                        </div>
                                                    </div>

                                            <?php
                                                }
                                                echo '</div>';
                                            }
                                            ?>

                                            </div>

                                    </div>


                                    <!-- ===== Sidebar ===== -->
                                    <div class="sidebar col-lg-4 col-md-12 col-sm-12 col-xs-12 left">
                                        <?php
                                        get_sidebar();

                                        /*if (is_active_sidebar('main-sidebar')) {
                                        dynamic_sidebar('main-sidebar');
                                    }*/
                                        ?>
                                    </div>


                            </div>
                    </div>

                    <hr>
                    <!-- ================ Start Videos ================ -->
                    <section class="home-videos container">
                        <div class="row section-content">

                            <h2 class="right">آخر الفيديوهات</h2>
                            <a href='https://35790cars.alsafwahacademy.com/media'><button class="btn btn-primary left">المزيد من الفيديوهات</button></a>
                            <?php
                                        get_sidebar();

                                        if (is_active_sidebar('video-widget')) {
                                        dynamic_sidebar('video-widget');
                                    }
                                        ?>
                            
                        </div>
                    </section><!-- End Categories -->

                    <div class="clear"></div>

                    <?php get_footer(); ?>