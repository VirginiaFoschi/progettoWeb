
// Seleziona tutti gli elementi SVG con la classe 'star-icon'
let stars = document.querySelectorAll('.star-icon');

// Aggiungi un evento click a ciascuna icona stella
stars.forEach((star, index) => {
    star.addEventListener('click', function() {
        // Se l'icona stella è già gialla, cambia il suo colore in nero
        // e cambia il colore di tutte le stelle alla sua destra in nero
        if (this.style.fill === 'yellow') {
            this.style.fill = 'black';
            for (let i = index + 1; i < stars.length; i++) {
                stars[i].style.fill = 'black';
            }
        } else {
            // Altrimenti, cambia il colore dell'icona stella in giallo
            // e cambia il colore di tutte le stelle alla sua sinistra in giallo
            this.style.fill = 'yellow';
            for (let i = 0; i < index; i++) {
                stars[i].style.fill = 'yellow';
            }
        }
    });
});