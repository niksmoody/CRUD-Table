<?php
    require_once "conn.php";
    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $place = $_POST['place'];
        $animal = $_POST['animal'];
        $thing = $_POST['thing'];

        if($name != "" && $place != "" && $animal != "" && $thing!="" ){
            $sql = "INSERT INTO tab (`name`, `place`, `animal`, `thing`) VALUES ('$name', '$place', '$animal', '$thing')";
            if (mysqli_query($conn, $sql)) {
                header("location: index.php");
            } else {
                 echo "Something went wrong. Please try again later.";
            }
        }else{
            echo "Name, Place, Animal and Thing cannot be empty!";
        }
    }
?>