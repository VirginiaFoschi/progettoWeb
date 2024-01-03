let el=document.querySelectorAll(".heart-icon");
for (let i = 0; i < el.length; i++) {
    el[i].addEventListener('click', function(){
        if (this.classList.contains('active')) {
            this.classList.remove('active');
        } else {
            this.classList.add('active');
        }
    });
};

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
