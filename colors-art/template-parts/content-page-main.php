<?php
/**
 * Template part for displaying main page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Colors-Art
 */

?>

<div class="container-fluid mt-5 mb-4 animated fadeIn" style="margin-top: 0em;">
	<div class="row">
		<div id="banner-on-main" class="col-12 text-center p-0 m-0">
		    <img src="<?= get_template_directory_uri() ?>/images/banner.jpg" alt="" class="img-fluid">
		</div>
		<div class="col-12 text-center d-none d-md-block">
		    <button class="btn btn-success btn-lg mt-4" data-toggle="modal" data-target="#order">Записаться</button>
		</div>
	</div>		<!-- end row -->
</div>		<!-- end container-fluid -->

<div class="container">
	<div class="row animated fadeIn">
		<div id="courses" class="col-12 p-2">
			<h1 class="text-center p-2 mt-3 mb-5 border-primary text-uppercase">Студия живописи "Colors-art" приглашает всех желающих принять участие в творческих занятиях по направлениям:</h1>
		</div>
		
		<div class="col-12 col-sm-6 col-md-4 mb-3 text-center">
			<div class="course-block">
				<a href="/courses/coloristika">
			   	<img src="<?= get_template_directory_uri() ?>/images/coloristika.jpg" alt="Универсальная колористика" class="img-fluid">
			   	</a>
				<h3 class="p-2 mt-3"><a href="/courses/coloristika">Курс "Универсальная колористика"</a></h3>
				<h5 class="pb-2 text-dark" style="color:#8a4343; font-size: 1.2em; font-weight: bold;">"Узнай законы цвета"</h5>
				<h5 class="pb-2 text-dark" style="color:#000000">Курс поможет Вам получить профессиональные знания о гармонии, восприятии и использовании цвета</h5>

				<p class="mt-4 mb-4">
					<a href="/courses/coloristika" class="btn btn-primary btn-lg">подробнее</a>
				</p>
			</div>	<!-- end course-block -->
		</div>	<!-- end col -->

		<div class="col-12 col-sm-6 col-md-4 mb-3 text-center">
				<div class="course-block">
					<a href="/courses/academicheskiy-risunok">
				    <img src="<?= get_template_directory_uri() ?>/images/akademicheskiy/akadem-title.png" alt="Академический рисунок" class="img-fluid">  
				    </a>
				    <h3 class="p-2 mt-3"><a href="/courses/academicheskiy-risunok">Академический рисунок</a></h3>
					<h5 class="p-2 text-dark" style="color:#8a4343; font-size: 1.2em; font-weight: bold;">"От простой линии к сложной форме"</h5>
				    <h5 class="p-2 text-dark" style="color:#000000">Академический рисунок является основой любого изобразительного творчества. Для того чтобы приобрести навыки в выполнении реалистического изображения</h5>
					<p class="mt-4 mb-4">
						<a href="/courses/academicheskiy-risunok" class="btn btn-primary btn-lg">подробнее</a>
					</p>
				</div>	<!-- end course-block -->
			</div>	<!-- end col -->

			<div class="col-12 col-sm-6 col-md-4 mb-3 text-center">
					<div class="course-block">
						<a href="/courses/akvarel">
						<img src="<?= get_template_directory_uri() ?>/images/akvarel/akvarel-1.png" alt="Классическая акварель" class="img-fluid">
						</a>
						<h3 class="px-3 py-2 mt-3"><a href="/courses/akvarel">Курс "Классическая акварель"</a></h3>
						<h5 class="px-3 py-2 text-dark" style="color:#8a4343; font-size: 1.2em; font-weight: bold;">"Пойми и полюби акварель"</h5>
				    	<h5 class="px-3 py-2 text-dark" style="color:#000000">Данный курс полезен начинающим художникам, детям от 12 лет и людям, никогда не писавшим акварелью</h5>
						<p class="mt-4 mb-4">
							<a href="/courses/akvarel" class="btn btn-primary btn-lg">подробнее</a>
						</p>
					</div>	<!-- end course-block -->
				</div>	<!-- end col -->

				<div class="col-12 col-sm-6 col-md-4 mb-3 text-center">
					<div class="course-block">
						<a href="/courses/givopis">
						<img src="<?= get_template_directory_uri() ?>/images/givopis/maslo.jpg" alt="Живопись" class="img-fluid">
						</a>
						<h3 class="px-3 py-2 mt-3"><a href="/courses/givopis">Живопись для начинающих</a></h3>
						<h5 class="px-3 py-2 text-dark" style="color:#8a4343; font-size: 1.2em; font-weight: bold;">"Пишем маслом и акрилом"</h5>
				    	<h5 class="px-3 py-2 text-dark" style="color:#000000">Курс классической живописи маслом и акрилом для людей, желающих познакомится на практике с основными приемами</h5>
						<p class="mt-4 mb-4">
							<a href="/courses/givopis" class="btn btn-primary btn-lg">подробнее</a>
						</p>
					</div>	<!-- end course-block -->
				</div>	<!-- end col -->

				<div class="col-12 col-sm-6 col-md-4 mb-3 text-center">
					<div class="course-block">
						<a href="/courses/detskaya-studiya">
						<img src="<?= get_template_directory_uri() ?>/images/detskaya-studiya/rat2.jpg" alt="Детская творческая мастерская" class="img-fluid">
						</a>
						<h3 class="px-3 py-2 mt-3"><a href="/courses/detskaya-studiya">Детская творческая мастерская</a></h3>
						<h5 class="px-3 py-2 text-dark" style="color:#8a4343; font-size: 1.2em; font-weight: bold;">"Творчество во всем: живопись, колористика, лепка, макетирование"</h5>
				        <h5 class="px-3 py-2 text-dark" style="color:#000000">Для детей от 6 до 14 лет, от 3 до 5 лет с родителями, для семей с детьми разного возраста</h5>
						<p class="mt-4 mb-4">
							<a href="/courses/detskaya-studiya" class="btn btn-primary btn-lg">подробнее</a>
						</p>
					</div>	<!-- end course-block -->
				</div>	<!-- end col -->

				<div class="col-12 col-sm-6 col-md-4 mb-3 text-center">
					<div class="course-block">
						<a href="/courses/illustration">
						<img src="<?= get_template_directory_uri() ?>/images/master-class1.jpg" alt="Мастер-классы" class="img-fluid">
						</a>
						<h3 class="px-3 py-2 mt-3"><a href="/courses/illustration">Мастер-классы</a></h3>
						<h5 class="px-3 py-2 text-dark" style="color:#8a4343; font-size: 1.2em; font-weight: bold;">"Останови мгновение!"</h5>
				    	<h5 class="px-3 py-2 text-dark" style="color:#000000">Навыки быстрого рисунка<br>(скетчинга, наброска) необходимы каждому творческому человеку, вне зависимости от его профессиональной деятельности</h5>
						<p class="mt-4 mb-4">
							<a href="/courses/illustration" class="btn btn-primary btn-lg">подробнее</a>
						</p>
					</div>	<!-- end course-block -->
				</div>	<!-- end col -->
				<div class="col-12 col-sm-6 col-md-4 mb-3 text-center">
					<div class="course-block">
						<a href="/courses/kitayskaya-givopis">
						<img src="<?= get_template_directory_uri() ?>/images/gunbi/1ginbi_osnovnaya1.jpg" alt="Китайская живопись" class="img-fluid">
						</a>
						<h3 class="px-3 py-2 mt-3"><a href="/courses/kitayskaya-givopis">Китайская живопись</a></h3>
						<h5 class="px-3 py-2 text-dark" style="color:#8a4343; font-size: 1.2em; font-weight: bold;">"Почувствуй прекрасный мир китайской живописи"</h5>
				    	<h5 class="px-3 py-2 text-dark" style="color:#000000">Пройди курс традиционной китайской живописи в стилях ГУНБИ, СЕИ, МОГУФА</h5>
						<p class="mt-4 mb-4">
							<a href="/courses/kitayskaya-givopis" class="btn btn-primary btn-lg">подробнее</a>
						</p>
					</div>	<!-- end course-block -->
				</div>	<!-- end col -->
				<div class="col-12 col-sm-6 col-md-4 mb-3 text-center">
					<div class="course-block">
						<a href="/courses/iconopis">
						<img src="<?= get_template_directory_uri() ?>/images/ikonopis.jpg" alt="Иконопись" class="img-fluid">
						</a>
						<h3 class="px-3 py-2 mt-3"><a href="/courses/iconopis">Иконопись, первые шаги</a></h3>
						<h5 class="px-3 py-2 text-dark" style="color:#8a4343; font-size: 1.2em; font-weight: bold;">"Иконопись-богословие в красках"</h5>
				    	<h5 class="px-3 py-2 text-dark" style="color:#000000">Курс для людей, любящих русскую культуру и желающих познакомиться с техникой иконописного письма</h5>
						<p class="mt-4 mb-4">
							<a href="/courses/iconopis" class="btn btn-primary btn-lg">подробнее</a>
						</p>
					</div>	<!-- end course-block -->
				</div>	<!-- end col -->
				<div class="col-12 col-sm-6 col-md-4 mb-3 text-center">
					<div class="course-block">
						<a href="/courses/remesla">
						<img src="<?= get_template_directory_uri() ?>/images/remesla/remesla_zastsvka.jpg" alt="Ремесла" class="img-fluid">
						</a>
						<h3 class="px-3 py-2 mt-3"><a href="/courses/remesla">Ремесла</a></h3>
						<h5 class="px-3 py-2 text-dark" style="color:#8a4343; font-size: 1.2em; font-weight: bold;">"Эксклюзивные вещи своими руками"</h5>
				    	<h5 class="px-3 py-2 text-dark" style="color:#000000">Занятия для людей, любящих создавать уникальные предметы, используя приемы традиционных ремесел</h5>
						<p class="mt-4 mb-4">
							<a href="/courses/remesla" class="btn btn-primary btn-lg">подробнее</a>
						</p>
					</div>	<!-- end course-block -->
				</div>	<!-- end col -->
				
		<div class="col-12 p-2 text-center">
			<h1 class="text-center p-2 mt-5 mb-3 border-primary">Курсы рисования по авторским методикам опытных преподавателей</h1>
			<!--<ul class="ul-m">
			  <li>Какие техники рисования существуют? </li>
			  <li>Какой художественный материал близок вашей индивидуальности?</li>
			  <li>Как раскрыть свой талант и научиться чему-то новому? </li>
			  
			</ul>-->
			<p class="font-weight-bold">Какие техники рисования существуют?</p>
			<p class="font-weight-bold">Какой художественный материал близок вашей индивидуальности?</p>
			<p class="font-weight-bold">Как раскрыть свой талант и научиться чему-то новому?</p>
			
			<p class="mb-3 "> Ответы на эти вопросы Вы получите на уроках рисования в нашей студии.</p>
			<p>Основная цель - грамотный подход к изучению изобразительных дисциплин и максимальное раскрытие творческого потенциала наших гостей.</p>
			
		
			
		</div>
		<div class="col-12 p-2">
			<h1 class="text-center p-2 mt-5 mb-3 border-primary">О студии</h1>
			<p class="mb-1 text-center"><span class="font-weight-bold">Colors-art</span> - творческая студия. Наша задача дать возможность взрослым и детям приобрести фундаментальные навыки рисунка и живописи.</p> 
			<p class="mb-1 text-center">Преподаватели <span class="font-weight-bold">Colors-art</span>  имеют профильное образование, многолетний опыт и обладают высокой квалификацией.</p>
			<p class="mb-1 text-center">Небольшие группы до 7 человек, позволяют уделить внимание  каждому ученику.</p>
			<p class="mb-1 text-center">Мы ждем Вас в студии <span class="font-weight-bold">Colors-art</span>  на Первомайской, где
				чудесный мир изобразительного искусства откроет секреты и навсегда изменит Вашу жизнь, обогатив её новыми красками.
			</p>
			
			
		
		</div>

	</div>		<!-- end row -->
</div>		<!-- end container -->

<div class="container">
    <div class="row">
		<div class="col-12 mb-4">
			<h1 class="text-center p-2 mt-5 mb-3 border-primary">Схема проезда к студии:</h1>
			<p class="font-weight-bold text-center">Адрес: Средняя Первомайская улица д. 4 офис 18 Бизнес-центр "Карго"</p>
			<p class="text-center"><span class="font-weight-bold">На автомобиле:</span> закрытая парковка, сообщить номер авто +7 (929) 909-29-25</p>
			<p><span class="font-weight-bold">Транспортом:</span> м.Первомайская, первый вагон из центра, выход направо, 
			70 метров отдельностоящее здание +7 (929) 909-29-25</p>
			
		</div>		<!-- end row -->
	</div>		<!-- end row -->
</div>		<!-- end container -->

<div id="map" class="container-fluid mt-4">
	<div class="row">
		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A12c90c62b25471ce9edea1ae8ab1b35c02366f603cabee624dbbcefe3242002e&amp;width=100%25&amp;height=600&amp;lang=ru_RU&amp;scroll=true"></script>
	</div>		<!-- end row -->
</div>		<!-- end container-fluid -->