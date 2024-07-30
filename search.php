<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package cycure
 */

get_header();

$blog_column_xl = is_active_sidebar( 'blog-sidebar' ) ? 8 : 12;
$blog_column_lg = is_active_sidebar( 'blog-sidebar' ) ? 7 : 12;

?>

<div class="standard-blog-area inner-blog-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-<?php print esc_attr( $blog_column_xl );?> col-lg-<?php print esc_attr( $blog_column_lg );?>">
            	<div class="postbox__wrapper">
	                <?php
						if ( have_posts() ):
					?>
					<div class="result-bar page-header d-none">
						<h1 class="page-title"><?php esc_html_e( 'Search Results For:', 'cycure' );?> <?php print get_search_query();?></h1>
					</div>
					<?php
						while ( have_posts() ): the_post();
							get_template_part( 'template-parts/content', 'search' );
						endwhile;
					?>
					<nav aria-label="Page navigation pagination-wrap">
						<?php cycure_pagination( 'Prev', 'Next', '', [ 'class' => 'page-link next' ] );?>
					</nav>
					<?php
						else:
							get_template_part( 'template-parts/content', 'none' );
						endif;
					?>
            	</div>
            </div>
			<?php if ( is_active_sidebar( 'blog-sidebar' ) ): ?>
		        <div class="col-xl-4 col-lg-5 col-md-10">
		        	<aside class="blog-sidebar">
						<?php get_sidebar();?>
	            	</aside>
	            </div>
			<?php endif;?>
        </div>
    </div>
</div>

<?php
get_footer();
