<?php
include("config.php");




if(isset($_POST['fees_add'])){
    $u_id = $_SESSION['stf_id'];
  $sql = "INSERT INTO `fees`( `name`, `amount`, `u_id`,  `due_date`, `due_amount`) VALUES ('".$_POST["name"]."','".$_POST["amount"]."','".$u_id."','".$_POST["due_date"]."','".$_POST["due_amount"]."')";
    if(
        mysqli_query($db, $sql) 
    ){
        $_SESSION['msg'] =  "Added successfully";
    }
    echo "<script>window.location='../fees.php';</script>";
}
if(isset($_POST['paid_add'])){
    $f_id = $_POST["fees"];
    $st_id = $_POST["std"];
    $u_id = $_SESSION['stf_id'];
  $sql = "INSERT INTO `paid`( `f_id`, `st_id`, `amount`,u_id) VALUES ('".$f_id."','".$st_id."','".$_POST["amount"]."','".$u_id."')";
    if(
        mysqli_query($db, $sql) 
    ){
        $_SESSION['msg'] =  "Added successfully";
    }
    echo "<script>window.location='../paid.php';</script>";

}

if(isset($_POST['student_add'])){
 
     if(isset($_FILES["img"]) && $_FILES["img"]["error"] == 0){
    $filename = date("YmdHis", time()).".png";
    $path = "../assests/img/";
     if(move_uploaded_file($_FILES["img"]["tmp_name"], $path.$filename)){
        $sql = "INSERT INTO `student`( `name`, `fname`, `phone_no`, `pasword`, `dob`, `img`,  `age`) VALUES ('".$_POST["name"]."','".$_POST["fname"]."','".$_POST["phone_no"]."','".md5($_POST["password"])."','".$_POST["dob"]."','"."assests/img/".$filename."','".$_POST["age"]."')";
    if(mysqli_query($db, $sql)
          ){
            $_SESSION['msg'] =  "Added successfully";
          }
            
          echo "<script>window.location='../student.php';</script>";
    } 

}
  

}
if(isset($_POST['user_add'])){
    $f_id = 1;
    $st_id = 1;
    if(isset($_FILES["img"]) && $_FILES["img"]["error"] == 0){
        $filename = date("YmdHis", time()).".png";
        $path = "../assests/img/";
         if(move_uploaded_file($_FILES["img"]["tmp_name"], $path.$filename)){
            $sql = "INSERT INTO `staff`( `name`, `phone_no`, `password`, `email`,  `img`) VALUES
             ('".$_POST["name"]."','".$_POST["phone_no"]."','".md5($_POST["password"])."','".$_POST["email"]."','"."assests/img/".$filename."')";
        if(mysqli_query($db, $sql)){
            $_SESSION['msg'] =  "Added successfully";
              }
           
              echo "<script>window.location='../user.php';</script>"; 
        } 
   

}
}
?>