const thanksContainer = document.querySelector(".footer__search-container");
const thanksBtn = document.querySelector("#subscribeBtn");
const thanksInput = document.querySelector("#subscribe");
const thanksBlock = document.querySelector(".thanks__block");

thanksBtn.addEventListener("click", () => {
  if (thanksInput.value != "") {
    thanksContainer.style.display = "none";
    thanksBlock.style.display = "flex";
  }
});
const btn = document.getElementById("scrollTopBtn");

window.onscroll = function () {
  if (
    document.body.scrollTop > 300 ||
    document.documentElement.scrollTop > 300
  ) {
    btn.style.display = "block";
  } else {
    btn.style.display = "none";
  }
};

btn.onclick = function () {
  window.scrollTo({ top: 0, behavior: "smooth" });
};
