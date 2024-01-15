function impostazioni() {
  window.location.href = "impostazioni.php";
}

function notifiche() {
  window.location.href = "notifications.html";
}

function backHome() {
  window.location.href = "bacheca.php"
}

function scaricaEtichetta($libro1, $libro2){
  window.location.href = "etichetta.php?libro1=" + encodeURIComponent($libro1) + "&libro2=" + encodeURIComponent($libro2);
}