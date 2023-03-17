<?php
$service_description = get_field('service_description');
$service_image = get_field('service_image');
$i = 0;
?>
<section class="service">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="service__description">
                <?php echo $service_description; ?>
            </div>
            </div>
            <div class="col-md-6 service__image">
                <img src="<?php echo esc_url($service_image['url']); ?>"
                     alt="<?php echo esc_attr($service_image['alt']); ?>"/>
            </div>
            <div class="col-md-6">
                <div class="accordion" id="accordionExample">
                    <?php if (have_rows('service_accardion')): ?>
                        <?php while (have_rows('service_accardion')): the_row();
                            $service_accardion_image = get_sub_field('service_accardion_image');
                            $service_accardion_title = get_sub_field('service_accardion_title');
                            $service_accardion_description = get_sub_field('service_accardion_description');
                            $i++;
                            ?>
                            <div class="card">
                                <div class="card-head" id="heading<?php echo $i; ?>">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#collapse<?php echo $i; ?>" aria-expanded="true"
                                                aria-controls="collapse<?php echo $i; ?>">
                                            <img src="<?php echo esc_url($service_accardion_image['url']); ?>"
                                                 alt="<?php echo esc_attr($service_accardion_image['alt']); ?>"/>
                                            <?php echo $service_accardion_title; ?>
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapse<?php echo $i; ?>" class="collapse card-collapse show"
                                     aria-labelledby="heading<?php echo $i; ?>" data-parent="#accordionExample">
                                    <div class="card-r">
                                        <div class="card-body">
                                            <?php echo $service_accardion_description; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>
