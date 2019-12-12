var estilos = document.getElementById("estilos");
var buttonDark = document.getElementById("dark");
var buttonLight = document.getElementById("light");
var imgButton = document.getElementById("luna");

buttonDark.onclick = function() {
    estilos.href = "/css/product-dark2.css";
    if (imgButton.alt == "luna") {
        imgButton.src = "/images/sunn2.png";
        imgButton.alt = "sol";
    } else if (imgButton.alt == "sol") {
        estilos.href = "/css/product.css";
        imgButton.src = "/images/moonn.png";
        imgButton.alt = "luna";
    }
};
