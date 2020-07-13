document.addEventListener("DOMContentLoaded", function () {
  let usricon = document.getElementById("usricon");

  let pwdicon = document.getElementById("pwdicon");

  let inputChange = document.getElementsByClassName("inchange");

  function moveIcon(e) {
    e.classList.add("moveleft");
  }

  function DeleteCLass(e) {
    e.classList.remove("moveleft");
  }

  inputChange[0].addEventListener(
    "focus",
    function () {
      moveIcon(usricon);
    },
    false
  );

  inputChange[1].addEventListener("focus", function () {
    moveIcon(pwdicon);
  });
  inputChange[0].addEventListener(
    "blur",
    function () {
      DeleteCLass(usricon);
    },
    false
  );

  inputChange[1].addEventListener("blur", function () {
    DeleteCLass(pwdicon);
  });

  // pwdicon.addEventListener('click', moveIcon());
});