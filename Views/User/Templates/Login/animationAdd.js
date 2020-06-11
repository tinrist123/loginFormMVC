document.addEventListener("DOMContentLoaded", function () {
  let getPwdAndUsr = document.getElementsByClassName("get-js");

  let getInput = document.getElementsByClassName("input-js");

  for (let i = 0; i < getInput.length; i++) {
    getInput[i].onclick = function () {
      for (let index = 0; index < getPwdAndUsr.length; index++) {
        getPwdAndUsr[index].classList.remove("setPos");
      }
      getPwdAndUsr[i].classList.add("setPos");
    };
  }
});
