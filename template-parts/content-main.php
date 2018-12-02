<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Atom
 */

?>

<article class='article active col-xl-4 col-md-6'>
	<a href='<?php the_permalink(); ?>'>
		<figure class='preview' >
			<!--<img src='img/3.png' alt='article image' class='preview mask' width='350px' height='350px' />-->
			<?php	$img_attribs = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' ); // returns an array
if( $img_attribs ) {
?>
<img src="<?php echo $img_attribs[0]; ?>" width="350" height="325" class="size-post-thumbnail">
<?php } ?>
			<figcaption><h3><?php the_title(); ?></h3></figcaption>
		</figure>
	</a>
</article>
