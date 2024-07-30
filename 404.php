<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package cycure
 */

get_header();
?>

<!-- 404-area -->
<section class="error-area">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-xxl-6 col-xl-7 col-lg-9 col-md-10">
               <?php
                  $cycure_error_text = get_theme_mod('cycure_error_text', __('404', 'cycure'));
                  $cycure_error_title = get_theme_mod('cycure_error_title', __('Sorry, the page you are looking for could not be found', 'cycure'));
                  $cycure_error_link_text = get_theme_mod('cycure_error_link_text', __('Back to home', 'cycure'));
               ?>
               <div class="error-content text-center">
                  <h2 class="error-text"><?php print esc_html($cycure_error_text) ?></h2>
                  <h5 class="content"><?php print esc_html($cycure_error_title);?></h5>
                  <a href="<?php print esc_url(home_url('/'));?>" class="btn back-btn">
                     <span class="text"><?php print esc_html($cycure_error_link_text);?></span>
                     <span class="shape"></span>
                  </a>
               </div>
            </div>
         </div>
      </div>
</section>
<!-- 404-area-end -->

<?php
get_footer();
