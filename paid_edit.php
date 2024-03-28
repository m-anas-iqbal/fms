<?php
include("include/header.php");
?>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Update Paid Fees</h3>
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
									<form id="demo-form2" data-parsley-validate="" action="backend/update.php" method="post" enctype="multipart/form-data"  class="form-horizontal form-label-left">
									<?php
$id = $_GET["id"] ;
$sel="select * from `paid` WHERE  `p_id`='".$id."' ";
$sno =1;
						  $q1=mysqli_query($db,$sel);
						  while($row =  mysqli_fetch_assoc($q1))
						  {
?>
<input type="hidden" value="<?php echo $row['p_id'] ?>" name="id">   	
									
									
									<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 label-align">Fees</label>
											<div class="col-md-6 col-sm-6 ">
												<select class="form-control" name="fees">
													<?php
													$sel = "select * from fees where  f_id = ".$row['f_id'] ;
													$q1_pro = mysqli_query($db, $sel);
													while ($row1 = mysqli_fetch_assoc($q1_pro)) {
																echo "<option value='{$row1['f_id']}' selected > {$row1['name']} - {$row1['amount']}</option>";
															}
													?>
												
												</select>
											</div>
										</div>
										 <div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 label-align">Student</label>
											<div class="col-md-6 col-sm-6 ">
												<select class="form-control" name="std">
													<?php
													$sel = "select * from student where st_id = ".$row['st_id'];
													$q1_pro = mysqli_query($db, $sel);
													while ($row1 = mysqli_fetch_assoc($q1_pro)) {
																echo "<option value='{$row1['st_id']}' selected> Student : {$row1['fname']} - {$row1['name']} </option>";
															}
													?>
												</select>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Amount <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="first-name" required="required" class="form-control " name="amount" value="<?php echo $row['amount'] ?>">
											</div>
										</div>
                                   
                                       
										
                               
 


  
										
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">

												<button type="submit" class="btn btn-success" name="paid_edit">Submit</button>
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