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
    <div class="main-page allcars-page">
        <h2><?php the_title(); ?></h2>
        <div aria-label="breadcrumb" class="breadcrumb-section">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php bloginfo('url'); ?>">الرئيسية</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
            </ol>
        </div>


        <div class="page-content col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="page-header">
                <h3 class="post-title"><?php //the_title(); ?>شركات السيارات</h3>
                <p class="post-content">
                    <?php the_content(); ?>
                </p>
            </div>


                <?php 
                    $page_cat_arguments = (13);
                    
                    //echo get_cat_name($page_cat_arguments);
                    //echo category_description(13);
                    //single_cat_title();
                ?>


            <?php 
                // 2, 5, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 40
                // Get Post ID         => get_queried_object_id();     1-3-4-6-7-8-39-41-42
                // Get Post Categories => wp_get_post_categories( get_queried_object_id() )

                $page_post_arguments = array (

                    'posts_per_page'        => 50,
                    'orderby'               => 'date',
                    'post_status'           => 'publish',
                    'tag'                   => 'companies'
                    //'category_name'         => 'companies',
                    //'category__not_in'      => array(1, 3, 4, 6, 7, 8, 39, 41, 42)
                );

                $page_posts = new WP_Query($page_post_arguments);

                if ($page_posts->have_posts() ){

                    while ($page_posts->have_posts() ){
                        $page_posts->the_post();  
            
            ?>

                        
                <div class="content">
                    <div class="post-thumbnail">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php //the_permalink();  ?>" title="<?php the_title_attribute(); ?>">
                                <?php the_post_thumbnail('', ['class' => 'img-responsive img-thumbnail', 'title' => 'Post Image']); ?>
                            </a>
                        <?php endif; ?>
                    </div>

                    <h3 class="post-title"><a href="<?php //the_permalink(); ?>"><?php //echo wp_trim_words(get_the_title(), 15);?></a></h3>
                    <h3 class="post-title"><a href=""><?php the_category();?></a></h3>

                    
                </div>

            <?php 
                    }
                } ?>
        </div>

    </div>

    <!-- ===== Sidebar ===== -->
    <div class="sidebar col-lg-4 col-md-12 col-sm-12 col-xs-12 left d-none">
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