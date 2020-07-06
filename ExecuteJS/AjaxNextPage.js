document.addEventListener("DOMContentLoaded", function () {
  let listIndexPage = document.getElementsByClassName("js-indexPage");

  let listproduct_id = document.getElementsByClassName("js-product_id");
  let listproduct_name = document.getElementsByClassName("js-product_name");
  let listproduct_price = document.getElementsByClassName("js-product_price");
  let listproduct_Showprice = document.getElementsByClassName(
    "js-giabanAjaxChange"
  );
  let listproduct_Showname = document.getElementsByClassName(
    "js-nameAjaxChange"
  );
  let listproduct_Showimg = document.getElementsByClassName("js-imgAjaxChange");

  for (let i = 0; i < listIndexPage.length; i++) {
    listIndexPage[i].addEventListener("click", function () {
      let hr = new XMLHttpRequest();
      let url = "./Phpajax/loadingNextPage.php";

      let idSending = "id=" + i;

      hr.open("POST", url, true);
      hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

      hr.onreadystatechange = function () {
        if (hr.readyState == 4 && hr.status == 200) {
          let return_data = JSON.parse(hr.responseText);
          // console.log(return_data);

          for (let i = 0; i < return_data.length; i++) {
            // Get data
            let idlaptop = return_data[i]["product_id"];
            let tenlaptop = return_data[i]["product_name"];
            let giaban = return_data[i]["product_price"];
            let url_image = return_data[i]["url_image"];

            listproduct_id[i].value = idlaptop;
            listproduct_name[i].value = tenlaptop;
            listproduct_price[i].value = giaban;

            listproduct_Showprice[i].innerText = giaban;
            listproduct_Showname[i].innerText = tenlaptop;
            listproduct_Showimg[i].src = url_image;
          }
        }
      };

      hr.send(idSending);
    });
  }
});