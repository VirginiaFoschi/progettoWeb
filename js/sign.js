document.getElementById("input").addEventListener("change", function(event) {
    let input = event.target;
    let immagine = document.getElementById('profilo');

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
          if (immagine) {
            immagine.src = e.target.result;
          } 
        };

        reader.readAsDataURL(input.files[0]);
      }
});

function appendAlert(){
  let name = document.getElementById('name');
  let surname=document.getElementById('surname');
  let username = document.getElementById('username');
  let password = document.getElementById('password');
  let address=document.getElementById('address');
  let genres=document.getElementById('genres').selectedOptions;
  if(name && surname && username && password && address && genres.length>0) {
    document.querySelector('form').submit();
  } else {
    alertMessage("Please fill all fields!");
  }
}

function alertMessage(message) {
  let alertPlaceholder = document.getElementById('liveAlertPlaceholder');
  
  let type='success';
  alertPlaceholder.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
    `   <div>${message}</div>`,
    '   <button type="button" class="btn-close" id="btnclose" data-bs-dismiss="alert" aria-label="Close"></button>',
    '</div>'
  ].join('');

  window.scrollTo({
    top: 0,
    behavior: 'smooth' // Opzionale, rende lo scorrimento più fluido
  });
}

