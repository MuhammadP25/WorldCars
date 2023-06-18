<?php get_header(); ?>

<div class="container search-page-header">

    <div class="search-box"><?php get_search_form(); ?></div>

    <div class="search-page">

        <?php if (empty(trim(get_search_query()))) { ?>

            <div class="no-results">
                <h3>لا توجد نتائج</h3>
                <p>يرجى إدخال كلمة البحث في خانة البحث أعلاه</p>
            </div>
            
        <?php } elseif (have_posts()) { ?>

            <h2>نتيجة البحث عن <?php echo get_search_query(); ?></h2>

            <div class="search-result col-md-8 col-sm-12 col-12">

                <?php while (have_posts()) { the_post(); ?>

                    <div class="content">

                        <div class="post-thumbnail">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                    <?php the_post_thumbnail('', ['class' => 'img-responsive img-thumbnail', 'title' => 'Post Image']); ?>
                                </a>
                            <?php endif; ?>
                        </div>

                        <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 15); ?></a></h3>

                        <div class="post-information">
                            <span class="post-author"><i class="fa-regular fa-user d-none"></i> <?php the_author_posts_link(); ?> </span>
                            <span class="post-date"><i class="fa-solid fa-calendar-days d-none"></i><?php the_time('F j, Y'); ?> </span>
                            <span class="post-comments"><i class="fa-sharp fa-solid fa-comment d-none"></i>
                                <?php comments_popup_link('0 Comments', '% comments', 'comment_url', 'comments_disable'); ?>
                            </span>
                        </div>

                        <p class="post`-content">
                            <?php the_excerpt(); ?>
                            <a href='<?php the_permalink(); ?>'><button class="btn btn-primary">للمزيد</button></a>
                        </p>
                    </div>

                <?php  } ?>

            </div> <!-- End of search-result -->

            <div class="searchpage-sidebar col-md-4 col-sm-12 col-12 d-none">
                <div class="content">
                    <?php
                    if (is_active_sidebar('search-widget')) {
                        dynamic_sidebar('search-widget');
                    }
                    ?>
                </div>
            </div>

            <div class="next-posts-side col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <h3>منشورات أخرى</h3>

                <?php 
                    $next_post_arguments = array (
                        'posts_per_page'    => 5,
                        'orderby'           => 'rand',
                        'post__not_in'      => array(get_queried_object_id()),
                        'category__not_in'    => array( 23, 1 )
                    );

                    $next_posts = new WP_Query($next_post_arguments);
                    
                    if ($next_posts->have_posts() ){

                        while ($next_posts->have_posts() ){
                            $next_posts->the_post();  
                ?>

                    <div class="next-post col-lg-12 col-md-6 col-sm-6 col-xs-12">

                        <div class="post-thumbnail col-sm-6">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                    <?php the_post_thumbnail('', ['class' => 'img-responsive img-thumbnail', 'title' => 'Post Image']); ?>
                                </a>
                            <?php endif; ?>
                        </div>

                        <div class="post-information">
                            <h4 class="post-title col-sm-6"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        </div>

                        <div class="post-information1">
                            <span class="post-author"><i class="fa-regular fa-user d-none"></i> <?php the_author_posts_link(); ?> </span>
                            <span class="post-date"><i class="fa-solid fa-calendar-days d-none"></i><?php the_time('F j, Y'); ?> </span>
                        </div>
                                                
                    </div>
                <?php 
                        } 
                    }
                ?>
            </div>

        <?php } else { ?>

            <div class="no-results">
                <h3>لا توجد نتائج</h3>
                <p>عفواً لا تتوفر نتائج لهذا البحث</p>
            </div>

        <?php } ?>

    </div> <!-- End of search-page -->

</div>

<div class="clearfix"></div>

<?php get_footer(); ?>