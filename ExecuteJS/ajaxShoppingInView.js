document.addEventListener("DOMContentLoaded", function () {
  let btnAddCart = document.getElementsByClassName("btn-add-cart");
  // console.log(btnAddCart[0]);
  // get ID in url

  let product_cate = document.getElementsByClassName("js-getCate")[0].value;
  // console.log(getInputCate);

  let product_id = document.getElementsByClassName("js-getId")[0].value;
  // console.log(getInputId);

  btnAddCart[0].addEventListener("click", function (e) {
    // console.log(product_id[index]);
    // console.log(product_name[index]);
    // console.log(product_price[index]);

    let hr = new XMLHttpRequest();

    let url = "./Phpajax/shoppingCartInView.php";

    let variablesPost =
      "product_cate=" + product_cate + "&product_id=" + product_id;
    console.log(variablesPost);

    hr.open("POST", url, true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // console.log(variablesPost);
    hr.onreadystatechange = function () {
      // console.log(hr);

      if (hr.readyState == 4 && hr.status == 200) {
        let return_data = hr.responseText;
        return_data = return_data.split("||");
        let shoppingVal = document.getElementById("itemValue");
        let subShoppingVal = document.getElementById("subItemValue");

        if (return_data === "") {
          shoppingVal.innerText = 0;
          subShoppingVal.innerText = 0;
        } else {
          shoppingVal.innerText = return_data[0];
          subShoppingVal.innerText = return_data[0];
        }
        return_data[1] = return_data[1].replace(
          "/Phpajax/shoppingCartInView.php",
          ""
        );

        window.location.href = return_data[1];
        // console.log(return_data);
      }
    };

    hr.send(variablesPost);
  });
});