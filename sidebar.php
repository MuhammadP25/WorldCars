

<!-- =============== Main Sidebar =============== -->
<div class="main-sidebar">
    <?php
        if (is_active_sidebar('main-sidebar')) {
            dynamic_sidebar('main-sidebar');
        }
    ?>
</div>
<!-- =============== Additional Sidebar =============== -->
<div class="additional-sidebar">
        <?php
            $latest_posts_arguments = array(
                'posts_per_page'      => 5,
                'category_name'       => 'information',
                'tag__not_in'         => array(43, 44)
            );

            $query = new WP_Query($latest_posts_arguments);
            if ($query->have_posts()) {
        ?>

            <div class="post-header">
                <h2>معلومات تهمك</h2>
                <a href="<?php echo bloginfo('url') . '/information'; ?>">للمزيد</a>
            </div>
            <div class="content">

                <?php
                while ($query->have_posts()) {
                    $query->the_post();
                ?>

                <div class="col-md-12">
                    <div class="sidebar-content">
                        <div class="post-thumbnail col-md-5">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                    <?php the_post_thumbnail('', ['class' => 'img-responsive img-thumbnail', 'title' => 'Post Image']); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                        
                        <h3 class="post-title col-md-7 left"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 15); ?></a></h3>

                        <div class="left-side col-md-6 d-none">
                            <p class="post-content">
                                <?php the_excerpt(); ?>
                                <a href='<?php the_permalink(); ?>'><button class="btn btn-primary d-none">للمزيد</button></a>
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
