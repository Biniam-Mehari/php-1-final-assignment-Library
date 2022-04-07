const form = document.getElementById("addtomylist");
const userId = document.getElementById("userId");
const bookId = document.getElementById("bookId");



form.addEventListener('submit', (e) => {
    console.log("second");
   

    let formData = new FormData(form);
    fetch("../../API/book.php", {
        
        method: 'POST',
        body: formData
    }).then(response => response.text()).then(booklistcheck => {
        booklistcheck = JSON.parse(booklistcheck);
        if (booklistcheck.result === true) {
            console.log("forffffth");
            document.getElementById("displayerror").innerHTML = 'This Book is already in your list';
            e.preventDefault();
        }

    });

    console.log("five");
   
});
console.log("six");

function checkBooklist(params) {
    
}

// let loginForm = document.getElementById("addtomylist");
//     loginForm.onsubmit = (form) => {
//         if(localStorage.getItem("CanLogin")=="Yes"){
//             localStorage.removeItem("CanLogin");
//             return true;
//         }else if(localStorage.getItem("CanLogin") =="No"){
//             localStorage.removeItem("CanLogin");
//             form.preventDefault();
//         }else{
//             form.preventDefault();
//         }
//         let formData = new FormData(loginForm);
//         fetch("../../API/book.php", {
//             method: 'POST',
//             body: formData
//         }).then(response => response.text()).then(loginStatus => {
//             loginStatus = JSON.parse(loginStatus);
         
//             if(loginStatus.result === true){
//                 localStorage.setItem("CanLogin","Yes");
//                 document.getElementById("loginBTN").click();
//             }else{
//                localStorage.setItem("CanLogin","No")
//                document.getElementById("displayerror").innerHTML = loginStatus.result;
//             }
//         });
   


//     }