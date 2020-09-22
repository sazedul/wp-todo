<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" type="text/css" media="screen" />
    <script type='text/javascript' src='<?php bloginfo('template_url') ?>/assets/js/custom.js'></script>
</head>

<body>
    <?php get_template_part('svgs/checkbox'); ?>

    <div class="todo-list">
        <?php
        $args = array(
            'posts_per_page' => -1
        );
        query_posts($args);
        ?>
        <?php while (have_posts()) : the_post(); ?>
            <label class="todo">
                <input class="todo__state" type="checkbox" />

                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 200 25" class="todo__icon">
                    <use xlink:href="#todo__line" class="todo__line"></use>
                    <use xlink:href="#todo__box" class="todo__box"></use>
                    <use xlink:href="#todo__check" class="todo__check"></use>
                    <use xlink:href="#todo__circle" class="todo__circle"></use>
                </svg>

                <div class="todo__text"><?php the_title(); ?></div>

            </label>
        <?php endwhile;
        wp_reset_query(); ?>        
    </div>

</body>

</html>