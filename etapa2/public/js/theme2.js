var estilos = document.getElementById('estilos');
var buttonDark = document.getElementById("dark");
var buttonLight = document.getElementById("light");

buttonDark.onclick = function() {
  estilos.href = "product-dark.css";
};
buttonLight.onclick = function() {
  estilos.href = "product.css";
};