var form = document.getElementById('agregarProductoForm');
form.onsubmit = EventoCarrito;
function EventoCarrito(ev){
    ev.preventDefault();
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Agregado al carrito!',
        showConfirmButton: false,
        
      })
    var form = this;
    setTimeout(function () {
        form.submit();
    }, 2000);
}

