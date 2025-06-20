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
							<img src="http://localhost:8888/vetprofi_php/assets/images/user.png" alt="user" class="user__icon">
							<h4 class="user__name title-h4">Наталья Ковалевская</h4>
							<div class="user__register">
								Дата регистрации на сайте:</br>
								<span class="user__date">16.02.2024</span>
							</div>
						</div>
						<div class="account__tabs">
							<div class="title-h4 account__tab current" data-tab="posts">Мои посты</div>
							<div class="title-h4 account__tab" data-tab="answer">Ответы</div>
							<div class="title-h4 account__tab" data-tab="like">Понравившиеся</div>
							<div class="title-h4 account__tab" data-tab="settings">Настройки</div>
						</div>
						<button class="btn" id="exitBtn">Выйти</button>
					</div>
					<div class="account__block account__hidden">
						<div class="account__item">
							<div class="account__item-header">
							<div class="account__item-header-top">
								<div class="account__item-data">
									<img src="http://localhost:8888/vetprofi_php/assets/images/user.png" alt="user" class="user__icon">
									<div class="data__user">
										<h4 class="user__name title-h4">Наталья Ковалевская</h4>
										<span class="date-post">16.02.2024 в 00:38:44</span>
										<div class="date-message">Последнее сообщение <span class="date-message-result">16.02.2024 в 00:38:44</span></div>
									</div>
								</div>
								<div class="account__item-header-btns">
									<button class="btn__resolved"><span class="btn__resolved-icon">
										<svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M5.28846 9.16251L13.7635 0.687512C13.9635 0.487512 14.1968 0.387512 14.4635 0.387512C14.7301 0.387512 14.9635 0.487512 15.1635 0.687512C15.3635 0.887512 15.4635 1.12518 15.4635 1.40051C15.4635 1.67585 15.3635 1.91318 15.1635 2.11251L5.98846 11.3125C5.78846 11.5125 5.55513 11.6125 5.28846 11.6125C5.02179 11.6125 4.78846 11.5125 4.58846 11.3125L0.288462 7.01251C0.0884617 6.81251 -0.00753846 6.57518 0.000461538 6.30051C0.00846154 6.02585 0.112795 5.78818 0.313461 5.58751C0.514128 5.38685 0.751795 5.28685 1.02646 5.28751C1.30113 5.28818 1.53846 5.38818 1.73846 5.58751L5.28846 9.16251Z" fill="black"/>
										</svg>
									</span>Отметить как решенное</button>
									<button class="btn__delete"><span class="btn__delete-icon">
										<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M15 2V16C15 16.5 14.5 17 14 17H9H4C3.5 17 3 16.5 3 16V2" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M1 2H17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M7 1H11M7 6V13M11 6V13" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</span>Удалить тему</button>
								</div>
							</div>
							<div class="account__item-header-bottom">
								<div class="acсount__tags">
									<div class="account__tag">Ветеринарные консультации</div>
									<div class="account__tag">Птицы</div>
									<div class="account__tag">Метка</div>
									<div class="account__tag">Метка</div>
									<div class="account__tag">Метка</div>
								</div>
							</div>
							</div>
							<div class="account__item-post">
								<h4 class="account__post-title title-h4">Выбираем попугая для дома и квартиры: советы и рекомендации</h4>
								<p class="account__post-text">Попугаи — это не только яркие и красивые птицы, но и верные друзья, которые могут стать частью вашей семьи на многие годы. Выбор попугая зависит от множества факторов, таких как размер квартиры, условия содержания, ваши предпочтения в уходе и характере питомца. В этой статье мы подробно расскажем о различных видах попугаев, их особенностях, породы попугаев, а также о том, как выбрать попугая для дома и какого попугая лучше завести. Виды попугаев для дома и квартиры Если вы хотите завести попугая в доме или квартире, первым делом стоит обратить внимание на размер птицы, ее активность и потребность в общении.
									Некоторые попугаи</p>
							</div>
							<div class="account__item-footer">
								<div class="account__item-smiles">
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/like.png" alt="smile">
										<span class="account__item-smile-count">1</span>
									</div>
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/smile1.png" alt="smile">
										<span class="account__item-smile-count"></span>
									</div>
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/smile2.png" alt="smile">
										<span class="account__item-smile-count"></span>
									</div>
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/smile3.png" alt="smile">
										<span class="account__item-smile-count"></span>
									</div>
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/smile4.png" alt="smile">
										<span class="account__item-smile-count"></span>
									</div>
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/smile5.png" alt="smile">
										<span class="account__item-smile-count">1</span>
									</div>
								</div>
								<div class="account__item-box">
									<div class="account__item-views">
										<img src="http://localhost:8888/vetprofi_php/assets/images/views.png" alt="views">
										<span class="account__item-views-count">2567</span>
									</div>
									<div class="account__item-comments">
										<img src="http://localhost:8888/vetprofi_php/assets/images/comments.png" alt="comments">
										<span class="account__item-comments-count">15</span>
									</div>
									<a href="" class="btn">
										Читать
										<svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M15 7L1 7M15 7L9 13M15 7L9 1" stroke="#121212" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</a>
								</div>
							</div>
						</div>
						<div class="account__item">
							<div class="account__item-header">
							<div class="account__item-header-top">
								<div class="account__item-data">
									<img src="http://localhost:8888/vetprofi_php/assets/images/user.png" alt="user" class="user__icon">
									<div class="data__user">
										<h4 class="user__name title-h4">Наталья Ковалевская</h4>
										<span class="date-post">16.02.2024 в 00:38:44</span>
										<div class="date-message">Последнее сообщение <span class="date-message-result">16.02.2024 в 00:38:44</span></div>
									</div>
								</div>
								<div class="account__item-header-btns">
									<button class="btn__resolved"><span class="btn__resolved-icon">
										<svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M5.28846 9.16251L13.7635 0.687512C13.9635 0.487512 14.1968 0.387512 14.4635 0.387512C14.7301 0.387512 14.9635 0.487512 15.1635 0.687512C15.3635 0.887512 15.4635 1.12518 15.4635 1.40051C15.4635 1.67585 15.3635 1.91318 15.1635 2.11251L5.98846 11.3125C5.78846 11.5125 5.55513 11.6125 5.28846 11.6125C5.02179 11.6125 4.78846 11.5125 4.58846 11.3125L0.288462 7.01251C0.0884617 6.81251 -0.00753846 6.57518 0.000461538 6.30051C0.00846154 6.02585 0.112795 5.78818 0.313461 5.58751C0.514128 5.38685 0.751795 5.28685 1.02646 5.28751C1.30113 5.28818 1.53846 5.38818 1.73846 5.58751L5.28846 9.16251Z" fill="black"/>
										</svg>
									</span>Отметить как решенное</button>
									<button class="btn__delete"><span class="btn__delete-icon">
										<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M15 2V16C15 16.5 14.5 17 14 17H9H4C3.5 17 3 16.5 3 16V2" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M1 2H17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M7 1H11M7 6V13M11 6V13" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</span>Удалить тему</button>
								</div>
							</div>
							<div class="account__item-header-bottom">
								<div class="acсount__tags">
									<div class="account__tag">Ветеринарные консультации</div>
									<div class="account__tag">Птицы</div>
									<div class="account__tag">Метка</div>
									<div class="account__tag">Метка</div>
									<div class="account__tag">Метка</div>
								</div>
							</div>
							</div>
							<div class="account__item-post">
								<h4 class="account__post-title title-h4">Выбираем попугая для дома и квартиры: советы и рекомендации</h4>
								<p class="account__post-text">Попугаи — это не только яркие и красивые птицы, но и верные друзья, которые могут стать частью вашей семьи на многие годы. Выбор попугая зависит от множества факторов, таких как размер квартиры, условия содержания, ваши предпочтения в уходе и характере питомца. В этой статье мы подробно расскажем о различных видах попугаев, их особенностях, породы попугаев, а также о том, как выбрать попугая для дома и какого попугая лучше завести. Виды попугаев для дома и квартиры Если вы хотите завести попугая в доме или квартире, первым делом стоит обратить внимание на размер птицы, ее активность и потребность в общении.
									Некоторые попугаи</p>
							</div>
							<div class="account__item-footer">
								<div class="account__item-smiles">
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/like.png" alt="smile">
										<span class="account__item-smile-count">1</span>
									</div>
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/smile1.png" alt="smile">
										<span class="account__item-smile-count"></span>
									</div>
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/smile2.png" alt="smile">
										<span class="account__item-smile-count"></span>
									</div>
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/smile3.png" alt="smile">
										<span class="account__item-smile-count"></span>
									</div>
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/smile4.png" alt="smile">
										<span class="account__item-smile-count"></span>
									</div>
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/smile5.png" alt="smile">
										<span class="account__item-smile-count">1</span>
									</div>
								</div>
								<div class="account__item-box">
									<div class="account__item-views">
										<img src="http://localhost:8888/vetprofi_php/assets/images/views.png" alt="views">
										<span class="account__item-views-count">2567</span>
									</div>
									<div class="account__item-comments">
										<img src="http://localhost:8888/vetprofi_php/assets/images/comments.png" alt="comments">
										<span class="account__item-comments-count">15</span>
									</div>
									<a href="" class="btn">
										Читать
										<svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M15 7L1 7M15 7L9 13M15 7L9 1" stroke="#121212" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</a>
								</div>
							</div>
						</div>
						<div class="account__item">
							<div class="account__item-header">
							<div class="account__item-header-top">
								<div class="account__item-data">
									<img src="http://localhost:8888/vetprofi_php/assets/images/user.png" alt="user" class="user__icon">
									<div class="data__user">
										<h4 class="user__name title-h4">Наталья Ковалевская</h4>
										<span class="date-post">16.02.2024 в 00:38:44</span>
										<div class="date-message">Последнее сообщение <span class="date-message-result">16.02.2024 в 00:38:44</span></div>
									</div>
								</div>
								<div class="account__item-header-btns">
									<button class="btn__resolved"><span class="btn__resolved-icon">
										<svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M5.28846 9.16251L13.7635 0.687512C13.9635 0.487512 14.1968 0.387512 14.4635 0.387512C14.7301 0.387512 14.9635 0.487512 15.1635 0.687512C15.3635 0.887512 15.4635 1.12518 15.4635 1.40051C15.4635 1.67585 15.3635 1.91318 15.1635 2.11251L5.98846 11.3125C5.78846 11.5125 5.55513 11.6125 5.28846 11.6125C5.02179 11.6125 4.78846 11.5125 4.58846 11.3125L0.288462 7.01251C0.0884617 6.81251 -0.00753846 6.57518 0.000461538 6.30051C0.00846154 6.02585 0.112795 5.78818 0.313461 5.58751C0.514128 5.38685 0.751795 5.28685 1.02646 5.28751C1.30113 5.28818 1.53846 5.38818 1.73846 5.58751L5.28846 9.16251Z" fill="black"/>
										</svg>
									</span>Отметить как решенное</button>
									<button class="btn__delete"><span class="btn__delete-icon">
										<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M15 2V16C15 16.5 14.5 17 14 17H9H4C3.5 17 3 16.5 3 16V2" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M1 2H17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M7 1H11M7 6V13M11 6V13" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</span>Удалить тему</button>
								</div>
							</div>
							<div class="account__item-header-bottom">
								<div class="acсount__tags">
									<div class="account__tag">Ветеринарные консультации</div>
									<div class="account__tag">Птицы</div>
									<div class="account__tag">Метка</div>
									<div class="account__tag">Метка</div>
									<div class="account__tag">Метка</div>
								</div>
							</div>
							</div>
							<div class="account__item-post">
								<h4 class="account__post-title title-h4">Выбираем попугая для дома и квартиры: советы и рекомендации</h4>
								<p class="account__post-text">Попугаи — это не только яркие и красивые птицы, но и верные друзья, которые могут стать частью вашей семьи на многие годы. Выбор попугая зависит от множества факторов, таких как размер квартиры, условия содержания, ваши предпочтения в уходе и характере питомца. В этой статье мы подробно расскажем о различных видах попугаев, их особенностях, породы попугаев, а также о том, как выбрать попугая для дома и какого попугая лучше завести. Виды попугаев для дома и квартиры Если вы хотите завести попугая в доме или квартире, первым делом стоит обратить внимание на размер птицы, ее активность и потребность в общении.
									Некоторые попугаи</p>
							</div>
							<div class="account__item-footer">
								<div class="account__item-smiles">
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/like.png" alt="smile">
										<span class="account__item-smile-count">1</span>
									</div>
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/smile1.png" alt="smile">
										<span class="account__item-smile-count"></span>
									</div>
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/smile2.png" alt="smile">
										<span class="account__item-smile-count"></span>
									</div>
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/smile3.png" alt="smile">
										<span class="account__item-smile-count"></span>
									</div>
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/smile4.png" alt="smile">
										<span class="account__item-smile-count"></span>
									</div>
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/smile5.png" alt="smile">
										<span class="account__item-smile-count">1</span>
									</div>
								</div>
								<div class="account__item-box">
									<div class="account__item-views">
										<img src="http://localhost:8888/vetprofi_php/assets/images/views.png" alt="views">
										<span class="account__item-views-count">2567</span>
									</div>
									<div class="account__item-comments">
										<img src="http://localhost:8888/vetprofi_php/assets/images/comments.png" alt="comments">
										<span class="account__item-comments-count">15</span>
									</div>
									<a href="" class="btn">
										Читать
										<svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M15 7L1 7M15 7L9 13M15 7L9 1" stroke="#121212" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</a>
								</div>
							</div>
						</div>
						<div class="account__item">
							<div class="account__item-header">
							<div class="account__item-header-top">
								<div class="account__item-data">
									<img src="http://localhost:8888/vetprofi_php/assets/images/user.png" alt="user" class="user__icon">
									<div class="data__user">
										<h4 class="user__name title-h4">Наталья Ковалевская</h4>
										<span class="date-post">16.02.2024 в 00:38:44</span>
										<div class="date-message">Последнее сообщение <span class="date-message-result">16.02.2024 в 00:38:44</span></div>
									</div>
								</div>
								<div class="account__item-header-btns">
									<button class="btn__resolved"><span class="btn__resolved-icon">
										<svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M5.28846 9.16251L13.7635 0.687512C13.9635 0.487512 14.1968 0.387512 14.4635 0.387512C14.7301 0.387512 14.9635 0.487512 15.1635 0.687512C15.3635 0.887512 15.4635 1.12518 15.4635 1.40051C15.4635 1.67585 15.3635 1.91318 15.1635 2.11251L5.98846 11.3125C5.78846 11.5125 5.55513 11.6125 5.28846 11.6125C5.02179 11.6125 4.78846 11.5125 4.58846 11.3125L0.288462 7.01251C0.0884617 6.81251 -0.00753846 6.57518 0.000461538 6.30051C0.00846154 6.02585 0.112795 5.78818 0.313461 5.58751C0.514128 5.38685 0.751795 5.28685 1.02646 5.28751C1.30113 5.28818 1.53846 5.38818 1.73846 5.58751L5.28846 9.16251Z" fill="black"/>
										</svg>
									</span>Отметить как решенное</button>
									<button class="btn__delete"><span class="btn__delete-icon">
										<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M15 2V16C15 16.5 14.5 17 14 17H9H4C3.5 17 3 16.5 3 16V2" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M1 2H17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M7 1H11M7 6V13M11 6V13" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</span>Удалить тему</button>
								</div>
							</div>
							<div class="account__item-header-bottom">
								<div class="acсount__tags">
									<div class="account__tag">Ветеринарные консультации</div>
									<div class="account__tag">Птицы</div>
									<div class="account__tag">Метка</div>
									<div class="account__tag">Метка</div>
									<div class="account__tag">Метка</div>
								</div>
							</div>
							</div>
							<div class="account__item-post">
								<h4 class="account__post-title title-h4">Выбираем попугая для дома и квартиры: советы и рекомендации</h4>
								<p class="account__post-text">Попугаи — это не только яркие и красивые птицы, но и верные друзья, которые могут стать частью вашей семьи на многие годы. Выбор попугая зависит от множества факторов, таких как размер квартиры, условия содержания, ваши предпочтения в уходе и характере питомца. В этой статье мы подробно расскажем о различных видах попугаев, их особенностях, породы попугаев, а также о том, как выбрать попугая для дома и какого попугая лучше завести. Виды попугаев для дома и квартиры Если вы хотите завести попугая в доме или квартире, первым делом стоит обратить внимание на размер птицы, ее активность и потребность в общении.
									Некоторые попугаи</p>
							</div>
							<div class="account__item-footer">
								<div class="account__item-smiles">
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/like.png" alt="smile">
										<span class="account__item-smile-count">1</span>
									</div>
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/smile1.png" alt="smile">
										<span class="account__item-smile-count"></span>
									</div>
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/smile2.png" alt="smile">
										<span class="account__item-smile-count"></span>
									</div>
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/smile3.png" alt="smile">
										<span class="account__item-smile-count"></span>
									</div>
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/smile4.png" alt="smile">
										<span class="account__item-smile-count"></span>
									</div>
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/smile5.png" alt="smile">
										<span class="account__item-smile-count">1</span>
									</div>
								</div>
								<div class="account__item-box">
									<div class="account__item-views">
										<img src="http://localhost:8888/vetprofi_php/assets/images/views.png" alt="views">
										<span class="account__item-views-count">2567</span>
									</div>
									<div class="account__item-comments">
										<img src="http://localhost:8888/vetprofi_php/assets/images/comments.png" alt="comments">
										<span class="account__item-comments-count">15</span>
									</div>
									<a href="" class="btn">
										Читать
										<svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M15 7L1 7M15 7L9 13M15 7L9 1" stroke="#121212" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="account__answers account__hidden">
						<h2 class="subtitle">Ответы на ваши сообщения</h2>
						<div class="account__answers-tabs">
							<span class="account__answers-tab tab-current">Все</span>
							<span class="account__answers-tab">С новыми ответами</span>
							<span class="account__answers-tab">Без ответа</span>
						</div>
						<div class="account__item">
							<div class="account__item-header">
							<div class="account__item-header-top">
								<div class="account__item-data">
									<img src="http://localhost:8888/vetprofi_php/assets/images/user.png" alt="user" class="user__icon">
									<div class="data__user">
										<h4 class="user__name title-h4">Наталья Ковалевская</h4>
										<span class="date-post">16.02.2024 в 00:38:44</span>
										<div class="date-message">Последнее сообщение <span class="date-message-result">16.02.2024 в 00:38:44</span></div>
									</div>
								</div>
							</div>
							<div class="account__item-header-bottom">
								<div class="acсount__tags">
									<div class="account__tag">Ветеринарные консультации</div>
									<div class="account__tag">Птицы</div>
									<div class="account__tag">Метка</div>
									<div class="account__tag">Метка</div>
									<div class="account__tag">Метка</div>
								</div>
							</div>
							</div>
							<div class="account__item-post">
								<h4 class="account__post-title title-h4">Выбираем попугая для дома и квартиры: советы и рекомендации</h4>
								<p class="account__post-text">Попугаи — это не только яркие и красивые птицы, но и верные друзья, которые могут стать частью вашей семьи на многие годы. Выбор попугая зависит от множества факторов, таких как размер квартиры, условия содержания, ваши предпочтения в уходе и характере питомца. В этой статье мы подробно расскажем о различных видах попугаев, их особенностях, породы попугаев, а также о том, как выбрать попугая для дома и какого попугая лучше завести. Виды попугаев для дома и квартиры Если вы хотите завести попугая в доме или квартире, первым делом стоит обратить внимание на размер птицы, ее активность и потребность в общении.
									Некоторые попугаи</p>
							</div>
							<div class="post__answers">
								<p class="reply-from title-h4">Ответ от</p>
								<div class="post__answer">
									<div class="account__item-data">
										<img src="http://localhost:8888/vetprofi_php/assets/images/user.png" alt="user" class="user__icon">
										<div class="data__user">
											<h4 class="user__name title-h4">Александр</h4>
											<span class="date-post">16.02.2024 в 00:38:44</span>
										</div>
									</div>
									<p class="post__answer-comment text">
										Внезапно, акционеры крупнейших компаний представляют собой не что иное, как квинтэссенцию победы маркетинга над разумом и должны быть обнародованы. Но некоторые особенности
									</p>
								</div>
								<a href="" class="btn btn__go">
									Перейти
									<svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M15 7L1 7M15 7L9 13M15 7L9 1" stroke="#121212" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
								</a>
							</div>
							<div class="post__answers">
								<p class="reply-from title-h4">Ответ от</p>
								<div class="post__answer">
									<div class="account__item-data">
										<img src="http://localhost:8888/vetprofi_php/assets/images/user.png" alt="user" class="user__icon">
										<div class="data__user">
											<h4 class="user__name title-h4">Администратора</h4>
											<span class="date-post">16.02.2024 в 00:38:44</span>
										</div>
									</div>
									<p class="post__answer-comment text">
										Внезапно, акционеры крупнейших компаний представляют собой не что иное, как квинтэссенцию победы маркетинга над разумом и должны быть обнародованы. Но некоторые особенности
									</p>
								</div>
								<a href="" class="btn btn__go">
									Перейти
									<svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M15 7L1 7M15 7L9 13M15 7L9 1" stroke="#121212" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
								</a>
							</div>
							<div class="account__item-footer">
								<div class="account__item-smiles">
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/like.png" alt="smile">
										<span class="account__item-smile-count">1</span>
									</div>
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/smile1.png" alt="smile">
										<span class="account__item-smile-count"></span>
									</div>
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/smile2.png" alt="smile">
										<span class="account__item-smile-count"></span>
									</div>
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/smile3.png" alt="smile">
										<span class="account__item-smile-count"></span>
									</div>
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/smile4.png" alt="smile">
										<span class="account__item-smile-count"></span>
									</div>
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/smile5.png" alt="smile">
										<span class="account__item-smile-count">1</span>
									</div>
								</div>
								<div class="account__item-box">
									<div class="account__item-views">
										<img src="http://localhost:8888/vetprofi_php/assets/images/views.png" alt="views">
										<span class="account__item-views-count">2567</span>
									</div>
									<div class="account__item-comments">
										<img src="http://localhost:8888/vetprofi_php/assets/images/comments.png" alt="comments">
										<span class="account__item-comments-count">15</span>
									</div>
									<a href="" class="btn">
										Читать
										<svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M15 7L1 7M15 7L9 13M15 7L9 1" stroke="#121212" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="account__like">
						<h2 class="subtitle">Понравившиеся темы</h2>
						<div class="account__item">
							<div class="account__item-header">
							<div class="account__item-header-top">
								<div class="account__item-data">
									<img src="http://localhost:8888/vetprofi_php/assets/images/user.png" alt="user" class="user__icon">
									<div class="data__user">
										<h4 class="user__name title-h4">Гость</h4>
										<span class="date-post">16.02.2024 в 00:38:44</span>
										<div class="date-message">Последнее сообщение <span class="date-message-result">16.02.2024 в 00:38:44</span></div>
									</div>
								</div>
								<div class="account__item-header-btns"><span class="btn__resolved-icon">
									<button class="btn__delete"><span class="btn__delete-icon">
										<svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M1.51562 11.486L6.75863 6.243L12.0016 11.486M12.0016 1L6.75763 6.243L1.51562 1" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										</svg></span>Убрать из понравившихся</button>
								</div>
							</div>
							<div class="account__item-header-bottom">
								<div class="acсount__tags">
									<div class="account__tag">Ветеринарные консультации</div>
									<div class="account__tag">Птицы</div>
									<div class="account__tag">Метка</div>
									<div class="account__tag">Метка</div>
									<div class="account__tag">Метка</div>
								</div>
							</div>
							</div>
							<div class="account__item-post">
								<h4 class="account__post-title title-h4">Выбираем попугая для дома и квартиры: советы и рекомендации</h4>
								<p class="account__post-text">Попугаи — это не только яркие и красивые птицы, но и верные друзья, которые могут стать частью вашей семьи на многие годы. Выбор попугая зависит от множества факторов, таких как размер квартиры, условия содержания, ваши предпочтения в уходе и характере питомца. В этой статье мы подробно расскажем о различных видах попугаев, их особенностях, породы попугаев, а также о том, как выбрать попугая для дома и какого попугая лучше завести. Виды попугаев для дома и квартиры Если вы хотите завести попугая в доме или квартире, первым делом стоит обратить внимание на размер птицы, ее активность и потребность в общении.
									Некоторые попугаи</p>
							</div>
							<div class="account__item-footer">
								<div class="account__item-smiles">
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/like.png" alt="smile">
										<span class="account__item-smile-count">1</span>
									</div>
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/smile1.png" alt="smile">
										<span class="account__item-smile-count"></span>
									</div>
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/smile2.png" alt="smile">
										<span class="account__item-smile-count"></span>
									</div>
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/smile3.png" alt="smile">
										<span class="account__item-smile-count"></span>
									</div>
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/smile4.png" alt="smile">
										<span class="account__item-smile-count"></span>
									</div>
									<div class="account__item-smile">
										<img src="http://localhost:8888/vetprofi_php/assets/images/smile5.png" alt="smile">
										<span class="account__item-smile-count">1</span>
									</div>
								</div>
								<div class="account__item-box">
									<div class="account__item-views">
										<img src="http://localhost:8888/vetprofi_php/assets/images/views.png" alt="views">
										<span class="account__item-views-count">2567</span>
									</div>
									<div class="account__item-comments">
										<img src="http://localhost:8888/vetprofi_php/assets/images/comments.png" alt="comments">
										<span class="account__item-comments-count">15</span>
									</div>
									<a href="" class="btn">
										Читать
										<svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M15 7L1 7M15 7L9 13M15 7L9 1" stroke="#121212" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</a>
								</div>
							</div>
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
  </body>
</html>