<?php if (have_rows('flexible_content')): ?>
    <?php while (have_rows('flexible_content')): the_row(); ?>
        <?php get_template_part('parts/flexible/flexible', get_row_layout()); // Flexible content row ?>
    <?php endwhile; ?>
<?php endif; ?>