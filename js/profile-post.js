function caricaArticoli(file) {
  // Usa la funzione fetch per ottenere il contenuto del file
  fetch(file)
    .then(response => response.text())  // Ottieni il testo della risposta
    .then(data => {
      // Aggiorna il contenuto del div "contenitore-post" con il testo ottenuto
      document.getElementById('contenitore-post').innerHTML = data;
    })
    .catch(error => console.error('Errore nel caricamento degli articoli:', error));
}

function impostazioni() {
  window.location.href = "impostazioni.php";
}

function notifiche() {
  window.location.href = "notifications.html";
}

function scaricaEtichetta(){
  window.location.href = "etichetta.html";
}

function backHome() {
  window.location.href = "bacheca.php"
}