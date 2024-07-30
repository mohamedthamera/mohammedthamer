<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cycure
 */
?>

<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo( 'charset' );?>">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ): ?>
    <?php endif;?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head();?>
</head>

<body <?php body_class();?>>

    <?php wp_body_open();?>


    <?php
        $cycure_preloader = get_theme_mod( 'cycure_preloader', false );
        $cycure_backtotop = get_theme_mod( 'cycure_backtotop', false );

        $cycure_preloader_logo = get_template_directory_uri() . '/assets/img/favicon.png';

        $preloader_logo = get_theme_mod('preloader_logo', $cycure_preloader_logo);

    ?>

    <?php if ( !empty( $cycure_preloader ) ): ?>
    <!-- pre loader area start -->
    <div id="preloader">
      <div id="loading-center">
         <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
         </div>
      </div>
   </div>
    <!-- pre loader area end -->
    <?php endif;?>


    <?php if ( !empty( $cycure_backtotop ) ): ?>
    <!-- back to top start -->
    <button class="scroll-top scroll-to-target" data-target="html">
      <i class="fas fa-angle-up"></i>
   </button>
    <!-- back to top end -->
    <?php endif;?>


    <!-- header start -->
    <?php do_action( 'cycure_header_style' );?>
    <!-- header end -->

    <!-- main-area -->
   <main class="main-area fix">

      <?php do_action( 'cycure_before_main_content' );?>