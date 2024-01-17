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

let comment = document.getElementsByClassName("comment-icon");
for (let i = 0; i < comment.length; i++) {
  comment[i].addEventListener('click', function () {
    let id=this.getAttribute('data-target');
    let form = document.getElementById(id);
    form.style.display = 'block';
  });
}
