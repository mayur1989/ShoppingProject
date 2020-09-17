<!DOCTYPE html>  
<html>  
<head>  
    <title>Login Page</title>  
</head> 

<?php
include_once('header.php');
?>
<body> 
</br></br></br></br></br></br></br></br></br></br>
   <center> <?php echo isset($error) ? $error : ''; ?></center>  
    <form method="post" action="<?php echo site_url('login/loginAction');?>">  
        <table cellpadding="2" cellspacing="2" style=" margin-left: auto;
        margin-right: auto; margin-top: auto; ">  
            
            <tr>  
                <td><th>Username:</th></td>  
                <td><input type="text" name="user"></td>  
            </tr>  
            <tr>  
                <td><th>Password:</th></td>  
                <td><input type="password" name="pass"></td>  
            </tr>  
  
            <tr>  
                <td></td>
                <center><td><input type="submit" value="Login"></td></center>
            </tr>  
        </table>  
    </form>  
</body> 
<?php
include_once('footer.php');
?> 
</html>  