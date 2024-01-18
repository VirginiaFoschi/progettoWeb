function setSelectedBook(bookId, idNotifica) {
    let inputField = document.getElementById(idNotifica);
    console.log(bookId);
    console.log(inputField);
    inputField.value = bookId;
   
  }
  
  