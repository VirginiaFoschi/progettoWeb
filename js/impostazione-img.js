document.getElementById('back').addEventListener('click', function() {
    window.location.href = "impostazioni.html";
})

document.getElementById("input").addEventListener("change", function(event) {
    let input = event.target;
    let immagine = document.getElementById('profilo');

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
          if (immagine) {
            immagine.src = e.target.result;
          } 
        };

        reader.readAsDataURL(input.files[0]);
      }
});