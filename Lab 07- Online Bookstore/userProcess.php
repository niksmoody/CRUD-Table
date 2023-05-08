<?php
//get values from form in index.php
$email = $_POST['email'];
$pass = $_POST['password'];

//preventing SQL injection
$email = stripcslashes($email);
$pass = stripcslashes($pass);

//Connection to db
$con=mysqli_connect("localhost", "root", "" , "lab07obs");

$result = mysqli_query($con ,"select * from users where email = '$email' and password = '$pass'") 
or die("failed to connect to database". mysqli_error($con));
    $row = mysqli_fetch_array($result);
    if($row['email']== $email && $row['password']== $pass){
        // echo "login success!!! welcome ".$row['name'];
        echo "<script language=\"JavaScript\">\n";
        // echo "alert('Login Successful.');\n";
        echo "window.location='display.php'";
        echo "</script>";
    }
    
    else{
        echo "wrong credentials check carefully and try again !!!";
        echo "<script language=\"JavaScript\">\n";
        // echo "alert('Login Failed.');\n";
        echo "window.location='failedLogin.php'";
        echo "</script>";

    }