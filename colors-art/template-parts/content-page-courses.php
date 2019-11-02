<?php
/**
 * Template part for displaying courses page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Colors-Art
 */

?>

<div class="container">
	<div class="row animated fadeIn">
		<div class="col-12 p-2">
			<h1 class="text-center p-2 my-2 border-primary text-uppercase"><?= the_title() ?></h1>
		</div>
		
		<div class="col-12 col-sm-6 col-md-4 mb-3 text-center">
			<div class="course-block">
			   	<img src="<?= get_template_directory_uri() ?>/images/coloristika.jpg" alt="" class="img-fluid">
				<h3 class="p-2 mt-3">Курс "Универсальная колористика"</h3>
				<!--<h4 class="badge badge-secondary pl-3 pr-3 pt-2 pb-2 mt-2 mb-3">Акция! До 4 июля</h4>
				<h5 class="pb-2 text-dark">с 4 июля 2019</h5>-->
				<h5 class="pb-2 text-dark" style="color:#8a4343; font-size: 1.2em; font-weight: bold;">"Узнай законы цвета"</h5>
				<h5 class="pb-2 text-dark" style="color:#000000">Курс поможет Вам получить профессиональные знания о гармонии, восприятии и использовании цвета</h5>
				<!--<p class="pt-2 pb-2">
					Преподаватель: 
					<a href="#" class="pt-2 pb-5">Винтова Александра Витальевна</a>
				</p>
				<h5 class="p-3 text-dark">г. Москва, ул. Средняя Первомайская, д.4  каб.18</h5>-->
				<div class="pl-4 pr-4 pb-0 pt-0">
					<!--<table class="table table-bordered mt-3 mb-2">
						<tr class="bg-light">
							<th width="50%">разовое</th>
							<th width="50%">за курс</th>
						</tr>
						<tr>
							<td>1500 <i class="fa fa-ruble"></i></td>
							<td>2000 <i class="fa fa-ruble"></i></td>
						</tr>
					</table>-->
				</div>
				<p class="mt-4 mb-4">
					<a href="coloristika_stupeni.html" class="btn btn-success btn-lg">подробнее</a>
				</p>
			</div>	<!-- end course-block -->
		</div>	<!-- end col -->

		<div class="col-12 col-sm-6 col-md-4 mb-3 text-center">
				<div class="course-block">
				    
				    <img src="<?= get_template_directory_uri() ?>/images/akademicheskiy/akadem-title.png" alt="Академический рисунок" class="img-fluid">  
				    <h3 class="p-2 mt-3">Академический рисунок</h3>
					<h5 class="pb-2 text-dark" style="color:#8a4343; font-size: 1.2em; font-weight: bold;">"От простой линии к сложной форме"</h5>
				    <h5 class="pb-2 text-dark" style="color:#000000">Академический рисунок является основой любого изобразительного творчества. Для того чтобы приобрести навыки в выполнении реалистического изображения</h5>
					<div class="pl-4 pr-4 pb-0 pt-0">
						<!--<table class="table table-bordered mt-2 mb-2">
							<tr class="bg-light">
									<th width="50%">разовое</th>
									<th width="50%">за курс</th>
							</tr>
							<tr>
								<td>1500 <i class="fa fa-ruble"></i></td>
								<td>2000 <i class="fa fa-ruble"></i></td>
							</tr>
						</table>-->
					</div>
					<p class="mt-4 mb-4">
						<a href="/courses/akademicheskiy" class="btn btn-success btn-lg">подробнее</a>
					</p>
				</div>	<!-- end course-block -->
			</div>	<!-- end col -->

			<div class="col-12 col-sm-6 col-md-4 mb-3 text-center">
					<div class="course-block">
						<img src="<?= get_template_directory_uri() ?>/images/akvarel/akvarel-1.png" alt="" class="img-fluid">
						<h3 class="p-2 mt-3">Курс "Классическая акварель"</h3>
						<h5 class="pb-2 text-dark" style="color:#8a4343; font-size: 1.2em; font-weight: bold;">"Пойми и полюби акварель"</h5>
				    <h5 class="pb-2 text-dark" style="color:#000000">Данный курс полезен начинающим художникам, детям от 12 лет и людям, никогда не писавшим акварелью</h5>
					
						<div class="pl-4 pr-4 pb-0 pt-0">
							<!--<table class="table table-bordered mt-2 mb-2">
								<tr class="bg-light">
									<th width="50%">разовое</th>
									<th width="50%">за курс</th>
								</tr>
								<tr>
									<td>1500 <i class="fa fa-ruble"></i></td>
									<td>2000 <i class="fa fa-ruble"></i></td>
								</tr>
							</table>-->
						</div>
						<p class="mt-4 mb-4">
							<a href="akvarel.html" class="btn btn-success btn-lg">подробнее</a>
						</p>
					</div>	<!-- end course-block -->
				</div>	<!-- end col -->

				<div class="col-12 col-sm-6 col-md-4 mb-3 text-center">
					<div class="course-block">
						<img src="<?= get_template_directory_uri() ?>/images/givopis/maslo.jpg" alt="" class="img-fluid">
						<h3 class="p-2 mt-3">Живопись для начинающих</h3>
						<h5 class="pb-2 text-dark" style="color:#8a4343; font-size: 1.2em; font-weight: bold;">"Пишем маслом и акрилом"</h5>
				    <h5 class="pb-2 text-dark" style="color:#000000">Курс классической живописи маслом и акрилом для людей, желающих познакомится на практике с основными приемами</h5>
					
						<div class="pl-4 pr-4 pb-0 pt-0">
							<!--<table class="table table-bordered mt-2 mb-2">
								<tr class="bg-light">
									<th width="50%">разовое</th>
									<th width="50%">за курс</th>
								</tr>
								<tr>
									<td>1500 <i class="fa fa-ruble"></i></td>
									<td>2000 <i class="fa fa-ruble"></i></td>
								</tr>
							</table>-->
						</div>
						<p class="mt-4 mb-4">
							<a href="givopis_stupeni.html" class="btn btn-success btn-lg">подробнее</a>
						</p>
					</div>	<!-- end course-block -->
				</div>	<!-- end col -->

				<div class="col-12 col-sm-6 col-md-4 mb-3 text-center">
					<div class="course-block">
						<img src="<?= get_template_directory_uri() ?>/images/detskaya-studiya/rat2.jpg" alt="" class="img-fluid">
						<h3 class="p-2 mt-3">Детская творческая мастерская</h3>
						<h5 class="pb-2 text-dark" style="color:#8a4343; font-size: 1.2em; font-weight: bold;">"Творчество во всем: живопись, колористика, лепка, макетирования"</h5>
				        <h5 class="pb-2 text-dark" style="color:#000000">Для детей от 6 до 14 лет, от 3 до 5 лет с родителями, для семей с детьми разного возраста</h5>
						<div class="pl-4 pr-4 pb-0 pt-0">
							<!--<table class="table table-bordered mt-2 mb-2">
								<tr class="bg-light">
									<th width="50%">разовое</th>
									<th width="50%">за курс</th>
								</tr>
								<tr>
									<td>1500 <i class="fa fa-ruble"></i></td>
									<td>2000 <i class="fa fa-ruble"></i></td>
								</tr>
							</table>-->
						</div>
						<p class="mt-4 mb-4">
							<a href="detskaya-studiya.html" class="btn btn-success btn-lg">подробнее</a>
						</p>
					</div>	<!-- end course-block -->
				</div>	<!-- end col -->

				<div class="col-12 col-sm-6 col-md-4 mb-3 text-center">
					<div class="course-block">
						<img src="<?= get_template_directory_uri() ?>/images/master-class.jpg" alt="" class="img-fluid">
						<h3 class="p-2 mt-3">Мастер-классы</h3>
						<h5 class="pb-2 text-dark" style="color:#8a4343; font-size: 1.2em; font-weight: bold;">"Останови мгновение!"</h5>
				    <h5 class="pb-2 text-dark" style="color:#000000">Навыки быстрого рисунка<br>(скетчинга, наброска) необходимы каждому творческому человеку, вне зависимости от его профессиональной деятельности</h5>
					
						<div class="pl-4 pr-4 pb-0 pt-0">
							<!--<table class="table table-bordered mt-2 mb-2">
								<tr class="bg-light">
									<th width="50%">разовое</th>
									<th width="50%">за курс</th>
								</tr>
								<tr>
									<td>1500 <i class="fa fa-ruble"></i></td>
									<td>2000 <i class="fa fa-ruble"></i></td>
								</tr>
							</table>-->
						</div>
						<p class="mt-4 mb-4">
							<a href="illustration.html" class="btn btn-success btn-lg">подробнее</a>
						</p>
					</div>	<!-- end course-block -->
				</div>	<!-- end col -->
				<div class="col-12 col-sm-6 col-md-4 mb-3 text-center">
					<div class="course-block">
						<img src="<?= get_template_directory_uri() ?>/images/gunbi/1ginbi_osnovnaya1.jpg" alt="" class="img-fluid">
						<h3 class="p-2 mt-3"> Китайская живопись</h3>
						<h5 class="pb-2 text-dark" style="color:#8a4343; font-size: 1.2em; font-weight: bold;">"Почувствуй прекрасный мир китайской живописи"</h5>
				    <h5 class="pb-2 text-dark" style="color:#000000">Пройди курс традиционной китайской живописи в стилях ГУНБИ, СЕИ, МОГУФА</h5>
					
						<div class="pl-4 pr-4 pb-0 pt-0">
							<!--<table class="table table-bordered mt-2 mb-2">
								<tr class="bg-light">
									<th width="50%">разовое</th>
									<th width="50%">за курс</th>
								</tr>
								<tr>
									<td>1500 <i class="fa fa-ruble"></i></td>
									<td>2000 <i class="fa fa-ruble"></i></td>
								</tr>
							</table>-->
						</div>
						<p class="mt-4 mb-4">
							<a href="kitayskaya-givopis-stupeni.html" class="btn btn-success btn-lg">подробнее</a>
						</p>
					</div>	<!-- end course-block -->
				</div>	<!-- end col -->
				<div class="col-12 col-sm-6 col-md-4 mb-3 text-center">
					<div class="course-block">
						<img src="<?= get_template_directory_uri() ?>/images/ikonopis.jpg" alt="" class="img-fluid">
						<h3 class="p-2 mt-3">Иконопись, первые шаги</h3>
						<h5 class="pb-2 text-dark" style="color:#8a4343; font-size: 1.2em; font-weight: bold;">"Иконопись-богословие в красках"</h5>
				    <h5 class="pb-2 text-dark" style="color:#000000">Курс для людей, любящих русскую культуру и желающих познакомиться с техникой иконописного письма</h5>
					
						<div class="pl-4 pr-4 pb-0 pt-0">
							<!--<table class="table table-bordered mt-2 mb-2">
								<tr class="bg-light">
									<th width="50%">разовое</th>
									<th width="50%">за курс</th>
								</tr>
								<tr>
									<td>1500 <i class="fa fa-ruble"></i></td>
									<td>2000 <i class="fa fa-ruble"></i></td>
								</tr>
							</table>-->
						</div>
						<p class="mt-4 mb-4">
							<a href="iconopis.html" class="btn btn-success btn-lg">подробнее</a>
						</p>
					</div>	<!-- end course-block -->
				</div>	<!-- end col -->
				<div class="col-12 col-sm-6 col-md-4 mb-3 text-center">
					<div class="course-block">
						<img src="<?= get_template_directory_uri() ?>/images/remesla/remesla_zastsvka.jpg" alt="" class="img-fluid">
						<h3 class="p-2 mt-3">Ремесла</h3>
						<h5 class="pb-2 text-dark" style="color:#8a4343; font-size: 1.2em; font-weight: bold;">"Название курса"</h5>
				    <h5 class="pb-2 text-dark" style="color:#000000">Курс для людей, любящих русскую культуру и желающих познакомится с техникой иконописного письма</h5>
					
						<div class="pl-4 pr-4 pb-0 pt-0">
							<!--<table class="table table-bordered mt-2 mb-2">
								<tr class="bg-light">
									<th width="50%">разовое</th>
									<th width="50%">за курс</th>
								</tr>
								<tr>
									<td>1500 <i class="fa fa-ruble"></i></td>
									<td>2000 <i class="fa fa-ruble"></i></td>
								</tr>
							</table>-->
						</div>
						<p class="mt-4 mb-4">
							<a href="illustration.html" class="btn btn-success btn-lg">подробнее</a>
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
			<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A12c90c62b25471ce9edea1ae8ab1b35c02366f603cabee624dbbcefe3242002e&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
	</div>		<!-- end row -->
</div>		<!-- end container-fluid -->