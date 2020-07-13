document.addEventListener("DOMContentLoaded", function () {
  let slideArr = document.querySelectorAll(".Slides ul li");
  //   console.log(slideArr[0]);
  let lengthOfSlide = slideArr.length;

  setInterval(function () {
    let slideActive = document.querySelector("li.active");
    // console.log(slideActive);
    let posSlideActive = 0;
    for (
      posSlideActive = 0;
      (slideActive = slideActive.previousElementSibling);
      posSlideActive++
    );
    // console.log(posSlideActive);
    posSlideActive++;
    if (posSlideActive >= lengthOfSlide) {
      posSlideActive = 0;
    }
    // console.log(posSlideActive);
    for (let i = 0; i < lengthOfSlide; i++) {
      slideArr[i].classList.remove("active");
    }
    slideArr[posSlideActive].classList.add("active");
    // console.log(slideArr[1]);
  }, 3000);
});
