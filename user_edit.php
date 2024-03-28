<?php
include("include/header.php");
?>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Update User</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row"></div>
        <div class="col-md-12 col-sm-12 ">

        <div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_content">
								<div class="x_title">

									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br>
									<form id="demo-form2" data-parsley-validate="" action="backend/update.php" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">
<?php
$id = $_GET["id"] ;
$sel="select * from `staff` WHERE  `id`='".$id."'";
$sno =1;
						  $q1=mysqli_query($db,$sel);
						  while($row =  mysqli_fetch_assoc($q1))
						  {
?>
<input type="hidden" value="<?php echo $row['id'] ?>" name="id">
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Full Name <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" class="form-control " value="<?php echo $row['name'] ?>" name="name">
											</div>
										</div>
                                        
										
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Image <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" accept="image/*" class="form-control " name="img">
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" value="<?php echo $row['email'] ?>" class="form-control " name="email">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Password <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="password"  value="" class="form-control" name="password">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Phone Number</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="middle-name" class="form-control" disabled type="number"  value="<?php echo $row['phone_no'] ?>" name="phone_no">
											</div>
										</div>
										
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
											
												<button type="submit" class="btn btn-success" name="user_edit">Submit</button>
											</div>
										</div>
										<?php
}
?>
									</form>
								</div>
							</div>
						</div>
					</div>
        
        </div>
    </div>
</div>
<?php
include("include/footer.php");
?>