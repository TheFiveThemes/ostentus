<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ostentus
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( has_post_thumbnail() ) :
			$image_id = get_post_thumbnail_id();
			$url = wp_get_attachment_image_src( $image_id, 'ostentus-large' );
		?>
		<figure class="entry-image">
			<img src="<?php echo esc_attr( $url[0] ); ?>">
		</figure><!-- .section-image -->
	<?php endif; ?>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php ostentus_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ostentus' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php ostentus_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

