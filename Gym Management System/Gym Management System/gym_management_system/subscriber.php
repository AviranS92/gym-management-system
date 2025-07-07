<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[subscriber_id])
	{
		$SQL="SELECT * FROM `subscriber` WHERE subscriber_id = $_REQUEST[subscriber_id]";
		$rs=mysqli_query($con,$SQL) or die(mysqli_error());
		$data=mysqli_fetch_assoc($rs);
	}
?>

    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>Subscriber Management</h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="registration-bg">
        <div class="container">
            <form action="lib/subscriber.php" enctype="multipart/form-data" method="post" class="form-signin wow fadeInUp" action="" style="max-width:800px">
                <h2 class="form-signin-heading">Add Subscriber</h2>
                <div class="login-wrap">          
				    <div class="form-group">
						<label for="pwd">Subscriber Name</label>
						<input type="text" class="form-control" placeholder="Subscriber Name" autofocus="" name="subscriber_name" id="subscriber_name" value="<?=$data[subscriber_name]?>">
				    </div>
					<div class="form-group">
						<label for="pwd">Subscriber Email</label>
						<input type="email" class="form-control" placeholder="Subscriber Email" autofocus="" name="subscriber_email" id="subscriber_email" value="<?=$data[subscriber_email]?>">
				    </div>
					<div class="form-group">
						<label for="pwd">Subscriber Password</label>
						<input type="password" class="form-control" placeholder="Subscriber Password" autofocus="" name="subscriber_password" id="subscriber_password" value="<?=$data[subscriber_password]?>">
				    </div>
				    <div class="form-group">
						<label for="pwd">Subscriber Thesis</label>
						<input type="text" class="form-control" placeholder="Subscriber Thesis" autofocus="" name="subscriber_thesis" id="subscriber_date" value="<?=$data[subscriber_thesis]?>">
				    </div>
				    <div class="form-group">
						<label for="pwd">Subscriber Age</label>
						<input type="text" class="form-control" placeholder="Subscriber Age" autofocus="" name="subscriber_age" id="subscriber_age" value="<?=$data[subscriber_age]?>">
				    </div>
                    <div class="form-group">
						<label for="pwd">Subscriber Gender</label>
						<select name="subscriber_gender" required class="form-control" placeholder="Select User" autofocus=""/>
							<?php echo get_new_optionlist("gender","gender_id","gender_name",$data[subscriber_gender]); ?>
						</select>
				    </div>
                    
				    <div class="form-group">
						<label for="pwd">Subscriber Mobile</label>
						<input type="text" class="form-control" placeholder="Subscriber Mobile" autofocus="" name="subscriber_mobile" id="subscriber_mobile" value="<?=$data[subscriber_mobile]?>">
				    </div>
				    <div class="form-group">
						<label for="pwd">Subscriber Package</label>
						<select name="subscriber_package" required class="form-control" placeholder="Select User" autofocus=""/>
							<?php echo get_new_optionlist("package","package_id","package_title",$data[subscriber_package]); ?>
						</select>
				    </div>
				    <div class="form-group">
						<label for="pwd">Subscriber Picture</label>
						<input type="file" class="form-control" placeholder="Subscriber Mobile" autofocus="" name="subscriber_image" id="subscriber_image" value="<?=$data[subscriber_image]?>">
						<?php if(isset($data[subscriber_image]) && $data[subscriber_image] != "")  {?>
						<div><img src="<?=$SERVER_PATH.'uploads/'.$data[subscriber_image]?>" style="width: 100px"></div><br>
						<?php } ?>
				    </div>
                    <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>
                </div>
                <input type="hidden" name="act" value="save_subscriber">
                <input type="hidden" name="avail_image" value="<?=$data[subscriber_image]?>">
				<input type="hidden" name="subscriber_id" value="<?=$data[subscriber_id]?>">
            </form>
        </div>
     </div>
    <!--container end-->
<?php include_once("includes/footer.php"); ?>
