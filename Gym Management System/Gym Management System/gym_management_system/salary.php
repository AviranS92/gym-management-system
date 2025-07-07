<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[salary_id])
	{
		$SQL="SELECT * FROM `salary` WHERE salary_id = $_REQUEST[salary_id]";
		$rs=mysqli_query($con,$SQL) or die(mysqli_error());
		$data=mysqli_fetch_assoc($rs);
	}
?>
<script>
jQuery(function() {
	jQuery( "#salary_date" ).datepicker({
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
                    <h1>Salary Management</h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="registration-bg">
        <div class="container">
            <form action="lib/salary.php" enctype="multipart/form-data" method="post" class="form-signin wow fadeInUp" action="" style="max-width:800px">
                <h2 class="form-signin-heading">Add Salary</h2>
                <div class="login-wrap">          
				<div class="form-group">
						<label for="pwd">Select User</label>
						<select name="salary_user_id" required class="form-control" placeholder="Select User" autofocus=""/>
							<?php echo get_new_optionlist("user","user_id","user_name",$data[salary_user_id]); ?>
						</select>
				    </div>
                    <div class="form-group">
						<label for="pwd">Select Month</label>
						<select name="salary_for_month" required class="form-control" placeholder="Select Month" autofocus=""/>
							<?php echo get_new_optionlist("month","month_id","month_name",$data[salary_for_month]); ?>
						</select>
				    </div>
                    <div class="form-group">
						<label for="pwd">Salary Date</label>
						<input type="text" class="form-control" placeholder="Salary Date" autofocus="" name="salary_date" id="salary_date" value="<?=$data[salary_date]?>">
				    </div>
				    <div class="form-group">
						<label for="pwd">Salary Amount</label>
						<input type="text" class="form-control" placeholder="Salary Amount" autofocus="" name="salary_amount" value="<?=$data[salary_amount]?>">
				    </div>
				     <div class="form-group">
						<label for="pwd">Salary Description</label>
						<textarea class="form-control" rows="8" style="height:150px;" name="salary_description" ><?=$data[salary_description]?></textarea>
				    </div>
				    <div class="form-group">
						<label for="pwd">Salary Slip</label>
						<input type="file" class="form-control" placeholder="Salary Mobile" autofocus="" name="salary_image" id="salary_image" value="<?=$data[salary_image]?>">
						<?php if(isset($data[salary_image]) && $data[salary_image] != "")  {?>
						<div><img src="<?=$SERVER_PATH.'uploads/'.$data[salary_image]?>" style="width: 100px"></div><br>
						<?php } ?>
				    </div>
                    <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>
                </div>
                <input type="hidden" name="act" value="save_salary">
                <input type="hidden" name="avail_image" value="<?=$data[salary_image]?>">
				<input type="hidden" name="salary_id" value="<?=$data[salary_id]?>">
            </form>
        </div>
     </div>
    <!--container end-->
<?php include_once("includes/footer.php"); ?>
