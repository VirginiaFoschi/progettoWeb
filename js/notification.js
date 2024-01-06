
var bottoni = document.querySelectorAll(".seleziona-libro");
var conferma = document.querySelector(".conferma");
conferma.disabled = true;
// Crea una variabile per tenere traccia del bottone selezionato
var selezionato = null;
/*
var accetta = document.querySelectorAll(".accetta");
var rifiuta = document.querySelectorAll(".rifiuta");

for(var i = 0; i < bottoni.length; i++){
rifiuta[i].addEventListener("click", function() {
    
    this.style.backgroundColor = 'red';
    //non riesco a disabilitare i bottoni accetta
    //accetta[i].disabled  = true;
});
}
   */
// Disabilita il tasto conferma all'inizio


// Aggiungi un evento di clic a ogni bottone
for (var i = 0; i < bottoni.length; i++) {
  bottoni[i].addEventListener("click", function() {
    // Se il bottone è già selezionato, deselezionalo e abilita gli altri bottoni
    if (this === selezionato) {
      this.style.backgroundColor = "";
      this.style.color = "";
      selezionato = null;
      conferma.disabled = true;
      for (var j = 0; j < bottoni.length; j++) {
        bottoni[j].disabled = false;
      }
    } else {
      // Altrimenti, seleziona il bottone e disabilita gli altri bottoni
      this.style.backgroundColor = "blue";
      this.style.color = "white"
      selezionato = this;
      conferma.disabled = false;
      for (var j = 0; j < bottoni.length; j++) {
        if (bottoni[j] !== selezionato) {
          bottoni[j].disabled = true;
        }
      }
    }
  });
}

