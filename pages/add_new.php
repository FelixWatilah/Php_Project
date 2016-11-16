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
<div class="panel panel-success" id="add_new">

    <div class="panel-heading">
        <div class="row">
            <h4 class="panel-title text-center">Add New Student Details.</h4>
        </div>
    </div><!-- end panel-heading -->

    <div class="panel-body">
        <form class="form-horizontal" action="../php/add_new.php" method="POST" id="add_new_form">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <section >
                        <!--==form-groups==-->
                        <div class="form-group">
                            <label for="full_name" class="control-label col-md-3 col-sm-3">Full Name:</label>
                            <div class="col-md-9 col-sm-9">
                                <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Felix Watilah" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label col-md-3 col-sm-3">Email:</label>
                            <div class="col-md-9 col-sm-9">
                                <input type="email" class="form-control" name="email" id="email" placeholder="fwatilah@gmail.com" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="control-label col-md-3 col-sm-3">Phone:</label>
                            <div class="col-md-9 col-sm-9">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="0790388511" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="adm_no" class="control-label col-md-3 col-sm-3">Adm No:</label>
                            <div class="col-md-9 col-sm-9">
                                <input type="text" class="form-control" name="adm_no" id="adm_no" placeholder="CIT-221-010/2014" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="academic_year" class="control-label col-md-3 col-sm-3">Year of Study:</label>
                            <div class="col-md-9 col-sm-9">
                                <input type="text" class="form-control" name="academic_year" id="academic_year" placeholder="Y3S1" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dob" class="control-label col-md-3 col-sm-3">D.O.B:</label>
                            <div class="col-md-9 col-sm-9">
                                <input type="text" class="form-control" name="dob" id="dob" placeholder="01/01/1900" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3">Gender:</label>
                            <div class="col-md-9 col-sm-9">
                                <label for="male" class="control-label radio-inline"><input type="radio" class="radio gender" name="gender" id="male" value="Male" checked="checked">Male</label>
                                <label for="female" class="control-label radio-inline"><input type="radio" class="radio gender" name="gender" id="female" value="Female">Female</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="student_type" class="control-label col-md-3 col-sm-3">Student Type:</label>
                            <div class="col-md-9 col-sm-9">
                                <select id="student_type" class="form-control" name="student_type">
                                    <option value="Regular" selected="selected">Regular</option>
                                    <option value="Self-Sponsored">Self-Sponsored</option>
                                </select>
                            </div>
                        </div>
                        <!--==end form-groups==-->
                    </section><!-- end form-horizontal -->
                </div><!-- end col-md-6 -->
                <div class="col-md-6 col-sm-6">
                    <section>
                        <!--==form-groups==-->


                        <div class="form-group">
                            <label for="profile_photo" class="control-label col-md-3 col-sm-3">Profile Photo:</label>
                            <div class="col-md-5 col-sm-5">
                                <input type="file" name="profile_pic">
                                <input type="button" class="btn btn-primary" name="upload_profile_pic" id="upload" value="Upload">
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <img src="../img/deep-love-quotes-300x300.jpg" class="img-circle">
                            </div>
                            <div class="col-md-2 col-sm-2"></div>
                        </div><!-- profile pic -->


                        <div class="form-group">
                            <label for="county" class="control-label col-md-3 col-sm-3">County:</label>
                            <div class="col-md-9 col-sm-9">
                                <select class="form-control" id="county" name="county">
                                    <option value="Trans-Nzoia" selected="selected">Trans-Nzoia</option>
                                    <option value="Nairobi">Nairobi</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="town" class="control-label col-md-3 col-sm-3">Town:</label>
                            <div class="col-md-9 col-sm-9">
                                <input type="text" class="form-control" name="town" id="town" placeholder="Kitale" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address" class="control-label col-md-3 col-sm-3">Address:</label>
                            <div class="col-md-9 col-sm-9">
                                <input type="text" class="form-control" name="address" id="address" placeholder="200 - 30200 Kitale" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category" class="control-label col-md-3 col-sm-3">Category:</label>
                            <div class="col-md-9 col-sm-9">
                                <select class="form-control" id="category" name="category">
                                    <option value="Boarder" selected="selected">Boarder</option>
                                    <option value="Day Scholar">Day Scholar</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tribe" class="control-label col-md-3 col-sm-3">Tribe:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="tribe" id="tribe" placeholder="Luhya" required>
                            </div>
                        </div>
                        <!--==end form-groups==-->
                    </section><!-- end form-horizontal -->
                </div><!-- end col-md-6 -->
            </div><!-- end row -->
            <div class="form-group text-center" id="buttons">
                <input role="button" type="submit" class="btn btn-success fbtn" name="save" id="save" value="Save">
                <input role="button" type="button" class="btn btn-danger fbtn" id="exit" value="Exit">
            </div><!-- end buttons -->
        </form><!-- end form-horizontal -->
    </div><!-- end panel-body -->

    <div class="panel-footer">
        <h5 class='text-danger text-center'>
            <strong class='text-danger'>&nbsp;<a href='https://www.facebook.com/'><i class='fa fa-2x fa-facebook-square text-success sb'>&nbsp;</i></a>&nbsp;</strong>
            <strong class='text-danger'>&nbsp;<a href='#'><i class='fa fa-2x fa-github-square text-success sb'>&nbsp;</i></a>&nbsp;</strong>
            <strong class='text-danger text-capitalize'>&nbsp;<a href='#'><i class='fa fa-2x fa-twitter-square text-success sb'>&nbsp;</i></a>&nbsp;</strong>
        </h5>
    </div><!-- end panel-footer -->
</div><!-- end panel -->
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/custom.js"></script>
</body>
</html>