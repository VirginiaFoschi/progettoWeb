function backImp() {
    window.location.href = "impostazioni.php"
}

function logout() {
    window.location.href = "home.php"
}

function changeImg() {
    window.location.href = "impostazioni-immagine.php"
}

function backProfilo() {
    window.location.href = "profilo-post.php"
}

function changeInd() {
    window.location.href = "impostazioni-indirizzo.php"
}

function changeGenere() {
    window.location.href = "impostazioni-genere.php"
}

function logIn() {
    window.location.href = "login.php";
}

function signIn() {
    window.location.href = "sign.php";
}

function addImg() {
    // Simula un click sull'input file quando l'icona viene cliccata
    fileInput.click();
}

// Aggiungi un evento change all'input file
fileInput.addEventListener('change', function(event) {
    // Ottieni il file selezionato dall'utente
   
    let immagine = document.getElementById('profilo-imp');
    let input = event.target;
  

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