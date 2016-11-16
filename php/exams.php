<?php
/**
 * Created by PhpStorm.
 * User: Watilah
 * Date: 10/28/2016
 * Time: 7:15 PM
 */
include "phpconfig/db_config.php";

mysqli_select_db($conn,'student');

$sql = "SELECT * FROM new_student ORDER BY full_name";
$result = mysqli_query($conn,$sql);


echo"<div class='panel panel-success'>
<div class='panel-heading'>
<h4 class='panel-title text-center'>Please insert marks.</h4>
</div>
<div class='panel-body'>
<table class='table table-bordered table-striped table-responsive table-condensed table-hover'>
<tr class='danger text-danger'>
<th>Name</th>
<th>BIT 2204</th>
<th>BIT 2104</th>
<th>ICS 2302</th>
<th>ICS 2200</th>
<th>SMA 2404</th>
<th>SMA 2103</th>
<th>BIT 2123</th>
<th>BIT 2122</th>
</tr>";
while ($row = mysqli_fetch_assoc($result)){
    echo"
     <tr id='fs'>
     <td id='nm'>".$row['full_name']."</td>
     <td><input type='text' class='form-control'></td>
     <td><input type='text' class='form-control'></td>
     <td><input type='text' class='form-control'></td>
     <td><input type='text' class='form-control'></td>
     <td><input type='text' class='form-control'></td>
     <td><input type='text' class='form-control'></td>
     <td><input type='text' class='form-control'></td>
     <td><input type='text' class='form-control'></td>
     </tr>";
}
echo"</table>
<hr>
<div class='btn-group'>
    <input type='submit' class='btn btn-success' value='Save'>
</div>
</div>
    <div class='panel-footer'>
            <h5 class='text-danger text-center'>
                <strong class='text-danger'>&nbsp;<a href='https://www.facebook.com/'><i class='fa fa-2x fa-facebook-square text-success sb'>&nbsp;</i></a>&nbsp;</strong>
                <strong class='text-danger'>&nbsp;<a href='#'><i class='fa fa-2x fa-github-square text-success sb'>&nbsp;</i></a>&nbsp;</strong>
                <strong class='text-danger text-capitalize'>&nbsp;<a href='#'><i class='fa fa-2x fa-twitter-square text-success sb'>&nbsp;</i></a>&nbsp;</strong>
            </h5>
    </div>
</div>";

mysqli_free_result($result);

mysqli_close($conn);

?>