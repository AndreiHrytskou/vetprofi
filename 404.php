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
			<div class="error__page">
				<div class="error__page-content">
					<h1 class="title">Упс! Кто-то утащил эту страницу</h1>
					<h5 class="title-h5">Похоже, наш хвостатый редактор опять нажал что-то не то.</h5>
					<p class="text">Давайте вернёмся домой — или попробуем найти, что нужно:</p>
					<ul class="btn__list">
						<li class="btn__item"><a href="">На главную</a></li>
						<li class="btn__item"><a href="">Статьи</a></li>
					</ul>
					<button class="btn">Сообщить о нерабочей ссылке</button>
				</div>
				<div class="error__page-image">
					<img src="http://localhost:8888/vetprofi_php/assets/images/404image.png" alt="404">
				</div>
			</div>
		</div>
	</main>
 		<?php include "./partials/footer.php"?>
	<div class="modal hidden">
		<?php include "./partials/modal.php"?>
	</div> 
  </body>
</html>