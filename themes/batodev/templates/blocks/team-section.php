<?php
    $team_description = get_field('team_description');
    
?>
<section class="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="team__description">
                    <?php echo $team_description; ?>
                </div>
            </div>

            <?php $arg = [
                'post_type' => 'teams',
                'order' => 'DESC',
                'orderby' => 'date',
                'posts_per_page' => -1,
            ];
            $query = new WP_Query($arg);
            if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post(); 
                $blog_repeater = get_sub_field('blog_repeater');
                $team_test = the_field('team_test'); 
            ?>
             <?php if ($blog_repeater) :?>
               <?php foreach ($blog_repeater as $i) : ?>
                    <div>test</div>
                <?php endforeach; ?>
            <?php endif; ?>
             
            <div class="col-md-4">
                <div class="team__block">
                    <a href="<?php echo the_permalink(); ?>">
                    <div class="team__block-image">
                        <?php echo $blog_repeater; ?>
                        <?php echo the_post_thumbnail(); ?>
                        <div class="team__block-image-hover">
                        <?php if( have_rows('blog_repeater') ): ?>
                            <?php while( have_rows('blog_repeater') ): the_row(); 
                                $blog_repeater_img = get_sub_field('blog_repeater_img');
                                $blog_repeater_link = get_sub_field('blog_repeater_link');
                                ?>
                                <a href="<?php echo $blog_repeater_link['url']; ?>">
                                <img src="<?php echo esc_url($blog_repeater_img['url']); ?>" alt="<?php echo esc_attr($blog_repeater_img['alt']); ?>"/>
                                </a>
                                
                            <?php endwhile; ?>
                        <?php endif; ?>
                        </div>
                    </div>
                    <h4><?php echo the_title(); ?></h4>
                    <?php echo the_content(); ?>
                    </a>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif;
            wp_reset_query(); ?>
        </div>
    </div>
    </div>
    </div>
</section>