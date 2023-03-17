<section class="hero autoplay">
    <?php if (have_rows('hero_slider')): ?>
        <?php while (have_rows('hero_slider')): the_row();
            $image = get_sub_field('hero_slider_img');
            $hero_description = get_sub_field('hero_description');
            $hero_button = get_sub_field('hero_button');
            ?>
            <div class="hero__slide">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                <div class="hero__slide-description">
                    <?php echo $hero_description; ?>
                    <a href="<?php echo $hero_button['link']; ?>"><?php echo $hero_button['title']; ?></a>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>
