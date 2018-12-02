<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Atom
 */

?>

<div class='popup inactive' id='recall_popup'>
	<div class='container'>
		<form action='' class='container'>
			<span class='close'></span>
			<h2>Ответим на все ваши вопросы</h2>
			
			<?php echo do_shortcode( '[contact-form-7 id="45" title="form1"]' ); ?>
		</form>
	</div>
</div>
