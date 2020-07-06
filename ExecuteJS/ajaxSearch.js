document.addEventListener("DOMContentLoaded", function () {
  let taskbarSearch = document.getElementById("searchBar");
  let hintProduct = document.getElementsByClassName("hintProduct")[0];

  // console.log(hintProduct);

  function createHTMLDOM(obj) {
    let boxDiv = document.createElement("div");
    let boxAnchor = document.createElement("a");
    boxAnchor.href = obj["linkProduct"];
    boxDiv.appendChild(boxAnchor);
    let imgEle = document.createElement("img");
    imgEle.src = obj["url_image"];
    imgEle.classList.add("thumbnail");
    boxAnchor.appendChild(imgEle);
    let subDiv = document.createElement("div");
    subDiv.classList.add("detailHintProduct");
    let paraName = document.createElement("p");
    paraName.classList.add("product__name");
    paraName.innerText = obj["product_name"];
    let paraPrice = document.createElement("p");
    paraPrice.classList.add("product__price");
    paraPrice.innerText = obj["product_price"];
    subDiv.appendChild(paraName);
    subDiv.appendChild(paraPrice);

    boxAnchor.appendChild(subDiv);
    boxDiv.classList.add("product");

    return boxDiv;
  }

  taskbarSearch.addEventListener("keyup", function () {
    inputVal = taskbarSearch.value;
    console.log(inputVal);

    if (inputVal == "") {
      hintProduct.style.display = "none";
    } else {
      let hr = new XMLHttpRequest();

      let url = "./Phpajax/ajaxSearch.php";

      let variablesPost = "input=" + inputVal;

      hr.open("POST", url, true);

      hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

      hr.onreadystatechange = function () {
        if (hr.readyState == 4 && hr.status == 200) {
          let return_data = JSON.parse(hr.responseText);
          hintProduct.innerHTML = "";
          hintProduct.style.display = "block";

          return_data.forEach((element) => {
            hintProduct.appendChild(createHTMLDOM(element));
          });
        }
      };

      hr.send(variablesPost);
    }
  });
});