<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/common.css" rel="stylesheet" type="text/css" />
	<link href="css/slick.css" rel="stylesheet" type="text/css" />

	<title>Aksinterier</title>
</head>
<body>
	<script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/slick.min.js" type="text/javascript"></script>

	<div class="wrapper">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-xs-4 logo no-left">
						<img src = "./images/logo.png" alt = "Логотип">
					</div>
					<div class="col-xs-8 no-right">
						<a href = "" class="new_order">Сделать заказ</a>
						<div class="phone pull-right">
							Velcom <span>+375 44 <i>769-84-31</i></span>
							<a href = "">Заказать обратный звонок</a>
						</div>
						<ul class="nav">
							<li><a href = "">Виды потолков</a></li>
							<li><a href = "">О компании</a></li>
							<li><a href = "">Портфолио</a></li>
							<li><a href = "">Отзывы</a></li>
							<li><a href = "">Контакты</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<div class="container no-left">
			<a href = "" class="give_sale">Получить скидку</a>
		</div>
		<div class="slider">
			<div class="fon">
				<div class="spec">
					<div class="container no-left">
						<h1>При первом заказе <span>скидка 5%</span></h1>
					</div>
				</div>
				<div class="slider_bottom"></div>
			</div>
			<div class="container">
				<div class="row">
					<div id="main_slider">
						<h2 class="title">Виды потолков</h2>
						<div class="clearfix"></div>
						<div class="inner">
							<div class="item">
								<img src = "./images/slider1.jpg" alt = "Виды потолков">
							</div>
							<div class="item">
								<img src = "./images/slider2.jpg" alt = "Виды потолков">
							</div>
							<div class="item">
								<img src = "./images/slider3.jpg" alt = "Виды потолков">
							</div>
							<div class="item">
								<img src = "./images/slider4.jpg" alt = "Виды потолков">
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

</body>
</html>

<script>
	$("#main_slider .inner").slick(
	{
		slidesToShow: 3,
		slidesToScroll: 1,
		prevArrow: '<button type="button" class="slick-prev"></button>',
		nextArrow: '<button type="button" class="slick-next"></button>',
	});
</script>