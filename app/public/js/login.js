// check login credentials and desplay error message 



let loginForm = document.getElementById("login");
    loginForm.onsubmit = (form) => {
        if(localStorage.getItem("CanLogin")=="Yes"){
            localStorage.removeItem("CanLogin");
            return true;
        }else if(localStorage.getItem("CanLogin") =="No"){
            localStorage.removeItem("CanLogin");
            form.preventDefault();
        }else{
            form.preventDefault();
        }
        let formData = new FormData(loginForm);
        fetch("../../API/Login.php", {
            method: 'POST',
            body: formData
        }).then(response => response.text()).then(loginStatus => {
            loginStatus = JSON.parse(loginStatus);
         
            if(loginStatus.result === true){
                localStorage.setItem("CanLogin","Yes");
                document.getElementById("loginBTN").click();
            }else{
               localStorage.setItem("CanLogin","No")
               document.getElementById("displayerror").innerHTML = loginStatus.result;
            }
        });
   


    }