<?php
include('index.php');
if(isset($_POST['submit']))
{
$user=$_POST['username'];
$pass=$_POST['password'];
if($user=="admin" and $pass=="admin")
{
echo'success';
 header('location:adhome.php');
}
else 
echo ("<script>alert('not valid!!!')</script>");

}
?>   




    <html>
    <head>
    <title>BOUTIQUES</title>
    </head>
    <form method="POST" action="#">
    <center>
    <h2><p style="color:brown">WELCOME TO ADMIN PANEL</p></h2>
    USERNAME:<input type="text" name="username"><br><br>
    PASSWORD:<input type="password" name="password"><br><br>
    <input type="submit" name="submit" value="login" id="submit">
    <a href="index.php"><input type="button" value="back" name="back"></a>
    </center>
    </form>
    </html>
            