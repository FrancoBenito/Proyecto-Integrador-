var form = document.getElementById('modify-profile');
form.onsubmit = EventoProfile;
function EventoProfile(ev){
    ev.preventDefault();
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Tu datos han sido registrados',
        showConfirmButton: false,
        
      })
    var form = this;
    setTimeout(function () {
        form.submit();
    }, 2000);
}

