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
