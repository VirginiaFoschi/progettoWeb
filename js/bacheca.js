let comment = document.getElementsByClassName("comment-icon");
for (let i = 0; i < comment.length; i++) {
  comment[i].addEventListener('click', function () {
    let id=this.getAttribute('data-target');
    let form = document.getElementById(id);
    form.style.display = 'block';
  });
}

function notifiche() {
    window.location.href = "notifications.php";
}
