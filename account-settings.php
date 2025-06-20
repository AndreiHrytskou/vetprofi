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
			<div class="account__wrapper">
				<h1 class="title">Личный кабинет</h1>
				<div class="account__container">
					<div class="account__sidebar">
						<div class="account__user">
							<div class="user__image" id="avatarWrapper">
								<img src="http://localhost:8888/vetprofi_php/assets/images/user.png" alt="user" class="user__icon" id="avatar">
								<input class="input__img" type="file" name="" id="" accept="image/*" multiple id="fileInput">
							</div>
							<h4 class="user__name title-h4">Наталья Ковалевская</h4>
							<div class="user__register">
								Дата регистрации на сайте:</br>
								<span class="user__date">16.02.2024</span>
							</div>
						</div>
						<div class="account__tabs">
							<div class="title-h4 account__tab" data-tab="posts">Мои посты</div>
							<div class="title-h4 account__tab" data-tab="answer">Ответы</div>
							<div class="title-h4 account__tab" data-tab="like">Понравившиеся</div>
							<div class="title-h4 account__tab current" data-tab="settings">Настройки</div>
						</div>
						<button class="btn" id="exitBtn">Выйти</button>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php include "./partials/footer.php"?>
	<div class="modal hidden">
		<?php include "./partials/modal.php"?>
	</div>
	<script src="http://localhost:8888/vetprofi_php/assets/js/account-settings.js"></script>
  </body>
</html>