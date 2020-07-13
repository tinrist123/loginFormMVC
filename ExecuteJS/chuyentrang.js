document.addEventListener('DOMContentLoaded', function () {
    let nextPage = document.getElementsByClassName('js-nextPage')[0];
    console.log(nextPage);

    let PrePage = document.getElementsByClassName('js-previousPage')[0];
    console.log(PrePage);

    let firstPage = document.getElementsByClassName('js-firstPage');
    console.log(firstPage);

    let secondPage = document.getElementsByClassName('js-secondPage');
    console.log(secondPage);




    nextPage.onclick = function () {
        for (let i = 0; i < firstPage.length; i++) {
            firstPage[i].style.display = "none";
            secondPage[i].style.display = "block";
        }


    }

    PrePage.onclick = function () {
        for (let i = 0; i < firstPage.length; i++) {
            secondPage[i].style.display = "none";
            firstPage[i].style.display = "block";
        }


    }
})