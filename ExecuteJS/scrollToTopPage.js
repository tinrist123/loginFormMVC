document.addEventListener('DOMContentLoaded', function () {
    let scrollClick = document.getElementsByClassName('js-scrolltoTop');

    for (let i = 0; i < scrollClick.length; i++) {
        scrollClick[i].addEventListener('click', function () {
            let chieucaoht = self.pageYOffset;
            // lấy chiều cao hiện tại của trang
            let set = chieucaoht;
            let run = setInterval(function () {
                chieucaoht = chieucaoht - 0.05 * set;
                window.scrollTo(0, chieucaoht);
                if (chieucaoht <= 0) {
                    clearInterval(run);
                }
            }, 15)
        });
    }
})