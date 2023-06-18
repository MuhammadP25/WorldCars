<?php get_header();?>

    <div class="container">
        <div class="error-page text-center">
            <img src="<?php echo get_template_directory_uri() . '/images/error_404.jpg'; ?>" alt="">
            <h1>خطأ 404</h1>
            <p>
                هذه الصفحة غير موجودة <br>
                يمكنك الإنتقال إلى الصفحة الرئيسية من هنا
            </p>
            <button class="btn btn-success"><a href="<?php bloginfo('url'); ?>">الصفحة الرئيسية</a></button>

        </div>
    </div>
    




<?php get_footer();?>