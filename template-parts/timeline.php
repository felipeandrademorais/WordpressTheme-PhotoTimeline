<?php
    $args = array(
        'post_status'    => 'publish',
        'post_type'      => 'timeline',
    );

    $the_content = new WP_Query($args);
?>

<div id="timeline-1" class="timeline-container">
    <div class="timeline-header">
        <h2><?php echo get_theme_mod('set_section_1_titulo');?></h2>
        <h3><?php echo get_theme_mod('set_section_1_subtitulo');?></h3>
    </div>
    <div class="timeline">
        <?php if ($the_content->have_posts()) : ?>
            <?php while ($the_content->have_posts()) : $the_content->the_post(); ?>
                <div class="timeline-item" data-text="<?php echo get_field('titulo'); ?>">
                    <div class="timeline__content">
                        <img src="<?php echo get_field('imagem') ?>" alt="timeline_img" class="timeline__img">
                        <h2 class="timeline__content-title"><?php echo get_field('ano'); ?></h2>
                        <p class="timeline__content-desc"><?php echo get_field('texto'); ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>    
</div>

<div class="demo-footer">
    <a href="http://www.turkishnews.com/Ataturk/life.htm">Felipe Morais</a>
</div>