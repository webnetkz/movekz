<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title>Move</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="path/to/image.jpg">
	<link rel="shortcut icon" href="img/favicon/favicon.png" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/favicon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/favicon.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/favicon.png">



	<style>
		body {
			opacity: 0;
			overflow: hidden;
		}

		html {
			background-color: #111118;
		}
	</style>
	<script src='https://www.google.com/recaptcha/api.js?hl=ru'></script>
</head>

<body>

	<div class="preloader">
		<div class="sk-circle">
			<div class="sk-circle1 sk-child"></div>
			<div class="sk-circle2 sk-child"></div>
			<div class="sk-circle3 sk-child"></div>
			<div class="sk-circle4 sk-child"></div>
			<div class="sk-circle5 sk-child"></div>
			<div class="sk-circle6 sk-child"></div>
			<div class="sk-circle7 sk-child"></div>
			<div class="sk-circle8 sk-child"></div>
			<div class="sk-circle9 sk-child"></div>
			<div class="sk-circle10 sk-child"></div>
			<div class="sk-circle11 sk-child"></div>
			<div class="sk-circle12 sk-child"></div>
		</div>
	</div>

	<div class="video-wrap">
		<div class="video">
			<div id="player"></div>
			<div class="close-button">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>


	<div class="full-page-wrap">



		<img src="img/watch.png" alt="" class="px-watch px" data-parallax='{"y" : -300, "smoothness": 15}'>
		<img src="img/iphone.png" alt="" class="px px-iphone" data-parallax='{"y" : -200, "smoothness": 15}'>
		<img src="img/stone-1.png" alt="" class="px px-stone-1" data-parallax='{"y" : -500, "smoothness": 15}'>
		<img src="img/stone-2.png" alt="" class="px px-stone-2" data-parallax='{"y" : -300, "smoothness": 15}'>
		<img src="img/stone-3.png" alt="" class="px px-stone-3" data-parallax='{"y" : -500, "smoothness": 15}'>
		<img src="img/stone-4.png" alt="" class="px px-stone-4" data-parallax='{"y" : -700, "smoothness": 15}'>
		<img src="img/stone-5.png" alt="" class="px px-stone-5" data-parallax='{"y" : -300, "smoothness": 15}'>
		<img src="img/stone-6.png" alt="" class="px px-stone-6" data-parallax='{"y" : -1000, "smoothness": 15}'>
		<img src="img/stone-7.png" alt="" class="px px-stone-7" data-parallax='{"y" : -800, "smoothness": 15}'>
		<img src="img/blure-1.png" alt="" class="px px-blure-1" data-parallax='{"y" : -1200, "smoothness": 15}'>
		<img src="img/blure-2.png" alt="" class="px px-blure-2" data-parallax='{"y" : -900, "smoothness": 15}'>
		<img src="img/blure-3.png" alt="" class="px px-blure-3" data-parallax='{"y" : -1200, "smoothness": 15}'>
		<img src="img/blure-4.png" alt="" class="px px-blure-4" data-parallax='{"y" : -300, "smoothness": 15}'>
		<img src="img/blure-5.png" alt="" class="px px-blure-5" data-parallax='{"y" : -100, "smoothness": 15}'>
		<img src="img/blure-6.png" alt="" class="px px-blure-6" data-parallax='{"y" : -900, "smoothness": 15}'>
		<img src="img/stone-8.png" alt="" class="px px-stone-8" data-parallax='{"y" : -300, "smoothness": 15}'>
		<img src="img/stone-9.png" alt="" class="px px-stone-9" data-parallax='{"y" : -500, "smoothness": 15}'>
		<img src="img/stone-10.png" alt="" class="px px-stone-10" data-parallax='{"y" : -600, "smoothness": 15}'>
		<img src="img/blure-7.png" alt="" class="px px-blure-7" data-parallax='{"y" : -500, "smoothness": 15}'>
		<img src="img/blure-8.png" alt="" class="px px-blure-8" data-parallax='{"y" : -700, "smoothness": 15}'>
		<img src="img/blure-9.png" alt="" class="px px-blure-9" data-parallax='{"y" : -400, "smoothness": 15}'>
		<img src="img/blure-10.png" alt="" class="px px-blure-10" data-parallax='{"y" : -600, "smoothness": 15}'>
		<img src="img/blure-11.png" alt="" class="px px-blure-11" data-parallax='{"y" : -400, "smoothness": 15}'>
		<img src="img/stone-11.png" alt="" class="px px-stone-11" data-parallax='{"y" : -500, "smoothness": 15}'>
		<img src="img/stone-12.png" alt="" class="px px-stone-12" data-parallax='{"y" : -400, "smoothness": 15}'>
		<img src="img/blure-12.png" alt="" class="px px-blure-12" data-parallax='{"y" : -500, "smoothness": 15}'>
		<img src="img/stone-8.png" alt="" class="px px-stone-13" data-parallax='{"y" : -550, "smoothness": 15}'>
		<img src="img/stone-11.png" alt="" class="px px-stone-15" data-parallax='{"y" : -350, "smoothness": 15}'>
		<img src="img/stone-8.png" alt="" class="px px-stone-14" data-parallax='{"y" : -530, "smoothness": 15}'>
		<img src="img/blure-1.png" alt="" class="px px-blure-14" data-parallax='{"y" : -500, "smoothness": 15}'>
		<img src="img/blure-3.png" alt="" class="px px-blure-15" data-parallax='{"y" : -300, "smoothness": 15}'>
		<img src="img/blure-4.png" alt="" class="px px-blure-16" data-parallax='{"y" : -400, "smoothness": 15}'>
		<img src="img/blure-10.png" alt="" class="px px-blure-17" data-parallax='{"y" : -500, "smoothness": 15}'>
		<img src="img/blure-6.png" alt="" class="px px-blure-18" data-parallax='{"y" : -550, "smoothness": 15}'>
		<img src="img/stone-6.png" alt="" class="px px-stone-16" data-parallax='{"y" : -400, "smoothness": 15}'>
		<img src="img/ipad.png" alt="" class="px px-ipad" data-parallax='{"y" : -400, "smoothness": 15, "distance": 1300}'>
		<img src="img/stone-8.png" alt="" class="px px-stone-17" data-parallax='{"y" : -400, "smoothness": 15}'>
		<img src="img/stone-11.png" alt="" class="px px-stone-18" data-parallax='{"y" : -350, "smoothness": 15}'>
		<img src="img/stone-9.png" alt="" class="px px-stone-19" data-parallax='{"y" : -500, "smoothness": 15}'>
		<img src="img/stone-8.png" alt="" class="px px-stone-20" data-parallax='{"y" : -350, "smoothness": 15}'>
		<img src="img/stone-11.png" alt="" class="px px-stone-21" data-parallax='{"y" : -450, "smoothness": 15}'>
		<img src="img/stone-9.png" alt="" class="px px-stone-22" data-parallax='{"y" : -500, "smoothness": 15}'>
		<img src="img/stone-9.png" alt="" class="px px-stone-23" data-parallax='{"y" : -450, "smoothness": 15}'>
		<img src="img/stone-11.png" alt="" class="px px-stone-24" data-parallax='{"y" : -450, "smoothness": 15}'>
		<img src="img/stone-4.png" alt="" class="px px-stone-25" data-parallax='{"y" : -300, "smoothness": 15}'>
		<img src="img/stone-11.png" alt="" class="px px-stone-26" data-parallax='{"y" : -370, "smoothness": 15}'>
		<img src="img/stone-9.png" alt="" class="px px-stone-27" data-parallax='{"y" : -400, "smoothness": 15}'>
		<img src="img/blure-6.png" alt="" class="px px-blure-19" data-parallax='{"y" : -450, "smoothness": 15}'>
		<img src="img/blure-11.png" alt="" class="px px-blure-20" data-parallax='{"y" : -400, "smoothness": 15}'>
		<img src="img/blure-11.png" alt="" class="px px-blure-21" data-parallax='{"y" : -400, "smoothness": 15}'>
		<img src="img/blure-11.png" alt="" class="px px-blure-22" data-parallax='{"y" : -400, "smoothness": 15}'>
		<img src="img/blure-8.png" alt="" class="px px-blure-23" data-parallax='{"y" : -400, "smoothness": 15}'>
		<img src="img/blure-8.png" alt="" class="px px-blure-24" data-parallax='{"y" : -400, "smoothness": 15}'>
		<img src="img/blure-6.png" alt="" class="px px-blure-25" data-parallax='{"y" : -400, "smoothness": 15}'>
		<img src="img/blure-4.png" alt="" class="px px-blure-26" data-parallax='{"y" : -400, "smoothness": 15}'>
		<img src="img/stone-4.png" alt="" class="px px-stone-28" data-parallax='{"y" : -300, "smoothness": 15}'>



		<div class="scroll-menu">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<div class="menu-logo-wrap">
							<a href="#">
								<img src="img/bottom-menu-logo.png" alt="">
							</a>
						</div>
					</div>
					<div class="col-md-7">
						<div class="bottom-menu">
							<ul>
								<li>
									<a class="scroll-to-uslugi">услуги</a>
								</li>
								<li>
									<a class="scroll-to-who-we-are">кто мы</a>
								</li>
								<li>
									<a class="scroll-to-how-it-works">как это работает</a>
								</li>
								<li>
									<a href="#">наши работы</a>
								</li>
								<li>
									<a class="scroll-to-contacts">контакты</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<div class="bottom-phone">
							<div class="bottom-menu-p1">
								<img src="img/phone-icon.svg" alt="">
								<p>7</p>
								<p>0</p>
								<p>5</p>
								<p>5</p>
							</div>
							<p class="bottom-menu-p2">Бесплатно по Казаxстану</p>
						</div>
					</div>
				</div>
			</div>
		</div>


		<a class="callback-button-1 fixed-btn">
			<img src="img/callback-button1.svg" alt="">
		</a>
		<a class="callback-button-2 fixed-btn">
			<img src="img/callback-button2.svg" alt="">
		</a>
		<a class="go-up-button fixed-btn">
			<img src="img/go-up-button.svg" alt="">
		</a>

		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-sm-2 col-xs-3">
						<div class="logo">
							<a href="#">
								<img src="img/logo.png" alt="">
							</a>
						</div>
					</div>
					<div class="col-sm-8 col-xs-4">
						<div class="menu">
							<ul>
								<li>
									<a class="scroll-to-uslugi">услуги</a>
								</li>
								<li>
									<a class="scroll-to-who-we-are">кто мы</a>
								</li>
								<li>
									<a class="scroll-to-how-it-works">как это работает</a>
								</li>
								<li>
									<a href="#">наши работы</a>
								</li>
								<li>
									<a class="scroll-to-contacts">контакты</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2 col-xs-5">
						<div class="phone">
							<div class="phone-line1">
								<img src="img/phone-icon.png" alt="">
								<p>7055</p>
							</div>
							<div class="phone-line2">
								<p>Бесплатно по Казахстану</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="banner">
			<div class="container">
				<div class="banner-line1">
					<div class="row">
						<div class="col-md-12">
							<h1>создать сайт и запустить рекламную компанию
								<span> не было ещё так посто !</span>
							</h1>
						</div>
					</div>
				</div>
				<div class="banner-line2">
					<div class="row">
						<div class="col-md-12">
							<div class="play-button-wrap">
								<h1>расскажем и покажем</h1>
								<div class="button-wrap">
									<img class="button-off" src="img/button-off.png" alt="">
									<img class="button-on" src="img/button-on.png" alt="">
								</div>
								<h1>суть продукта
									<span>за 60 секунд !</span>
								</h1>
								<img class="arrow" src="img/arrow.png" alt="">
							</div>
						</div>
					</div>
				</div>
				<div class="banner-line3">
					<div class="row">
						<div class="col-md-12">
							<h1>наши
								<span>услуги</span>
							</h1>
							<img src="img/tag-br.png" alt="">
						</div>
					</div>
				</div>
				<div class="banner-line4">
					<div class="row">
						<div class="col-md-12">
							<p>Бизнес с нуля за
								<span>
									<span class="big-number">5</span> рабочих дней.</span> С начальным капиталом:</p>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="business-plans">
			<div class="container">
				<div class="row">
					<div class="business-plan-controller">
						<div class="dots-wrap">
							<div class="dot1-text active">
								<span>1</span>
								<span>2</span>
								<span>3</span>
							</div>
							<div class="dot1 dot active">
								<div class="dot-inner"></div>
							</div>
							<div class="dots-line"></div>
							<div class="dot2-text">
								<span>4</span>
								<span>5</span>
								<span>6</span>
							</div>
							<div class="dot2 dot">
								<div class="dot-inner"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="tables-wrap">

							<div id="table-1" class="table table-1">
								<div class="table-header">
									<h1>Стандарт</h1>
									<h2>Для тех кто начинает с нуля!</h2>
									<img src="img/table-1-triangle.png" alt="">
								</div>
								<div class="table-price" style="background-image: url(img/price-bg-logo.png);">
									<p>
										<img src="img/table-1-tange.png" alt="">
										<span class="big-number">48.</span>
										<span class="small-number">500</span>
									</p>
								</div>
								<div class="table-list">
									<ul>
										<li>
											<p>Продающий дизайн класса
												<br> Premium (шаблон)</p>
										</li>
										<li>
											<p>Стильный логотип класса
												<br> Premium (шаблон)</p>
										</li>
										<li>
											<p>Дизайн и производство
												<br> стильных визиток (100 штук)</p>
										</li>
										<li>
											<p>Настройка контекстной
												<br> рекламы в Google и Yandex</p>
										</li>
										<li>
											<p>Рекламный бюджет 15.000 тенге
												<br> на неделю за наш счёт.</p>
										</li>
										<li>
											<p>Мобильное приложение для отслеживания
												<br> заказов и работы с клиентами</p>
										</li>
									</ul>
								</div>
								<div class="table-button-wrap">
									<div class="table-button">
										<a href="#">купить сейчас!</a>
									</div>
								</div>
							</div>

							<div id="table-2" class="table table-2">
								<div class="table-header">
									<h1>Готовый Бизнес</h1>
									<h2>Для продвинутых!</h2>
									<img src="img/table-2-triangle.png" alt="">
								</div>
								<div class="table-price" style="background-image: url(img/price-bg-logo.png);">
									<p>
										<img src="img/table-2-tange.png" alt="">
										<span class="big-number">88.</span>
										<span class="small-number">500</span>
									</p>
								</div>
								<div class="table-list">
									<ul>
										<li>
											<img src="img/table-2-list-item-1.png" alt="">
											<p>Продающий дизайн Premium класса</p>
										</li>
										<li>
											<img src="img/table-2-list-item-2.png" alt="">
											<p>Логотип Premium класса</p>
										</li>
										<li>
											<img src="img/table-2-list-item-3.png" alt="">
											<p>Стильные визитки (100 шт)</p>
										</li>
										<li>
											<img src="img/table-2-list-item-4.png" alt="">
											<p>CRM система для работы
												<br>с клиентами и сайтом</p>
										</li>
										<li>
											<img style="margin-left: 32px;margin-right: 8px" src="img/table-2-list-item-5.png" alt="">
											<p>Мобильное приложение для работы
												<br>с новыми заказами и клиентами</p>
										</li>
										<li>
											<img src="img/table-2-list-item-6.png" alt="">
											<p>Контекстная реклама в поисковых
												<br>системах Яндекс и Google</p>
										</li>
										<li>
											<img src="img/table-2-list-item-7.png" alt="">
											<p>Бонус от moVe Бюджет на рекламную
												<br>компанию 15.000 тенге</p>
										</li>
										<li>
											<img src="img/table-2-list-item-8.png" alt="">
											<p>100 % юридически защищенный Договор
												<br>на оказание услуг для Ваших клиентов</p>
										</li>
										<li>
											<img src="img/table-2-list-item-9.png" alt="">
											<p>Гайд (Инструкция для новичков как
												<br>организовать работу с клиентами)</p>
										</li>
										<li>
											<img src="img/table-2-list-item-10.png" alt="">
											<p>Продающее коммерческое предложение</p>
										</li>
										<li>
											<img src="img/table-2-list-item-11.png" alt="">
											<p>Личный менеджер и маркетолог
												<br>прикрепленный к вашему проекту</p>
										</li>
									</ul>
								</div>
								<div class="table-button-wrap">
									<div class="table-button">
										<a href="#">купить сейчас!</a>
									</div>
								</div>
							</div>

							<div id="table-3" class="table table-3">
								<div class="table-header">
									<h1>Премиум</h1>
									<h2>Если вы эксперт!</h2>
									<img src="img/table-3-triangle.png" alt="">
								</div>
								<div class="table-price" style="background-image: url(img/price-bg-logo.png);">
									<p>
										<img src="img/table-3-tange.png" alt="">
										<span class="big-number">97.</span>
										<span class="small-number">500</span>
									</p>
								</div>
								<div class="table-list">
									<ul>
										<li>
											<p>Продающий дизайн класса
												<br> Premium (шаблон)</p>
										</li>
										<li>
											<p>Стильный логотип класса
												<br> Premium (шаблон)</p>
										</li>
										<li>
											<p>Дизайн и производство
												<br> стильных визиток (100 штук)</p>
										</li>
										<li>
											<p>Настройка контекстной
												<br> рекламы в Google и Yandex</p>
										</li>
										<li>
											<p>Рекламный бюджет 15.000 тенге
												<br> на неделю за наш счёт.</p>
										</li>
										<li>
											<p>Мобильное приложение для отслеживания
												<br> заказов и работы с клиентами</p>
										</li>
									</ul>
								</div>
								<div class="table-button-wrap">
									<div class="table-button">
										<a href="#">купить сейчас!</a>
									</div>
								</div>
							</div>

							<div id="table-4" class="table table-1 table-4">
								<div class="table-header">
									<h1>Стандарт</h1>
									<h2>Для тех кто начинает с нуля!</h2>
									<img src="img/table-1-triangle.png" alt="">
								</div>
								<div class="table-price" style="background-image: url(img/price-bg-logo.png);">
									<p>
										<img src="img/table-1-tange.png" alt="">
										<span class="big-number">48.</span>
										<span class="small-number">500</span>
									</p>
								</div>
								<div class="table-list">
									<ul>
										<li>
											<p>Продающий дизайн класса
												<br> Premium (шаблон)</p>
										</li>
										<li>
											<p>Стильный логотип класса
												<br> Premium (шаблон)</p>
										</li>
										<li>
											<p>Дизайн и производство
												<br> стильных визиток (100 штук)</p>
										</li>
										<li>
											<p>Настройка контекстной
												<br> рекламы в Google и Yandex</p>
										</li>
										<li>
											<p>Рекламный бюджет 15.000 тенге
												<br> на неделю за наш счёт.</p>
										</li>
										<li>
											<p>Мобильное приложение для отслеживания
												<br> заказов и работы с клиентами</p>
										</li>
									</ul>
								</div>
								<div class="table-button-wrap">
									<div class="table-button">
										<a href="#">купить сейчас!</a>
									</div>
								</div>
							</div>

							<div id="table-5" class="table table-2 table-5">
								<div class="table-header">
									<h1>Готовый Бизнес</h1>
									<h2>Для продвинутых!</h2>
									<img src="img/table-2-triangle.png" alt="">
								</div>
								<div class="table-price" style="background-image: url(img/price-bg-logo.png);">
									<p>
										<img src="img/table-2-tange.png" alt="">
										<span class="big-number">88.</span>
										<span class="small-number">500</span>
									</p>
								</div>
								<div class="table-list">
									<ul>
										<li>
											<img src="img/table-2-list-item-1.png" alt="">
											<p>Продающий дизайн Premium класса</p>
										</li>
										<li>
											<img src="img/table-2-list-item-2.png" alt="">
											<p>Логотип Premium класса</p>
										</li>
										<li>
											<img src="img/table-2-list-item-3.png" alt="">
											<p>Стильные визитки (100 шт)</p>
										</li>
										<li>
											<img src="img/table-2-list-item-4.png" alt="">
											<p>CRM система для работы
												<br>с клиентами и сайтом</p>
										</li>
										<li>
											<img style="margin-left: 32px;margin-right: 8px" src="img/table-2-list-item-5.png" alt="">
											<p>Мобильное приложение для работы
												<br>с новыми заказами и клиентами</p>
										</li>
										<li>
											<img src="img/table-2-list-item-6.png" alt="">
											<p>Контекстная реклама в поисковых
												<br>системах Яндекс и Google</p>
										</li>
										<li>
											<img src="img/table-2-list-item-7.png" alt="">
											<p>Бонус от moVe Бюджет на рекламную
												<br>компанию 15.000 тенге</p>
										</li>
										<li>
											<img src="img/table-2-list-item-8.png" alt="">
											<p>100 % юридически защищенный Договор
												<br>на оказание услуг для Ваших клиентов</p>
										</li>
										<li>
											<img src="img/table-2-list-item-9.png" alt="">
											<p>Гайд (Инструкция для новичков как
												<br>организовать работу с клиентами)</p>
										</li>
										<li>
											<img src="img/table-2-list-item-10.png" alt="">
											<p>Продающее коммерческое предложение</p>
										</li>
										<li>
											<img src="img/table-2-list-item-11.png" alt="">
											<p>Личный менеджер и маркетолог
												<br>прикрепленный к вашему проекту</p>
										</li>
									</ul>
								</div>
								<div class="table-button-wrap">
									<div class="table-button">
										<a href="#">купить сейчас!</a>
									</div>
								</div>
							</div>

							<div id="table-6" class="table table-3 table-6">
								<div class="table-header">
									<h1>Премиум</h1>
									<h2>Если вы эксперт!</h2>
									<img src="img/table-3-triangle.png" alt="">
								</div>
								<div class="table-price" style="background-image: url(img/price-bg-logo.png);">
									<p>
										<img src="img/table-3-tange.png" alt="">
										<span class="big-number">97.</span>
										<span class="small-number">500</span>
									</p>
								</div>
								<div class="table-list">
									<ul>
										<li>
											<p>Продающий дизайн класса
												<br> Premium (шаблон)</p>
										</li>
										<li>
											<p>Стильный логотип класса
												<br> Premium (шаблон)</p>
										</li>
										<li>
											<p>Дизайн и производство
												<br> стильных визиток (100 штук)</p>
										</li>
										<li>
											<p>Настройка контекстной
												<br> рекламы в Google и Yandex</p>
										</li>
										<li>
											<p>Рекламный бюджет 15.000 тенге
												<br> на неделю за наш счёт.</p>
										</li>
										<li>
											<p>Мобильное приложение для отслеживания
												<br> заказов и работы с клиентами</p>
										</li>
									</ul>
								</div>
								<div class="table-button-wrap">
									<div class="table-button">
										<a href="#">купить сейчас!</a>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="bussines-plans-mobile">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="bussines-carousel">
							<div class="flexslider">
								<ul class="slides">
									<li>
										<div class="table table-1">
											<div class="table-header">
												<h1>Стандарт</h1>
												<h2>Для тех кто начинает с нуля!</h2>
												<img src="img/table-1-triangle.png" alt="">
											</div>
											<div class="table-price" style="background-image: url(img/price-bg-logo.png);">
												<p>
													<img src="img/table-1-tange.png" alt="">
													<span class="big-number">48.</span>
													<span class="small-number">500</span>
												</p>
											</div>
											<div class="table-list">
												<ul>
													<li>
														<p>Продающий дизайн класса
															<br> Premium (шаблон)</p>
													</li>
													<li>
														<p>Стильный логотип класса
															<br> Premium (шаблон)</p>
													</li>
													<li>
														<p>Дизайн и производство
															<br> стильных визиток (100 штук)</p>
													</li>
													<li>
														<p>Настройка контекстной
															<br> рекламы в Google и Yandex</p>
													</li>
													<li>
														<p>Рекламный бюджет 15.000 тенге
															<br> на неделю за наш счёт.</p>
													</li>
													<li>
														<p>Мобильное приложение для отслеживания
															<br> заказов и работы с клиентами</p>
													</li>
												</ul>
											</div>
											<div class="table-button-wrap">
												<div class="table-button">
													<a href="#">купить сейчас!</a>
												</div>
											</div>
										</div>
										<div id="table-2" class="table table-2">
											<div class="table-header">
												<h1>Готовый Бизнес</h1>
												<h2>Для продвинутых!</h2>
												<img src="img/table-2-triangle.png" alt="">
											</div>
											<div class="table-price" style="background-image: url(img/price-bg-logo.png);">
												<p>
													<img src="img/table-2-tange.png" alt="">
													<span class="big-number">88.</span>
													<span class="small-number">500</span>
												</p>
											</div>
											<div class="table-list">
												<ul>
													<li>
														<img src="img/table-2-list-item-1.png" alt="">
														<p>Продающий дизайн Premium класса</p>
													</li>
													<li>
														<img src="img/table-2-list-item-2.png" alt="">
														<p>Логотип Premium класса</p>
													</li>
													<li>
														<img src="img/table-2-list-item-3.png" alt="">
														<p>Стильные визитки (100 шт)</p>
													</li>
													<li>
														<img src="img/table-2-list-item-4.png" alt="">
														<p>CRM система для работы
															<br>с клиентами и сайтом</p>
													</li>
													<li>
														<img style="margin-left: 32px;margin-right: 8px" src="img/table-2-list-item-5.png" alt="">
														<p>Мобильное приложение для работы
															<br>с новыми заказами и клиентами</p>
													</li>
													<li>
														<img src="img/table-2-list-item-6.png" alt="">
														<p>Контекстная реклама в поисковых
															<br>системах Яндекс и Google</p>
													</li>
													<li>
														<img src="img/table-2-list-item-7.png" alt="">
														<p>Бонус от moVe Бюджет на рекламную
															<br>компанию 15.000 тенге</p>
													</li>
													<li>
														<img src="img/table-2-list-item-8.png" alt="">
														<p>100 % юридически защищенный Договор
															<br>на оказание услуг для Ваших клиентов</p>
													</li>
													<li>
														<img src="img/table-2-list-item-9.png" alt="">
														<p>Гайд (Инструкция для новичков как
															<br>организовать работу с клиентами)</p>
													</li>
													<li>
														<img src="img/table-2-list-item-10.png" alt="">
														<p>Продающее коммерческое предложение</p>
													</li>
													<li>
														<img src="img/table-2-list-item-11.png" alt="">
														<p>Личный менеджер и маркетолог
															<br>прикрепленный к вашему проекту</p>
													</li>
												</ul>
											</div>
											<div class="table-button-wrap">
												<div class="table-button">
													<a href="#">купить сейчас!</a>
												</div>
											</div>
										</div>
										<div id="table-3" class="table table-3">
											<div class="table-header">
												<h1>Премиум</h1>
												<h2>Если вы эксперт!</h2>
												<img src="img/table-3-triangle.png" alt="">
											</div>
											<div class="table-price" style="background-image: url(img/price-bg-logo.png);">
												<p>
													<img src="img/table-3-tange.png" alt="">
													<span class="big-number">97.</span>
													<span class="small-number">500</span>
												</p>
											</div>
											<div class="table-list">
												<ul>
													<li>
														<p>Продающий дизайн класса
															<br> Premium (шаблон)</p>
													</li>
													<li>
														<p>Стильный логотип класса
															<br> Premium (шаблон)</p>
													</li>
													<li>
														<p>Дизайн и производство
															<br> стильных визиток (100 штук)</p>
													</li>
													<li>
														<p>Настройка контекстной
															<br> рекламы в Google и Yandex</p>
													</li>
													<li>
														<p>Рекламный бюджет 15.000 тенге
															<br> на неделю за наш счёт.</p>
													</li>
													<li>
														<p>Мобильное приложение для отслеживания
															<br> заказов и работы с клиентами</p>
													</li>
												</ul>
											</div>
											<div class="table-button-wrap">
												<div class="table-button">
													<a href="#">купить сейчас!</a>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="table table-1">
											<div class="table-header">
												<h1>Стандарт</h1>
												<h2>Для тех кто начинает с нуля!</h2>
												<img src="img/table-1-triangle.png" alt="">
											</div>
											<div class="table-price" style="background-image: url(img/price-bg-logo.png);">
												<p>
													<img src="img/table-1-tange.png" alt="">
													<span class="big-number">48.</span>
													<span class="small-number">500</span>
												</p>
											</div>
											<div class="table-list">
												<ul>
													<li>
														<p>Продающий дизайн класса
															<br> Premium (шаблон)</p>
													</li>
													<li>
														<p>Стильный логотип класса
															<br> Premium (шаблон)</p>
													</li>
													<li>
														<p>Дизайн и производство
															<br> стильных визиток (100 штук)</p>
													</li>
													<li>
														<p>Настройка контекстной
															<br> рекламы в Google и Yandex</p>
													</li>
													<li>
														<p>Рекламный бюджет 15.000 тенге
															<br> на неделю за наш счёт.</p>
													</li>
													<li>
														<p>Мобильное приложение для отслеживания
															<br> заказов и работы с клиентами</p>
													</li>
												</ul>
											</div>
											<div class="table-button-wrap">
												<div class="table-button">
													<a href="#">купить сейчас!</a>
												</div>
											</div>
										</div>
										<div class="table table-2">
											<div class="table-header">
												<h1>Готовый Бизнес</h1>
												<h2>Для продвинутых!</h2>
												<img src="img/table-2-triangle.png" alt="">
											</div>
											<div class="table-price" style="background-image: url(img/price-bg-logo.png);">
												<p>
													<img src="img/table-2-tange.png" alt="">
													<span class="big-number">88.</span>
													<span class="small-number">500</span>
												</p>
											</div>
											<div class="table-list">
												<ul>
													<li>
														<img src="img/table-2-list-item-1.png" alt="">
														<p>Продающий дизайн Premium класса</p>
													</li>
													<li>
														<img src="img/table-2-list-item-2.png" alt="">
														<p>Логотип Premium класса</p>
													</li>
													<li>
														<img src="img/table-2-list-item-3.png" alt="">
														<p>Стильные визитки (100 шт)</p>
													</li>
													<li>
														<img src="img/table-2-list-item-4.png" alt="">
														<p>CRM система для работы
															<br>с клиентами и сайтом</p>
													</li>
													<li>
														<img style="margin-left: 32px;margin-right: 8px" src="img/table-2-list-item-5.png" alt="">
														<p>Мобильное приложение для работы
															<br>с новыми заказами и клиентами</p>
													</li>
													<li>
														<img src="img/table-2-list-item-6.png" alt="">
														<p>Контекстная реклама в поисковых
															<br>системах Яндекс и Google</p>
													</li>
													<li>
														<img src="img/table-2-list-item-7.png" alt="">
														<p>Бонус от moVe Бюджет на рекламную
															<br>компанию 15.000 тенге</p>
													</li>
													<li>
														<img src="img/table-2-list-item-8.png" alt="">
														<p>100 % юридически защищенный Договор
															<br>на оказание услуг для Ваших клиентов</p>
													</li>
													<li>
														<img src="img/table-2-list-item-9.png" alt="">
														<p>Гайд (Инструкция для новичков как
															<br>организовать работу с клиентами)</p>
													</li>
													<li>
														<img src="img/table-2-list-item-10.png" alt="">
														<p>Продающее коммерческое предложение</p>
													</li>
													<li>
														<img src="img/table-2-list-item-11.png" alt="">
														<p>Личный менеджер и маркетолог
															<br>прикрепленный к вашему проекту</p>
													</li>
												</ul>
											</div>
											<div class="table-button-wrap">
												<div class="table-button">
													<a href="#">купить сейчас!</a>
												</div>
											</div>
										</div>
										<div id="table-3" class="table table-3">
											<div class="table-header">
												<h1>Премиум</h1>
												<h2>Если вы эксперт!</h2>
												<img src="img/table-3-triangle.png" alt="">
											</div>
											<div class="table-price" style="background-image: url(img/price-bg-logo.png);">
												<p>
													<img src="img/table-3-tange.png" alt="">
													<span class="big-number">97.</span>
													<span class="small-number">500</span>
												</p>
											</div>
											<div class="table-list">
												<ul>
													<li>
														<p>Продающий дизайн класса
															<br> Premium (шаблон)</p>
													</li>
													<li>
														<p>Стильный логотип класса
															<br> Premium (шаблон)</p>
													</li>
													<li>
														<p>Дизайн и производство
															<br> стильных визиток (100 штук)</p>
													</li>
													<li>
														<p>Настройка контекстной
															<br> рекламы в Google и Yandex</p>
													</li>
													<li>
														<p>Рекламный бюджет 15.000 тенге
															<br> на неделю за наш счёт.</p>
													</li>
													<li>
														<p>Мобильное приложение для отслеживания
															<br> заказов и работы с клиентами</p>
													</li>
												</ul>
											</div>
											<div class="table-button-wrap">
												<div class="table-button">
													<a href="#">купить сейчас!</a>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="who-we-are">
			<div class="container">
				<div class="who-we-are-line-1">
					<div class="row">
						<div class="col-md-12">
							<h1>кто
								<span>мы!</span>
							</h1>
							<img src="img/tag-br.png" alt="">
						</div>
					</div>
				</div>
				<div class="who-we-are-line-2">
					<div class="row">
						<div class="col-lg-9 col-md-12">
							<div class="macbook-slider-wrap">
								<div class="macbook-slider img-responsive">
									<div class="owl-carousel">
										<div>
											<img src="img/macbook-slider-header.png" alt="">
											<p>
												<strong>Move your business</strong> команда профессионалов - с
												<span>11 летним опытом</span> в сфере IT Разработок и Интернет маркетинга. Наша бизнес модель построена таким образом,
												что наши доходы напрямую зависят от доходов наших партнёров. Это гарантирует нашу максимальную заинтересованность
												в росте Ваших продаж.</p>
										</div>
										<div>
											<img src="img/macbook-slider-header.png" alt="">
											<p>
												<strong>Move your business</strong> команда профессионалов - с
												<span>11 летним опытом</span> в сфере IT Разработок и Интернет маркетинга. Наша бизнес модель построена таким образом,
												что наши доходы напрямую зависят от доходов наших партнёров. Это гарантирует нашу максимальную заинтересованность
												в росте Ваших продаж.</p>
										</div>
										<div>
											<img src="img/macbook-slider-header.png" alt="">
											<p>
												<strong>Move your business</strong> команда профессионалов - с
												<span>11 летним опытом</span> в сфере IT Разработок и Интернет маркетинга. Наша бизнес модель построена таким образом,
												что наши доходы напрямую зависят от доходов наших партнёров. Это гарантирует нашу максимальную заинтересованность
												в росте Ваших продаж.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-12 form-wrap">
							<img src="img/who-we-are-bg-logo.png" alt="" class="bg-logo">
							<form class="callback-form">
								<h1>Получить консультацию:</h1>
								<input class="input-1" type="text" id="name" required>
								<label class="label-1" for="name">имя:</label>
								<div class="bar bar-1"></div>
								<input class="input-2" type="text" id="phone" required>
								<label class="label-2" for="phone">телефон:</label>
								<div class="bar bar-2"></div>
								<!-- <img src="img/captcha.png" alt=""> -->
								<div class="placeholder-underinput2"></div>
								<div class="g-recaptcha" data-sitekey="6LeVd0UUAAAAAB5VdaoOytMwklWRIg5SXfz-VRwU" data-theme="dark"></div>
								<div class="placeholder-underinput"></div>
								<a class="form-button" href="#">перезвонить</a>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="as-it-works">
			<div class="container">
				<div class="as-it-works-line-1">
					<div class="row">
						<div class="col-md-12">
							<h1>как это
								<span>работает</span>
							</h1>
							<img src="img/tag-br.png" alt="">
						</div>
					</div>
				</div>
				<div class="as-it-works-line-2">
					<div class="row">
						<div class="col">
							<p>Получите Максимум эффекта
								<span>в кратчайший срок!</span>
							</p>
						</div>
					</div>
				</div>
				<div class="as-it-works-line-3">
					<div class="row">
						<div class="col">
							<p>мы
								<span>максимально упростили</span> процесс создания и запуска рекламной компании.</p>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="steps-wrap">
			<img src="img/how-it-works-bg-logo.png" alt="" class="steps-wrap-bg-logo">
			<div class="container">

				<div class="steps-line steps-line-1">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							<div class="step-wrap step-wrap-1">
								<div class="step step-1">
									<img class="step-number" src="img/step-number-1.png" alt="">
									<div class="img-wrap">
										<img src="img/step-icon-1.png" alt="">
									</div>
									<p class="first-p">выберите подходящий продукт</p>
									<p class="second-p">Из прадоставленных выбираете
										<br> самый удобный для Вас пакет услуг.</p>
									<img class="tag-br" src="img/tag-br.png" alt="">
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-xs-12">
							<div class="step-wrap step-wrap-2">
								<div class="step step-2">
									<img class="step-number" src="img/step-number-2.png" alt="">
									<div class="img-wrap">
										<img src="img/step-icon-2.png" alt="">
									</div>
									<p class="first-p">определитесь с дизайном</p>
									<p class="second-p">Шаблонный дизайн либо
										<br>Индивидуальный дизайн.</p>
									<img class="tag-br" src="img/tag-br.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="steps-line steps-line-2">
					<div class="row">
						<div class="col-sm-4 col-xs-12">
							<div class="step-wrap step-wrap-3">
								<div class="step step-3">
									<img class="step-number" src="img/step-number-3.png" alt="">
									<div class="img-wrap">
										<img src="img/step-icon-3.png" alt="">
									</div>
									<p class="first-p">заключите договор</p>
									<p class="second-p">Онлайн оплата. PayPass (Мастеркард),
										<br>Pay Wave (Visa), QIWI, WebMoney,
										<br>Яндекс.Деньги.</p>
									<img class="tag-br" src="img/tag-br.png" alt="">
								</div>
							</div>
						</div>
						<div class="col-sm-4 col-xs-12">
							<div class="step-wrap step-wrap-4">
								<div class="step step-4">
									<img class="logo-off" src="img/step-4-mini-logo.png" alt="">
									<img class="logo-on" src="img/step-4-min-logo-on.png" alt="">
									<img class="step-number" src="img/step-number-4.png" alt="">
									<div class="img-wrap">
										<img src="img/step-icon-4.png" alt="">
									</div>
									<p class="first-p">продающий сайт готов</p>
									<p class="second-p">В кратчайшие сроки (3-5 рабочих дней)
										<br>выдаем вам готовый продукт с
										<br>настроенной рекламной компанией.</p>
									<img class="tag-br" src="img/tag-br.png" alt="">
								</div>
							</div>
						</div>
						<div class="col-sm-4 col-xs-12">
							<div class="step-wrap step-wrap-5">
								<div class="step step-5">
									<img class="step-number" src="img/step-number-5.png" alt="">
									<div class="img-wrap">
										<img src="img/step-icon-5.png" alt="">
									</div>
									<p class="first-p">начинайте зарабатывать</p>
									<p class="second-p">Зарабатывыть и достигать желаемый
										<br>результат, наши доходы напрямую
										<br>зависят от вашего успеха.</p>
									<img class="tag-br" src="img/tag-br.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>


		<div class="footer-wrap">
			<div class="footer-line1">
				<div class="container">
					<div class="row">
						<div class="col-sm-9 col-xs-12">
							<div class="address">
								<img class="placeholder" src="img/placeholder.svg" alt="">
								<p>
									<span>too "move business group"</span>
									<br>Республика Казахстан,г.Алматы. Ул. Байзакова 194, Офис 600.</p>
							</div>
						</div>
						<div class="col-sm-3 col-xs-12">
							<div class="user-wrap">
								<img src="img/user.svg" alt="">
								<p>Личный кабинет</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="map-wrap">
				<div class="map-overlay"></div>
				<div id="map"></div>
			</div>

			<div class="footer-line2">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="footer-line2-items">
								<div class="item item1">
									<img src="img/footer-item1.svg" alt="">
									<p>
										<span>Move Education</span> -
										<br>Бизнес практикум</p>
								</div>
								<div class="item item2">
									<img src="img/footer-item2.svg" alt="">
									<p>
										<span>Move</span> - Студия
										<br>Видео Инфографики</p>
								</div>
								<div class="item item3">
									<img src="img/footer-item3.svg" alt="">
									<p>
										<span>Move Digital Marketing</span> -
										<br>Маркет-е агенство полного цикла</p>
								</div>
								<img src="img/paper-plane.png" alt="" class="paper-plane">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="footer-menu-wrap">
			<div class="container">
				<div class="row">
					<div class="col-sm-2 col-xs-3">
						<div class="menu-logo-wrap">
							<a href="#">
								<img src="img/bottom-menu-logo.png" alt="">
							</a>
						</div>
					</div>
					<div class="col-sm-7 col-xs-4">
						<div class="bottom-menu">
							<ul>
								<li>
									<a class="scroll-to-uslugi">услуги</a>
								</li>
								<li>
									<a class="scroll-to-who-we-are">кто мы</a>
								</li>
								<li>
									<a class="scroll-to-how-it-works">как это работает</a>
								</li>
								<li>
									<a href="#">наши работы</a>
								</li>
								<li>
									<a class="scrooll-to-contacts">контакты</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-xs-5">
						<div class="bottom-phone">
							<div class="bottom-menu-p1">
								<img src="img/phone-icon.svg" alt="">
								<p>7</p>
								<p>0</p>
								<p>5</p>
								<p>5</p>
							</div>
							<p class="bottom-menu-p2">Бесплатно по Казаxстану</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-last-line">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-sm-4">
						<p>Создание и продвижение веб сайтов и
							<br>мобильных приложений в Казахстане под ключ</p>
					</div>
					<div class="col-md-5 col-sm-6">
						<h1>© copyright 2007-2018.
							<span>all rights reserved.</span>
						</h1>
					</div>
					<div class="col-sm-2">
						<div class="last-item-wrap">
							<p>design by
								<a href="https://idex.pro/">idex.pro</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>







	<script>
		var map;
		function initMap() {
			var coordinates = { lat: 43.2492788, lng: 76.9119801 };
			map = new google.maps.Map(document.getElementById('map'), {
				center: coordinates,
				zoom: 17,
				scrollwheel: false,
				disableDefaultUI: true,
			});

			var marker = new google.maps.Marker({
				position: coordinates,
				map: map,
				icon: 'img/map-icon.svg'
			});

			var mapStyles = [
				{
					"featureType": "landscape.natural",
					"elementType": "geometry.fill",
					"stylers": [{ "visibility": "on" }, { "color": "#e0efef" }],
				},
				{
					"featureType": "poi",
					"elementType": "geometry.fill",
					"stylers": [{ "visibility": "on" }, { "hue": "#1900ff" }, { "color": "#c0e8e8" }],
				},
				{
					"featureType": "road",
					"elementType": "geometry",
					"stylers": [{ "lightness": 100 }, { "visibility": "simplified" }],
				},
				{
					"featureType": "road",
					"elementType": "labels",
					"stylers": [{ "visibility": "off" }],
				},
				{
					"featureType": "transit.line",
					"elementType": "geometry",
					"stylers": [{ "visibility": "on" }, { "lightness": 700 }],
				},
				{
					"featureType": "water",
					"elementType": "all",
					"stylers": [{ "color": "#7dcdcd" }]
				}
			];

			map.setOptions({ styles: mapStyles })
		}
	</script>

	<script>
		var tag = document.createElement("script");
		tag.src = "https://www.youtube.com/iframe_api";
		var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
		var player;
		function onYouTubeIframeAPIReady() {
			player = new YT.Player('player', {
				height: '600',
				width: '1067',
				videoId: 'v2qUF818bRc',
				events: {}
			});
		}
		function stopVideo() {
			player.stopVideo();
		};
		function playVideo() {
			player.playVideo();
		}
	</script>


	<link rel="stylesheet" href="css/main.min.css">
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAE7O3sxzbundTYcNlF48uUl9_XCIFVUU&callback=initMap"></script>
	<script src="js/scripts.min.js"></script>



</body>

</html>