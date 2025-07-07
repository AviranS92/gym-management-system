<?php
	session_start();
	include_once("../includes/db_connect.php");
	include_once("../includes/functions.php");
	if($_REQUEST[act]=="save_subscriber")
	{
		save_subscriber();
		exit;
	}
	if($_REQUEST[act]=="delete_subscriber")
	{
		delete_subscriber();
		exit;
	}
	if($_REQUEST[act]=="get_report")
	{
		get_report();
		exit;
	}
	###Code for save subscriber#####
	function save_subscriber()
	{
		global $con;
		$R=$_REQUEST;
		/////////////////////////////////////
		$image_name = $_FILES[subscriber_image][name];
		$location = $_FILES[subscriber_image][tmp_name];
		if($image_name!="")
		{
			move_uploaded_file($location,"../uploads/".$image_name);
		}
		else
		{
			$image_name = $R[avail_image];
		}
		//die;
		if($R[subscriber_id])
		{
			$statement = "UPDATE `subscriber` SET";
			$cond = "WHERE `subscriber_id` = '$R[subscriber_id]'";
			$msg = "Data Updated Successfully.";
			$condQuery = "";
		}
		else
		{
			$statement = "INSERT INTO `subscriber` SET";
			$cond = "";
			$msg="Data saved successfully.";
		}
		$SQL=   $statement." 
				`subscriber_name` = '$R[subscriber_name]', 
				`subscriber_thesis` = '$R[subscriber_thesis]', 
				`subscriber_password` = '$R[subscriber_password]', 
				`subscriber_age` = '$R[subscriber_age]', 
				`subscriber_gender` = '$R[subscriber_gender]', 
				`subscriber_email` = '$R[subscriber_email]', 
				`subscriber_mobile` = '$R[subscriber_mobile]', 
				`subscriber_package` = '$R[subscriber_package]',
				`subscriber_image` = '$image_name'". 
				 $cond;
		$rs = mysqli_query($con,$SQL) or die(mysqli_error($con));
		
		
		if($_SESSION['subscriber_details']['subscriber_level_id'] == 3) {
			header("Location:../subscriber.php?subscriber_id=".$_SESSION['subscriber_details']['subscriber_id']."&msg=Your account updated successfully !!!");
			exit;
		}
		header("Location:../report-subscriber.php?msg=$msg");
	}
#########Function for delete subscriber##########3
function delete_subscriber()
{
	global $con;
	$SQL="SELECT * FROM subscriber WHERE subscriber_id = $_REQUEST[subscriber_id]";
	$rs=mysqli_query($con,$SQL);
	$data=mysqli_fetch_assoc($rs);
	
	/////////Delete the record//////////
	$SQL="DELETE FROM subscriber WHERE subscriber_id = $_REQUEST[subscriber_id]";
	mysqli_query($con,$SQL) or die(mysqli_error());
	
	//////////Delete the image///////////
	if($data[subscriber_image])
	{
		unlink("../uploads/".$data[subscriber_image]);
	}
	header("Location:../report-subscriber.php?msg=Deleted Successfully.");
}
?>
