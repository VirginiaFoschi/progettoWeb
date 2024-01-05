let inputElement =document.getElementById('cerca');
let btn = document.getElementById('btnannulla');
let btn2=document.getElementById('btnsearch');
let nav = document.getElementById('options');

btn.addEventListener('click', function(){
    this.style.display='none';
    inputElement.style.width='90%';
    nav.innerHTML="";
});

inputElement.addEventListener("focus", function() {
    btn.style.display='block';
    inputElement.style.width="70%";
    nav.innerHTML=`<li class="nav-item">
    <a class="nav-link active3" aria-current="page" href="#" onclick="cambiaTab3(this)">All</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" onclick="cambiaTab3(this)">Users</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" onclick="cambiaTab3(this)">Posts</a>
  </li>`;
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