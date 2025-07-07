<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[payment_id])
	{
		$SQL="SELECT * FROM `payment` WHERE payment_id = $_REQUEST[payment_id]";
		$rs=mysqli_query($con,$SQL) or die(mysqli_error());
		$data=mysqli_fetch_assoc($rs);
	}
?>
<script>
jQuery(function() {
	jQuery( "#payment_date" ).datepicker({
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
                    <h1>Payment Management</h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="registration-bg">
        <div class="container">
            <form action="lib/payment.php" class="form-signin wow fadeInUp" action="" style="max-width:800px">
                <h2 class="form-signin-heading">Add Payment</h2>
                <div class="login-wrap">                    
                    <div class="form-group">
						<label for="pwd">Select User</label>
						<select name="payment_user_id" required class="form-control" placeholder="Select User" autofocus=""/>
							<?php echo get_new_optionlist("subscriber","subscriber_id","subscriber_name",$data[payment_user_id]); ?>
						</select>
				    </div>
                    <div class="form-group">
						<label for="pwd">Select Month</label>
						<select name="payment_for_month" required class="form-control" placeholder="Select Month" autofocus=""/>
							<?php echo get_new_optionlist("month","month_id","month_name",$data[payment_for_month]); ?>
						</select>
				    </div>
                    <div class="form-group">
						<label for="pwd">Payment Date</label>
						<input type="text" class="form-control" placeholder="Payment Date" autofocus="" name="payment_date" id="payment_date" value="<?=$data[payment_date]?>">
				    </div>
				    <div class="form-group">
						<label for="pwd">Payment Amount</label>
						<input type="text" class="form-control" placeholder="Payment Amount" autofocus="" name="payment_amount" value="<?=$data[payment_amount]?>">
				    </div>
				     <div class="form-group">
						<label for="pwd">Payment Description</label>
						<textarea class="form-control" rows="8" style="height:150px;" name="payment_description" ><?=$data[payment_description]?></textarea>
				    </div>
                    <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>
                </div>
                <input type="hidden" name="act" value="save_payment">
				<input type="hidden" name="payment_id" value="<?=$data[payment_id]?>">
            </form>
        </div>
     </div>
    <!--container end-->
<?php include_once("includes/footer.php"); ?>
