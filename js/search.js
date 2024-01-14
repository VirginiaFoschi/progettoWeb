let inputElement =document.getElementById('cerca');
let btn = document.getElementById('btnannulla');
let btn2=document.getElementById('btnsearch');

/*btn.addEventListener('click', function(){
    this.style.display='none';
    inputElement.style.width='90%';
});

inputElement.addEventListener("focus", function() {
    btn.style.display='block';
    inputElement.style.width="70%";
});

btn2.addEventListener('click', function(){
    btn.style.display='block';
    inputElement.style.width="70%";
});*/

/*let buttons= document.getElementsByClassName('follow');
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
}*/

function showMore(dotID) {
    var dots = document.getElementById(dotID);
    var hiddenText = document.getElementById('text' + dotID.substr(-1));

    if (dots.style.display === 'none') {
        dots.style.display = 'inline';
        hiddenText.style.display = 'none';
    } else {
        dots.style.display = 'none';
        hiddenText.style.display = 'inline';
    }
}