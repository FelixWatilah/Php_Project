<?php
/**
 * Created by PhpStorm.
 * User: Watilah
 * Date: 10/25/2016
 * Time: 1:42 PM
 */

if (isset($_POST['recover_btn'])){
    $username = $_POST['username'];

    include "phpconfig/db_config.php";

    mysqli_select_db($conn,'student');

    $sql = "SELECT passcode FROM register WHERE email = '$username'";
    $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $pass = "Your Password is ".$row["passcode"];
    echo "<script>  alert('$pass');</script>";
    echo "<script>  window.location.assign('../index.php');</script>";

    mysqli_free_result($result);
}
mysqli_close($conn);
?>