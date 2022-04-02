<?php
include 'Menubar.php';
?>

<link rel="stylesheet" href="css/styleLogin.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



<h2>Sign-Up</h2><br>    
    <div class="login">    
    <form action="signup/form" method="post">    
        <label><b>First Name</b></label>    
        <br>
        <input type="text" name="fname" id="fname" placeholder="first name">    
        <br> 

        <label><b>Last Name </b> </label> 
        <br>
        <input type="text" name="lname" id="lname" placeholder="last name">    
        <br> 
        
        <label><b>E-mail</b> </label> 
        <br>   
        <input type="text" name="email" id="email" placeholder="email">    
        <br> 
        <label><b>Password</b></label> 
        <br>   
        <input type="Password" name="pwd" id="pwd" placeholder="password">    
        <br>   
        <label><b>Repeat Password</b> </label>    
        <input type="Password" name="rpwd" id="rpdw" placeholder="repeat password">    
        <br><br>  
        <button type="submit" name="submit">SIGN UP</button>       
        <br>    
        <section id="ErrorMessage"></section>
    </form>   
    
    <!-- javascript to check user information and display error messsage  -->
<script src="../js/signUp.js"></script>
</div>    
</body>    
</html> 