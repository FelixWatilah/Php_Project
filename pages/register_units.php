<?php
session_start();
if(!isset($_SESSION['email'])){
    header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register Units</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="../css/fa/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>

<div class="panel panel-success">
    <div class="panel-heading">
        <h4 class="panel-title">Register Units.</h4>
    </div>
    <div class="panel-body">
        <h4 class="text-danger text-center">Sorry!!!!! This module is still under development.</h4>
    </div>
    <div class="panel-footer">
        <h5 class='text-danger text-center'>
            <strong class='text-danger'>&nbsp;<a href='https://www.facebook.com/'><i class='fa fa-2x fa-facebook-square text-success sb'>&nbsp;</i></a>&nbsp;</strong>
            <strong class='text-danger'>&nbsp;<a href='#'><i class='fa fa-2x fa-github-square text-success sb'>&nbsp;</i></a>&nbsp;</strong>
            <strong class='text-danger text-capitalize'>&nbsp;<a href='#'><i class='fa fa-2x fa-twitter-square text-success sb'>&nbsp;</i></a>&nbsp;</strong>
        </h5>
    </div>
</div>

<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/custom.js"></script>
</body>
</html>