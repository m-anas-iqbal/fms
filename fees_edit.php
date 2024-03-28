<?php
include("include/header.php");
?>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Update Fees</h3>
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
$sel="select * from `fees` WHERE  `f_id`='".$id."'";
$sno =1;
						  $q1=mysqli_query($db,$sel);
						  while($row =  mysqli_fetch_assoc($q1))
						  {
?>
<input type="hidden" value="<?php echo $row['f_id'] ?>" name="id">                                   
									
									
									<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text"  id="first-name" required="required" class="form-control " name="name" value="<?php echo $row['name'] ?>">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Amount <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="first-name" required="required" class="form-control " name="amount" value="<?php echo $row['amount'] ?>">
											</div>
										</div>
                                        
										
                               
 

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Due Amount <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="last-name"  required="required" class="form-control" name="due_amount" value="<?php echo $row['due_amount'] ?>">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Due date</label>
                                            <div class="col-md-6 col-sm-6 ">
												<input id="birthday" class="date-picker form-control" value="<?php echo $row['due_date'] ?>" name="due_date" placeholder="dd-mm-yyyy" type="text" required="required"min="<?php echo date('Y-m-d');?>" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
												<script>
													function timeFunctionLong(input) {
														setTimeout(function() {
															input.type = 'text';
														}, 60000);
													}
												</script>
											</div>
										</div>
  
										
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												
												<button type="submit" class="btn btn-success" name="fees_edit">Submit</button>
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