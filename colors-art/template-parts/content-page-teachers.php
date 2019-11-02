<?php
/**
 * Template part for displaying teachers page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Colors-Art
 */
 
 // получаем дочерние страницы от текущей
 // get_the_page_children($id) - см. в functions.php
$teachers = get_the_page_children( get_the_ID() );
?>

<div class="container" style="margin-top: 0em;">				
	<div class="row animated fadeIn">
		<div class="col-12">
			<div class="content">
				<div class="row text-center p-3">
					<div class="col-12 p-4">
						<h1><?= the_title() ?></h1>
						<hr>
					</div>
					<?php foreach( $teachers as $key => $teacher): ?>
						<div id="teacher-<?= $teacher->ID ?>" class="col-sm-6 col-lg-4 p-4">
							<div class="prepod-block p-0 m-0">
								<?= get_the_post_thumbnail(
									$teacher->ID,
									array(300, 300),
									array('class' => 'img-fluid mt-3 p-2')) 
								?>
								<h4 class="text-bold mb-3 pl-2"><?= $teacher->post_title ?></h4>
								<div class="px-3 pb-4"><?= $teacher->post_content ?></div>
							</div>	<!-- end col -->
						</div>	<!-- end col -->
					<?php endforeach; ?>
				</div>	<!-- end row -->
			</div>	<!-- end content -->
		</div>	<!-- end col -->
	</div>	<!-- end row -->
</div>	<!-- end container -->