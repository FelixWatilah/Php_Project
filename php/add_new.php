<?php
/**
 * Created by PhpStorm.
 * User: Watilah
 * Date: 10/25/2016
 * Time: 12:28 AM
 */

include "phpconfig/db_config.php";//connect to the database

if(isset($_POST['save'])){

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

    $db = "CREATE DATABASE IF NOT EXISTS student";

    mysqli_query($conn,$db);

    mysqli_select_db($conn,'student');

    $tb = "CREATE TABLE IF NOT EXISTS new_student (
            name VARCHAR(25),
            full_name VARCHAR (50),
            email VARCHAR (10),
            phone VARCHAR(50),
            adm_no VARCHAR (50),
            academic_year VARCHAR (50),
            dob VARCHAR (50),
            gender (50),
            student_type VARCHAR (50),
            county VARCHAR (50),
            town VARCHAR (50),
            address VARCHAR (50),
            category VARCHAR (50),
            tribe VARCHAR (50),
            profile_pic BLOB)";

    mysqli_query($conn,$tb);

    $sql = "INSERT INTO new_student (full_name,email,phone,adm_no,academic_year,dob,gender,student_type,county,town,address,category,tribe)
            VALUES ('$full_name','$email','$phone','$adm_no','$academic_year','$dob','$gender','$student_type','$county','$town','$address',
            '$category','$tribe')";

    if (isset($_FILES['profile_pic'])){
        $profile_pic = $_FILES['profile_pic']['temp_name'];
        $img = file_get_contents($profile_pic);

        $sql_img = "UPDATE new_student SET profile_pic = '$profile_pic' WHERE full_name = '$full_name'";
        $result_img = mysqli_query($conn,$sql_img);
        if (!$result_img){
            echo "Failed_img: <br>".$sql_img."<br>".mysqli_error($conn);
        }else{
            echo "Success: <br>".$sql_img."<br>".mysqli_error($conn);
        }
    }

    $result = mysqli_query($conn,$sql);

    if (!$result){
        //$error_message = "Failed to add!";
        echo "Failed: <br>".$sql."<br>".mysqli_error($conn);
        //echo "<script>  alert('$error_message');</script>";
        //echo "<script>  window.location.assign('../pages/student.php');</script>";
    }else{
        //$success_message = "Added successfully!";
        echo "Success: <br>".$sql."<br>".mysqli_error($conn);
        //echo "<script>  alert('$success_message');</script>";
        //echo "<script>  window.location.assign('../pages/student.php');</script>";
    }
}else{
    $error_message = "Failed to add!";
    echo "<script>  alert('$error_message');</script>";
    echo "<script>  window.location.assign('../pages/student.php');</script>";
}
mysqli_close($conn);
?>