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
	<header id='head-admin'><a href="index.php"> Админ-Панель</a></header>
	<div class="main-admin">
		<?php
		if (isset($_POST['checked'])) {
			$login = Prepared($_POST["login"]);
			$password = Prepared($_POST["password"]);
			if($login == '111'&& $password = '111') {require 'menu.php';}
		}
		else echo "<div class='menu' id='login'>
		<form method='post' action=''>
		<input type='text' name='login' placeholder='Login'>
		<input type='text' name='password' placeholder='Password'>
		<input type='submit' name='checked'>
		</form>
		</div>";

		if (isset($_POST['orders'])) {
			$name = Prepared($_POST["name"]);
			$telephone = Prepared($_POST["telephone"]);
			$servicename = Prepared($_POST["servicename"]);
			$message = Prepared($_POST["message"]);
			$quote = "insert into orders (name,telephone,servicename,message,date) values (?,?,?,?,?) ";
			$orders = $pdo->prepare($quote);
			$today = date("d.m.y");
			$orders->bindParam(1, $name);
			$orders->bindParam(2, $telephone);
			$orders->bindParam(3, $servicename);
			$orders->bindParam(4, $message);
			$orders->bindParam(5, $today);
			$orders->execute();

		}

		if (isset($_POST['orders'])) {
			$name = Prepared($_POST["name"]);
			$telephone = Prepared($_POST["telephone"]);
			$servicename = Prepared($_POST["servicename"]);
			$message = Prepared($_POST["message"]);
			$quote = "insert into orders (name,telephone,servicename,message,date) values (?,?,?,?,?) ";
			$orders = $pdo->prepare($quote);
			$today = date("d.m.y");
			$orders->bindParam(1, $name);
			$orders->bindParam(2, $telephone);
			$orders->bindParam(3, $servicename);
			$orders->bindParam(4, $message);
			$orders->bindParam(5, $today);
			$orders->execute();

		}

		if (isset($_POST['gallery'])) {
			$name = Prepared($_POST["name"]);
			$message = Prepared($_POST["message"]);
			$img = Prepared($_POST["img"]);
			$quote = "insert into gallery (name,text,image) values (?,?,?) ";
			$reviews = $pdo->prepare($quote);
			$reviews->bindParam(1, $name);
			$reviews->bindParam(2, $message);
			$reviews->bindParam(3, $img);
			$reviews->execute();

		}

		if (isset($_POST['deletegallery']))  {
			$id = Prepared($_POST["id"]);
			$quote = "DELETE FROM `gallery` WHERE `gallery`.`id` = ?";
			$reviews = $pdo->prepare($quote);
			$reviews->bindParam(1, $id);
			$reviews->execute();
		}
		if (isset($_POST['deletereview']))  {
			$id = Prepared($_POST["id"]);
			$quote = "DELETE FROM `reviews` WHERE `reviews`.`id` = ?";
			$reviews = $pdo->prepare($quote);
			$reviews->bindParam(1, $id);
			$reviews->execute();
		}
		if (isset($_POST['deleteorder']))  {
			$id = Prepared($_POST["id"]);
			$quote = "DELETE FROM `orders` WHERE `orders`.`id` = ?";
			$reviews = $pdo->prepare($quote);
			$reviews->bindParam(1, $id);
			$reviews->execute();
		}
		
		?>
	</div>
	<div class="table">
		<?php
		if (isset($_POST['checked'])) {
			$login = Prepared($_POST["login"]);
			$password = Prepared($_POST["password"]);
			if($login == '111'&& $password = '111') {require 'add.php';}
		}
		?>
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
</div>
</body>
<script src='script.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</html>