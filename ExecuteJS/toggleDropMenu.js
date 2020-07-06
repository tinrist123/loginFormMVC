document.addEventListener("DOMContentLoaded", function () {
    let toggleBtn = document.getElementById('js-clickDrop');

    let menuList = document.getElementsByClassName('hideMenu');
    // console.log(menuList[0]);


    // console.log(toggleBtn);

    toggleBtn.onclick = function () {
        if (menuList[0].style.display == "block") {
            menuList[0].style.display = "none";


        } else {
            menuList[0].style.display = "block";
        }
    }
});