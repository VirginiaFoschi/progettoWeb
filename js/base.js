/*Nav generico */
function cambiaTab(elemento) {
    // Rimuovi la classe "active" dall'elemento corrente
    let elementiAttivi = document.querySelectorAll('a.active');
    elementiAttivi.forEach(function (el) {
      el.classList.remove('active');
    });
  
    // Aggiungi la classe "active" all'elemento cliccato
    elemento.classList.add('active');
} 

/*Nav del profilo */
function cambiaTab2(elemento) {
  // Rimuovi la classe "active" dall'elemento corrente
  let elementiAttivi = document.querySelectorAll('a.active2');
  elementiAttivi.forEach(function (el) {
    el.classList.remove('active2');
  });

  // Aggiungi la classe "active" all'elemento cliccato
  elemento.classList.add('active2');
} 

/*Nav della search */
function cambiaTab3(elemento) {
  // Rimuovi la classe "active" dall'elemento corrente
  let elementiAttivi = document.querySelectorAll('a.active3');
  elementiAttivi.forEach(function (el) {
    el.classList.remove('active3');
  });

  // Aggiungi la classe "active" all'elemento cliccato
  elemento.classList.add('active3');
} 

function sendAjaxRequest(php,params) {
  let xhr = new XMLHttpRequest();
  let url = php;
  let parametri = "";
  for (let param in params) {
    let val = param + "=" + params[param];
    parametri = parametri + val + "&";
  }
  parametri = parametri.substring(0, parametri.length - 1);
  xhr.open('POST', url);
  // imposto l'header per informare che stiamo facendo una richiesta POST application/x-www-form-urlencoded
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  // questa funzione verrà chiamata al cambio di stato della chiamata AJAX
  xhr.onreadystatechange = function () {
  let DONE = 4; // stato 4 indica che la richiesta è stata effettuata.
  let OK = 200; // se la HTTP response ha stato 200 vuol dire che ha avuto successo.
  if (xhr.readyState === DONE) {
      if (xhr.status === OK) {
      console.log(xhr.responseText); // Questo è il corpo della risposta HTTP
      } else {
      console.log('Error: ' + xhr.status); // Lo stato della HTTP response.
      }
  }
  };
  // Invia la richiesta a url (deve essere un file .php)
  xhr.send(parametri);
}


