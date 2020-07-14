document.addEventListener('DOMContentLoaded', function () {
    let BtnDelete = document.getElementsByClassName('tm-product-delete-icon');
    // console.log(BtnDelete);
    let parentProduct = document.getElementsByClassName('tm-product-table-container')[0].childNodes[1].childNodes[3];
    // console.log(parentProduct.children[0]);


    let idkhachhang = document.getElementsByClassName('js-donhang_idkhachhang')[0].value;

    let idtaikhoan = document.getElementsByClassName('js-donhang_iddathang')[0].value;

    for (let i = 0; i < BtnDelete.length; i++) {
        BtnDelete[i].onclick = function () {
            let listCheckedBoxes = [];

            if (window.confirm("Do you really want to leave?")) {
                let hr = new XMLHttpRequest();

                let url = './Phpajax/DeleteAccount.php';
                listCheckedBoxes.push({
                    'idkhachhang': idkhachhang,
                    'iddathang': idtaikhoan
                });

                let dataSending = `json=${JSON.stringify(listCheckedBoxes)}`;

                hr.open('POST', url, true);
                hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                hr.onreadystatechange = function () {
                    if (hr.status == 200 && hr.readyState == 4) {
                        let return_data = hr.responseText;
                        console.log(return_data);

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