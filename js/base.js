function cambiaTab(elemento) {
    // Rimuovi la classe "active" dall'elemento corrente
    let elementiAttivi = document.querySelectorAll('a.active');
    elementiAttivi.forEach(function (el) {
      el.classList.remove('active');
    });
  
    // Aggiungi la classe "active" all'elemento cliccato
    elemento.classList.add('active');
} 
function cambiaTab2(elemento) {
  // Rimuovi la classe "active" dall'elemento corrente
  let elementiAttivi = document.querySelectorAll('a.active2');
  elementiAttivi.forEach(function (el) {
    el.classList.remove('active2');
  });

  // Aggiungi la classe "active" all'elemento cliccato
  elemento.classList.add('active2');
} 
