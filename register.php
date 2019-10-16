
 <?php
 include('index.php');
 ?>


<?php
 include('db.php');
 if(isset($_POST['submit'])){
     // echo "hi";
     $fname = $_POST['fname'];
     $dob = $_POST['dob'];
     $address = $_POST['add'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $phno = $_POST['phno'];


if (!$fname  && !$dob && !$address && !$email && !$password && !$phno){
    echo  ("<script>alert('not valid!!!')</script>");
}

$query='insert into user(fname,dob,address,email,password,phno)values ("'.$fname.'","'.$dob.'","'.$address.'","'.$email.'","'.$password.'","'.$phno.'")';  
 $result = mysqli_query($con, $query);
 }
?>
   
        <center>
        <form method="POST" action="register.php">
            <table>
                <h1><p style="color:orange">REGISTRATION FORM</h1>
                <tr><td>NAME</td></tr><td><input type="text" name="fname"></td>
                <tr><td>DOB </td></tr><td><input type="Date Of Birth" name="dob"></td>
                <tr><td>ADDRESS</td></tr><td><input type="text" name="add"></td>
                <tr><td>E-MAIL</td></tr><td><input type="text" name="email"></td>
                <tr><td>PASSWORD</td></tr><td><input type="password" name="password"></td>
                <tr><td>PHONE-NO</td></tr><td><input type="text" name="phno"></td>
            </table><br>
                <input type="submit" value="Register" id="submit" name="submit">
                <a href="user.php"><input type="button" value="back" name="back"></a>
        </form>
        </center>
