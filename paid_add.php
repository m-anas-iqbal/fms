<?php
include("include/header.php");
?>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Add Paid Fees</h3>
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
									<form id="demo-form2" data-parsley-validate="" action="backend/insert.php" method="post" enctype="multipart/form-data"  class="form-horizontal form-label-left">
     									 <div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 label-align">Student</label>
											<div class="col-md-6 col-sm-6 ">
												<select class="form-control" name="std" onchange="studentfees(this.value)">
													<option>Choose option Student</option>
													<?php
													$sel = "select * from student order by  st_id ";
													$q1_pro = mysqli_query($db, $sel);
													while ($row = mysqli_fetch_assoc($q1_pro)) {
																echo "<option value='{$row['st_id']}'> Student : {$row['fname']} - {$row['name']} </option>";
															}
													?>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 label-align">Fees</label>
											<div class="col-md-6 col-sm-6 ">
												<select class="form-control" name="fees" id="fees">
													<option>Choose option Fees</option>
													<?php /*
													$sel = "select * from fees order by  f_id ";
													$q1_pro = mysqli_query($db, $sel);
													while ($row = mysqli_fetch_assoc($q1_pro)) {
																echo "<option value='{$row['f_id']}'> {$row['name']} - {$row['amount']}</option>";
															}
													*/?>
												
												</select>
											</div>
										</div>
										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Amount <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="first-name" required="required" class="form-control " name="amount">
											</div>
										</div>
                                   
                                       
										
                               
 


  
										
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">

												<button type="submit" class="btn btn-success" name="paid_add">Submit</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>
        
        </div>
    </div>
</div>
<script>
	function studentfees(val){
		console.log(val);
		$.ajax({
  url: "backend/get_ajax.php",
  type: "POST",
  data: {st_id:val,table:"cheching_fees"},
  dataType: "html",
success:function(msg2) {
	// console.log(msg2);
	   $("#fees").html(msg2)
}
})

	}
</script>
<?php
include("include/footer.php");
?>