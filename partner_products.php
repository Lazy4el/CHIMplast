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
	<link rel="shortcut icon" href="./img/logo.ico" type="image/x-icon">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="Style/style.css">
	<link rel="stylesheet" href="Style/preloader.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

	<script	src="http://code.jquery.com/jquery-3.2.1.js"></script>
	<script src="./script/upload.js"></script>
	<title>Продукция партнеров</title>
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

					<div class="href">						
						<a href="index.php"><i class="fas fa-home"></i>ГЛАВНАЯ</a>
						<p>></p>
						<a href="products.php">ПРОДУКЦИЯ</a>
						<p>></p>
						<a href="" name="production">ПРОИЗВОДСТВО ЗАВОДОВ ПАРТНЕРОВ</a>
					</div>

					<div class="company_goods">
<!-- ---------------------------------------------------------------- -->
						<h3>«АМИНЫ»</h3>

						<div class="company-body">
							<ul>
								<li>
									<h4>МОНОЭТАНОЛАМИН</h4>
									<h5>ГОСТ/ТУ</h5>
									<p>ТУ 2423-159-00203335-2004</p>	
									<p>ПАО «Казаньоргсинтез»</p>								
								</li>
							</ul>

							<ul>
								<li>
									<h4>ДИЭТАНОЛАМИН марки «A» </h4>
									<h5>ГОСТ/ТУ</h5>
									<p>ТУ 2423-178-00203335-2007</p>	
									<p>ПАО «Казаньоргсинтез»</p>							
								</li>
							</ul>

							<ul>
								<li>
									<h4>ТРИЭТАНОЛАМИН марки «A»</h4>
									<h5>ГОСТ/ТУ</h5>
									<p>ту 2423-168-0023335-2007</p>		
									<p>ПАО «Казаньоргсинтез»</p>						
								</li>
							</ul>

							<ul>
								<li>
									<h4>ДИПРОКСАМИН 157 - 100%</h4>
									<h5>ГОСТ/ТУ</h5>
									<p>ту 6-14-614-76</p>		
									<p>ПАО «Казаньоргсинтез»</p>						
								</li>
							</ul>
							<ul>
								<li>
									<h4>ДИПРОКСАМИН 157 - 65ДМ</h4>
									<h5>ГОСТ/ТУ</h5>
									<p>ту 2483-194-00203335-2010</p>		
									<p>ПАО «Казаньоргсинтез»</p>						
								</li>
							</ul>						
						</div>	
<!-- ---------------------------------------------------------------- -->
						<h3>«ГЛИКОЛИ»</h3>

						<div class="company-body">
							<ul>
								<li>
									<h4>ЭТИЛЕНГЛИКОЛЬ в/с</h4>
									<h5>ГОСТ/ТУ</h5>
									<p>ГОСТ 19710-83</p>	
									<p>ПАО «Нижнекамскнефтехим»</p>							
								</li>
							</ul>

							<ul>
								<li>
									<h4>ДИЭТИЛЕНГЛИКОЛЬ</h4>
									<h5>ГОСТ/ТУ</h5>
									<p>ГОСТ 10136-77</p>	
									<p>ПАО «Нижнекамскнефтехим»</p>							
								</li>
							</ul>

							<ul>
								<li>
									<h4>ПЭГ-200; ПЭГ-300; ПЭГ-400</h4>
									<h5>ГОСТ/ТУ</h5>
									<p>ТУ 2226-074-05766801-2006</p>
									<p>ПАО «Нижнекамскнефтехим»</p>							
								</li>
							</ul>

							<ul>
								<li>
									<h4>ТРИЭТИЛЕНГЛИКОЛЬ техн.</h4>
									<h5>ГОСТ/ТУ</h5>
									<p>ту 2422-075-05766801-2006</p>
									<p>ПАО «Нижнекамскнефтехим»</p>								
								</li>
							</ul>	
						</div>
<!-- ---------------------------------------------------------------- -->
						<h3>«ПАВы»</h3>

						<div class="company-body">
							<ul>
								<li>
									<h4>НЕОНОЛ АФ 9-6</h4>
									<h5>ГОСТ/ТУ</h5>
									<p>ТУ 2483-077-05766801-98</p>	
									<p>ПАО «Нижнекамскнефтехим»</p>							
								</li>
							</ul>

							<ul>
								<li>
									<h4>НЕОНОЛ АФ 9-10,9-12</h4>
									<h5>ГОСТ/ТУ</h5>
									<p>ТУ 2483-077-05766801-98</p>	
									<p>ПАО «Нижнекамскнефтехим»</p>							
								</li>
							</ul>	
						</div>
