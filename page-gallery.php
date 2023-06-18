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



    </div>

    <div class="content col-lg-12 col-md-12 col-sm-12 col-12 right">
            
        <?php the_content(); ?>

    </div>

    <!-- =============== Sidebar =============== -->
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