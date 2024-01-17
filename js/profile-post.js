function impostazioni() {
  window.location.href = "impostazioni.php";
}

function notifiche() {
  window.location.href = "notifications.php";
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
    let id = this.getAttribute('data-target');
    let form = document.getElementById(id);
    form.style.display = 'block';
  });
}