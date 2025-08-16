<?php
/**
 * The header for Astra Theme.
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
if ( apply_filters( 'astra_header_profile_gmpg_link', true ) ) {
    ?>
    <link rel="profile" href="https://gmpg.org/xfn/11"> 
    <?php
}
?>
<?php wp_head(); ?>
<?php astra_head_bottom(); ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
<?php astra_body_top(); ?>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#content" title="<?php echo esc_attr( astra_default_strings( 'string-header-skip-link', false ) ); ?>">
    <?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>
</a>

<div <?php echo wp_kses_post( astra_attr( 'site', [ 'id' => 'page', 'class' => 'hfeed site' ] ) ); ?>>
    
    <?php astra_header_before(); ?>

    <!-- ✅ Custom Logo + Secondary Menu -->
    <div class="custom-header-elements" style="text-align:center; padding:20px;">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo.png" alt="Custom Logo" width="120">
        </a>
        <nav class="secondary-navigation">
            <?php wp_nav_menu( [ 'theme_location' => 'secondary', 'menu_class' => 'secondary-menu' ] ); ?>
        </nav>
    </div>
    <!-- ✅ End Custom Elements -->

    <?php astra_header(); ?>

    <?php astra_header_after(); ?>

    <?php astra_content_before(); ?>
    
    <div id="content" class="site-content">
        <div class="ast-container">
            <?php astra_content_top(); ?>
