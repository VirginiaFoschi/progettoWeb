
let accetta = document.querySelectorAll(".accetta");
let rifiuta = document.querySelectorAll(".rifiuta");

for(let i = 0; i < bottoni.length; i++){
rifiuta[i].addEventListener("click", function() {
    
    this.style.backgroundColor = 'red';
    //non riesco a disabilitare i bottoni accetta
    accetta.style.display = 'none';
});
}