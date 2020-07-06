document.addEventListener("DOMContentLoaded", function () {
  let listBtnXoa = document.getElementsByClassName("js-btnXoa");
  let parentRow = document.getElementsByClassName("row")[4];
  // console.log(parentRow);

  let getInputId = document.getElementsByClassName("js-product_id");
  let getInputCate = document.getElementsByClassName("js-product_category");
  // console.log(getInputCate);

  for (let i = 0; i < listBtnXoa.length; i++) {
    listBtnXoa[i].addEventListener("click", function (e) {
      let hr = new XMLHttpRequest();

      let url = "./Phpajax/btnXoaCart.php";

      let posGetId = 0;
      let element = e.target.parentNode.parentNode;
      for (posGetId;
        (element = element.previousElementSibling); posGetId++);

      let variablesPost =
        "cate=" + getInputCate[posGetId - 1].value + "&id=" + getInputId[posGetId - 1].value + "&dataCome=1";

      hr.open("POST", url, true);
      hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      hr.onreadystatechange = function () {
        if (hr.readyState == 4 && hr.status == 200) {
          let return_data = hr.responseText.split("||");

          let shoppingVal = document.getElementById("itemValue");
          let subShoppingVal = document.getElementById("subItemValue");

          if (return_data === "") {
            shoppingVal.innerText = 0;
            subShoppingVal.innerText = 0;
          } else {
            shoppingVal.innerText = return_data[1];
            subShoppingVal.innerText = return_data[1];
          }

          let totalPrice = document.getElementsByClassName("js-totalPrice");
          totalPrice[0].innerText = parseInt(return_data[0]).toLocaleString();
          console.log(e.target.parentNode.parentNode);
          console.log(parentRow);

          parentRow.removeChild(e.target.parentNode.parentNode);
        }
      };

      hr.send(variablesPost);
    });
  }
});