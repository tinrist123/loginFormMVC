document.addEventListener("DOMContentLoaded", function () {
  let city = document.getElementById("city");
  let huyen = document.getElementById("huyen");
  let xa = document.getElementById("xa");

  city.addEventListener("change", function () {
    huyen.innerHTML = "";
    let idCity = city.options[city.selectedIndex].id;

    let hr = new XMLHttpRequest();
    let url = `https://thongtindoanhnghiep.co/api/city/${idCity}/district`;

    hr.open("GET", url, true);

    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    hr.onreadystatechange = function () {
      if (hr.status == 200 && hr.readyState == 4) {
        let return_data = JSON.parse(hr.response);
        // console.log(return_data);

        return_data.forEach((element) => {
          let option = document.createElement("option");
          option.id = element["ID"];
          option.name = element["SolrID"];
          option.innerText = element["Title"];
          huyen.appendChild(option);
        });
      }
    };

    hr.send();
  });

  huyen.addEventListener("change", function () {
    xa.innerHTML = "";
    let idCity = huyen.options[huyen.selectedIndex].id;

    let hr = new XMLHttpRequest();
    let url = `https://thongtindoanhnghiep.co/api/district/${idCity}/ward`;

    hr.open("GET", url, true);

    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    hr.onreadystatechange = function () {
      if (hr.status == 200 && hr.readyState == 4) {
        let return_data = JSON.parse(hr.response);
        // console.log(return_data);

        return_data.forEach((element) => {
          let option = document.createElement("option");
          option.id = element["ID"];
          option.name = element["SolrID"];
          option.innerText = element["Title"];
          xa.appendChild(option);
        });
      }
    };

    hr.send();
  });
});