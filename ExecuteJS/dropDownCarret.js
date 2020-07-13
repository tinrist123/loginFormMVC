document.addEventListener('DOMContentLoaded', function () {
    let dropdownList = document.getElementsByClassName('dropdownList')[0];

    let carretClick = document.getElementsByClassName('fa-angle-down')[0];
    carretClick.onclick = function () {

        if (dropdownList.style.opacity == 0) {
            dropdownList.style.opacity = 1;
            dropdownList.style.visibility = "visible";

            dropdownList.classList.add('dropDown');

        } else {
            dropdownList.style.opacity = 0;
            dropdownList.style.visibility = "hidden";

            dropdownList.classList.remove('dropDown');

        }

    }
})