<?php
/**
 * @package Magnus
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('section'); ?>>
	
	<?php if ( has_post_thumbnail() ) :
		$image_id = get_post_thumbnail_id();
		$url = wp_get_attachment_image_src( $image_id, 'ostentus-large' );
	?>

	<div class="section-image" style="background-image: url(<?php echo esc_attr( $url[0] ); ?>);">
	</div><!-- .section-image -->
	<?php else: ?>

	<div class="section-image"></div><!-- .section-image -->

	<?php endif; ?>
	
	<div class="section-inner">
		<header class="entry-header">
			<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
			<?php if ( 'post' == get_post_type() ) : ?>
			<?php /*
			<div class="entry-meta">
				<?php magnus_posted_on(); ?>
			</div><!-- .entry-meta -->
			*/ ?>	
			<?php endif; ?>
		</header><!-- .entry-header -->
	</div><!-- .section-inner -->

</article><!-- #post-## -->