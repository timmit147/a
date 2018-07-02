<!DOCTYPE html>
<html>
    <head>
        <link href="<?php echo get_bloginfo('template_directory'); ?>/css/main.css" rel="stylesheet">
        <link href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap-grid.css" rel="stylesheet">
        <link href="<?php echo get_bloginfo('template_directory'); ?>/css/custom.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <?php $pid = $post->ID; ?>
    <body id="<?php print $pid ?>" class="wrapper">


        <div id="header_menu">

            <div id="logo">
                <?php if (function_exists('the_custom_logo')) { the_custom_logo();} ?>
            </div>

            <div id="header_title">
                <h2><?php the_field('text'); ?></h2>
            </div>

            <div id="menu">
                <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?> 
            </div>
            
            <a onclick="menu()" ><i id="hamburger" class="fas fa-bars"></i></a>

<script>
                x = 0;
function menu() {
    if (x !== 1){
     document.getElementById('header_menu_mobile').style.display = 'block';
     x = 1;
 }
 else {
     document.getElementById('header_menu_mobile').style.display = 'none';
     x = 0;
 }
}
</script>   

        </div>
        
        <div id="header_menu_mobile">
                <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?> 
            </div>