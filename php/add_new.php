<?php
/**
 * Created by PhpStorm.
 * User: Watilah
 * Date: 10/25/2016
 * Time: 12:28 AM
 */

include "phpconfig/db_config.php";//connect to the database

if(!empty('POST')){

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $adm_no = $_POST['adm_no'];
    $academic_year = $_POST['academic_year'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $student_type = $_POST['student_type'];
    $county = $_POST['county'];
    $town = $_POST['town'];
    $address = $_POST['address'];
    $category = $_POST['category'];
    $tribe = $_POST['tribe'];

    $sql = "INSERT INTO new_student (full_name,email,phone,adm_no,academic_year,dob,gender,student_type,county,town,address,category,tribe)
            VALUES ('$full_name','$email','$phone','$adm_no','$academic_year','$dob','$gender','$student_type','$county','$town','$address',
            '$category','$tribe')";

    $result = mysqli_query($conn,$sql);

    if (!$result){
        $error_message = "Failed to add!";
        //$conn_error = mysqli_error($conn);
        echo "<script>  alert('$error_message');</script>";
        echo "<script>  window.location.assign('../pages/student.php');</script>";
    }else{
        $success_message = "Added successfully!";
        echo "<script>  alert('$success_message');</script>";
        echo "<script>  window.location.assign('../pages/student.php');</script>";
    }
}else{
    $error_message = "Failed to add!";
    //$conn_error = mysqli_error($conn);
    echo "<script>  alert('$error_message');</script>";
    echo "<script>  window.location.assign('../pages/student.php');</script>";
}
mysqli_close($conn);
?>