	<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VetProfi</title>
  </head>
  <body>
	<?php include "./partials/header.php"?>
	<main class="main">
		<div class="container">
			<?php include "./partials//module/breadcrumbs.php"?>
			<div class="contacts__page">
				<h1 class="title">Контакты</h1>
				<div class="contacts__wrapper">
					<div class="map">
						<img src="http://localhost:8888/vetprofi_php/assets/images/map.png" alt="map">
					</div>
					<div class="contacts__content">
						<div class="contacts__block">
							<h2 class="subtitle">Беларусь, ул. Примерная, д. 42Б, корп. 3, подъезд 2, кв. 101</h2>
							<div class="work__time">
								<p class="title-h5">Работаем с понедельника по пятницу</p>
								<div class="btn">
									<img src="http://localhost:8888/vetprofi_php/assets/images/time.png" alt="clock">
									<span> 10 - 18<sup>00</sup></span>
								</div>
							</div>
							<div class="contacts__container">
								<div class="contacts__number">
									<p class="title-h5">общий телефон для связи</p>
									<p class="text">+7 (495) 123-45-67</p>
								</div>
								<div class="contacts__number">
									<p class="title-h5">редакция / отдел контента</p>
									<p class="text">+7 (495) 123-45-67</p>
								</div>
								<div class="contacts__number">
									<p class="title-h5">сотрудничество и вакансиии</p>
									<p class="text">+7 (495) 123-45-67</p>
								</div>
							</div>
							<div class="social__block">
								<a href="" target="_blank">
									<img src="http://localhost:8888/vetprofi_php/assets/images/vk.svg" alt="vf" />
								</a>
								<a href="" target="_blank">
									<img src="http://localhost:8888/vetprofi_php/assets/images/twitter.svg" alt="twitter" />
								</a>
								<a href="" target="_blank">
									<img src="http://localhost:8888/vetprofi_php/assets/images/dzen.svg" alt="dzen" />
								</a>
							</div>
						</div>
						<div class="contacts__box">
							<h3 class="title-h3">Как еще с нами связаться?</h3>
							<div class="contacts__list">
								<div class="contacts__item">
									<h4 class="title-h4">Любые вопросы и обращения</h4>
									<p class="text">director@vetprofi.by</p>
								</div>
								<div class="contacts__item">
									<h4 class="title-h4">Партнерство, реклама, запросы</h4>
									<p class="text">partners@vetprofi.by</p>
								</div>
								<div class="contacts__item">
									<h4 class="title-h4">Трудоустройство</h4>
									<p class="text">hr@vetprofi.by</p>
								</div>
							</div>
						</div>
					</div>
				</div>
	<?php include "./partials/formforpage.php"?>
			</div>
		</div>
	</main>
	<?php include "./partials/footer.php"?>
	<div class="modal hidden">
		<?php include "./partials/modal.php"?>
	</div>
  </body>
</html>