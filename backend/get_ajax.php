<?php
include("config.php");
if (isset($_GET['des']) && isset($_GET['table']) && $_GET['des'] =="1" && $_GET['table'] =="logout") {
    session_destroy();
    echo "<script>window.location='../login.php';</script>";
}


if(isset($_POST["phone1"]) && $_POST['table']=="table"){
    $sel="select * from `staff` where phone_no = '{$_POST['phone1']}' ";

   $q1=mysqli_query($db,$sel);
   while($row =  mysqli_fetch_assoc($q1))
   {
       if ($row >0) {
           echo 1;
       }else {
           echo 0;
       }
   }
}
if(isset($_POST["phone"]) && isset($_POST["password"])){
    $password = md5($_POST['password']);
    $msg = "";
    $sel="select * from `staff` where phone_no = '{$_POST['phone']}' and '{$password}' ";

  $q1=mysqli_query($db,$sel);
  if ( mysqli_num_rows($q1)>0){
    while($row =  mysqli_fetch_assoc($q1))
   {
  
        $_SESSION['stf_id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['img'] = $row['img'];
        $msg = "Login successfully";
        echo "<script>window.location='../index.php';</script>";
       
   } 
}else {
       $msg = "Login Failed! Invalid user";
        echo "<script>window.location='../login.php';</script>";
       }
   $_SESSION['msg'] = $msg;
   
}
if (isset($_GET['des']) && isset($_GET['table']) && $_GET['des'] =="1" && $_GET['table'] =="logout") {
    session_destroy();
    echo "<script>window.location='../login.php';</script>";
}


if(isset($_POST["st_id"]) && $_POST["st_id"] !="" && $_POST['table']=="cheching_fees"){
    $response = array();
    echo  "<option>Choose option Fees</option>";
    $sel="SELECT  f_id FROM `paid`  WHERE st_id ='{$_POST['st_id']}' ";

   $q1=mysqli_query($db,$sel);
   while($row1 =  mysqli_fetch_assoc($q1))
   {
    array_push($response,$row1['f_id']);
   } 
 $response = implode(",",$response);
   $sel="select * from fees WHERE f_id not in ('{$response}')";

    $q1=mysqli_query($db,$sel);
    while($row =  mysqli_fetch_assoc($q1))
    {
       echo "<option value='{$row['f_id']}'> {$row['name']} - {$row['amount']}</option>";
    }
}


?>