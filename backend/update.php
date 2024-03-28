<?php
include("config.php");

if(isset($_POST['fees_edit'])){
    $id = $_POST['id']; 
  $sql = "UPDATE `fees` SET `name`='".$_POST["name"]."',`amount`='".$_POST["amount"]."',`due_date`='".$_POST["due_date"]."',`due_amount`='".$_POST["due_amount"]."' WHERE  `f_id`='".$id."'";
  echo $sql;  
  if(
        mysqli_query($db, $sql) 
    ){
        $_SESSION['msg'] =  "Updated Successfully";
        
    }
    echo "<script>window.location='../fees.php?id=".$id."';</script>";
}
if(isset($_POST['paid_edit'])){
    $id =$_POST['id'];
    
  $sql = "UPDATE `paid` SET `f_id`='".$_POST["fees"]."', `st_id` ='".$_POST["std"]."' , `amount`= '".$_POST["amount"]."' WHERE  `p_id`='".$id."' ";
  
    if(
        mysqli_query($db, $sql) 
    ){
        $_SESSION['msg'] =  "Updated Successfully";
    }
    echo "<script>window.location='../paid.php?id=".$id."';</script>";
}

if(isset($_POST['student_edit'])){
    $id = $_POST['id']; 
  $sql = "UPDATE `student` SET  `name` = '".$_POST["name"]."', `fname` = '".$_POST["fname"]."', `phone_no` = '".$_POST["phone_no"]."',  `dob` = '".$_POST["dob"]."',`age` = '".$_POST["age"]."' ";
  if(isset($_FILES["img"])&& $_FILES["img"] !="" && $_FILES["img"]["error"] == 0){
    $filename = date("YmdHis", time()).".png";
    $path = "../assests/img/";
     if(move_uploaded_file($_FILES["img"]["tmp_name"], "assests/img/".$filename)){
        $sql .= ",  `img` = '".$path.$filename."' ";
}
}
if(isset($_POST['password']) && $_POST['password']!=""){
    $sql .=", `pasword`  = '".$_POST["password"]."' ";
}
$sql .= " where st_id = $id";
  if(mysqli_query($db, $sql)){
        $_SESSION['msg'] =  "Updated Successfully";
    }
    echo "<script>window.location='../student.php?id=".$id."';</script>";
}
if(isset($_POST['user_edit'])){
    
    $id = $_POST['id']; 
  $sql = "UPDATE `staff` SET  `name` = '".$_POST["name"]."' ,  `email` = '".$_POST["email"]."'  ";
    if(isset($_FILES["img"])&& $_FILES["img"] !="" && $_FILES["img"]["error"] == 0){
        $filename = date("YmdHis", time()).".png";
        $path = "../assests/img/";
         if(move_uploaded_file($_FILES["img"]["tmp_name"], "assests/img/".$filename)){
             $sql .= ",  `img` = '".$path.$filename."' ";
    }  
}
if(isset($_POST['password']) && $_POST['password']!=""){
        $sql .=", `password`  = '".$_POST["password"]."' ";
    }
$sql .= " where id = $id";
if(mysqli_query($db, $sql)){
    $_SESSION['msg'] =  "Updated Successfully";
}
echo "<script>window.location='../user.php?id=".$id."';</script>";
}
?>