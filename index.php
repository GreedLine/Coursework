<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js" charset="utf-8"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
	charset="utf-8"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<title>Мой курсач</title>
	<?php
	require('connect.php');
	function Prepared($tex)
	{
		$tex = trim($tex);
		$tex = stripslashes($tex);
		$tex = htmlspecialchars($tex);
		return $tex;
	}

	?>
</head>
<body>
	<header id="app">
		<div class="navigation">
			<a name="head"></a>
			<ul>
				<li><a href="#head">ГЛАВНАЯ</a></li>
				<li><a href="#gallery">ГАЛЛЕРЕЯ</a></li>
				<li><a href="#about">О НАС</a></li>
				<li><a href="#coin">УСЛУГИ</a></li>
				<li><a href="#contact">КОНТАКТЫ</a></li>
				<li><a href="/reviews.php">ОТЗЫВЫ</a></li>
			</ul>
		</div>
		<div class="logo-text"></div>
	</header>
	<section class="services-section">
		<div class="inner-width">
			<div class="services owl-carousel">

				<div class="service">
					<div class="modale-img" style="background: url(img/slider1.jpg);"></div>
					<div class="modale"></div>
					<div class="text">
						<div class="head-text">КАЧЕСТВО И ПРОФЕССИОНАЛИЗМ</div>
						<div class="main-text">СДЕЛАЕМ ВАШ ДОМ УЮТНЫМ</div>
						<div class="button-text">ПОДРОБНЕЕ</div>
					</div>
				</div>

				<div class="service">
					<div class="modale-img" style="background: url(img/slider2.jpg);"></div>
					<div class="modale"></div>
					<div class="text">
						<div class="head-text">ЛУЧШАЯ СТУДИЯ ДИЗАЙНА</div>
						<div class="main-text">2017, 2018 ГОДОВ ПО ИТОГАМ КОНКУРСА "ДИЗАЙН В КВАДРАТЕ"</div>
						<div class="button-text">ПОДРОБНЕЕ</div>
					</div>
				</div>

				<div class="service">
					<div class="modale-img" style="background: url(img/slider3.jpg);"></div>
					<div class="modale"></div>
					<div class="text">
						<div class="head-text">РАБОТАЕМ УДАЛЁННО</div>
						<div class="main-text">СО ВСЕМИ ГОРОДАМИ ПО ВСЕМУ МИРУ</div>
						<div class="button-text">ПОДРОБНЕЕ</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<script>
		$(".services").owlCarousel({
			loop: true,
			autoplay: true,
			autoplayTimeout: 2000,
			autoplayHoverPause: true,
			responsive: {
				0: {
					items: 1
				},
				2000: {
					items: 2
				}
			}
		});
	</script>
	<div class="up"><a href="#head">Вверх</a></div>
	<div class="space"></div>
	<a name="about"></a>
	<div class="gallery-head">О нас</div>
	<div class="product">

		<div class="product-left">Дизайн студия "Политехникум" - это сплоченный коллектив, в котором работают талантливые дизайнеры-профессионалы, целиком посвящающие себя творческому процессу. Наш свежий взгляд на современный дизайн интерьера и графический дизайн в сочетании с высоким качеством работы обеспечивает превосходный результат. И это по достоинству оценили наши клиенты.<br><br>

		Квалифицированные сотрудники нашей студии дизайна интерьера имеют богатый опыт работы. Поэтому у нас вы сможете заказать эксклюзивный креативный проект с авторским надзором за всеми стадиями работы, либо разработку фирменного стиля. Наших клиентов ждет достойное качество и выгодная стоимость.</div>
		<div class="product-right">Специалисты студии дизайна интерьера предложат варианты перепланировки, разработают подробный дизайн-проект, обеспечат авторское сопровождение. Мы не боимся смелых идей, используем различные стили, применяем современные технологии и классические приемы.
			<br>
			<br>

			Смотрите наши решения для домов и квартир. Работаем со всеми регионами!
			<br>
			<br>

		Студия дизайна "Политехникум" - это высокое качество, индивидуальность и адекватные цены!</div>
	</div>
	<a name="contact"></a>
	<div class="callback">
		
		<div class="callback-left">
			<h1>КОНТАКТЫ</h1>
			<hr>
			<div class="contact-text">Что бы получить консультацию - напишите нам на нашу почту.</div>
			<div class="mail">E-MAIL: greedline74@gmail.com</div>
			<div class="contact-text">Или же позвоните нам на нашу горячую линию:</div>
			<div class="contact-telephone">8-800-555-35-35</div>
		</div>
		<div class="callback-right">
			<h1>НАПИШИТЕ НАМ</h1>
			<hr>
			<form action="." method="post">
				<input type="text" name="name" placeholder="Ваше имя">
				<input type="text" name="email" placeholder="Ваш e-mail">
				<input type="text"name="telephone" placeholder="Ваш телефон">
				<textarea id="" cols="30" rows="10" name="message" placeholder="Сообщение"></textarea>
				<a href="studiaofdesign.com"><input type="submit" value="Отправить" name="callback"></a>
			</form>
			<?php

			if (isset($_POST['callback'])) {
				$name = Prepared($_POST["name"]);
				$email = Prepared($_POST["email"]);
				$telephone = Prepared($_POST["telephone"]);
				$message = Prepared($_POST["message"]);


				$quote = "insert into callback (name,email,telephone,text,date) values (?,?,?,?,?) ";
				$callback = $pdo->prepare($quote);
				$today = date("y.m.d");
				$callback->bindParam(1, $name);
				$callback->bindParam(2, $email);
				$callback->bindParam(3, $telephone);
				$callback->bindParam(4, $message);
				$callback->bindParam(5, $today);
				$callback->execute();
				exit;
			}

			?>
		</div>
	</div>
	<div class="space"></div>
	<a name="coin"></a>
	<div class="gallery-head">Наши услуги</div>
	<div class="product">
				<div class="card-coin">
					<div class="text-coin">
						<div class="coin-name">Индивидуальный дизайн</div>
						<div class="coin-text">Мы разработаем для Вас индивидуальный дизайн вашего интерьера с учётом всех ваших пожеланий и требований.</div>
						<div class="button-text">ПОДРОБНЕЕ</div>
					</div>
				</div>

				<div class="card-coin">
					<div class="text-coin">
						<div class="coin-name">Шаблонный дизайн</div>
						<div class="coin-text">Мы предоставим Вам выбор из уже разработанных нами прототипов интерьеров.</div>
						<div class="button-text">ПОДРОБНЕЕ</div>
					</div>
				</div>

				<div class="card-coin">
					<div class="text-coin">
						<div class="coin-name">Личный заказ</div>
						<div class="coin-text">Отдельное индивидуальное задание, которое не включает в себя комплексные задачи.</div>
						<div class="button-text">ПОДРОБНЕЕ</div>
					</div>
				</div>
	</div>
	<div class="gallery">
		<a name="gallery"></a>
		<div class="gallery-head">Примеры наших работ</div>
		<div class="gallery-cards">
			<?php
			$count = $pdo->query('SELECT * FROM gallery');
			$dataCount = $count->fetchAll();

			$stmt = $pdo->query('SELECT * FROM gallery');
			$data = $stmt->fetch();
			for ($a = 0; $a<count($dataCount);$a++) {
				$img = $data['image'];
				echo "<div class=\"gallery-card\" >
				<div class=\"card-border\">
				<div class=\"gallery-card-head\">$data[name]</div>
				<div class=\"gallery-card-text\">$data[text]</div>
				<div class=\"gallery-card-img\" style=\"background-image: url($img)\"></div>
				</div>
				</div>";
				$data = $stmt->fetch();
			}

			?>


		</div>
	</div>
	<div class="maps">
		<div class="gallery-head">Мы на картах</div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d806.2179011746822!2d61.44485834713853!3d55.14252860256924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43c5f2a5350307f3%3A0x8ca910620d48c42d!2z0J_QvtC70LjRgtC10YXQvdC40YfQtdGB0LrQuNC5INC60L7QvNC_0LvQtdC60YEg0K7QttC90L4t0KPRgNCw0LvRjNGB0LrQvtCz0L4g0LPQvtGB0YPQtNCw0YDRgdGC0LLQtdC90L3QvtCz0L4g0YLQtdGF0L3QuNGH0LXRgdC60L7Qs9C-INC60L7Qu9C70LXQtNC20LA!5e0!3m2!1sru!2sru!4v1588018528844!5m2!1sru!2sru" width="100%" height="740" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>
	<footer>
		<div class="footer-left">
			<ul>
				<li><a href="">8-800-555-35-35</a></li>
				<li><a href="">Г. Челябинск, Горького, 7</a></li>
				<li><a href="">2020, Все права защищены</a></li>
			</ul>
		</div>
		<div class="footer-name">Студия Дизайна: "Politech"</div>
		<div class="footer-right">
			<ul>
				<li><a href="">Мы в Вконтакте</a></li>
				<li><a href="">Мы в Facebook</a></li>
				<li><a href="">Мы в Instagram</a></li>
			</ul>
		</div>
	</footer>
	<div class="modal">
		<div class="window">
			<div class="window-head">
				<div class="window-head-left">Благодарим Вас за<br> проявленный интерес!</div>
				<div class="window-head-right">Закрыть окно</div>
			</div>
			<div class="window-text">Пожалуйста, позвоните нам на горячую линию и наши консультанты проконсультируют Вас по всем интересующим Вас вопросам. <br><br>Звонок бесплатный.<br><br>Телефон горячей линии:<br><b>8-800-555-35-35</b></div>
			<div class="window-foot"><div class="window-footer">Принять</div></div>
		</div>
	</div>
</body>
<script src='script.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</html>