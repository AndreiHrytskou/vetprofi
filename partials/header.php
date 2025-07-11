<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="http://localhost:8888/vetprofi_php/assets/css/css/style.css">
	<link rel="stylesheet" href="http://localhost:8888/vetprofi_php/assets/css/fonts/inter.css">
	<title>VetProfi</title>
</head>
<body>
<header id="header" class="header">
  <div class="container">
    <div class="header__block">
      <img src="http://localhost:8888/vetprofi_php/assets/images/logovetprofi.png" alt="logo" />
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
    <nav class="menu">
      <ul class="menu__list">
        <li class="menu__item">
  <div class="submenu-toggle">
    База знаний о животных
    <span class="arrow"></span>
  </div>
  <ul class="submenu">
    <li class="submenu__item">База знаний о ветеринарных препаратах
      <ul class="submenu">
        <li class="submenu__item"><a href="">База знаний о ветеринарных препаратах</a></li>
      </ul>
    </li>
    <li class="submenu__item">База знаний о породах кошек
      <ul class="submenu">
        <li class="submenu__item"><a href="">База знаний о ветеринарных препаратах</a></li>
      </ul>
    </li>
  </ul>
</li>

        <li class="menu__item">Блог о животных</li>
        <li class="menu__item">Навигация по базе данных</li>
      </ul>
    </nav>
    <div class="header__block">
		<button class="header__search">
			<img src="http://localhost:8888/vetprofi_php/assets/images/search.svg" alt="search">
		</button>
		<button class="burger-btn" id="burgerBtn" aria-label="Открыть меню">
    <div class="burger-icon"></div>
  </button>
      <div class="lang__wrapper">
        <ul class="langflags">
          <li class="lang lang-ru current">RU</li>
          <li class="lang lang-en">EN</li>
        </ul>
      </div>
    </div>
    <div class="login__block">
      <!-- Кнопки -->
      <button class="btn auth-trigger" data-tab="login">Войти</button>
      <button class="btn auth-trigger" data-tab="register">Регистрация</button>
    </div>
  </div>
</header>

<script src="http://localhost:8888/vetprofi_php/assets/js/header.js"></script>
