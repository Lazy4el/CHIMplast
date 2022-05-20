<?php

	if(isset($_POST['name'])||(isset($_POST['phone']))||isset($_POST['text_massage'])){
		$from="Заявка на сайт ДиолКемикал";
		$recepient = "office@nhpkazan.ru";
		$siteName ="НефтеХимПолимер";

		$name = trim($_POST["name"]);
		$phone = trim($_POST["phone"]);
		$text_massage = trim($_POST["text_massage"]);
		$massage = "Имя: $name\nТелефон:+7($phone \n Сообщение \n $text_massage";

		$pagetitle = "Новая заявка с сайта \"$siteName\"";
		mail($recepient, $pagetitle, $massage, "Content-type: text/plain; charset=\"utf-8\"\n From:$from");

		?>
			<div class="massage_complite">
				<li>Сообщение успешно отправлено.</li>
			</div>
		<?php
	};
?>




<!DOCTYPE html>
<html lang="ru_RU">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="./img/logo.ico" type="image/x-icon">
	<link rel="stylesheet" href="Style/style.css">
	<link rel="stylesheet" href="Style/preloader.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

	<script	src="http://code.jquery.com/jquery-3.2.1.js"></script>
	<script src="./script/upload.js"></script>
	<title>Наша продукция</title>
