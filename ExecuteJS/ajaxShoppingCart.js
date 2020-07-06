document.addEventListener("DOMContentLoaded", function () {

    let listBtn = document.getElementsByClassName('js-sendValAjax');
    let Listproduct_id = document.getElementsByClassName('js-product_id');
    let Listproduct_name = document.getElementsByClassName('js-product_name');
    let Listproduct_price = document.getElementsByClassName('js-product_price');
    let Listproduct_image = document.getElementsByClassName('js-imgAjaxChange');
    let Listproduct_category = document.getElementsByClassName('js-product_category');




    for (let index = 0; index < listBtn.length; index++) {
        listBtn[index].addEventListener('click', function (e) {

            // console.log(product_id[index]);
            // console.log(product_name[index]);
            // console.log(product_price[index]);

            let hr = new XMLHttpRequest();

            let url = "./Phpajax/shoppingCart.php";

            product_id = Listproduct_id[index].value;
            product_name = Listproduct_name[index].value;
            product_price = Listproduct_price[index].value;
            product_image = Listproduct_image[index].src;
            product_category = Listproduct_category[index].value;

            let variablesPost = "product_category=" + product_category + "&product_id=" + product_id + "&product_name=" + product_name + "&product_price=" + product_price + "&product_image=" + product_image + "&dataCome=1";

            hr.open("POST", url, true);
            hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            // console.log(variablesPost);
            hr.onreadystatechange = function () {
                // console.log(hr);

                if (hr.readyState == 4 && hr.status == 200) {
                    let return_data = hr.responseText;

                    let shoppingVal = document.getElementById('itemValue');
                    let subShoppingVal = document.getElementById('subItemValue');

                    if (return_data === "") {
                        shoppingVal.innerText = 0;
                        subShoppingVal.innerText = 0;
                    } else {
                        shoppingVal.innerText = return_data;
                        subShoppingVal.innerText = return_data;
                    }

                    // console.log(return_data);

                }

            }

            hr.send(variablesPost);
        })
    }









})