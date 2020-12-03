<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>

<div class="container">

<!-- site-header -->
<header class="site-header">
<img id="logo" src="http://localhost/wordpress/wp-content/uploads/2020/11/image0.png" alt="">

<nav class="site-nav">
        <?php 
        $args = array (
            'theme_location' => 'primary'
        );
        ?>
        <?php wp_nav_menu( $args ) ;?>

<!-- This part if we want to add a specific element to a specific page -->
<!-- <?php if (is_page('subscription')) {?>
- Thank u for viewing our work
<?php } ?> -->



</nav>

</header> <!-- /site-header -->
    
