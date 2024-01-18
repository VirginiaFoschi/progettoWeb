document.getElementById("inputSign").addEventListener("change", function (event) {
    const input = event.target;
    let immagine = document.getElementById('profiloSign');

    if (input.files && input.files[0]) {
        let reader = new FileReader();

        reader.onload = function (e) {
          if (immagine) {
            immagine.src = e.target.result;
          } 
        };

        reader.readAsDataURL(input.files[0]);
      }
});

function appendAlert(){
  let name = document.getElementById('name').value;
  let surname=document.getElementById('surname').value;
  let username = document.getElementById('username').value;
  let password = document.getElementById('password').value;
  let address=document.getElementById('address').value;
  let genres=document.getElementById('genres').selectedOptions;
  if(name && surname && username && password && address && genres.length>0) {
    if(password.length < 5) {
      alertMessage("La password contiene meno di 5 caratteri");
    } else {
      document.getElementById('formSign').submit();
    }
  } else {
    alertMessage("Please fill all fields!");
  }
}

function alertMessage(message) {
  let alertPlaceholder = document.getElementById('liveAlertPlaceholder');
  
  let type='danger';
  alertPlaceholder.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
    `   <div>${message}</div>`,
    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
    '</div>'
  ].join('');

  window.scrollTo({
    top: 0,
    behavior: 'smooth' // Opzionale, rende lo scorrimento più fluido
  });
}

