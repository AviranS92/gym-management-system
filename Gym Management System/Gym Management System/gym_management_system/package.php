<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[package_id])
	{
		$SQL="SELECT * FROM `package` WHERE package_id = $_REQUEST[package_id]";
		$rs=mysqli_query($con,$SQL) or die(mysqli_error());
		$data=mysqli_fetch_assoc($rs);
	}
?>
<script>
jQuery(function() {
	jQuery( "#package_date" ).datepicker({
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
                    <h1>Package Management</h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="registration-bg">
        <div class="container">
            <form action="lib/package.php" class="form-signin wow fadeInUp" action="" style="max-width:800px">
                <h2 class="form-signin-heading">Add Package</h2>
                <div class="login-wrap">                    
				    <div class="form-group">
						<label for="pwd">Package Title</label>
						<input type="text" class="form-control" placeholder="Package Title" autofocus="" name="package_title" value="<?=$data[package_title]?>">
				    </div>
				    <div class="form-group">
						<label for="pwd">Package Fees</label>
						<input type="text" class="form-control" placeholder="Package Fees" autofocus="" name="package_fees" id="package_fees" value="<?=$data[package_fees]?>">
				    </div>
				     <div class="form-group">
						<label for="pwd">Package Description</label>
						<textarea class="form-control" rows="8" style="height:150px;" name="package_description" ><?=$data[package_description]?></textarea>
				    </div>
                    <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>
                </div>
                <input type="hidden" name="act" value="save_package">
				<input type="hidden" name="package_id" value="<?=$data[package_id]?>">
            </form>
        </div>
     </div>
    <!--container end-->
<?php include_once("includes/footer.php"); ?>
