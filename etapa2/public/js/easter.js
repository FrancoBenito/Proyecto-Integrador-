var pattern = ["d", "i", "g", "i", "t", "a", "l", "h", "o", "u", "s", "e"];
var current = 0;

var keyHandler = function(event) {
    // If the key isn't in the pattern, or isn't the current key in the pattern, reset
    if (pattern.indexOf(event.key) < 0 || event.key !== pattern[current]) {
        current = 0;
        return;
    }
    current++;
    if (pattern.length === current) {
        current = 0;
        Swal.fire({
            title: "Felicitaciones, encontro el Easter Egg!",
            text: "Puede llevarse 10 productos de nuestra tienda gratis!",
            color: "white",
            width: 600,
            padding: "3em",
            showClass: {
                popup: "animated fadeInDown faster"
            },
            hideClass: {
                popup: "animated fadeOutUp faster"
            },
            background: "#fff url(/gettyimages-824349420-612x612.jpg)",
            backdrop: `
          rgba(0,0,123,0.4)
          url("https://media.giphy.com/media/mtaWx98w7mX7y/giphy.gif")
          left top
          no-repeat
        `
        });
    }
};
document.addEventListener("keydown", keyHandler, false);
