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
	<header id='head-admin'><a href="index.php">Вернуться на главную</a></header>
	<div class="gallery-head">Оставьте о нас отзыв!</div>
	<div class="product" id='review'>
		Рекомендации наших клиентов - лучший гарант качества нашей работы. <br>На данной странице Вы можете просмотреть отзывы наших прошлых клиентов и так же оставить свой!
		<div class='menu' id='login'>
			<form method='post' action=''>
				<input type='text' name='name' placeholder='Ваше имя'>
				<input type='text' name='service' placeholder='Вид услуги'>
				<textarea id="" cols="30" rows="10" name="text" placeholder="Ваш отзыв"></textarea>
				<input type='submit' name='send'>
			</form>
		</div>
	</div>";
	<?php
	if (isset($_POST['send'])) {
	$name = Prepared($_POST["name"]);
	$service = Prepared($_POST["service"]);
	$text = Prepared($_POST["text"]);

	$quote = "insert into reviews (name,service,text) values (?,?,?) ";
	$reviews = $pdo->prepare($quote);
	$reviews->bindParam(1, $name);
	$reviews->bindParam(2, $service);
	$reviews->bindParam(3, $text);
	$reviews->execute();

}
?>
</div>


<div class="gallery">
	<a name="gallery"></a>
	<div class="gallery-head">Отзывы о нас:</div>
	<div class="gallery-cards">
		<?php
		$count = $pdo->query('SELECT * FROM reviews');
		$dataCount = $count->fetchAll();

		$stmt = $pdo->query('SELECT * FROM reviews');
		$data = $stmt->fetch();

		$echo = $pdo->query('SELECT * FROM gallery');
		$data2 = $echo->fetch();
		for ($a = 0; $a<count($dataCount);$a++) {
		$img = $data2['image'];
		echo "<div class=\"gallery-card\" >
			<div class=\"card-border\">
				<div class=\"gallery-card-head\">$data[name]  -  $data[service]</div>
				<div class=\"gallery-card-text\">$data[text]</div>
				<div class=\"gallery-card-img\" style=\"background-image: url($img)\"></div>
			</div>
		</div>";
		$data = $stmt->fetch();
		$data2 = $echo->fetch();
	}

	?>


</div>
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
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="app.js"></script>
<script src='script.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</html>