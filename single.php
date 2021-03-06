<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Atom
 */

get_header();
?>
	<main>
		<div class='container'>
			<h1>Актуальные новости</h1>
		</div>
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
	</main>
<?php
get_template_part( 'template-parts/content', 'cities' );
get_template_part( 'template-parts/content', 'contact' );
get_footer();
