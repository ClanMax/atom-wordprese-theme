<?php
/**
 * @package Atom
 */

?>

<footer>
	<nav>
		<div class='container'>
			<div class='row'>
				<div class='logo'>
					<?php the_custom_logo(); ?>
				</div>
				<?php
				wp_nav_menu( array(
					'container'=> false,
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'nav',
				) );
				?>
				<span class='number'>8 800 637-96-96</span>
			</div>
		</div>
	</nav>
	<div class='madeby'>
		<div class='container'>
			<div class='row'>
				<span class='col-xl-4'>ООО «Атом» 2012-2018</span>
				<span class='col-xl-4'><a href='https://vk.com/makeevafl'>Разработано студией KATE.MAKE</a></span>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer();
get_template_part( 'template-parts/content', 'recall' );?>

</body>
</html>
