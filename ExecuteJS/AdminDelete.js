document.addEventListener('DOMContentLoaded', function () {
    let BtnDelete = document.getElementsByClassName('tm-product-delete-icon');
    // console.log(BtnDelete);
    let parentProduct = document.getElementsByClassName('tm-product-table-container')[0].childNodes[1].childNodes[3];
    // console.log(parentProduct.children[0]);


    let listproduct_id = document.getElementsByClassName("js-product_id");
    // console.log(listproduct_id);

    let listproduct_Showprice = document.getElementsByClassName(
        "js-giabanAjaxChange"
    );
    // console.log(listproduct_id);
    let listproduct_Showname = document.getElementsByClassName(
        "js-nameAjaxChange"
    );
    // console.log(listproduct_Showname);
    let listproduct_Showimg = document.getElementsByClassName("js-imgAjaxChange");
    // console.log(listproduct_Showimg);

    let category_id = document.getElementsByClassName('js-product_category')[0].value;
    // console.log(category_id);

    for (let i = 0; i < BtnDelete.length; i++) {
        BtnDelete[i].onclick = function () {
            let listCheckedBoxes = [];

            let id = listproduct_id[i].value;
            if (window.confirm("Do you really want to leave?")) {
                let hr = new XMLHttpRequest();

                let url = './Phpajax/DeleteProduct.php';
                listCheckedBoxes.push({
                    'id': id,
                    'cate_id': category_id
                });

                let dataSending = `json=${JSON.stringify(listCheckedBoxes)}`;

                hr.open('POST', url, true);
                hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                hr.onreadystatechange = function () {
                    if (hr.status == 200 && hr.readyState == 4) {

                        let return_data = hr.responseText;
                        if (return_data === '1') {
                            parentProduct.children[i].style.display = "none";
                        } else {
                            alert('Không thể xóa vì không có sản phẩm được chọn');
                        }
                    }
                }

                hr.send(dataSending);
            }

        }
    }
})