document.addEventListener('DOMContentLoaded', function () {

    let eventClickDeleteBtn = document.getElementById('js-eventCLickDelete');
    // console.log(eventClickDeleteBtn);

    eventClickDeleteBtn.onclick = function () {
        let listCheckedBoxes = [];
        let checkboxes = document.querySelectorAll('input[type=checkbox]:checked')

        for (let i = 0; i < checkboxes.length; i++) {
            let rowBinding = checkboxes[i].parentElement.parentElement;
            let elementGetData = rowBinding.children[5];

            let id = elementGetData.getElementsByClassName('js-product_id')[0].value;
            let cate_id = elementGetData.getElementsByClassName('js-product_category')[0].value;

            listCheckedBoxes.push({
                'id': id,
                'cate_id': cate_id
            });
        }
        if (window.confirm("Do you really want to leave?")) {
            let hr = new XMLHttpRequest();

            url = './Phpajax/DeleteProduct.php';
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