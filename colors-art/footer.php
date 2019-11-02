<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Colors-Art
 */

?>

	</main>

		<footer class="container-fluid">
			<div class="row">
				<div class="container">
					<div class="row">
						<div class="footer-menu col-md-4">
							<h4>Меню</h4>
							<ul>
								<li><a href="/">Главная</a></li>
								<li><a href="/#courses">Курсы</a></li>
								<li><a href="/shedule">Расписание</a></li>
								<li><a href="/teachers">Преподаватели</a></li>
								<li><a href="/#map">Контакты</a></li>
							</ul>
						</div>	<!-- end col -->
						<div class="footer-menu col-md-4">
							<h4>Курсы</h4>
							<ul>
								<li><a href="/courses/coloristika">Универсальная колористика</a></li>
								<li><a href="/courses/academicheskiy-risunok">Академический рисунок</a></li>
								<li><a href="/courses/akvarel">Классическая акварель</a></li>
								<li><a href="/courses/givopis">Живопись для начинающих</a></li>
								<li><a href="/courses/detskaya-studiya">Детская творческая мастерская</a></li>
								<li><a href="/courses/illustration">Мастер-классы</a></li>
								<li><a href="/courses/kitayskaya-givopis">Китайская живопись</a></li>
								<li><a href="/courses/iconopis">Иконопись</a></li>
								<li><a href="/courses/remesla">Ремесла</a></li>
							</ul>
						</div>	<!-- end col -->
						<div class="footer-menu col-md-4">
							<h4>Контакты</h4>
							<ul>
								<li><i class="fa fa-address-card"></i> Творческая студия <strong>Colors-Art</strong></li>
								<li><i class="fa fa-phone"></i> +7 (929) 909-29-25</li>
								<li><i class="fa fa-envelope-o"></i> <a href="mailto: realty2010@mail.ru">realty2010@mail.ru</a></li>
								<li><i class="fa fa-map-marker"></i> г. Москва, ул. Средняя Первомайская, д.4  каб.18</li>
								<li><i class="fa fa-clock-o"></i> пн-вс 09:00 - 21:00</li>
							</ul>
						</div>	<!-- end col -->
					</div>	<!-- end row -->
					<div class="row footer-bottom">
						<div class="col">
							<div class="">
								<p class="text-center">Colors-Art  <?= date('Y') ?></p>
								<p class="text-center">ОГРНИП: 315774600286982  ИНН: 771988504297</p>
								<a class="d-block text-center small text-secondary" href="/public-oferta">Публичная оферта</a>
								<a class="d-block text-center small text-secondary" href="/privacy-policy">Положение об обработке персональных данных</a>
							</div>
						</div>	<!-- end col -->
					</div>	<!-- end row -->
				</div>	<!-- end container -->
			</div>	<!-- end row -->
		</footer>	<!-- end footer -->

	</div>	<!-- end wrapper -->
	
	<?php include __DIR__ . '/template-parts/_modal.php'; ?>
	
	<!--<div id="btnOrderBottom">
		<button class="btn btn-lg btn-red" style="font-size: 1.1em;" data-toggle="modal" data-target="#order">Записаться</button>
	</div>-->
	<div id="toTop">&uarr;</div>
	
<?php wp_footer(); ?>

</body>
</html>
