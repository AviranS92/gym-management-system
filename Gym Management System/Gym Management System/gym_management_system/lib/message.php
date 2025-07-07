<?php
	include_once("../includes/db_connect.php");
	include_once("../includes/functions.php");
	if($_REQUEST[act]=="save_message")
	{
		save_message();
		exit;
	}
	if($_REQUEST[act]=="delete_message")
	{
		delete_message();
		exit;
	}
	if($_REQUEST[act]=="getData")
	{
		getData();
		exit;
	}
	if($_REQUEST[act]=="get_report")
	{
		get_report();
		exit;
	}
	###Code for save message#####
	function save_message()
	{
		global $con;
		$R=$_REQUEST;
		if($R[message_id])
		{
			$statement = "UPDATE `message` SET";
			$cond = "WHERE `message_id` = '$R[message_id]'";
			$msg = "Data Updated Successfully.";
		}
		else
		{
			$statement = "INSERT INTO `message` SET";
			$cond = "";
			$msg="Data saved successfully.";
		}
		$SQL=   $statement." 
				`message_receiver_id` = '$R[message_receiver_id]', 
				`message_sender_id` = '".$_SESSION['user_details']['user_id']."',
				`message_sender_type` = '".$_SESSION['user_details']['user_level_id']."',				
				`message_subject` = '$R[message_subject]',
				`message_type` = '$R[message_type]',				
				`message_content` = '$R[message_content]'". 
				 $cond;
		$rs = mysqli_query($con,$SQL) or die(mysqli_error($con));
		$msg = "Message sent successfully.";
		header("Location:../send_message.php?msg=$msg");
	}
#########Function for delete message##########3
function delete_message()
{
	global $con;
	/////////Delete the record//////////
	$SQL="DELETE FROM message WHERE message_id = $_REQUEST[message_id]";
	mysqli_query($con,$SQL) or die(mysqli_error($con));
	
	header("Location:../message-report.php?msg=Deleted Successfully.");
}
#########Function for get message##########3
function getData()
{
	global $con;
	/////////Delete the record//////////
	$SQL = "SELECT * FROM message WHERE message_id = $_REQUEST[message_id]";
	$rs = mysqli_query($con,$SQL) or die(mysqli_error($con));
	$data = mysqli_fetch_assoc($rs);
	$data['message_content'] = nl2br($data['message_content']);
	echo json_encode($data);
}
?>