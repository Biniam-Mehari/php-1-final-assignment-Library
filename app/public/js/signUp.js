
const form = document.getElementById("signupForm");
const firstName = document.getElementById("fname");
const lastName = document.getElementById("lname");
const email = document.getElementById("email");
const pwd = document.getElementById("pwd");
const rpwd = document.getElementById("rpwd");


form.addEventListener('signup', (e) => {
    
    setErroremptybydefault();
   
    if (checkInputsForError()) {
        e.preventDefault();
    }


});

function checkInputsForError() {

    let error = 0;

    const firstNamevalue = firstName.value.trim();
    const lastNamevalue = lastName.value.trim();
    const emailvalue = email.value.trim();
    const pwdvalue = pwd.value.trim();
    const rpwdvalue = rpwd.value.trim();

    if (firstNamevalue === '') {

        setErrorFor("displayerrorfname", 'first name can not be empty')
        error += 1;
    }

    if (lastNamevalue === '') {

        setErrorFor("displayerrorlname", 'last name can not be empty')
        error += 1;

    }


    const validaEmail = (email) => {
        return email.match(
            /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        );
    };
    if (emailvalue === '') {

        setErrorFor("displayerroremail", 'email can not be empty')
        error += 1;

    }
    else if (!validaEmail(emailvalue)) {
        setErrorFor("displayerroremail", 'email is not valid')
        console.log("hello");
        error += 1;
    }
    else {
        let formData = new FormData(form);
        fetch("../../API/SignUp.php", {
            method: 'POST',
            body: formData
        }).then(response => response.text()).then(signupemailstatus => {
            signupemailstatus = JSON.parse(signupemailstatus);

            if (signupemailstatus.result === true) {
                setErrorFor("displayerroremail", 'email already exist')
                
                error += 1;
                
            }
        });


    }
   
    if (pwdvalue == '') {

        setErrorFor("displayerrorpassword", 'password can not be empty')
        error += 1;

    }

    if (rpwdvalue == '') {

        setErrorFor("displayerrorpassword2", ' repeat password can not be empty')
        error += 1;
    }
    else if (pwdvalue !== rpwdvalue) {
        setErrorFor("displayerrorpassword2", 'paswword does not match')
        error += 1;
    }
    console.log(error);

    if (error > 0) {
        return true;
    }
    else {
        return false;
    }

}

function setErrorFor(input, message) {
    document.getElementById(input).innerHTML = message;
}

function setErroremptybydefault() {
    document.getElementById("displayerrorfname").innerHTML = "";
    document.getElementById("displayerrorlname").innerHTML = "";
    document.getElementById("displayerroremail").innerHTML = "";
    document.getElementById("displayerrorpassword").innerHTML = "";
    document.getElementById("displayerrorpassword2").innerHTML = "";
}




