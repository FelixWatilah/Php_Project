<?php
session_start();
if(isset($_SESSION['email'])){
   echo "<script>window.location.assign('pages/student.php');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="css/fa/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

<div class="container-fluid">
    <nav class="navbar navbar-default">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div><!-- end navbar-header -->
        <a href="" class="navbar-brand"><img src=""></a>
        <div class="nav-collapse nav-responsive-collapse">
            <ul class="nav navbar-nav">
                <li class="title"><a href="#">MagicTec School</a></li>
            </ul><!--end nav-->
        </div><!--end nav-collapse-->
    </nav><!-- end navbar-default -->

	<!-- =============================
	LOGIN FORM
	============================== -->

	<div class="row" id="login">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title">
					<h4><span class="fa fa-2x fa-user text-center">&nbsp;Login</span></h4>
				</div><!-- end panel title -->
			</div><!-- end panel-header -->
			<div class="panel-body">
				<form class="form-horizontal" method="post" action="php/login.php" id="loginForm">
					<!--==form-groups==-->
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>
							<input type="text" class="form-control" name="username" id="username" placeholder="email" />
						</div>
					</div><!-- end username -->
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock fa-fw" aria-hidden="true"></i></span>
							<input type="password" class="form-control" name="password" id="password" placeholder="password" />
						</div>
					</div><!-- end password -->
					<!--==end form-groups==-->

					<input type="submit" class="btn btn-success" id="loginSubmit" name="login" value="Login">
				</form><!-- end login form -->
			</div><!-- end panel-body -->
            <div class="panel-footer">
                <a href="#" class="form-control btn btn-link" role="button" id="forgotPass">Forgot password?</a>
                <a href="#create_account_modal" class="btn btn-link" role="button" data-toggle="modal" id="createAccount">Create Account?</a>
            </div><!-- end panel footer -->
		</div><!-- end panel -->
	</div><!-- end login -->

    <!-- ======================
    FORGOT PASSWORD ALERT
    ======================= -->

    <div class="alert alert-danger thumbnail" id="alert_forgot_password">
        <button class="close" type="button" role="button" data-dismiss="alert" id="close"><i class="fa fa-times-circle text-danger"></i></button>
        <h5 class="text-danger">Please enter your username or ID number, to recover your password.</h5>
        <hr />
        <form class="form-horizontal" action="php/recover.php" method="post">
            <div class="form-group">
                <label class="col-md-3 control-label" for="user_pass">Username/ ID No:</label>
                <div class="col-md-9">
                    <input class="form-control" type="text" id="user_pass" name="username" placeholder="fwatilah@gmail.com">
                </div>
            </div>
            <input type="submit" class="btn btn-primary" id="recover_btn" name="recover_btn" value="Recover">
        </form>
    </div>

	<!-- =============================
	REGISTER MODAL FORM
	============================== -->

    <div class="modal fade" id="create_account_modal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button role="button" class="close fa fa-2x fa-times-circle" data-dismiss="modal"></button>
                    <h4 class="text-center">Please, ensure that you fill all the required fields.</h4>
                </div><!-- end modal-footer -->
                <div class="modal-body">
                    <form class="form-horizontal" action="php/register.php" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="name">Name:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" id="name" name="name" placeholder="Felix Watilah">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="email">Email:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="email" id="email" name="email" placeholder="fwatilah@gmail.com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="id_no">ID No:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" id="id_no" name="id_no" placeholder="29007776">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Gender:</label>
                                    <div class="col-md-9">
                                        <label class="control-label radio-inline" for="male"><input type="radio" class="radio" name="gender" id="male" value="male" checked="checked">&nbsp;Male</label>
                                        <label class="control-label radio-inline" for="female"><input type="radio" class="radio" name="gender" value="female" id="female">&nbsp;Female</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="job_no">Job No:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" id="job_no" name="job_no" placeholder="JB-001/2014">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="category">Category:</label>
                                    <div class="col-md-9">
                                        <select class="form-control" id="category" name="category">
                                            <option selected="selected" value="networking">Networking</option>
                                            <option value="programming">Programming</option>
                                            <option value="mathematics">Mathematics</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="work_type">Work Type:</label>
                                    <div class="col-md-9">
                                        <select class="form-control" id="work_type" name="work_type">
                                            <option selected="selected" value="permanent">Permanent</option>
                                            <option value="part_time">Part-time</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="phone">Phone No:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" id="phone" name="phone" placeholder="0712423121">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="county">County:</label>
                                    <div class="col-md-9">
                                        <select class="form-control" id="county" name="county">
                                            <option selected="selected" value="nairobi">Nairobi</option>
                                            <option value="trans">Trans-Nzoia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="department">Department:</label>
                                    <div class="col-md-9">
                                        <select class="form-control" id="department" name="department">
                                            <option selected="selected" value="Computer Science">Computer Science</option>
                                            <option value="Information Technology">Information Technology</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="passcode">Passcode:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="password" id="passcode" name="passcode" placeholder="***************">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="c_passcode">Confirm Passcode:</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="password" id="c_passcode" name="passcode" placeholder="***************">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                        </div><!-- end row -->
                        <div class="row text-center" id="modal_buttons">
                            <input type="submit" class="btn btn-success" value="Register" id="register">
                        </div><!-- end row -->
                    </form><!-- end form -->
                </div><!-- end modal-body -->
            </div><!-- end modal-content -->
        </div><!-- end modal-dialog -->
    </div><!-- end modal -->

</div><!-- end container-fluid -->	

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>