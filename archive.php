<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
				<?php if ( have_posts() ): ?>
					<header class="page-header d-none">
						<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="archive-description">', '</div>' );
						?>
					</header><!-- .page-header -->
					<?php
						/* Start the Loop */
						while ( have_posts() ):
							the_post();

							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
							get_template_part( 'template-parts/content', get_post_type() );
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
