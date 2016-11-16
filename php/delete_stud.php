<?php
/**
 * Created by PhpStorm.
 * User: Watilah
 * Date: 05-Nov-16
 * Time: 12:46 AM
 */

    $email = $_GET['email'];

    include "phpconfig/db_config.php";

    mysqli_select_db($conn,'student');

    $sql = "DELETE FROM new_student WHERE email = '$email'";
    $result = mysqli_query($conn,$sql);

    if($result){
        $success_message = "Deleted successfully!";
        echo "<script>  alert('$success_message');</script>";
        echo "<script>  window.location.assign('../pages/student.php');</script>";
    }else{
        $error_message = "Failed to Delete!";
        echo "<script>  alert('$error_message');</script>";
        echo "<script>  window.location.assign('../pages/student.php');</script>";
    }
    //mysqli_free_result($result);
    mysqli_close($conn);
?>