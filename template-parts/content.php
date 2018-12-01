<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Atom
 */

?>
<section class='article separate'>
	<div class='container'>
		<?php
		if ( is_singular() ) :
			the_title( '<h2 class=>', '</h2>' );
		else :
			the_title( '<h2 class=><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
		<?php endif; ?>


	<?php atom_post_thumbnail(); ?>

		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'atom' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'atom' ),
			'after'  => '</div>',
		) );
		?>
	</div>
</section>
