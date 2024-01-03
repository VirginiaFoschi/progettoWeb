let el = document.querySelector(".icon");

el.addEventListener('click', function() {
    document.getElementById('loader').style.display = 'none';
});

document.getElementById('input-group-1').addEventListener('focus', function() {
    document.getElementById('loader').style.display = 'block';
});

document.getElementById('input-group-1').addEventListener('blur', function() {
    document.getElementById('loader').style.display = 'none';
});

let buttons= document.getElementsByClassName('follow');
for(let i=0; i<buttons.length; i++) {
    buttons[i].addEventListener('click', function() {
        if(this.classList.contains('clicked')) {
            this.classList.remove('clicked');
            this.value="Follow";
        } else {
            this.classList.add('clicked');
            this.value = 'Follow ✓'; // Carattere di spunta, puoi personalizzarlo
        }
        
    });
}