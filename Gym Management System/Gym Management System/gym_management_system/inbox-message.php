<?php 
	include_once("includes/header.php"); 
	$SQL="SELECT * FROM message WHERE message_receiver_id = '".$_SESSION['user_details']['user_id']."' AND message_type = '".$_SESSION['user_details']['user_level_id']."'";
	$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
?>
<script>
jQuery(document).on("click", ".delete-dialog", function () {
	$.get("lib/message.php?act=getData&message_id="+$(this).data('id'), function( data ) {
		data = $.parseJSON(data);
		jQuery("#inbox_subject").html(data['message_subject']);
		jQuery("#inbox_message").html(data['message_content']);
		jQuery("#inbox_date").html(data['message_date']);
	});
     var id = $(this).data('id');
	 $("#recordID").val( id );
});
function delete_record(message_id)
{
	this.document.frm_message.act.value="delete_message";
	this.document.frm_message.submit();
}
</script>
 <!--breadcrumbs start-->
 <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>All Received Messages</h1>
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
		<div style="text-align:left; clear:both; font-weight:bold; border-bottom:1px solid #cccccc; width:100%; margin-bottom:20px;"><h3>All Message History</h3></div>
		<?php include_once("includes/message_tabs.php"); ?>
			<div style="clear:both"></div>
			<form name="frm_message" action="lib/message.php" method="post">
			  <section class="panel">
				  <?php if($_REQUEST['msg']) { ?>
				  <div class="alert alert-success fade in" style="margin:10px;">
					  <strong><?=$_REQUEST['msg']?></strong>
				  </div>
				  <?php } ?>
				  <table class="table table-striped table-advance table-hover">
				   <tbody>
					  <tr>
					     <th>Message From</th>
						 <th>Subject</th>
						 <th>Date</th>
						 <th>Action</th>
					  </tr>
					  <?php 
						$sr_no=1;
						while($data = mysqli_fetch_assoc($rs))
						{
							if($data['message_type'] == 2)
							{
								$SQL= "SELECT * FROM user WHERE user_id = '".$data[message_sender_id]."'";
								$senderRs = mysqli_query($con,$SQL) or die(mysqli_error($con));
								$senderData = mysqli_fetch_assoc($senderRs);
								$name = $senderData['user_name'];
								$type = "Professor";
							}
							if($data['message_type'] == 3)
							{
								$SQL= "SELECT * FROM subscriber WHERE subscriber_id = '$data[message_receiver_id]'";
								$senderRs = mysqli_query($con,$SQL) or die(mysqli_error($con));
								$senderData = mysqli_fetch_assoc($senderRs);
								$type ="Student";
								$name = $senderData['subscriber_name'];
							}
					  ?>
					  <tr>
						 <td><?=$name?></td>
						 <td><?=$data[message_subject]?></td>
						 <td><?=$data[message_date]?></td>
						 <td>
						  <div class="btn-group">
						  <a href="message-view.php?message_id=<?php echo $data[message_id] ?>" class="btn btn-primary">View</a>
						  </div>
						  </td>
					  </tr>
					  <?php } ?>
				   </tbody>
				</table>
			  </section>
			  <input type="hidden" name="act" />
			  <input type="hidden" name="message_id" id="recordID" />
			 </form>
			 </div>
     </div>
    <!--container end-->
<?php include_once("includes/footer.php"); ?>
