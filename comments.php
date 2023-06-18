
    <?php
        if(comments_open()) {
    ?>

            <h4><?php comments_number('لا يوجد تعليقات','1 تعليق','% تعليق')?></h4>

    <?php
            echo '<ul class="list-unstyle comments-list">';

            $comments_arguments = array(
                'max_depth'     => 3,
                'type'          =>'comment',
                'avatar_size'   => 50
            );

            wp_list_comments($comments_arguments);

            echo '</ul>';

            comment_form();

        } else {
            echo 'التعليقات غير مفعلة';
        }

    ?>