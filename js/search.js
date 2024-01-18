function showMore(dotID, id) {
    var dots = document.getElementById(dotID);
    var hiddenText = document.getElementById('text' + id);

    if (dots.style.display === 'none') {
        dots.style.display = 'inline';
        hiddenText.style.display = 'none';
    } else {
        dots.style.display = 'none';
        hiddenText.style.display = 'inline';
    }
}

function sendSelectedValue(){
    document.getElementById('formPost').submit();
}

function disabledButton(button) {
    button.disabled = true;
    button.value = "Proposta effettuata";
}