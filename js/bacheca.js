/*let el=document.querySelectorAll(".heart-icon");
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
        let value = this.value;
        if(value == "Segui") {
            this.value='Segui Già';
        } else {
            this.value = 'Segui';
        }
        
    });
}*/

document.getElementById("prova").addEventListener('click', function() {
    let el=document.getElementById("form-commento");
    el.style.display='inline-block';
})
