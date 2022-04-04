<?php
include 'Menubar.php';
?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="css/styleLogin.css">
<link rel="stylesheet" href="css/style1.css">


<h2>Sign-Up</h2><br>
<div class="login">
    <form id="signupForm" action="signup/form" method="post">
        <label><b>First Name</b></label>
        <br>
        <input type="text" name="fname" id="fname" placeholder="first name">
        <br>
        <small id="displayerrorfname"></small>
        <br>

        <label><b>Last Name </b> </label>
        <br>
        <input type="text" name="lname" id="lname" placeholder="last name">
        <br>
        <small id="displayerrorlname"></small>
        <br>

        <label><b>E-mail</b> </label>
        <br>
        <input type="text" name="email" id="email" placeholder="email">
        <br>
        <small id="displayerroremail"></small>
        <br>
        <label><b>Password</b></label>
        <br>
        <input type="Password" name="pwd" id="pwd" placeholder="password">
        <br>
        <small id="displayerrorpassword"></small>
        <br>
        <label><b>Repeat Password</b> </label>
        <input type="Password" name="rpwd" id="rpwd" placeholder="repeat password">
        <br>
        <small id="displayerrorpassword2"></small>
        <br><br>
        <button id="submit" type="submit" name="submit">SIGN UP</button>
        <br>
        
    </form>

    <!-- javascript to check user information and display error messsage  -->
    
    <script src="../js/signUp.js"></script>
</div>
</body>

</html>