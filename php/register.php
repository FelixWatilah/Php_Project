<?php
/**
 * Created by PhpStorm.
 * User: Watilah
 * Date: 10/25/2016
 * Time: 12:33 PM
 */
 if (!empty('POST')){

     $name = $_POST['name'];
     $email = $_POST['email'];
     $id_no = $_POST['id_no'];
     $gender = $_POST['gender'];
     $job_no = $_POST['job_no'];
     $category = $_POST['category'];
     $work_type = $_POST['work_type'];
     $phone = $_POST['phone'];
     $county = $_POST['county'];
     $department = $_POST['department'];
     $passcode = $_POST['passcode'];
     //$passcode = md5($passcode); //encryption of the password

     include "phpconfig/db_config.php";

     $sql= "INSERT INTO register (name,email,id_no,gender,job_no,category,work_type,phone,county,department,passcode) 
            VALUES('$name','$email','$id_no','$gender','$job_no','$category','$work_type','$phone','$county','$department','$passcode')";
     $result = mysqli_query($conn,$sql);

     if (!$result){
         echo "Could not register. Please ensure that you fill all the fields.";
     }else{
         echo $email." registered successfully";
     }
 }else{
     echo "All fields are required";
 }

 mysqli_close($conn);
?>