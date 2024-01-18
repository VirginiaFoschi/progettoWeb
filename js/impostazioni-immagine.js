function addImg() {
    // Simula un click sull'input file quando l'icona viene cliccata
    fileInputImp.click();
}

// Aggiungi un evento change all'input file
fileInputImp.addEventListener('change', function(event) {
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