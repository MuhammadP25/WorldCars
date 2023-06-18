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
                <h3 class="title center">مكتبة الصور <?php //echo single_cat_title() ?></h3>
                <?php 
                    if (is_active_sidebar('slider-widget')){
                        dynamic_sidebar('slider-widget');
                    }
                ?>
            </div>

                <?php                                   
                   /* $query_images_args = array (
                        'post_type'      => 'attachment',
                        //'category_name'  => 'colors',
                        'post_mime_type' => 'image',
                        //'post_status'    => 'inherit',
                        'posts_per_page' =>  30,
                        //'meta_key' 	     => '_wp_attachment_image_alt',
                        //'orderby'        => '_wp_attachment_image_alt',
                        'order'          => 'ASC'
                    );

                    $query_images = new WP_Query( $query_images_args );

                    if($query_images->have_posts()) : 
                        while($query_images->have_posts()) : 
                            $query_images->the_post(); ?>

                            <h4><?php the_title(); ?></h4>
                            <?php echo $images = wp_get_attachment_image( $query_images->posts->ID, 'large', '', 
                                                array( "class" => "img-fluid mx-auto d-block", "alt" => get_post_meta(get_the_ID() , 
                                                '_wp_attachment_image_alt', true))); 
                            ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata();
                */    
                ?>

        </div>
        <!-- ===============  ================ -->
        
        </div>
    </div><!-- ===== End Page Body ===== -->
</div>


<!-- ================  بداية قسم الفيديو  ================ -->

<div class="clear"></div>


<?php get_footer(); ?>