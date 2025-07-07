<?php 
	include_once("includes/header.php"); 
	include_once("includes/db_connect.php"); 
	$SQL="SELECT * FROM `attendance`,`subscriber` WHERE attendance_user_id = subscriber_id";
	if($_SESSION['user_details']['user_level_id'] == 3) {
		$SQL="SELECT * FROM `attendance`,`subscriber` WHERE attendance_user_id = subscriber_id AND subscriber_id = ".$_SESSION['user_details']['user_id'];
	}
	$rs=mysqli_query($con,$SQL) or die(mysqli_error());
?>

<script>
$(document).on("click", ".delete-dialog", function () {
     var id = $(this).data('id');
	 $("#recordID").val( id );
});
function delete_record(attendance_id)
{
	this.document.frm.act.value="delete_attendance";
	this.document.frm.submit();
}
</script>

    <!--breadcrumbs start-->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>
              Attendance Report
            </h1>
          </div>
        </div>
      </div>
    </div>
    <!--breadcrumbs end-->

 <div class="container">
		 <?php if($_REQUEST['msg']) { ?>
		  <div class="alert alert-success fade in" style="margin:10px;">
			  <strong><?=$_REQUEST['msg']?></strong>
		  </div>
		  <?php } ?>
		<div class="row">
		  <div class="col-lg-12">
			<form name="frm" action="lib/attendance.php" method="post">
			  <section class="panel">
				 
				  <table class="table table-striped table-advance table-hover" style="color:#000000">
				   <tbody>
					  <tr class="bg-primary">
						<th style="background-color:#34495e; color:#FFFFFF;">Sr. No.</th>
						<th style="background-color:#34495e; color:#FFFFFF;">Name</th>
						<th style="background-color:#34495e; color:#FFFFFF;">Date</th>
						<?php if($_SESSION['user_details']['user_level_id'] != 3) { ?>
						<th style="background-color:#34495e; color:#FFFFFF;"><i class="icon_cogs"></i> Action</th>
						<?php } ?>
					  </tr>
					  <?php 
						$sr_no=1;
						while($data = mysqli_fetch_assoc($rs))
						{
					  ?>
					  <tr>
						<td><?=$sr_no++?></td>
						<td><?=$data[subscriber_name]?></td>
						<td><?=$data[attendance_date]?></td>
						<?php if($_SESSION['user_details']['user_level_id'] != 3) { ?>
						<td>
						  <div class="btn-group">
						     <a href="attendance.php?attendance_id=<?php echo $data[attendance_id] ?>" class="btn btn-success">Edit</a>
                             <a class="delete-dialog btn btn-danger" data-id="<?php echo $data[attendance_id] ?>" data-toggle="modal" href="#myModal-2">Delete</a>
						  </div>
						  </td>
						  <?php } ?>
					  </tr>
					  <?php } ?>
				   </tbody>
				</table>
			  </section>
			  <input type="hidden" name="act" />
			  <input type="hidden" name="attendance_id" id="recordID" />
			 </form>
		  </div>
	  </div>
	</div>

    <!--footer start-->
		<?php include_once("includes/footer.php"); ?>
    <!--small footer end-->
  </body>
</html>
