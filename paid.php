<?php
include("include/header.php");
?>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Paid</h3>
            </div>

            <div class="title_right">
            <div>
                  <h6> <?php 
                        if(isset($_SESSION['msg'])){
                            echo '<br><span id="msg" class="alert alert-success">'.$_SESSION['msg'].'</span>';
                            unset($_SESSION["msg"]);?>
                        <script>
                            $(document).ready(function(){
                                setTimeout(function() { 
                                    $('#msg').hide(5000);
                                }, 2000);
                            });
                        </script>    
                        <?php
                        }
                    ?></h6>
                </div>
						</div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12 col-sm-12 ">
        <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                  
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>sno</th>
                          <th>Amount</th>
                          <th>Date </th>
                        
                        </tr>
                      </thead>


                      <tbody>
						<?php
						  $sel="select * from `paid` order by p_id";
              $sno =1;
						  $q1=mysqli_query($db,$sel);
						  while($row =  mysqli_fetch_assoc($q1))
						  {
							 echo " <tr>
							 <td>".$sno++."</td>
							 <td>".$row['amount']."</td>
							 <td>".$row['date']."</td>
							 
							 <td><a href='paid_edit.php?id=".$row['p_id']."' class='btn btn-primary'>
							 <i class='fa fa-edit'></i> 
						   </a> | <a href='backend/delete.php?id=".$row['p_id']."&table=paid' class='btn btn-danger'>
						   <i class='fa fa-trash'></i> 
						 </a></td>
						   </tr>";
						  }
						?>
                     
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>
            
              </div>
            </div>  
        </div>
            </div>

        <?php /*
													$sel = "select * from fees order by  f_id ";
													$q1_pro = mysqli_query($db, $sel);
													while ($row = mysqli_fetch_assoc($q1_pro)) {
																echo "<option value='{$row['f_id']}'>PO order detail no {$row['name']}</option>";
															}*/
													?>

        </div>
    </div>
</div>
<script>
$(document).ready( function () {
    $('#datatable').DataTable();
} );
</script>
<?php
include("include/footer.php");
?>