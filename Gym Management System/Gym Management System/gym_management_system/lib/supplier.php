<?php
	session_start();
	include_once("../includes/db_connect.php");
	include_once("../includes/functions.php");
	if($_REQUEST[act]=="save_supplier")
	{
		save_supplier();
		exit;
	}
	if($_REQUEST[act]=="delete_supplier")
	{
		delete_supplier();
		exit;
	}
	if($_REQUEST[act]=="get_report")
	{
		get_report();
		exit;
	}
	###Code for save supplier#####
	function save_supplier()
	{
		global $con;
		$R=$_REQUEST;
		/////////////////////////////////////
		$image_name = $_FILES[supplier_image][name];
		$location = $_FILES[supplier_image][tmp_name];
		if($image_name!="")
		{
			move_uploaded_file($location,"../uploads/".$image_name);
		}
		else
		{
			$image_name = $R[avail_image];
		}
		//die;
		if($R[supplier_id])
		{
			$statement = "UPDATE `supplier` SET";
			$cond = "WHERE `supplier_id` = '$R[supplier_id]'";
			$msg = "Data Updated Successfully.";
			$condQuery = "";
		}
		else
		{
			$statement = "INSERT INTO `supplier` SET";
			$cond = "";
			$msg="Data saved successfully.";
		}
		$SQL=   $statement." 
				`supplier_name` = '$R[supplier_name]', 
				`supplier_add1` = '$R[supplier_add1]', 
				`supplier_add2` = '$R[supplier_add2]', 
				`supplier_city` = '$R[supplier_city]', 
				`supplier_state` = '$R[supplier_state]', 
				`supplier_country` = '$R[supplier_country]', 
				`supplier_email` = '$R[supplier_email]', 
				`supplier_mobile` = '$R[supplier_mobile]', 
				`supplier_equipments` = '$R[supplier_equipments]',
				`supplier_image` = '$image_name'". 
				 $cond;
		$rs = mysqli_query($con,$SQL) or die(mysqli_error());
		
		//// Creating Supplier Leaves /////
		if($R[supplier_id] == "") {
			$id = mysqli_insert_id();
		}
		
		if($_SESSION['login']!=1)
		{
			header("Location:../login.php?msg=You are registered successfully. Login with your credential !!!");
			exit;
		}
		else if($_SESSION['supplier_details']['supplier_level_id'] == 3) {
			header("Location:../supplier.php?supplier_id=".$_SESSION['supplier_details']['supplier_id']."&msg=Your account updated successfully !!!");
			exit;
		}
		header("Location:../report-supplier.php?msg=$msg");
	}
#########Function for delete supplier##########3
function delete_supplier()
{
	global $con;
	$SQL="SELECT * FROM supplier WHERE supplier_id = $_REQUEST[supplier_id]";
	$rs=mysqli_query($con,$SQL);
	$data=mysqli_fetch_assoc($rs);
	
	/////////Delete the record//////////
	$SQL="DELETE FROM supplier WHERE supplier_id = $_REQUEST[supplier_id]";
	mysqli_query($con,$SQL) or die(mysqli_error());
	
	//////////Delete the image///////////
	if($data[supplier_image])
	{
		unlink("../uploads/".$data[supplier_image]);
	}
	header("Location:../report-supplier.php?msg=Deleted Successfully.");
}
?>
