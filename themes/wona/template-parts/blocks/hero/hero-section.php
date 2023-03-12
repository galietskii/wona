<section class="hero hero-slider">
    <?php if (have_rows('hero_slider')): ?>
        <?php while (have_rows('hero_slider')): the_row();
            $image = get_sub_field('hero_slider_img');
            ?>
            <?php if ($image): ?>
                <li>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                </li>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

