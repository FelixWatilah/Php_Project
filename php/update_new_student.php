<?php
/**
 * Created by PhpStorm.
 * User: Watilah
 * Date: 01-Nov-16
 * Time: 11:52 PM
 */

if (isset($_POST['update'])) {

    $full_name=$_POST['full_name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $adm_no=$_POST['adm_no'];
    $academic_year=$_POST['academic_year'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $student_type=$_POST['student_type'];
    $county=$_POST['county'];
    $town=$_POST['town'];
    $address=$_POST['address'];
    $category=$_POST['category'];
    $tribe=$_POST['tribe'];

    include "phpconfig/db_config.php";

    mysqli_select_db($conn,'student');

    $sql = "UPDATE new_student 
            SET full_name='$full_name', email='$email', phone='$phone', academic_year='$academic_year', dob='$dob', gender='$gender', 
            student_type='$student_type',county='$county', town='$town', address='$address', category='$category', tribe='$tribe'
            WHERE adm_no = '$adm_no'";
    $result = mysqli_query($conn, $sql);

    if ($result=true){
        $success_message = "Details for".$adm_no."has been updated successfully!";
        echo "<script>  alert('$success_message');</script>";
        echo "<script>  window.location.assign('update.php');</script>";
        //header("Location:update.php");
    }else{
        $error_message = "Update for".$adm_no."failed!";
        echo "<script>  alert('$error_message');</script>";
        echo "<script>  window.location.assign('update.php');</script>";
        //header("Location:update.php");
    }

}else{
    $awk_message = "Something is wrong!";
    echo "<script>  alert('$awk_message');</script>";
    echo "<script>  window.location.assign('update.php');</script>";
    //header("Location:update.php");
}

mysqli_close($conn);

?>