</head>
<body>
		<!-- Соглашения -->
		<div class="terms_of_use">
		<div class="form_main">
			<div class="tittle">Пользовательское соглашение <button class="close_form_main">x</button></div>
			<div class="text_form">
				<p>Соглашение об обработке персональных данных Данное соглашение об обработке персональных данных разработано в соответствии с законодательством РФ. Все лица заполнившие сведения составляющие персональные данные на данном сайте подтверждают свое согласие на обработку персональных нашими менеджерами.</p>
				<p>Под персональными данными Гражданина понимается: имя, email. Соискатели направляют свои персональные данные оператору в целях консультации.</p>
				<p>Гражданин, принимая настоящее Соглашение, выражают свою заинтересованность и полное согласие, что обработка их персональных данных может включать в себя следующие действия: сбор, систематизацию, накопление, хранение, уточнение (обновление, изменение), использование, уничтожение.</p>
				<p>Гражданин гарантирует: информация, им предоставленная, является полной, точной и достоверной; при предоставлении информации не нарушается действующее законодательство Российской Федерации, законные права и интересы третьих лиц; вся предоставленная информация заполнена Гражданина в отношении себя лично. Оператор обязуется не передавать полученные данные сторонним организациям, уничтожить данные по требованию гражданина, использовать данные только для оказания оговоренных услуг граждан.</p>
			</div>
		</div>
	</div>

	<div class="privacy_policy">
		<div class="form_main">
			<div class="tittle">Политика конфиденциальности <button class="close_form_main">x</button></div>
			<div class="text_form">
				<p>Соглашение об обработке персональных данных Данное соглашение об обработке персональных данных разработано в соответствии с законодательством РФ. Все лица заполнившие сведения составляющие персональные данные на данном сайте подтверждают свое согласие на обработку персональных нашими менеджерами.</p>
				<p>Под персональными данными Гражданина понимается: имя, email. Соискатели направляют свои персональные данные оператору в целях консультации.</p>
				<p>Гражданин, принимая настоящее Соглашение, выражают свою заинтересованность и полное согласие, что обработка их персональных данных может включать в себя следующие действия: сбор, систематизацию, накопление, хранение, уточнение (обновление, изменение), использование, уничтожение.</p>
				<p>Гражданин гарантирует: информация, им предоставленная, является полной, точной и достоверной; при предоставлении информации не нарушается действующее законодательство Российской Федерации, законные права и интересы третьих лиц; вся предоставленная информация заполнена Гражданина в отношении себя лично. Оператор обязуется не передавать полученные данные сторонним организациям, уничтожить данные по требованию гражданина, использовать данные только для оказания оговоренных услуг граждан.</p>
			</div>
		</div>
	</div>
	<!-- Всплывающее окно при нажатии на заявку -->
	<div class="poput">
		<div class="bgfond">
			<div class="formmian">
				<div class="head-linear">
					<p>Напишите нам</p>
					<button class="close">x</button>
				</div>
				<div>
					<h4 class="contact-title">Оставьте заявку и наши менеджеры свяжутся с вами.</h4>
					<form method="POST" class="form-contact">
						<input type="text" name = "name" placeholder="Введите Ваше имя или название вашей компании если обращение идет от ее лица.">
						<input type="phone" class="UserPhone" name = "phone"  placeholder="Введите Ваш номер телефона для связи">
						<textarea type="text" name = "text_massage" placeholder="Пожалуйста опишите в крации вопрос котрый Вас итересует."></textarea>
						<button type="submit">Отправить</button>
						
					</form>
				</div>
			</div>
		</div>		
	</div>

	<!-- Прелодтер при загруске сайта. -->
	<div class="preloader" id="page-preloader">
		<div class="loader">
			<div class="loader-wrapper-lat">			
				<div class="img-loader">
					<img src="img/logo.png">
				</div>
				<div class="text-loader">
					<li>НефтеХим</li><li>Полимер</li>
				</div>		
			</div>	
		</div>
	</div>


	<!-- Обертка сайта -->
	<div class="wrapper">
		<!-- Шапка в ней содержится навигация -->
		<header>
			<!-- Див вложенный в шапку -->
			<div class="header-area">
				<div class="container-not">		
					<!-- Часть шапки в которой распологается лого и ознакомительная информация -->
					<div class="img-href">
						<a href="index.php">
							<img src="img/logo.png">
							<i class="NH logo-text">НефтеХим</i><i class="P logo-text">Полимер</i>
						</a>
					</div>

					<div class="row logo-top-info">
						<div class="top-info">
							<div class="call">
								<h3>Позвоните нам</h3>
								<p>+7(843)212-57-00</p>		
							</div>
							<div class="email">
								<h3>Напишите нам</h3>
								<p>office@nhpkazan.ru</p>
							</div>
						</div>					
					</div>
				</div>

				<!-- Навигация -->
				<nav id="navbar">
					<div class="container">				
						<ul class="main-menu">
							<li class="active"><a href="index.php">Главная</a></li>
							<li><a href="products.php">Продукция</a></li>
							<li><a href="contacts.php">Контакты</a></li>
							<li id="phone"><a href="tel:+78432125700">+7(843)212-57-00</a></li>
							<li><a href="#application" onclick="poput();">Оставить заявку</a></li>
						</ul>
					</div>
				</nav>
			</div>
			<div style="clear: both;"></div>
		</header>

		<!-- Все что после шапки -->
		<div class="main">
	
			
			<!-- Продукция и товары -->	
			<section class="production">
				<div class="container">
					<!--Навигация -->
					<div class="href">						
						<a href="index.php"><i class="fas fa-home"></i>ГЛАВНАЯ</a>
						<p>></p>
						<a href="products.php">ПРОДУКЦИЯ</a>
						<p>></p>
						<a href="" name="production">СОБСТВЕННОЕ ПРОИЗВОДСТВО</a>
					</div>


					<div class="company_goods">

						<h3>ООО «НефтеХимПолимер»</h3>

						<div class="company-body">
							<ul>
								<li>
									<h4>МОНОЭТАНОЛАМИН ВР8-80</h4>
									<h5>ГОСТ/ТУ</h5>
									<p>ТУ 2014-002-60316123-2017</p>								
								</li>
							</ul>

							<ul>
								<li>
									<h4>ДИЭТАНОЛАМИН ВР85</h4>
									<h5>ГОСТ/ТУ</h5>
									<p>ТУ 2014-001-60316123-2017</p>								
								</li>
							</ul>

							<ul>
								<li>
									<h4>ТРИЭТАНОЛАМИН технический</h4>
									<h5>ГОСТ/ТУ</h5>
									<p>Согласно т/з заказчика.</p>								
								</li>
							</ul>

							<ul>
								<li>
									<h4>ЭТИЛЕНГЛИКОЛЬ Водный Раствор</h4>
									<h5>ГОСТ/ТУ</h5>
									<p>Согласно т/з заказчика.</p>								
								</li>
							</ul>							
						</div>	

						<div class="company-body">
							<ul>
								<li>
									<h4>Бочка 216л. металлическая новая</h4>
									<h5>ГОСТ/ТУ</h5>
									<p>ГОСТ 13950-91</p>								
								</li>
							</ul>

							<ul>
								<li>
									<h4>Бочка 227л. пластиковая б/у</h4>
									<h5>ГОСТ/ТУ</h5>
									<p>ГОСТ Р 51760-2001</p>								
								</li>
							</ul>

							<ul>
								<li>
									<h4>Куб пластиковый 1000л. новый</h4>
									<h5>ГОСТ/ТУ</h5>
									<p>ГОСТ З53211-2008</p>								
								</li>
							</ul>

							<ul>
								<li>
									<h4>Куб пластиковый 1000л. б/у </h4>
									<h5>ГОСТ/ТУ</h5>
									<p>Согласно т/з заказчика.</p>								
								</li>
							</ul>							
						</div>

						<div class="company-body">
							<ul>
								<li>
									<h4 class="size-text-name">АНТИФРИЗ НОВОГО ПОКОЛЕНИЯ С ПОВЫШЕННЫМИ ЭКСПЛУАТАЦИОННЫМИ СВОЙСТВАМИ НА ОСНОВЕ ЭФФЕКТИВНОГО ПАКЕТА ОРГАНИЧЕСКИХ ИНГИБИТОРОВ.</h4>	
									<h5></h5>								
									<p>Обладает увеличенным ресурсом эксплуатации: не менее 5 лет или 250 000км.</p>								
								</li>
							</ul>

							<ul>
								<li>
									<h4>ТОНКОСЛОЙНЫЕ КОНСЕРВАЦИОННОЕ ПОКРЫТИЕ</h4>
									<h5>ГОСТ/ТУ</h5>
									<p>ТУ 2145-045-13002578-2000</p>								
								</li>
							</ul>

							<ul>
								<li>
									<h4>ПОРОШКОВАЯ КРАСКА НА ОСНОВЕ ПОЛИЭТИЛЕНА</h4>
									<h5></h5>
									<p>Краска предназначена для защиты строителных конструкций нефтепромыслового оборудования различного вида ограждений.</p>								
								</li>
							</ul>						
						</div>
						<div class="company-body">
							<ul class = "last_ul">
								<li>
									<h4>ДИПРОКСАМИН 157(Концентрация 65%-90%)</h4>	
									<h5></h5>								
									<p>ООО «НефтеХимПолимер»</p>								
								</li>
							</ul>					
						</div>


					</div>						
				</div>
			</section>

			<!-- Контакты и список продукции -->
			<section class="footer">
				<div class="footer_Top_info">
					<div class="container">

						<div class="info_Logo ft">

							<div class="img-href logos">
								<div class="footer-logo">
									<img src="img/logo.png">
									<i class="NH logo-text">НефтеХим</i><i class="P logo-text">Полимер</i>
								</div>
							</div>

							<div class="about-txt">
								<p>
								Компания &laquo;НефтеХииПолимер&raquo;  дает ряд приемуществ для заказчиков: поставка гарантированно качественной продукции в картчайшие сроки, изготовление продукции по заданной рецептуре, экономическую эффективность и экологическую безопасность.
								</p>
							</div>

						</div>

						<div class="menu ft">
							<h3>МЕНЮ</h3>
							<ul>
								<li><a href="index.php">Главная</a></li>
								<li><a href="products.php">Продукция</a></li>
								<li><a href="contacts.php">Контакты</a></li>
							</ul>
						</div>	

						<div class="f_production ft">
							<h3>ПРОДУКЦИЯ</h3>
							<ul>
								<li><a href="Own_production.php">Собственное производство</a></li>
								<li><a href="partner_products.php">Производство заводов партнеров</a></li>
								<li><a href="transportation_services.php">Услуги грузоперевозок</a></li>
							</ul>
						</div>	

						<div class="contact_info ft">
							<h3>КОСУЛЬТАЦИЯ</h3>
							<ul>
								<li>Для консультации оставьте Ваш вопрос.</li>
								<li>
									<h2 class="botton-footer"><a href="#application" onclick="poput();">Оставить заявку</a>
									</h2>
								</li>
							</ul>
						</div>		

					</div>
				</div>				

				<div class="copyringht">
					<div class="container">

						<div class="compainy_inn fb">
							Copyright © 2018 ООО «НефтеХимПолимер». Все права защищены.
							<br>
							ИНН: 16657082570 КПП: 165601001 КПП 165101001 ОГРН: 1091690005945.


						</div>

						<div class="col_f_l fb"><a href="#terms_of_use" onclick="terms_of_use();">Пользовательское соглашение</a></div>
						<span class="fb"> | </span>
						<div class="col_f_r fb"><a href="#privacy_policy" onclick="privacy_policy();">Политика конфиденциальности</a></div>	

					</div>					
				</div>
			</section>
		</div>
	</div>	
</body>
<script src="script/stm.js"></script>
<script src="script/preloader.js"></script>
</html>