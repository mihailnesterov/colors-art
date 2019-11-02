<?php
/**
 * Template part for displaying thank-you-page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Colors-Art
 */
?>
<div class="container">
	<div class="row animated fadein my-5">

		<div class="col-12 border p-4" style="background-color: #f9f9f9">
			<div class="row">
				<div class="col-12 p-2">
					<h1 class="text-center"><?= the_title() ?></h1>
					<hr>
				</div>
				<div class="col-12 py-2 px-3 my-4 text-center">
					<h3>Мы свяжемся с вами в самое ближайшее время</h3>
					<h3>...</h3>
				</div>
			</div>
		</div>
		
		<div class="col-12 my-5">
			<div class="row">
				<div class="col-12 col-sm-3 bg-warning">
					<h2 class="text-center mt-4" style="font-size:5.3em;">-15%</h2>
				</div>
				<div class="col-12 col-sm-9 py-4 px-2 bg-success text-center">
					<h2 class="my-1">АКЦИЯ!</h2>
					<h2 class="my-2">приведи друга и получи скидку 15%</h2>
					<div class="d-inline-block align-middle">
						<a href="https://www.instagram.com/colorsart.ru/?hl=ru" target="_blank" title="Наша страница в Instagram" class="bg-danger d-block" style="border-radius:7px;padding:1px 5px 0 5px;margin-right:-5px;"><i class="fa fa-instagram text-white fa-2x"></i></a>
					</div>
					<div class="d-inline-block align-middle">
						<?php echo do_shortcode("[uptolike]"); ?>
					</div>
				</div>
			</div>
		</div>
		
		<?php include __DIR__ . '/../template-parts/_block-bottom.php'; ?>
	</div>
</div>
