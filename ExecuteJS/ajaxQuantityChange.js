document.addEventListener("DOMContentLoaded", function () {
  let getInputNumber = document.getElementsByClassName("js-inputChange");
  let getInputPrice = document.getElementsByClassName("js-product_price");
  let getInputId = document.getElementsByClassName("js-product_id");
  let getInputCate = document.getElementsByClassName("js-product_category");
  console.log(getInputCate[0]);

  // console.log(getInputPrice);

  for (let i = 0; i < getInputNumber.length; i++) {
    getInputNumber[i].addEventListener("input", function () {
      let hr = new XMLHttpRequest();

      let url = "./Phpajax/QuantityChange.php";

      let product_Quantity = getInputNumber[i].value;
      let product_Price = getInputPrice[i].innerText;
      let product_cate = getInputCate[i].value;

      let product_Id = getInputId[i].value;

      let variablePost =
        `product_Id=${product_Id}&product_Price=${product_Price}&product_Quantity=${product_Quantity}&product_Category=${product_cate}&data_Come=1`;
      console.log(variablePost);


      hr.open("POST", url, true);
      hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

      hr.onreadystatechange = function () {
        if (hr.readyState == 4 && hr.status == 200) {
          let return_data = hr.responseText;
          //   console.log(return_data);
          let totalPrice = document.getElementsByClassName("js-totalPrice");
          totalPrice[0].innerText = return_data.split("||")[0];

          if (product_Quantity == "") {
            getInputPrice[i].innerText = 0;
            getInputNumber[i].value = 0;
          } else {
            giaban = return_data.split("||")[1].split(",").join("");
            // console.log(giaban);
            giaban = parseInt(giaban) * parseInt(product_Quantity);

            getInputPrice[i].innerText = giaban.toLocaleString();
          }
        }
      };

      hr.send(variablePost);
    });
  }
});