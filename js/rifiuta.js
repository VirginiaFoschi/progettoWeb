
var accetta = document.querySelectorAll(".accetta");
var rifiuta = document.querySelectorAll(".rifiuta");

for(var i = 0; i < bottoni.length; i++){
rifiuta[i].addEventListener("click", function() {
    
    this.style.backgroundColor = 'red';
    //non riesco a disabilitare i bottoni accetta
    accetta.style.display = 'none';
});
}