<?php
/**
 * Created by PhpStorm.
 * User: Watilah
 * Date: 10/29/2016
 * Time: 3:20 PM
 */

if (isset($_POST['username'],$_POST['password'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    include "phpconfig/db_config.php";

    $sql = "SELECT email,passcode FROM register WHERE email = '$username'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    if($row > 0){
        if($password == $row['passcode']){
            session_start();
            $_SESSION['name'] = "student_login";
            $_SESSION['email'] = $username;
            header("Location:../pages/student.php");
        }else{
            $message = "Wrong password";
            echo "<script>  alert('$message');</script>";
            echo "<script>  window.location.assign('../index.php');</script>";
        }
    }else{
        $user_err = $username."Please enter the correct details, or register.";
        echo "<script>  alert('$user_err');</script>";
        echo "<script>  window.location.assign('../index.php');</script>";
    }
    mysqli_free_result($result);
}else{
    echo "Please enter your username and password.";
}
mysqli_close($conn);
?>