<!-- ---------------------------------------------------------------- -->
						<h3>«Полиэфиры»</h3>

						<div class="company-body">
							<ul>
								<li>
									<h4>ЛАПРОЛ 3603-2-12</h4>
									<h5>ГОСТ/ТУ</h5>
									<p>ТУ 2226-015-10488057-94</p>	
									<p>ПАО «Нижнекамскнефтехим»</p>							
								</li>
							</ul>

							<ul>
								<li>
									<h4>ЛАПРОЛ 4003-2-16</h4>
									<h5>ГОСТ/ТУ</h5>
									<p>ТУ 2226-019-05766801-2005</p>	
									<p>ПАО «Нижнекамскнефтехим»</p>							
								</li>
							</ul>	

							<ul>
								<li>
									<h4>ЛАПРОЛ 4503</h4>
									<h5>ГОСТ/ТУ</h5>
									<p>ТУ 2226-016-10488057-94</p>	
									<p>ПАО «Нижнекамскнефтехим»</p>							
								</li>
							</ul>						
						</div>

						<div class="company-body">
							<ul>
								<li>
									<h4>ЛАПРОЛ 5503</h4>
									<h5>ГОСТ/ТУ</h5>
									<p>ТУ 2226-016-10488057-94</p>	
									<p>ПАО «Нижнекамскнефтехим»</p>							
								</li>
							</ul>

							<ul>
								<li>
									<h4>ЛАПРОЛ 5003-2-15; 5003-2Б-10</h4>
									<h5>ГОСТ/ТУ</h5>
									<p>ТУ 2226-016-10488057-94</p>	
									<p>ПАО «Нижнекамскнефтехим»</p>							
								</li>
							</ul>	

							<ul>
								<li>
									<h4>ЛАПРОЛ 3003</h4>
									<h5>ГОСТ/ТУ</h5>
									<p>ТУ 2226-016-10488057-94</p>	
									<p>ПАО «Нижнекамскнефтехим»</p>							
								</li>
							</ul>												
						</div>

						<div class="company-body">
							<ul>
								<li>
									<h4>ЛАПРОЛ 373</h4>
									<h5>ГОСТ/ТУ</h5>
									<p>ТУ 2226-048-05766801-2006</p>	
									<p>ПАО «Нижнекамскнефтехим»</p>							
								</li>
							</ul>

							<ul>
								<li>
									<h4>ЛАПРОЛ 6003-2Б18</h4>
									<h5>ГОСТ/ТУ</h5>
									<p>ТУ 2226-020-10488057-94</p>	
									<p>ПАО «Нижнекамскнефтехим»</p>							
								</li>
							</ul>
						</div>
<!-- ---------------------------------------------------------------- -->
						<h3>«Продукты органического синтеза»</h3>	

						<div class="company-body">
							<ul>
								<li>
									<h4>БУТИЛЦЕЛЛОЗОЛЬВ техн.</h4>
									<h5>ГОСТ/ТУ</h5>
									<p>ТУ 6-01-646-84</p>	
									<p>ПАО «Казаньоргсинтез»</p>							
								</li>
							</ul>

							<ul>
								<li>
									<h4>ЭТИЛЦЕЛЛОЗОЛЬВ техн.</h4>
									<h5>ГОСТ/ТУ</h5>
									<p>ГОСТ 8313-88</p>	
									<p>ПАО «Нижнекамскнефтехим»</p>							
								</li>
							</ul>

							<ul>
								<li>
									<h4>ЭТИЛКАРБИТОЛ техн.</h4>
									<h5>ГОСТ/ТУ</h5>
									<p>ТУ 2422-125-05766801-2003</p>	
									<p>ПАО «Нижнекамскнефтехим»</p>							
								</li>
							</ul>						
						</div>
<!-- ---------------------------------------------------------------- -->
						<h3>«Прочие продукты»</h3>	

						<div class="company-body">
							<ul>
								<li>
									<h4>ЖИДКИЕ ПРОДУКТЫ ПИРОЛИЗА марки "Е1"</h4>
									<h5></h5>
									<p>ООО «Сибур»</p>	
									<p>ПАО «Казаньоргсинтез»</p>							
								</li>
							</ul>
							<ul>
								<li>
									<h4>ФЛОТОРЕАГЕНТ Т-66</h4>
									<h5>ГОСТ/ТУ</h5>
									<p>ТУ 2452-029-05766801-99</p>	
									<p>ПАО «Нижнекамскнефтехим»</p>							
								</li>
							</ul>

							<ul>
								<li>
									<h4>ФЛОТОРЕАГЕНТ Т-92 ОКСАЛЬ</h4>
									<h5>ГОСТ/ТУ</h5>
									<p>ТУ 2542-029-05766801-99</p>	
									<p>ПАО «Нижнекамскнефтехим»</p>							
								</li>
							</ul>

							<ul>
								<li>
									<h4>ПЫЛЕПОДАВИТЕЛЬ калийных солей</h4>
									<h5>ГОСТ/ТУ</h5>
									<p>ТУ 2422-083-05766801-98</p>	
									<p>ПАО «Нижнекамскнефтехим»</p>							
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
								Компания &laquo;НефтеХимПолимер&raquo;  дает ряд приемуществ для заказчиков: поставка гарантированно качественной продукции в картчайшие сроки, изготовление продукции по заданной рецептуре, экономическую эффективность и экологическую безопасность.
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