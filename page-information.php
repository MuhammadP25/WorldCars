<?php

/**
 * The page template file.
 * @package SongWriter
 * @since SongWriter 1.0.0
 */

get_header(); ?>


<!-- ================ Start carousel ================ -->
<section id="cover" class="page-cover d-lg-block d-md-block d-sm-block d-block">

    <div class="page-cover">
        <div class="overlay">
                
        </div>
    </div>


</section><!-- End carousel -->

<div class="container">

     <!-- ================ Start body ================ -->
<div class="page-body">
    <div class="main-page">
        <h2><?php the_title(); ?></h2>
        <div aria-label="breadcrumb" class="breadcrumb-section">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php bloginfo('url'); ?>">الرئيسية</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
            </ol>
        </div>


        <div class="page-content col-lg-8 col-md-12 col-sm-12 col-xs-12">

            <div class="page-header">
                <h3 class="post-title"><?php the_title(); ?></h3>
                <p class="post-content">
                    <?php the_content(); ?>
                </p>
            </div>

            <?php 
                // Get Post ID         => get_queried_object_id();
                // Get Post Categories => wp_get_post_categories( get_queried_object_id() )

                $page_post_arguments = array (

                    'posts_per_page'        => 10,
                    'orderby'               => 'date',
                    'category_name'         => 'information',
                    'post_status'           => 'publish'
                );

                $page_posts = new WP_Query($page_post_arguments);
                
                if ($page_posts->have_posts() ){

                    while ($page_posts->have_posts() ){
                        $page_posts->the_post();  
            ?>


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
                        <span class="post-author"><i class="fa-regular fa-user d-none"></i><?php the_author_posts_link(); ?> </span>
                        <span class="post-date"><i class="fa-solid fa-calendar-days d-none"></i><?php the_time('F j, Y'); ?> </span>
                        <span class="post-comments"><i class="fa-sharp fa-solid fa-comment d-none"></i>
                            <?php comments_popup_link('0 Comments', '% comments', 'comment_url', 'comments_disable'); ?>
                        </span>
                    </div>

                    <p class="post-content">
                        <?php the_excerpt(); ?>
                        <a href='<?php the_permalink(); ?>'><button class="btn btn-primary">للمزيد</button></a>
                    </p>
                </div>

            <?php 
                    }
                } ?>
        </div>

    </div>

    <!-- ===== Sidebar ===== -->
    <div class="sidebar col-lg-4 col-md-12 col-sm-12 col-xs-12 left">
                <?php 
                    get_sidebar();
                    
                    /*if (is_active_sidebar('main-sidebar')){
                        dynamic_sidebar('main-sidebar');
                    }*/
                ?>
    </div>

</div><!-- ===== End Page Body ===== -->

    <div class="clearfix"></div>

</div>

<?php get_footer(); ?>