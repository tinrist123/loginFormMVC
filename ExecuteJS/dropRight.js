document.addEventListener("DOMContentLoaded", function () {
    let subMenuArr = document.getElementsByClassName("side-menu__sub-menu");
    // console.log(subMenuArr[0]);

    let hoverElementArr = document.querySelectorAll("li.li-parent");
    // console.log(hoverElementArr[0]);

    // Get default Slide
    let defaultBanner = document.getElementsByClassName("defaultBanner");
    // console.log(defaultBanner[0]);

    for (let i = 0; i < hoverElementArr.length; i++) {
        hoverElementArr[i].addEventListener("mouseenter", function () {
            // Get position that Hovering Element
            // consoles.log(1);

            let hoverPos = 0;

            let hoverElement = this;
            //   console.log(this);

            for (
                hoverPos = 0;
                (hoverElement = hoverElement.previousElementSibling); hoverPos++
            );
            // Get posHoverEle success
            //   console.log(hoverPos);

            for (let index = 0; index < subMenuArr.length; index++) {
                subMenuArr[index].setAttribute("style", "display : none;");
            }
            // console.log(hoverPos);
            // console.log(subMenuArr[hoverPos]);
            if (hoverPos < 2) {
                defaultBanner[0].setAttribute("style", "display:none");
                subMenuArr[hoverPos].setAttribute("style", "display:grid;");
            } else if ((hoverPos > 5 && hoverPos <= 8) || hoverPos == 2) {
                defaultBanner[0].setAttribute("style", "display:block");
            } else {
                defaultBanner[0].setAttribute("style", "display:none");
                subMenuArr[hoverPos - 1].setAttribute("style", "display:grid;");
            }
        });
    }
});