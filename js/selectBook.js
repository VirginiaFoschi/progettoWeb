function setSelectedBook(bookId) {
    let inputField = document.getElementById(bookId);
    console.log(bookId);
    console.log(inputField);
    inputField.value = bookId;
    
  }
  
function accetta(id){
  acc = document.getElementById("accettata");
  acc.value = id;
}