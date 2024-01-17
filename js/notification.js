
let bottoni = document.querySelectorAll(".seleziona-libro");


  let conferma = document.querySelector(".conferma");
  conferma.disabled = true;
  // Il resto del tuo codice va qui



// Crea una letiabile per tenere traccia del bottone selezionato
let selezionato = null;
/*
let accetta = document.querySelectorAll(".accetta");
let rifiuta = document.querySelectorAll(".rifiuta");

for(let i = 0; i < bottoni.length; i++){
rifiuta[i].addEventListener("click", function() {
    
    this.style.backgroundColor = 'red';
    //non riesco a disabilitare i bottoni accetta
    //accetta[i].disabled  = true;
});
}
   */
// Disabilita il tasto conferma all'inizio


// Aggiungi un evento di clic a ogni bottone
for (let i = 0; i < bottoni.length; i++) {
  bottoni[i].addEventListener("click", function() {
    // Se il bottone è già selezionato, deselezionalo e abilita gli altri bottoni
    if (this === selezionato) {
      this.style.backgroundColor = "";
      this.style.color = "";
      selezionato = null;
      conferma.disabled = true;
      for (let j = 0; j < bottoni.length; j++) {
        bottoni[j].disabled = false;
      }
    } else {
      // Altrimenti, seleziona il bottone e disabilita gli altri bottoni
      this.style.backgroundColor = "blue";
      this.style.color = "white"
      selezionato = this;
      conferma.disabled = false;
      for (let j = 0; j < bottoni.length; j++) {
        if (bottoni[j] !== selezionato) {
          bottoni[j].disabled = true;
        }
      }
    }
  });
}

