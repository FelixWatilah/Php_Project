<?php
session_start();
if(!isset($_SESSION['email'])){
    header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="../css/fa/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
<!--<div class="container-fluid">-->
    <div class='panel panel-success'>
        <div class='panel-heading'>
            <div class='row'>
                <div class='col-md-12 col-sm-12'>
                    <h4 class='panel-title text-center'>Update Student Details.</h4>
                </div>
            </div>
        </div><!-- end panel-heading -->
        <div class='panel-body'>
            <form class='form-horizontal' role='form' action='../php/update.php' method='GET'>
                <div class="col-md-8 col-sm-8">
                    <div class='form-group'>
                        <label class="col-md-3 col-sm-3">Admission Number:</label>
                        <div class='col-md-7 col-sm-7'>
                            <input type='text' class='form-control' name='search' id='search' placeholder='CIT-221-010/2014'>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="form-group">
                        <label for='search_input' class="col-md-2 col-sm-2"><button type='submit' class='btn btn-default reg' name="search_upd" id='search_button'><i class="fa fa-search"></i>&nbsp;Search</button></label>
                    </div>
                </div>
            </form>
            <?php
            if (isset($_GET['search_upd'])){

                $search = $_GET['search'];

                include "phpconfig/db_config.php";

                mysqli_select_db($conn,'student');

                $sql = "SELECT * FROM new_student WHERE adm_no = '$search'";
                $result = mysqli_query($conn,$sql);

                while ($row = mysqli_fetch_assoc($result)){
                    if ($search ===$row['adm_no']){

                        $full_name=$row['full_name'];
                        $email=$row['email'];
                        $phone=$row['phone'];
                        $adm_no=$row['adm_no'];
                        $academic_year=$row['academic_year'];
                        $dob=$row['dob'];
                        $gender=$row['gender'];
                        $student_type=$row['student_type'];
                        $county=$row['county'];
                        $town=$row['town'];
                        $address=$row['address'];
                        $category=$row['category'];
                        $tribe=$row['tribe'];

                        echo "<form class='form-horizontal' action='update_new_student.php' method='post' id='add_new_form'>";
                        echo "<div class='row'>";
                        echo "<div class='col-md-6 col-sm-6'>";
                        echo "<section >";
                        echo "<!--==form-groups==-->";
                        echo "<div class='form-group'>";
                        echo "<label for='full_name' class='control-label col-md-3 col-sm-3'>Full Name:</label>";
                        echo "<div class='col-md-9 col-sm-9'>";
                        echo "<input type='text' class='form-control' name='full_name' value='$full_name' id='full_name' placeholder='Felix Watilah'>";
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                        echo "<label for='email' class='control-label col-md-3 col-sm-3'>Email:</label>";
                        echo "<div class='col-md-9 col-sm-9'>";
                        echo "<input type='email' class='form-control' name='email' value='$email' id='email' placeholder='fwatilah@gmail.com'>";
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                        echo "<label for='phone' class='control-label col-md-3 col-sm-3'>Phone:</label>";
                        echo "<div class='col-md-9 col-sm-9'>";
                        echo "<input type='text' class='form-control' name='phone' value='$phone' id='phone' placeholder='0790388511'>";
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                        echo "<label for='adm_no' class='control-label col-md-3 col-sm-3'>Adm No:</label>";
                        echo "<div class='col-md-9 col-sm-9'>";
                        echo "<input type='text' class='form-control' name='adm_no' value='$adm_no' id='adm_no' placeholder='CIT-221-010/2014'>";
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                        echo "<label for='academic_year' class='control-label col-md-3 col-sm-3'>Academic Year:</label>";
                        echo "<div class='col-md-9 col-sm-9'>";
                        echo "<input type='text' class='form-control' name='academic_year' value='$academic_year' id='academic_year' placeholder='Y3S1'>";
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                        echo "<label for='dob' class='control-label col-md-3 col-sm-3'>D.O.B:</label>";
                        echo "<div class='col-md-9 col-sm-9'>";
                        echo "<input type='text' class='form-control' name='dob' value='$dob' id='dob' placeholder='01/01/1900'>";
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                        echo "<label class='control-label col-md-3 col-sm-3'>Gender:</label>";
                        echo "<div class='col-md-9 col-sm-9'>";
                        echo "<label for='male' class='control-label radio-inline'><input type='radio' class='radio gender' name='gender' id='male' value='male' checked='checked'>Male</label>";
                        echo "<label for='female' class='control-label radio-inline'><input type='radio' class='radio gender' name='gender' id='female' value='female'>Female</label>";
                        echo "</div>";
                        echo "</div>";
                        echo "<!--==end form-groups==-->";
                        echo "</section><!-- end form-horizontal -->";
                        echo "</div><!-- end col-md-6 -->";
                        echo "<div class='col-md-6 col-sm-6'>";
                        echo "<section>";
                        echo "<!--==form-groups==-->";
                        echo "<div class='form-group'>";
                        echo "<label for='student_type' class='control-label col-md-3 col-sm-3'>Student Type:</label>";
                        echo "<div class='col-md-9 col-sm-9'>";
                        echo "<select id='student_type' class='form-control' name='student_type'>";
                        echo "<option value='Regular' selected='selected'>Regular</option>";
                        echo "<option value='Self-Sponsored'>Self-Sponsored</option>";
                        echo "</select>";
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                        echo "<label for='county' class='control-label col-md-3 col-sm-3'>County:</label>";
                        echo "<div class='col-md-9 col-sm-9'>";
                        echo "<select class='form-control' id='county' name='county'>";
                        echo "<option value='Trans-Nzoia' selected='selected'>Trans-Nzoia</option>";
                        echo "<option value='Nairobi'>Nairobi</option>";
                        echo "</select>";
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                        echo "<label for='town' class='control-label col-md-3 col-sm-3'>Town:</label>";
                        echo "<div class='col-md-9 col-sm-9'>";
                        echo "<input type='text' class='form-control' name='town' value='$town' id='town' placeholder='Kitale'>";
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                        echo "<label for='address' class='control-label col-md-3 col-sm-3'>Address:</label>";
                        echo "<div class='col-md-9 col-sm-9'>";
                        echo "<input type='text' class='form-control' name='address' value='$address' id='address' placeholder='200 - 30200 Kitale'>";
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                        echo "<label for='category' class='control-label col-md-3 col-sm-3'>Category:</label>";
                        echo "<div class='col-md-9 col-sm-9'>";
                        echo "<select class='form-control' id='category' name='category'>";
                        echo "<option value='Boarder' selected='selected'>Boarder</option>";
                        echo "<option value='Day Scholar'>Day Scholar</option>";
                        echo "</select>";
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                        echo "<label for='tribe' class='control-label col-md-3 col-sm-3'>Tribe:</label>";
                        echo "<div class='col-sm-9'>";
                        echo "<input type='text' class='form-control' name='tribe' value='$tribe' id='tribe' placeholder='Luhya'>";
                        echo "</div>";
                        echo "</div>";
                        echo "<!-- ==end form-groups== -->";
                        echo "</section><!-- end form-horizontal -->";
                        echo "</div><!-- end col-md-6 -->";
                        echo "</div><!-- end row -->";
                        echo "<div class='form-group text-center' id='buttons'>";
                        echo "<input role='button' type='submit' class='btn btn-primary fbtn' name='update' id='update' value='Update'>";
                        echo "<input role='button' type='button' class='btn btn-danger fbtn' id='exit' value='Exit'>";
                        echo "</div><!-- end buttons -->";
                        echo "</form><!-- end form-horizontal -->";
                    }else{
                        header("update.php");
                    }
                }
                mysqli_close($conn);
            }
                                                                                                                                                                                                                                                                                                                                                             ?>
        </div><!-- end panel-body -->
        <div class='panel-footer'>
            <h5 class='text-danger text-center'>
                <strong class='text-danger'>&nbsp;<a href='https://www.facebook.com/'><i class='fa fa-2x fa-facebook-square text-success sb'>&nbsp;</i></a>&nbsp;</strong>
                <strong class='text-danger'>&nbsp;<a href='#'><i class='fa fa-2x fa-github-square text-success sb'>&nbsp;</i></a>&nbsp;</strong>
                <strong class='text-danger text-capitalize'>&nbsp;<a href='#'><i class='fa fa-2x fa-twitter-square text-success sb'>&nbsp;</i></a>&nbsp;</strong>
            </h5>
        </div>
    </div><!-- end panel -->
<!--</div>-->
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/custom.js"></script>
</body>
</html>