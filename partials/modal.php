<div class="login-modal">
  <button class="close-btn">
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
  <h2 class="subtitle">Войти</h2>
  <p class="signup-text">
    У вас нет аккаунта?
    <a href="#">Зарегистрироваться</a>
  </p>

  <form class="login-form">
    <label for="phone">Номер телефона</label>
    <input
  type="tel"
  id="phone"
  placeholder="Номер телефона"
  oninput="this.value = this.value.replace(/[^0-9+]/g, '')"
  pattern="[0-9+]{10,15}"
  required
/>

    <label for="password">Пароль</label>
    <input type="password" id="password" placeholder="Пароль" />

    <a href="#" class="forgot-password">Забыли пароль?</a>
	<div class="btn__block">
		<button type="submit" class="btn">ВОЙТИ</button>
		<button type="button" class="btn-telegram">
			<span class="telegram-icon"><svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M27.6733 6.82008L24.0373 23.8082C23.7661 25.0046 23.0701 25.2741 22.0645 24.7339L16.6106 20.7196L13.9406 23.2669C13.6706 23.5375 13.3994 23.8082 12.7802 23.8082L13.2062 18.2094L23.3797 8.98297C23.8045 8.55781 23.2633 8.40332 22.7221 8.75183L10.073 16.704L4.61779 15.0441C3.41899 14.6584 3.41899 13.8465 4.88899 13.3075L26.0869 5.08355C27.1309 4.77456 28.0213 5.31588 27.6733 6.82008Z" fill="#252525"/>
</svg>
</span> ВОЙТИ ЧЕРЕЗ TELEGRAM
		</button>
	</div>
  </form>
</div>
