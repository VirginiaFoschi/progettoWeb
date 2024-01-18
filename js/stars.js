let stars = document.querySelectorAll('.star-icon');

// Aggiungo un evento click a ciascuna icona stella
stars.forEach((star, index) => {
    star.addEventListener('click', function(ev) {
        let span = ev.currentTarget;
        let rating = star.dataset.value;
    
        // Imposto il valore del campo nascosto
        document.getElementById('voto').value = rating;
   
        if (this.style.fill === 'yellow') {
            this.style.fill = 'black';
            for (let i = index + 1; i < stars.length; i++) {
                stars[i].style.fill = 'black';
            }
        } else {
            this.style.fill = 'yellow';
            for (let i = 0; i < index; i++) {
                stars[i].style.fill = 'yellow';
            }
        }
    });
});
