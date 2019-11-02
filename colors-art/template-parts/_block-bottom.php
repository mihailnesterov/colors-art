<?php
/**
 * блок с картой и курсами внизу страницы
 */
?>



<div class="row">
	<div class="col-12">
		<div class="border text-center">
			<h3 class="pt-4 pb-2 px-2">Мы ждем Вас в нашей уютной студии, всего в 70 шагах от метро Первомайская </h3>
			<div id="map" class="p-4">
				<div style="position: relative;">
					<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A12c90c62b25471ce9edea1ae8ab1b35c02366f603cabee624dbbcefe3242002e&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
					<div class="shadow-sm p-3 mb-5 bg-white rounded d-none d-sm-block" style="position: absolute; top:15px; left:15px;">
						<!-- картинка студии на карте -->
						<a href="<?= get_template_directory_uri() ?>/images/banner1.jpg" data-lightbox="image-lightbox" data-title="ТВОРЧЕСКАЯ СТУДИЯ COLORS-ART ул. Средняя Первомайская, д.4 каб.18"><img src="<?= get_template_directory_uri() ?>/images/banner1.jpg" alt="ТВОРЧЕСКАЯ СТУДИЯ COLORS-ART" class="img-fluid" width="270px"></a>
						<p class="small">ТВОРЧЕСКАЯ СТУДИЯ "COLORS-ART"</p>
						<p class="small">ул. Средняя Первомайская, д.4 каб.18</p>
					</div>
				</div>
			</div>	<!-- end map -->
		</div>
	</div>	<!-- end col -->
	
	<div class="col-12 my-4">
		<div class="border m-0 p-4 bg-white text-center">
			<div class="row">
				<div class="col-12">
					<h3 class="pt-4 pb-3 px-2">Студия ведет набор<br> на курсы и индивидуальные занятия по:</h3>
				</div>
				<div class="col-12 col-md mb-4">
					<a href="/courses/kitayskaya-givopis/kitayskaya-givopis-gunbi">
						<img src="<?= get_template_directory_uri() ?>/images/gunbi/1ginbi_osnovnaya1.jpg" alt="Китайская живопись Гунби" class="img-fluid m-0 p-2 border">
						Китайская живопись Гунби
					</a>
				</div>
				<div class="col-12 col-md mb-4">
					<a href="/courses/detskaya-studiya">
						<img src="<?= get_template_directory_uri() ?>/images/detskaya-studiya/dtm-zastavka.png" alt="Детская творческая мастерская" class="img-fluid m-0 p-2 border">
						Детская творческая мастерская
					</a>
				</div>
				<div class="col-12 col-md mb-4">
					<a href="/courses/academicheskiy-risunok/academicheskiy-bazoviy">
						<img src="<?= get_template_directory_uri() ?>/images/akademicheskiy/akadem_stupeni_1.jpg" alt="Академический рисунок" class="img-fluid m-0 p-2 border">
						Академический рисунок
					</a>
				</div>
				<div class="col-12 col-md mb-4">
					<a href="/courses/iconopis">
						<img src="<?= get_template_directory_uri() ?>/images/iconopis/ikon_1.jpg" alt="Иконопись" class="img-fluid m-0 p-2 border">
						Иконопись
					</a>
				</div>
				<div class="col-12 col-md mb-4">
					<a href="/courses/akvarel">
						<img src="<?= get_template_directory_uri() ?>/images/akvarel/akvarel-1.png" alt="Акварель" class="img-fluid m-0 p-2 border">
						Акварель
					</a>
				</div>
			</div>	<!-- end row -->
		</div>
	</div>
</div>
