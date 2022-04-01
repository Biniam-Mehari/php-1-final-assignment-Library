<?php
//session_start();
include 'Menubar.php';
?>
 <link rel="stylesheet" href="css/styleLogin.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


   

    <h2>Login Page</h2><br>    
    <div class="login">    
    <form id="login" method="post" action="controller/logincontroller.php">    
        <label><b>email</b></label>   
        <br>  
        <input type="text" name="email" id="email" placeholder="email">    
        <br><br>    
        <label><b>Password</b> </label> 
        <br>     
        <input type="Password" name="pwd" id="pwd" placeholder="Password">    
        <br><br>    
        <button type="submit" name="submit">Login</button>          
        <br><br>    
        <input type="checkbox" id="check">    
        <span>Remember me</span>    
        <br><br>    
        Forgot <a href="#">Password</a>    
    </form>     
</div>    
</body>    
</html> 