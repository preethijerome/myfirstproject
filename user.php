<?php
include('index.php');
?>



<?php
session_start();
include('db.php');
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$password=$_POST['password'];
$sql="select email,password from user where email='$email' and password='$password'";
$query=mysqli_query( $con,$sql);
$row=mysqli_num_rows($query);
if($row==1)
{
 $_SESSION['email'] = $email;
 echo'sucess';
 header('location:adhome.php');
}
else
echo "<script>alert('not valid!!!');  </script>";
}

?>  





        <html>
        <head>
        <title>BOUTIQUES</title>
        </head>
        <form method="POST" action="#">
        <center>
        <h2><p style="color:blue">WELCOME TO USER LOGIN</p></h2>
           E-MAIL:<input type="text" name="email"><br><br>
          PASSWORD:<input type="password" name="password"><br><br>
        <input type="submit" name="submit" value="login" id="submit">
        <a href="index.php"><input type="button" value="back" name="back"></a>
        </center>
        </form>
        </html>
