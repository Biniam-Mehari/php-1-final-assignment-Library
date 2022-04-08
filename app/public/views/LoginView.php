<?php
//session_start();
include 'Menubar.php';
?>
 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="css/styleLogin.css">
<link rel="stylesheet" href="css/style1.css">

   
<!-- login form -->
   
    <div class="login">  
    <h2 class="text-dark ">Login Page</h2>  <br>  
    <form id="login" method="post" action="login/form"> 
      
        <label><b>email</b></label>   
        <br>  
        <input type="text" name="email" id="email" placeholder="email">    
        <br><br>    
        <label><b>Password</b> </label> 
        <br>     
        <input type="Password" name="pwd" id="pwd" placeholder="Password">    
        <br><br> 
        <p id="displayerror"></p>   
        <button id="loginbutton"type="submit" class="btn btn-dark" name="submit">Login</button>          
          
    </form>    
    
    <!-- javascript to check user account and display error messsage  -->

</div>    
<script src="../js/login.js"></script>
</body>    
</html> 