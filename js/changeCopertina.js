let fileInputBook = document.getElementById("fileInputBook");

function addBook() {
    // Simula un click sull'input file quando l'icona viene cliccata
    fileInputBook.click();
}

// Aggiungo un evento change all'input file
fileInputBook.addEventListener('change', function (event) {
    // Ottengo il file selezionato dall'utente
    let immagine = document.getElementById('copertina');
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