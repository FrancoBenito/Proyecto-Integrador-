var estilos = document.getElementById("estilos");
var buttonDark = document.getElementById("dark");
var buttonLight = document.getElementById("light");

buttonDark.onclick = function() {
    console.log("dark");
    estilos.href = "/css/product-dark2.css";
};
buttonLight.onclick = function() {
    console.log("light");
    estilos.href = "/css/product.css";
};
