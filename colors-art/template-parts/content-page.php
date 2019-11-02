<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Colors-Art
 */
?>
<div class="container">
	<div class="row animated fadein my-5">
		<?php //echo do_shortcode("[childpages]"); ?>
		<?php 
			/*$stati_children = new WP_Query(array(
			  'post_type' => 'page',
			  'post_parent' => get_the_ID()
			  )
			);
			if($stati_children->have_posts()) :
			  while($stati_children->have_posts()): $stati_children->the_post();
			      echo '<h2>'.get_the_title().'</h2>';
			      echo '<p>'.get_the_excerpt().'</p>';
			      echo '<p><a href="'.get_the_permalink().'">'.Подробнее.'</a></p>';
			  endwhile;
			endif; wp_reset_query();*/
		?>
		<div class="col-12 p-0 mb-2">
			<?php the_breadcrumb() ?>
		</div>
		
		<?php 
			$ID = get_the_ID();
			// перечисляем ID страниц, кроме которых показываем блок с соцкнопками
			if( $ID==-1
			):
		?>
			<div class="col-12 px-3 py-5 mt-2 mb-3 border bg-dark animated fadeIn" style="background-image: url('<?= get_post_meta($post->ID, 'first-screen-bg-image', true) ?>')">
				<h1 class="text-center mt-4 mb-4"><?= the_title() ?></h1>
				
				<div class="text-center my-4">
					<a href="#" class="btn btn-red" style="font-size: 1.1em;" data-toggle="modal" data-target="#order"><i class="fa "></i> Записаться</a>
				</div>
				
				<div class="my-4 text-center">
					<div class="d-inline-block align-middle">
						<a href="https://www.instagram.com/colorsart.ru/?hl=ru" target="_blank" title="Наша страница в Instagram" class="bg-danger d-block" style="border-radius:7px;padding:1px 5px 0 5px;margin-right:-5px;"><i class="fa fa-instagram text-white fa-2x"></i></a>
					</div>
					<div class="d-inline-block align-middle">
						<?php echo do_shortcode("[uptolike]"); ?>
					</div>
				</div>
				
			</div>
		<?php else: ?>
			<div class="col-12 px-3 py-1 mt-2 mb-3 border animated fadeIn">
				<h1 class="text-center mt-4 mb-4"><?= the_title() ?></h1>
			</div>
		<?php endif; ?>

		<div class="content">
			<div class="col-12 p-2">
				<?= the_post_thumbnail() ?>
			</div>
			<div class="col-12 p-2">
				<?= the_content() ?>
			</div>
		</div>
	</div>
</div>
