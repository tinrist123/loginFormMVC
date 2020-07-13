document.addEventListener("DOMContentLoaded", function () {
    let listIndexPage = document.getElementsByClassName("js-indexPage");

    let listproduct_id = document.getElementsByClassName("js-product_id");
    let listproduct_Showprice = document.getElementsByClassName(
        "js-giabanAjaxChange"
    );
    let listproduct_Showname = document.getElementsByClassName(
        "js-nameAjaxChange"
    );
    let listproduct_Showimg = document.getElementsByClassName("js-imgAjaxChange");

    let category_id = document.getElementsByClassName('js-product_category')[0].value;

    let parentProduct = document.getElementsByClassName('tm-product-table-container')[0].childNodes[1].childNodes[3];
    console.log(parentProduct);

    for (let i = 0; i < listIndexPage.length; i++) {
        listIndexPage[i].addEventListener("click", function () {


            let hr = new XMLHttpRequest();
            let url = "./Phpajax/loadingNextPage.php";

            let idSending = "numPage=" + i + "&cate_id=" + category_id;

            hr.open("POST", url, true);
            hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            hr.onreadystatechange = function () {
                if (hr.readyState == 4 && hr.status == 200) {
                    let Arrreturn_data = hr.responseText.split("||");
                    let return_data = JSON.parse(Arrreturn_data[1]);
                    let productName = Arrreturn_data[0];
                    // console.log(return_data);
                    let lastPos = 0;
                    for (let i = 0; i < return_data.length; i++) {
                        // Get data
                        let idlaptop = return_data[i][`id${productName}`];
                        let tenlaptop = return_data[i][`ten${productName}`];
                        let giaban = return_data[i]["giaban"];
                        let url_image = return_data[i]["url_image"];
                        if (parentProduct.children[i].style.display == "none") {
                            parentProduct.children[i].style.display = "table-row";
                        }
                        listproduct_id[i].value = idlaptop;

                        listproduct_Showprice[i].innerText = giaban;
                        listproduct_Showname[i].innerText = tenlaptop;
                        listproduct_Showimg[i].src = url_image;
                        lastPos++;
                    }

                    console.log(parentProduct.childElementCount);
                    console.log(lastPos);

                    if (lastPos < 10) // Hard Code
                    {
                        for (let i = lastPos; i < parentProduct.childElementCount; i++) {
                            parentProduct.children[i].style.display = "none";
                        }
                    }
                }
            };

            hr.send(idSending);
        });
    }
});