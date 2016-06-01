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
					</div>
				</div>
			</div>
		</div>
<!--		<div class="fon_triangle">-->


		<div class="container">
			<div class="row">
				<div id="main_slider_inner">
					<div class="item">
						<img src = "./images/slider1.jpg" alt = "Виды потолков">
						<div class="label">Матовые</div>
					</div>
					<div class="item">
						<img src = "./images/slider2.jpg" alt = "Виды потолков">
						<div class="label">Сатиновые</div>
					</div>
					<div class="item">
						<img src = "./images/slider3.jpg" alt = "Виды потолков">
						<div class="label">Глянцевые</div>
					</div>
					<div class="item">
						<img src = "./images/slider4.jpg" alt = "Виды потолков">
						<div class="label">Тканевые</div>
					</div>
				</div>
				<h2 class="title left">О компани</h2>
				<div class="clearfix"></div>
				<div class="col-xs-8 no-left">
					<p>
						Каждый веб-разработчик знает, что такое текст-«рыба». Текст этот, несмотря на название, не имеет никакого отношения к обитателям водоемов.
						Используется он веб-дизайнерами для вставки на интернет-страницы и демонстрации внешнего вида контента, просмотра шрифтов, абзацев, отступов и т.д.
						Так как цель применения такого текста исключительно демонстрационная, то и смысловую нагрузку ему нести совсем необязательно.
						Более того, нечитабельность текста сыграет на руку при оценке качества восприятия макета.
					</p>
					<p>
						Самым известным «рыбным» текстом является знаменитый Lorem ipsum. Считается, что впервые его применили в книгопечатании еще в XVI веке.
						Своим появлением Lorem ipsum обязан древнеримскому философу Цицерону, ведь именно из его трактата «О пределах добра и зла» средневековый книгопечатник вырвал отдельные фразы и слова, получив текст-«рыбу», широко используемый и по сей день.
						Конечно, возникают некоторые вопросы, связанные с использованием Lorem ipsum на сайтах и проектах, ориентированных на кириллический контент – написание символов на латыни и на кириллице значительно различается.
					</p>
					<p>
						И даже с языками, использующими латинский алфавит, могут возникнуть небольшие проблемы: в различных языках те или иные буквы встречаются с разной частотой, имеется разница в длине наиболее распространенных слов.
						Отсюда напрашивается вывод, что все же лучше использовать в
					</p>
				</div>
			</div>
		</div>
<!--		</div>-->
		<div class="clearfix"></div>
<!--		<div class="fon_triangle"></div>-->
		<div class="description">
		<div class="container">
			<div class="row">
				<h1><span>8 лет</span> на рынке натяжных потолков!</h1>
				<div class="description_block">
					<img src = "/images/description1.png" class="margin_right" alt = "Гарантируем высокое качество!">
					<span>Гарантируем высокое качество!</span>
				</div>
				<div class="description_block double">
					<img src = "/images/description2.png" class="margin_right" alt = "Опертивно справимся с любой задачей!">
					<span>
						Опертивно справимся
						с любой задачей!
					</span>
				</div>
				<div class="description_block" style="margin-right: 170px;">
					<span>
						Вас обрадуют наши цены!
					</span>
					<img src = "/images/description3.png" class="margin_left" alt = "Вас обрадуют наши цены!">
				</div>
				<div class="description_block">
					<span>
						Сертификаты на полотна
					</span>
					<img src = "/images/description4.png" class="margin_left" alt = "Сертификаты на полотна">
				</div>
			</div>
		</div>
		</div>
	</div>

</body>
</html>

<script>
	$("#main_slider_inner").slick(
	{
		slidesToShow: 4,
		slidesToScroll: 1,
		prevArrow: '<button type="button" class="slick-prev"></button>',
		nextArrow: '<button type="button" class="slick-next"></button>',
	});
</script>