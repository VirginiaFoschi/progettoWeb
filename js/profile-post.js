function impostazioni() {
  window.location.href = "impostazioni.php";
}

function notifiche() {
  window.location.href = "notifications.html";
}

function backHome() {
  window.location.href = "bacheca.php"
}

function scaricaEtichetta($libro1, $libro2) {
  window.location.href = "etichetta.php?libro1=" + encodeURIComponent($libro1) + "&libro2=" + encodeURIComponent($libro2);
}

let comment = document.getElementsByClassName("comment-icon");
for (let i = 0; i < comment.length; i++) {
  comment[i].addEventListener('click', function () {
    let form = document.getElementById(this.id);
    form.style.display = 'block';
  });
}