<?php
/**
 * Template Name: Landing page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Atom
 */

get_header();
?>
<main>
	<section class='board'>
		<div class='container'>
			<div class='row'>
				<div class='text col-sm-8'>
					<b>Стань <em>заметнее</em> с помощью <br>рекламы на подъездах домов</b>
					<p>Здесь должен быть дополняющий текст к заголовку, который доносит чуть больше инфы.</p>
					<button type='button' class='recall btn w-3'>Оставить заявку</button>
				</div>
				<div class='promo col-sm-4'></div>
			</div>
		</div>
	</section>

	<section class='features' id="features">
		<div class='container'>
			<h2>Решаем проблемы за вас</h2>
			<div class='row'>
				<div class='item col-xl-4  col-md-6'>
					<div class='icon'><span class='see'></span></div>
					<h3>Меня никто не увидит</h3>
					<p>
						Размещаем рекламу только на нужных домах. Все жильцы дома обратят внимание.
					</p>
				</div>
				<div class='item col-xl-4  col-md-6'>
					<div class='icon'><span class='foes'></span></div>
					<h3>Достали конкуренты</h3>
					<p>
						На стенде остается исключительно ваша реклама. Никаких конкурентов.
					</p>
				</div>

				<div class='item col-xl-4  col-md-12'>
					<div class='icon'><span class='secure'></span></div>
					<h3>Мое объявление сорвут</h3>
					<p>
						Все рекламные стенды защищены от вандалов. Предоставляем фото-отчет.
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class='stand_content'>
		<div class='container'>
			<div class='row'>
				<div class='col-md-6 stand'>
					<img src='<?php echo get_bloginfo('template_url') ?>/image/stand.png' alt='Фото стенда' width='471px' height='490px' />
				</div>
				<div class='col-md-6 f'>
					<h2>Из чего состоит стенд?</h2>
					<ul class='arrow'>
						<li>Металлическая рама</li>
						<li>Защитное стекло</li>
						<li>Антивандальные винты</li>
						<li>Информация о доме</li>
						<li>Место под вашу рекламу</li>
					</ul>
					<button type='button' class='btn w-4 recall'>Оставить заявку</button>
				</div>
			</div>
		</div>
	</section>

	<section class='stand_examples blue_back' id="ourworks">
		<div class='container'>
			<h2>Наши стенды в работе</h2>
			<div class='row'>
				<div class='item col-xl-4 col-md-6'><img src='<?php echo get_bloginfo('template_url') ?>/image/ex1.jpg' alt='Наш стенд' width='350' height='350' class='mask' /></div>
				<div class='item col-xl-4 col-md-6'><img src='<?php echo get_bloginfo('template_url') ?>/image/ex2.jpg' alt='Наш стенд' width='350' height='350' class='mask' /></div>
				<div class='item col-xl-4 col-md-6'><img src='<?php echo get_bloginfo('template_url') ?>/image/ex3.jpg' alt='Наш стенд' width='350' height='350' class='mask' /></div>
				<div class='item col-xl-4 col-md-6'><img src='<?php echo get_bloginfo('template_url') ?>/image/ex4.jpg' alt='Наш стенд' width='350' height='350' class='mask' /></div>
				<div class='item col-xl-4 col-md-6'><img src='<?php echo get_bloginfo('template_url') ?>/image/ex5.jpg' alt='Наш стенд' width='350' height='350' class='mask' /></div>
				<div class='item col-xl-4 col-md-6'><img src='<?php echo get_bloginfo('template_url') ?>/image/ex6.jpg' alt='Наш стенд' width='350' height='350' class='mask' /></div>
			</div>
		</div>
	</section>

	<section class='partners'>
		<div class='container'>
			<h2>Ветераны по сотрудничеству</h2>
			<div class='item mts col-xl-10 row'>
				<div class='promo mts col-xl-4'></div>
				<div class='text col-xl-8'>
					<h3>МТС</h3>
					<ul class='arrow'>
						<li>3 года сотрудничества</li>
						<li>Больше 5 000 постоянно арендованных поверхностей</li>
						<li>50 000 приведенных клиентов</li>
					</ul>
					<button type='button' class='recall btn w-4'>Хочу сотрудничать</button>
				</div>
			</div>

			<div class='item bl col-xl-10 row'>
				<div class='promo bl col-xl-4'></div>
				<div class='text col-xl-8'>
					<h3>Билайн</h3>
					<ul class='arrow'>
						<li>5 лет сотрудничества</li>
						<li>Больше 15 000 постоянно арендованных поверхностей</li>
						<li>300 000 приведенных клиентов</li>
					</ul>
					<button type='button' class='recall btn w-4'>Хочу сотрудничать</button>
				</div>
			</div>

			<div class='item rt col-xl-10 row'>
				<div class='promo rt col-xl-4'></div>
				<div class='text col-xl-8'>
					<h3>Ростелеком</h3>
					<ul class='arrow'>
						<li>7 лет сотрудничества</li>
						<li>Больше 30 000 постоянно арендованных поверхностей</li>
						<li>1 300 000 приведенных клиентов</li>
					</ul>
					<button type='button' class='recall btn w-4'>Хочу сотрудничать</button>
				</div>
			</div>

		</div>
	</section>
</main>


<?php
get_template_part( 'template-parts/content', 'cities' );
get_template_part( 'template-parts/content', 'contact' );
get_footer();
