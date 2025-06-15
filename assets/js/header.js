document.addEventListener("DOMContentLoaded", () => {
  const lang = document.querySelector(".lang__wrapper");
  const langItem = document.querySelectorAll(".lang");
  lang.addEventListener("click", () => {
    langItem.forEach((e) => {
      e.addEventListener("click", () => {
        if (e.classList.contains("current")) {
          e.classList.remove("current");
        }
        e.classList.add("current");
      });
    });
    lang.classList.toggle("active");
  });

  const allMenuItems = document.querySelectorAll(".menu__item");

  allMenuItems.forEach((item) => {
    item.addEventListener("click", function (e) {
      // Игнорируем вложенные клики
      if (e.target !== this) return;

      // Закрываем другие подменю верхнего уровня
      allMenuItems.forEach((otherItem) => {
        if (otherItem !== item) {
          otherItem.classList.remove("active");
        }
      });

      // Переключаем активность текущего
      item.classList.toggle("active");
    });
  });

  // Обработка вложенных подменю
  const submenuItems = document.querySelectorAll(".submenu__item");

  submenuItems.forEach((subItem) => {
    subItem.addEventListener("click", function (e) {
      // Предотвращаем всплытие, чтобы не срабатывал родительский пункт
      e.stopPropagation();

      // Закрываем другие подменю этого уровня
      submenuItems.forEach((otherSub) => {
        if (otherSub !== subItem) {
          otherSub.classList.remove("active");
        }
      });

      // Переключаем текущее
      subItem.classList.toggle("active");
    });
  });
  submenuItems.forEach((e) => {
    if (e.childNodes.length > 1) {
      e.classList.add("second");
    }
  });
});
