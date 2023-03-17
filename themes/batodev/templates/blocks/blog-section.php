<?php
$blog_description = get_field('blog_description');
?>
<section class="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="blog__description">
                    <?php echo $blog_description; ?>
                </div>
            </div>
            <?php $arg = [
                'post_type' => 'blogs',
                'order' => 'DESC',
                'orderby' => 'date',
                'posts_per_page' => -1,
            ];
            $query = new WP_Query($arg);
            $count = $query->post_count;
            if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
            <div class="col-md-4 blog__post">
                <a href="<?php echo the_permalink(); ?>">
                <div class="blog__post-image">
                    <?php echo the_post_thumbnail(); ?>
                    <p class="blog-data"><?php echo date('j'); ?><span><?php echo date('M'); ?></span></p>
                </div>
                <div class="blog__post-desc">
                    <h4><?php echo the_title(); ?></h4>
                    <?php echo the_content(); ?>
                </div>
                </a>
            </div>
            <?php endwhile; ?>
            <?php if($count > 3): ?>
            <div class="col-md-12 blog__archive">
                <a href="#">All blogs</a>
            </div>
            <?php endif; ?>
            <?php endif;
            wp_reset_query(); ?>

        </div>
    </div>
</section>