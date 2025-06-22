const avatarWrapper = document.getElementById("avatarWrapper");
const avatar = document.getElementById("avatar");
const fileInput = document.querySelector(".input__img");

avatarWrapper.addEventListener("click", () => {
  fileInput.click();
});

fileInput.addEventListener("change", () => {
  const file = fileInput.files[0];
  if (file && file.type.startsWith("image/")) {
    const reader = new FileReader();
    reader.onload = (e) => {
      avatar.src = e.target.result;
    };
    reader.readAsDataURL(file);
  }
});

const modalDelete = document.querySelector(".modal-form");
const btnDeLeteAccount = document.querySelector("#btn__delete-account");
const btnCancel = document.querySelector("#btn-cancel");

btnDeLeteAccount.addEventListener("click", (e) => {
  e.preventDefault();
  const close = document.querySelector(".close-button");
  if (modalDelete.classList.contains("hidden")) {
    modalDelete.classList.remove("hidden");
    close.addEventListener("click", () => {
      modalDelete.classList.add("hidden");
    });
    btnCancel.addEventListener("click", () => {
      modalDelete.classList.add("hidden");
    });
  }
});
