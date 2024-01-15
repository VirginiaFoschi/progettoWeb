function addImg() {
    // Simula un click sull'input file quando l'icona viene cliccata
    fileInput.click();
}

// Aggiungi un evento change all'input file
fileInput.addEventListener('change', function(event) {
    // Ottieni il file selezionato dall'utente
   
    let immagine = document.getElementById('profilo');
    let input = event.target;
  

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