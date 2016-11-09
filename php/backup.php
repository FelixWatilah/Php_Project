<?php
/**
 * Created by PhpStorm.
 * User: Watilah
 * Date: 05-Nov-16
 * Time: 9:25 AM
 */

include "phpconfig/db_config.php";


//first table//
$new_student = "new_student"; //new_student table
$new_student_backup = '../database_backup/new_student.sql'; //backup file

$sqlns = "SELECT * INTO OUTFILE '$new_student_backup' FROM $new_student";
$resultns = mysqli_query($conn,$sqlns);

if($resultns){
    $success_message = "`new_student` table has been backed up successfully!";
    echo "<script>  alert('$success_message');</script>";
}else{
    $error_message = "File: new_student.sql already exists ";
    echo "<script>  alert('$error_message');</script>";
}

//second table//
$register = "register";//register table
$register_backup = '../database_backup/register.sql';//backup file

$sqlreg = "SELECT * INTO OUTFILE '$register_backup' FROM $register";
$resultreg = mysqli_query($conn,$sqlreg);

if($resultreg){
    $succes_message = "`register` table has been backed up successfully!";
    echo "<script>  alert('$succes_message');</script>";
}else{
    $erro_message = "File: register.sql already exists ";
    echo "<script>  alert('$erro_message');</script>";
}

mysqli_close($conn);

?>

