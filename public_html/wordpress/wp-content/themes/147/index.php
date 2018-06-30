<?php get_header(); ?>

<?php $menu_object = wp_get_nav_menu_object($menu); ?>

<?php while (have_posts()) : the_post(); ?> 

    <div id="content">
        
        <div id="slider">
            <div id="slider_text">
                <h2><?php the_field('slider_text'); ?></h2>
            </div>
            <img src="<?php the_field('slider'); ?>" />
        </div>
        
        <div class="container-full">
            <?php the_content(); ?> 
        </div>
        
        
        
        
<!--        <div id="header_widget">
            <?php dynamic_sidebar('header_widget'); ?>
        </div>
        -->
        
        
    </div>

<?php
endwhile;
wp_reset_query();
?>

<?php get_footer(); ?>
