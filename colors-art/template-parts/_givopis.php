<?php
/**
 * страница: Курс классической живописи маслом и акрилом
 */
?>

<div class="row animated fadeIn">
    
	<div class="col-12 pt-4 pb-4">
		<p>Курс классической живописи маслом и акрилом для людей, желающих познакомится на практике с основными приемами и техникой создания живописных полотен.</p>
		<h3 class="text-center mt-5 mb-4">Наша студия предлагает курсы по следующим направлениям:</h3>
	</div>
	
	<div class="col-12 col-sm-6 mt-3 mb-3 text-center">
		<div class="course-block pt-5 pb-4">
			<a href="/courses/givopis/givopis-maslo">
		   	<img src="<?= get_template_directory_uri() ?>/images/givopis/maslo_zastavka.jpg" alt="" class="img-fluid">
		   	</a>
			<h3 class="p-2 mt-3"><a href="/courses/givopis/givopis-maslo">Масляная живопись для начинающих</a></h3>
			<p class="mt-4 mb-4">
				<a href="/courses/givopis/givopis-maslo" class="btn btn-primary btn-lg">подробнее</a>
			</p>
		</div>	<!-- end course-block -->
	</div>	<!-- end col -->

	<div class="col-12 col-sm-6 mt-3 mb-3 text-center">
		<div class="course-block pt-5 pb-4">
			<a href="/courses/givopis/givopis-akril">
		    <img src="<?= get_template_directory_uri() ?>/images/givopis/akril.jpg" alt="Академический рисунок" class="img-fluid">  
		    </a>
		    <h3 class="p-2 mt-3"><a href="/courses/givopis/givopis-akril">Декоративная живопись акрилом</a></h3>
			<p class="mt-4 mb-4">
				<a href="/courses/givopis/givopis-akril" class="btn btn-primary btn-lg">подробнее</a>
			</p>
		</div>	<!-- end course-block -->
	</div>	<!-- end col -->
	
	<?php include __DIR__ . '/../template-parts/_block-bottom.php'; ?>
	
</div>		<!-- end row -->


