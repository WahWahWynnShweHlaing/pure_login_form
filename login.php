<?php
 session_start();
 $email = $_POST['email'];
 $password = $_POST['password'];
 if($email == "admin@admin.com" && $password == "secret") {
   header("location: home.php");
 $_SESSION['auth'] = true;
 $_SESSION['id'] = "Admin";
 }
 else {
   $error = "Your Login Name or Password is invalid";
 }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
            background-color: #FFFFFF;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
         .login-ttl {
            text-align:center;
         }
         .login-form {
            width:500px; 
            border: solid 1px #333333;
            margin: 0 auto;
         }
         .login-header {
            background-color:#333333; 
            color:#FFFFFF; 
            padding:3px;
         }
         .login-content {
            margin:30 auto;
         }
      </style>  
   </head>
   <body>
	
      <div class="login-ttl">
         <div class="login-form">
            <div class="login-header"><b>Login</b></div>
				
            <div class="login-content">
               
               <form action = "" method = "post">
                  <label>Email  :</label><input type = "email" name = "email" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>