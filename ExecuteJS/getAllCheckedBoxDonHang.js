document.addEventListener('DOMContentLoaded', function () {

    let eventClickDeleteBtn = document.getElementById('js-eventCLickDelete');
    // console.log(eventClickDeleteBtn);

    eventClickDeleteBtn.onclick = function () {
        let listCheckedBoxes = [];
        let checkboxes = document.querySelectorAll('input[type=checkbox]:checked')

        for (let i = 0; i < checkboxes.length; i++) {
            let rowBinding = checkboxes[i].parentElement.parentElement;

            let elementGetData = rowBinding.lastElementChild;


            let idkhachhang = elementGetData.getElementsByClassName('js-donhang_idkhachhang')[0].value;
            let iddathang = elementGetData.getElementsByClassName('js-donhang_iddathang')[0].value;

            listCheckedBoxes.push({
                'idkhachhang': idkhachhang,
                'iddathang': iddathang
            });
        }
        if (window.confirm("Do you really want to leave?")) {
            let hr = new XMLHttpRequest();

            url = './Phpajax/DeleteDonHang.php';
            let dataSending = `json=${JSON.stringify(listCheckedBoxes)}`;
            hr.open("POST", url, true);
            hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            hr.onreadystatechange = function () {
                if (hr.readyState == 4 && hr.status == 200) {
                    let return_data = hr.responseText;
                    if (return_data === '1') {
                        window.location.reload(true);
                    }
                }
            }
            hr.send(dataSending);

        }
    }


})