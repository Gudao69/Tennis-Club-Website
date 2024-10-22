const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");
var reg=document.getElementById("register");
var login=document.getElementById("login");
sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
  reg.classList.add("testing");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
  reg.classList.remove("testing");
});