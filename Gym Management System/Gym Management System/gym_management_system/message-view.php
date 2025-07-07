<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[message_id])
	{
		$SQL="SELECT * FROM message WHERE message_id = ".$_REQUEST['message_id'];
		$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
		$data=mysqli_fetch_assoc($rs);
	}
?>
<script>
jQuery(function() {
	jQuery( "#message_date" ).datepicker({
	  changeMonth: true,
	  changeYear: true,
	   yearRange: "-0:+1",
	   dateFormat: 'd MM,yy'
	});
});
</script>
<!--breadcrumbs start-->
<div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>Message Details</h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="registration-bg">
        <div class="container">
		<?php if($_REQUEST['msg']) { ?>
		  <div class="alert alert-success fade in" style="margin:10px;">
			  <strong><?=$_REQUEST['msg']?></strong>
		  </div>
		  <?php } ?>
		<div style="text-align:left; clear:both; font-weight:bold; border-bottom:1px solid #cccccc; width:100%; margin-bottom:20px;"><h3>Message Details</h3></div>

			<form class="form-horizontal" role="form" action="lib/message.php" method="post" enctype="multipart/form-data">
			  <div class="form-group">
				<label class="control-label col-sm-2" for="email">Subject : </label>
				<div class="col-sm-10" style="text-align:left"><?=$data['message_subject']?></div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-sm-2" for="email">Date : </label>
				<div class="col-sm-10" style="text-align:left"><?=$data['message_date']?></div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-sm-2" for="email">Message : </label>
				<div class="col-sm-10" style="text-align:left"><?=$data['message_subject']?></div>
			  </div>
			</form>
			</div>
     </div>
    <!--container end-->
<?php include_once("includes/footer.php"); ?>
