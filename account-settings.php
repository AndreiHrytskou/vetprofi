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
					<div class="account__settings">
						<h2 class="subtitle">Настройки профиля</h2>
						<div class="account__settings-data">
							<form class="form__settings">
								<div class="input">
									<label for="nickname">Имя или никнейм</label>
									<input type="text" name="nickname" id="nickname" placeholder="Имя или никнейм	">
								</div>
								<div class="input">
									<label for="phone">Номер телефона</label>
									<input type="tel"	id="phone" placeholder="+7 888 888 88 88" oninput="this.value = this.value.replace(/[^0-9+]/g, '')" pattern="[0-9+]{10,15}" />
								</div>
								<div class="account__settings-sex">
									 <p>Пол</p>
									 <div class="account__settings-sex__box">
										<div class="input-radio">
											<input type="radio" id="men" name="sex" value="Мужской"  />
											<label for="men">Мужской</label>
										</div>
										<div class="input-radio">
											<input type="radio" id="women" name="sex" value="Женский" />
											<label for="women">Женский</label>
										</div>
									</div>
								</div>
								<div class="account__settings-password">
									<p>Сменить пароль</p>
									<div class="password__container">
										<input type="password" name="password" id="password" placeholder="Старый пароль">
										<input type="password" name="newpassword" id="newpassword" placeholder="Новый пароль">
									</div>
								</div>
								<div class="account__settings-buttons">
									<button class="btn">Сохранить изменения</button>
									<button class="btn__delete-account" id="btn__delete-account"><span class="btn__delete-icon">
										<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M15 2V16C15 16.5 14.5 17 14 17H9H4C3.5 17 3 16.5 3 16V2" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M1 2H17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M7 1H11M7 6V13M11 6V13" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</span>Удалить аккаунт</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php include "./partials/footer.php"?>
	<div class="modal hidden">
		<?php include "./partials/modal.php"?>
	</div>
	<div class="modal-form hidden">
	<div class="modal__settings">
		<h2 class="subtitle">Удалить аккаунт</h2>
		<button class="close-button">
			<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M16.21 1.71002L14.79 0.290039L8.50001 6.59004L2.20999 0.290039L0.790009 1.71002L7.09001 8.00004L0.790009 14.2901L2.20999 15.71L8.50001 9.41004L14.79 15.71L16.21 14.2901L9.91001 8.00004L16.21 1.71002Z" fill="black"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M16.21 1.71002L14.79 0.290039L8.50001 6.59004L2.20999 0.290039L0.790009 1.71002L7.09001 8.00004L0.790009 14.2901L2.20999 15.71L8.50001 9.41004L14.79 15.71L16.21 14.2901L9.91001 8.00004L16.21 1.71002Z" fill="black" fill-opacity="0.2"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M16.21 1.71002L14.79 0.290039L8.50001 6.59004L2.20999 0.290039L0.790009 1.71002L7.09001 8.00004L0.790009 14.2901L2.20999 15.71L8.50001 9.41004L14.79 15.71L16.21 14.2901L9.91001 8.00004L16.21 1.71002Z" fill="black" fill-opacity="0.2"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M16.21 1.71002L14.79 0.290039L8.50001 6.59004L2.20999 0.290039L0.790009 1.71002L7.09001 8.00004L0.790009 14.2901L2.20999 15.71L8.50001 9.41004L14.79 15.71L16.21 14.2901L9.91001 8.00004L16.21 1.71002Z" fill="black" fill-opacity="0.2"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M16.21 1.71002L14.79 0.290039L8.50001 6.59004L2.20999 0.290039L0.790009 1.71002L7.09001 8.00004L0.790009 14.2901L2.20999 15.71L8.50001 9.41004L14.79 15.71L16.21 14.2901L9.91001 8.00004L16.21 1.71002Z" fill="black" fill-opacity="0.2"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M16.21 1.71002L14.79 0.290039L8.50001 6.59004L2.20999 0.290039L0.790009 1.71002L7.09001 8.00004L0.790009 14.2901L2.20999 15.71L8.50001 9.41004L14.79 15.71L16.21 14.2901L9.91001 8.00004L16.21 1.71002Z" fill="black" fill-opacity="0.2"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M16.21 1.71002L14.79 0.290039L8.50001 6.59004L2.20999 0.290039L0.790009 1.71002L7.09001 8.00004L0.790009 14.2901L2.20999 15.71L8.50001 9.41004L14.79 15.71L16.21 14.2901L9.91001 8.00004L16.21 1.71002Z" fill="black" fill-opacity="0.2"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M16.21 1.71002L14.79 0.290039L8.50001 6.59004L2.20999 0.290039L0.790009 1.71002L7.09001 8.00004L0.790009 14.2901L2.20999 15.71L8.50001 9.41004L14.79 15.71L16.21 14.2901L9.91001 8.00004L16.21 1.71002Z" fill="black" fill-opacity="0.2"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M16.21 1.71002L14.79 0.290039L8.50001 6.59004L2.20999 0.290039L0.790009 1.71002L7.09001 8.00004L0.790009 14.2901L2.20999 15.71L8.50001 9.41004L14.79 15.71L16.21 14.2901L9.91001 8.00004L16.21 1.71002Z" fill="black" fill-opacity="0.2"/>
			</svg>
		</button>
		<div class="modal__settings-content">
			<p class="text">Вы уверены, что хотите удалить аккаунт?</p>
			<p class="text">Отменить это действие будет невозможно.</p>
			<p class="text">После удаления вы не сможете вновь зарегистрироваться под этим аккаунтом.</p>
		</div>
		<div class="account__settings-btns">
			<button class="btn" id="btn-cancel">Отменить</button>
			<button class="btn" id="btn-delete">Удалить</button>
		</div>
	</div>
	</div>
	<script src="http://localhost:8888/vetprofi_php/assets/js/account-settings.js"></script>
  </body>
</html>