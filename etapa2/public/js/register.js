var form = document.getElementById('set-register');
form.onsubmit = EventoRegister;
function EventoRegister(ev){
    ev.preventDefault();
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Bienvenido!',
        showConfirmButton: false,
        
      })
    var form = this;
    setTimeout(function () {
        form.submit();
    }, 2000);
}

