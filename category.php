<?php get_header(); ?>


<!-- ================ Start carousel ================ -->
<section id="cover" class="page-cover d-lg-block d-md-block d-sm-block d-block">

    <div class="page-cover">
        <div class="overlay">
                
        </div>
    </div>


</section><!-- End carousel -->

<div class="container ">
    <div class="row category-page">
     <!-- ================ Start body ================ 
     <div class="page-body">
        <div class="main-page allcars-page">-->

            <!-- ================ Start Posts ================ -->
            <div aria-label="breadcrumb" class="breadcrumb-section">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php bloginfo('url'); ?>">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php single_cat_title() ?></li>
                </ol>
            </div>

            <div class="category-heading">
                <div class="content">
                    <div class="col-md-10 col-sm-8 col-8">
                        <h1 class="category-title"><?php single_cat_title() ?></h1>  
                    </div>
                    <div class="col-md-2 col-sm-4 col-4">
                        <p>عدد المنشورات: <?php ?></p>
                    </div>

                    <div class="col-md-12">
                        <?php echo category_description() ?>
                    </div>
                </div>
                
            </div>


            <div class="category-posts">
                <h3 class="title center">كل المنشورات <?php //echo single_cat_title() ?></h3>
                <?php 

                    if (have_posts()){
                        while (have_posts()){
                            the_post(); 
                ?>  

                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="content-box">
                        <div class="post-thumbnail col-md-6 col-sm-12">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                    <?php the_post_thumbnail('', ['class' => 'img-responsive img-thumbnail', 'title' => 'Post Image']); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="content col-md-6 col-sm-12">
                            <h4 class="post-title"><a href="<?php the_permalink(); ?>">
                                    <?php 
                                        echo wp_trim_words( get_the_title(), 12 ); 
                                    ?>
                                </a>
                            </h4>
                            <div class="post-information">
                                <span class="post-author"><i class="fa-regular fa-user d-none"></i> <?php the_author_posts_link(); ?> </span>
                                <span class="post-date"><i class="fa-solid fa-calendar-days d-none"></i><?php the_time('F j, Y'); ?> </span>
                                <span class="post-comments"><i class="fa-sharp fa-solid fa-comment d-none"></i>
                                    <?php comments_popup_link('0 Comments', '% comments', 'comment_url', 'comments_disable'); ?>
                                </span>
                            </div>

                            <p class="post-content">
                                <?php the_excerpt(); ?>
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
                        
                    </div>    
                </div>
            <?php
                    }
                }
            ?> 
        </div>

        
        </div>
    </div><!-- ===== End Page Body ===== -->
</div>


<!-- ================  بداية قسم الفيديو  ================ -->

<div class="clear"></div>


<?php get_footer(); ?>