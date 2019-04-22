<!DOCTYPE html>
<html lang="en">
    <head>    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
    
        <title>Login KKN</title>
    
        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url ('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    
        <!-- Custom fonts for this template -->
        <link href="<?php echo base_url ('assets/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    
        <title>FORM LOGIN KKN</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/css/login.css')?>">
        
        
        <body>
            
           
            <div class="loginbox">
              <img src="<?php echo base_url ('assets/img/login/avatar.png')?>" class="avatar">
                <h1>Login KKN</h1>
                <form action="">
                    <p>Username</p>
                    <input type="text" name="" placeholder="Enter Your Username" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                    <div class="form-group">
                    <p>Password</p>
                    <input type="password" name="" placeholder="Enter Your Password" required="required" data-validation-required-message="Please enter your Password.">
                    <p class="help-block text-danger"></p>
                      
                    <input type="submit" name="" value="Login">
                    <a href="#">Lost Your Password?</a>
                    <a href="<?php echo base_url(); ?>index.php/dashboard/register">Register?</a>
                </form>
              </div></div>
            </body> 
          </head>         
</html>