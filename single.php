<?php get_header(); ?>

<!-- ================ Start body ================ -->
<div class="container ">

    <div aria-label="breadcrumb" class="breadcrumb-section">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php bloginfo('url'); ?>">الرئيسية</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
        </ol>
    </div>

    <div class="single-post col-lg-8 col-md-12 col-sm-12 col-xs-12">

        <div class="single-post_content">
            <h3 class="post-title"><?php the_title(); ?></h3>
            
            <div class="post-information">
                <span class="post-author"><i class="fa-regular fa-user d-none"></i> <?php the_author_posts_link(); ?> </span>
                <span class="post-date"><i class="fa-solid fa-calendar-days d-none"></i><?php the_time('F j, Y'); ?> </span>
                <span class="post-comments"><i class="fa-sharp fa-solid fa-comment d-none"><?php comments_number(); ?></i>
                    <?php comments_popup_link('0 Comments', '% comments', 'comment_url', 'comments_disable'); ?>
                </span>
            </div>

            <p class="post-content">
                <?php the_content(); ?>
            </p>
            
            <hr>
            <div class="post-category-tags">
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

        <div class="the-post-comments">
            <?php comments_template() ?>
        </div>

    </div>
    
    
    <div class="next-posts-side col-lg-4 col-md-12 col-sm-12 col-xs-12">
        <h3>المنشورات التالية</h3>

        <?php 
            // Get Post ID         => get_queried_object_id();
            // Get Post Categories => wp_get_post_categories( get_queried_object_id() )

            $next_post_arguments = array (

                'posts_per_page'    => 5,
                'orderby'           => 'author',
                'category__in'      => wp_get_post_categories(get_queried_object_id()),
                'post__not_in'      => array(get_queried_object_id())
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
                    <h4 class="post-title col-sm-6"> 
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?> 
                        </a>
                    </h4>

                    <p><?php the_excerpt(); ?></p>
                </div>
                
            </div>
        
        <?php 
                } 
            }
        ?>
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

<div class="clear"></div>

<?php get_footer(); ?>