var API_URL_PAIS = "https://restcountries.eu/rest/v2/regionalbloc/usan";
var API_URL_PROVINCIA =
    "https://apis.datos.gob.ar/georef/api/provincias?formato=json";

var form = document.querySelector("form");
var pais = document.querySelector("select");
var provinciaDiv = document.querySelector(".provincia");

fetch(API_URL_PAIS)
    .then(res => res.json())
    .then(data => {
        for (const prop in data) {
            pais.innerHTML +=
                "<option value= " +
                data[prop].alpha3Code +
                ">" +
                data[prop].name +
                "</option>";
        }
    });

pais.onchange = function() {
    var selectedPais = pais[pais.selectedIndex].value;
    if (selectedPais == "ARG") {
        var selectProvincia = document.createElement("select");
        var labelProvincia = document.createElement("label");
        labelProvincia.innerHTML = "Provincia";
        selectProvincia.setAttribute("id", "provincia");
        selectProvincia.setAttribute("name", "provincia");
        labelProvincia.setAttribute("id", "labelProvincia");
        provinciaDiv.append(labelProvincia);
        provinciaDiv.append(selectProvincia);
        fetch(API_URL_PROVINCIA)
            .then(res => res.json())
            .then(data => {
                var provincias = data.provincias;
                for (const prop in provincias) {
                    selectProvincia.innerHTML +=
                        "<option value= " +
                        provincias[prop].id +
                        ">" +
                        provincias[prop].nombre +
                        "</option>";
                }
            })
            .catch(error => console.log(error));
    }
    if (selectedPais != "ARG") {
        var selectProvincia = document.getElementById("provincia");
        var labelProvincia = document.getElementById("labelProvincia");
        selectProvincia.remove();
        labelProvincia.remove();
    }
};
