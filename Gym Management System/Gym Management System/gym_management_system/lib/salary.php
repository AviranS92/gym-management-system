<?php
	session_start();
	include_once("../includes/db_connect.php");
	include_once("../includes/functions.php");
	if($_REQUEST[act]=="save_salary")
	{
		save_salary();
		exit;
	}
	if($_REQUEST[act]=="delete_salary")
	{
		delete_salary();
		exit;
	}
	if($_REQUEST[act]=="get_report")
	{
		get_report();
		exit;
	}
	###Code for save salary#####
	function save_salary()
	{
		global $con;
		$R=$_REQUEST;
		/////////////////////////////////////
		$image_name = $_FILES[salary_image][name];
		$location = $_FILES[salary_image][tmp_name];
		if($image_name!="")
		{
			move_uploaded_file($location,"../uploads/".$image_name);
		}
		else
		{
			$image_name = $R[avail_image];
		}
		//die;
		if($R[salary_id])
		{
			$statement = "UPDATE `salary` SET";
			$cond = "WHERE `salary_id` = '$R[salary_id]'";
			$msg = "Data Updated Successfully.";
			$condQuery = "";
		}
		else
		{
			$statement = "INSERT INTO `salary` SET";
			$cond = "";
			$msg="Data saved successfully.";
		}
		$SQL=   $statement." 
				`salary_user_id` = '$R[salary_user_id]', 
				`salary_for_month` = '$R[salary_for_month]', 
				`salary_date` = '$R[salary_date]', 
				`salary_amount` = '$R[salary_amount]', 
				`salary_description` = '$R[salary_description]',
				`salary_image` = '$image_name'". 
				 $cond;
		$rs = mysqli_query($con,$SQL) or die(mysqli_error($con));
		header("Location:../report-salary.php?msg=$msg");
	}
#########Function for delete salary##########3
function delete_salary()
{
	global $con;
	$SQL="SELECT * FROM salary WHERE salary_id = $_REQUEST[salary_id]";
	$rs=mysqli_query($con,$SQL);
	$data=mysqli_fetch_assoc($rs);
	
	/////////Delete the record//////////
	$SQL="DELETE FROM salary WHERE salary_id = $_REQUEST[salary_id]";
	mysqli_query($con,$SQL) or die(mysqli_error());
	
	//////////Delete the image///////////
	if($data[salary_image])
	{
		unlink("../uploads/".$data[salary_image]);
	}
	header("Location:../report-salary.php?msg=Deleted Successfully.");
}
?>
