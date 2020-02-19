const loginbtn = document.getElementById("loginMenu");
const overlay = document.getElementById("overlay");
const login = document.getElementById("loginBody");
const close = document.getElementById("close");
console.log(loginbtn);
loginbtn.addEventListener("click", function() {
  overlay.classList.add("active");
  login.classList.add("scale-in-center");
  console.log("it works");
});
close.addEventListener("click", function() {
  overlay.classList.remove("active");
  login.classList.remove("scale-in-center");
  console.log("it works");
});
