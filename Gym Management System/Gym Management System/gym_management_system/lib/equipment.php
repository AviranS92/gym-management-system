<?php
	include_once("../includes/db_connect.php");
	include_once("../includes/functions.php");
	if($_REQUEST[act]=="save_equipment")
	{
		save_equipment();
		exit;
	}
	if($_REQUEST[act]=="delete_equipment")
	{
		delete_equipment();
		exit;
	}
	if($_REQUEST[act]=="update_equipment_status")
	{
		update_equipment_status();
		exit;
	}
	
	###Code for save equipment#####
	function save_equipment()
	{
		global $con;
		$R=$_REQUEST;						
		if($R[equipment_id])
		{
			$statement = "UPDATE `equipment` SET";
			$cond = "WHERE `equipment_id` = '$R[equipment_id]'";
			$msg = "Data Updated Successfully.";
		}
		else
		{
			$statement = "INSERT INTO `equipment` SET";
			$cond = "";
			$msg="Data saved successfully.";
		}
		$SQL=   $statement." 
				`equipment_title` = '$R[equipment_title]', 
				`equipment_quantity` = '$R[equipment_quantity]',
				`equipment_missing` = '$R[equipment_missing]',
				`equipment_defective` = '$R[equipment_defective]',				
				`equipment_description` = '$R[equipment_description]'". 
				 $cond;
		$rs = mysqli_query($con,$SQL) or die(mysqli_error());
		header("Location:../report-equipment.php?msg=$msg");
	}
#########Function for delete equipment##########3
function delete_equipment()
{	
	global $con;
	/////////Delete the record//////////
	$SQL="DELETE FROM equipment WHERE equipment_id = $_REQUEST[equipment_id]";
	mysqli_query($con,$SQL) or die(mysqli_error());
	header("Location:../report-equipment.php?msg=Deleted Successfully.");
}
?>
