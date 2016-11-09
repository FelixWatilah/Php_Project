<?php
/**
 * Created by PhpStorm.
 * User: Watilah
 * Date: 30-Oct-16
 * Time: 6:39 PM
 */
session_start();
session_destroy();
header("Location:../index.php");
?>