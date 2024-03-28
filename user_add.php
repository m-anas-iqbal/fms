<?php
include("include/header.php");
?>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Add User</h3>
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
									<form id="demo-form2" data-parsley-validate="" action="backend/insert.php" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Full Name <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" class="form-control " name="name">
											</div>
										</div>
                                        
										
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Image <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" accept="image/*" id="first-name" required="required" class="form-control " name="img">
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" required="required" class="form-control " name="email">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Password <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="password" id="phon1" required="required"  class="form-control" name="password">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Phone Number</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="phon" class="form-control" onchange="phone(this.value)" type="number"  name="phone_no">
											</div>
										</div>
										
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
											
												<button type="submit" class="btn btn-success" name="user_add">Submit</button>
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
function phone(val){
	// console.log("welcome");
	
	$.ajax({
  url: "backend/get_ajax.php",
  type: "POST",
  data: {phone1:val,table:"table"},
  dataType: "html",
success:function(msg2) {
	// console.log(msg2);
	
   if(msg2 =="1" ){
	   alert("Already used phone no")
	//    console.log("welcome2");
	   $("#phon").val("")
	   }
}
})
}
</script>
<?php
include("include/footer.php");
?>