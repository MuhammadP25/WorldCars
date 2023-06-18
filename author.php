<?php get_header();?>

<div class="container">
    <div class="row">

        <div class="author-page col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <h3 class="post-title"><?php the_author_meta('nickname'); ?></h3>
            <!-- =============================== 
                        ABOUT AUTHOR SECTION   
            ===============================  -->
            <div class="about-author">
                    <!-- ||||| AUTHOR PICTURE ||||| -->
                <div class="post-thumbnail col-md-2">
                    <?php  
                        $author_img = array(
                            'class' => 'img-resbonsive img-thumbnail center-block'
                        );
                        // get_avatar('ID or Email','size','default','Alternate Text','Image Arguments')
                        echo get_avatar(get_the_author_meta('ID'), 120, '', 'User Image', $author_img);
                    ?>   
                </div>
                    <!-- ||||| CONTENT ||||| -->
                <div class="content-author">
                    <ul class='list-unstyled'>
                        <li>الاسم :   <?php echo the_author_meta('first_name').the_author_meta('last_name'); ?></li>
                        <li>الإيميل : <?php the_author_meta('email') ?></li>
                    </ul>
                    <hr>
                    <p><?php if(get_the_author_meta('description')) {
                                    the_author_meta('description');
                    }?></p>
                </div>
                    <!-- ||||| SOCIAL MEDIA LINKS ||||| -->
                <div class="links-author">
                    <ul class='list-unstyled'>
                        <!-- Facebook Link -->
                        <?php if(get_the_author_meta('facebook')) { ?>
                                <li><a href="<?php the_author_meta('facebook'); ?>"> <i class='fa-solid fa-facebook'>Facebook</i> </a> </li>
                        <?php }; ?>
                        <!-- Twitter Link -->
                        <?php if(get_the_author_meta('twitter')) { ?> 
                                <li><a href="<?php the_author_meta('twitter'); ?>"> <i class='fa-solid fa-twitter'>Twitter</i> </a> </li>
                        <?php }; ?>
                        <!-- Instagram Link -->
                        <?php if(get_the_author_meta('instagram')) { ?>
                                <li><a href="<?php the_author_meta('instagram'); ?>"> <i class='fa-solid fa-instagram'>Instagram</i> </a> </li>
                        <?php }; ?>
                        <!-- Youtube Link -->
                        <?php if(get_the_author_meta('youtube')) { ?>
                                <li><a href="<?php the_author_meta('youtube'); ?>"> <i class='fa-solid fa-youtube'>Youtube</i> </a> </li>
                        <?php }; ?>
                        <!-- Sound Cloud Link -->
                        <?php if(get_the_author_meta('soundcloud')) { ?>
                                <li><a href="<?php the_author_meta('soundcloud'); ?>"> <i class='fa-solid fa-sound-cloud'>Sound Cloud</i> </a> </li>
                        <?php }; ?>
                    </ul>
        
                </div>
                
            </div>
            <!-- =============================== 
                    AUTHOR STATISTICS SECTION  
            ===============================  -->
            <div class="stats-author">
                <div class="col-md-3 col-sm-3 col-3">
                    <div class="content-box">
                        <h4>المنشورات</h4>
                        <p><?php echo count_user_posts(get_the_author_meta('ID')); ?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-3">
                    <div class="content-box">
                        <h4>التعليقات</h4>
                        <p>
                            <?php 
                                $comments_count_arguments = array (
                                    'user_id'       => get_the_author_meta('ID'),
                                    'count'         => true
                                );
                                echo get_comments($comments_count_arguments);
                            ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-3">
                    <div class="content-box">
                        <h4>المشاهدات</h4>
                        <p><?php ?>0</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-3">
                    <div class="content-box">
                        <h4>المنشورات</h4>
                        <p><?php ?>0</p>
                    </div>
                </div>
            </div>

            <div class="clear"></div>
            <!-- =============================== 
                    AUTHOR POSTS SECTION  
            ===============================  -->
            <div class="author-posts">
                <h3 class="title">منشورات <?php echo the_author_meta('first_name');?></h3>
                <?php 
                    if (have_posts()){
                    while (have_posts()){
                        the_post();
                ?>    
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="content-box">
                            <h4 class="post-title"><a href="<?php the_permalink(); ?>">
                                    <?php 
                                        //$title = the_title(); 
                                        echo wp_trim_words( get_the_title(), 10 ); 
                                    ?>
                                </a>
                            </h4>
                            <div class="post-thumbnail">
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                        <?php the_post_thumbnail('', ['class' => 'img-responsive img-thumbnail', 'title' => 'Post Image']); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <p class="post-content">
                                <?php the_excerpt(); ?>
                            </p>
                        </div>    
                    </div>
                <?php
                        }
                    }
                ?> 
            </div>
            
        </div>

    </div>
</div>

<?php //get_sidebar(); ?>
        
    <div class="clearfix"></div>

<?php get_footer();?>