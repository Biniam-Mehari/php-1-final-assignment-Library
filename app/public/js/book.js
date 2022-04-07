const form = document.getElementById("addtomylist");
const userId = document.getElementById("userId");
const bookId = document.getElementById("bookId");
console.log("first");
form.addEventListener('submit', (e) => {
    console.log("second");
    let formData = new FormData(form);
    fetch("../../API/book.php", {
        method: 'POST',
        body: formData
    }).then(response => response.text()).then(loginStatus => {
        loginStatus = JSON.parse(loginStatus);
        console.log("third");
        if (loginStatus.result === true) {
            e.preventDefault();
            console.log("forth");
            document.getElementById("displayerror").innerHTML = 'This Book is already in your list';
        }
    });

    console.log("five");
});
console.log("six");