<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[supplier_id])
	{
		$SQL="SELECT * FROM `supplier` WHERE supplier_id = $_REQUEST[supplier_id]";
		$rs=mysqli_query($con,$SQL) or die(mysqli_error());
		$data=mysqli_fetch_assoc($rs);
	}
?>

    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>Supplier Management</h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="registration-bg">
        <div class="container">
            <form action="lib/supplier.php" enctype="multipart/form-data" method="post" class="form-signin wow fadeInUp" action="" style="max-width:800px">
                <h2 class="form-signin-heading">Add Supplier</h2>
                <div class="login-wrap">          
				    <div class="form-group">
						<label for="pwd">Supplier Name</label>
						<input type="text" class="form-control" placeholder="Supplier Name" autofocus="" name="supplier_name" id="supplier_name" value="<?=$data[supplier_name]?>">
				    </div>
				    <div class="form-group">
						<label for="pwd">Supplier Address Line 1</label>
						<input type="text" class="form-control" placeholder="Supplier Address Line 1" autofocus="" name="supplier_add1" id="supplier_date" value="<?=$data[supplier_add1]?>">
				    </div>
				    <div class="form-group">
						<label for="pwd">Supplier Address Line 2</label>
						<input type="text" class="form-control" placeholder="Supplier Address Line 2" autofocus="" name="supplier_add2" id="supplier_add2" value="<?=$data[supplier_add2]?>">
				    </div>
                    <div class="form-group">
						<label for="pwd">Supplier City</label>
						<select name="supplier_city" required class="form-control" placeholder="Select User" autofocus=""/>
							<?php echo get_new_optionlist("city","city_id","city_name",$data[supplier_city]); ?>
						</select>
				    </div>
                    <div class="form-group">
						<label for="pwd">Supplier State</label>
						<select name="supplier_state" required class="form-control" placeholder="Select Month" autofocus=""/>
							<?php echo get_new_optionlist("state","state_id","state_name",$data[supplier_state]); ?>
						</select>
				    </div>
				    <div class="form-group">
						<label for="pwd">Supplier Country</label>
						<select name="supplier_country" required class="form-control" placeholder="Select Month" autofocus=""/>
							<?php echo get_new_optionlist("country","country_id","country_name",$data[supplier_country]); ?>
						</select>
				    </div>
                    <div class="form-group">
						<label for="pwd">Supplier Email</label>
						<input type="text" class="form-control" placeholder="Supplier Email" autofocus="" name="supplier_email" id="supplier_email" value="<?=$data[supplier_email]?>">
				    </div>
				    <div class="form-group">
						<label for="pwd">Supplier Mobile</label>
						<input type="text" class="form-control" placeholder="Supplier Mobile" autofocus="" name="supplier_mobile" id="supplier_mobile" value="<?=$data[supplier_mobile]?>">
				    </div>
				    <div class="form-group">
						<label for="pwd">Supplier Equipments</label>
						<input type="text" class="form-control" placeholder="Supplier Equipments" autofocus="" id="supplier_equipments" name="supplier_equipments" value="<?=$data[supplier_equipments]?>">
				    </div>
				    <div class="form-group">
						<label for="pwd">Supplier Picture</label>
						<input type="file" class="form-control" placeholder="Supplier Mobile" autofocus="" name="supplier_image" id="supplier_image" value="<?=$data[supplier_image]?>">
						<?php if(isset($data[supplier_image]) && $data[supplier_image] != "")  {?>
						<div><img src="<?=$SERVER_PATH.'uploads/'.$data[supplier_image]?>" style="width: 100px"></div><br>
						<?php } ?>
				    </div>
                    <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>
                </div>
                <input type="hidden" name="act" value="save_supplier">
                <input type="hidden" name="avail_image" value="<?=$data[supplier_image]?>">
				<input type="hidden" name="supplier_id" value="<?=$data[supplier_id]?>">
            </form>
        </div>
     </div>
    <!--container end-->
<?php include_once("includes/footer.php"); ?>
