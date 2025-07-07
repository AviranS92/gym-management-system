<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[attendance_id])
	{
		$SQL="SELECT * FROM `attendance` WHERE attendance_id = $_REQUEST[attendance_id]";
		$rs=mysqli_query($con,$SQL) or die(mysqli_error());
		$data=mysqli_fetch_assoc($rs);
	}
?>
<script>
jQuery(function() {
	jQuery( "#attendance_date" ).datepicker({
	  changeMonth: true,
	  changeYear: true,
	   yearRange: "0:+1",
	   dateFormat: 'd MM,yy'
	});
});
</script>
    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>Attendance Management</h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="registration-bg">
        <div class="container">
            <form action="lib/attendance.php" class="form-signin wow fadeInUp" action="" style="max-width:800px">
                <h2 class="form-signin-heading">Add Attendance</h2>
                <div class="login-wrap">                    
                    <div class="form-group">
						<label for="pwd">Select Subscriber</label>
						<select name="attendance_user_id" required class="form-control" placeholder="Select User" autofocus=""/>
							<?php echo get_new_optionlist("subscriber","subscriber_id","subscriber_name",$data[attendance_user_id]); ?>
						</select>
				    </div>
                    <div class="form-group">
						<label for="pwd">Attendance Date</label>
						<input type="text" class="form-control" placeholder="Attendance Date" autofocus="" name="attendance_date" id="attendance_date" value="<?=$data[attendance_date]?>">
				    </div>
				     <div class="form-group">
						<label for="pwd">Attendance Description</label>
						<textarea class="form-control" rows="8" style="height:150px;" name="attendance_description" ><?=$data[attendance_description]?></textarea>
				    </div>
                    <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>
                </div>
                <input type="hidden" name="act" value="save_attendance">
				<input type="hidden" name="attendance_id" value="<?=$data[attendance_id]?>">
            </form>
        </div>
     </div>
    <!--container end-->
<?php include_once("includes/footer.php"); ?>
