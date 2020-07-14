document.addEventListener('DOMContentLoaded', function () {
    let clickedRow = document.getElementsByClassName('js-rowClicked');
    let mainForm = document.getElementsByClassName('main-content')[0];

    for (let i = 0; i < clickedRow.length; i++) {
        clickedRow[i].onclick = function () {
            let idkhachhang = document.getElementsByClassName('js-donhang_idkhachhang')[i].value;
            console.log(idkhachhang);

            let hr = new XMLHttpRequest();
            $dataSending = "idkhachhang=" + idkhachhang;
            url = 'Phpajax/ViewCTDH.php';
            hr.open("POST", url, true)
            hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            hr.onreadystatechange = function () {
                if (hr.status == 200 && hr.readyState == 4) {
                    let hiddenItem = document.getElementById('hiddenItem');
                    // console.log(hiddenItem);

                    hiddenItem.style.display = "block";
                    mainForm.style.display = "none";
                    return_data = JSON.parse(hr.responseText.split("||")[0]);
                    // console.log(return_data);
                    // console.log(return_data[0]['tensanpham']);

                    url_image = JSON.parse(hr.responseText.split("||")[1]);
                    console.log(url_image);

                    // console.log(return_data);
                    let rowTableInserting = document.getElementsByClassName('js-insertedData')[0];
                    // console.log(rowTableInserting);
                    rowTableInserting.innerHTML = "";
                    for (let index = 0; index < return_data.length; index++) {
                        rowTableInserting.innerHTML += `
                    <tr>
                        <th><img src="${url_image[index]}" style="width:200px;" alt=""> </th> 
                        <th> ${return_data[index]['tensanpham']} </th>
                        <th> ${return_data[index]['giasanpham']} </th> 
                        <th> ${return_data[index]['soluong']} </th> 
                        <th> ${return_data[index]['diachi']}, ${return_data[index]['xa']}, ${return_data[index]['huyen']},  ${return_data[index]['thanhpho']} </th> 
                        <th> ${return_data[index]['ngaydat']} </th> 
                    </tr>
                    `;
                    }
                }
            }

            hr.send($dataSending);

        }
    }
})