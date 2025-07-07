<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[equipment_id])
	{
		$SQL="SELECT * FROM `equipment` WHERE equipment_id = $_REQUEST[equipment_id]";
		$rs=mysqli_query($con,$SQL) or die(mysqli_error());
		$data=mysqli_fetch_assoc($rs);
	}
?>
<script>
jQuery(function() {
	jQuery( "#equipment_date" ).datepicker({
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
                    <h1>Equipment Management</h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="registration-bg">
        <div class="container">
            <form action="lib/equipment.php" class="form-signin wow fadeInUp" action="" style="max-width:800px">
                <h2 class="form-signin-heading">Add Equipment</h2>
                <div class="login-wrap">                    
                    <div class="form-group">
						<label for="pwd">Equipment Title</label>
						<input type="text" class="form-control" placeholder="Equipment Title" autofocus="" name="equipment_title" id="equipment_title" value="<?=$data[equipment_title]?>">
				    </div>
				    <div class="form-group">
						<label for="pwd">Total Quantity</label>
						<input type="text" class="form-control" placeholder="Total Quantity" autofocus="" name="equipment_quantity" id="equipment_quantity" value="<?=$data[equipment_quantity]?>">
				    </div>
				    <div class="form-group">
						<label for="pwd">Total Missing</label>
						<input type="text" class="form-control" placeholder="Total Missing" autofocus="" name="equipment_missing" id="equipment_missing" value="<?=$data[equipment_missing]?>">
				    </div>
					<div class="form-group">
						<label for="pwd">Total Defective</label>
						<input type="text" class="form-control" placeholder="Total Defective" autofocus="" name="equipment_defective" id="equipment_defective" value="<?=$data[equipment_defective]?>">
				    </div>
				     <div class="form-group">
						<label for="pwd">Equipment Description</label>
						<textarea class="form-control" rows="8" style="height:150px;" name="equipment_description" ><?=$data[equipment_description]?></textarea>
				    </div>
                    <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>
                </div>
                <input type="hidden" name="act" value="save_equipment">
				<input type="hidden" name="equipment_id" value="<?=$data[equipment_id]?>">
            </form>
        </div>
     </div>
    <!--container end-->
<?php include_once("includes/footer.php"); ?>
