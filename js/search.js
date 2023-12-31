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