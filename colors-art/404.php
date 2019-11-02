<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Colors-Art
 */

get_header();
?>
<div class="container">
	<div class="row animated fadein">
		<div class="col-12 p-2 my-2">
			<h1 class="text-center text-warning"><?php esc_html_e( '(404) Page not found...', 'colors-art' ); ?></h1>
		</div>
		<div class="col-12 p-3 mt-2 mb-5 border text-center">
			<h3 class="mt-3 mb-4">Запрашиваемая страница не найдена или не существует...</h3>
			<a href="/">Вернуться на главную</a>
		</div>
	</div>
</div>
<?php
get_footer();
