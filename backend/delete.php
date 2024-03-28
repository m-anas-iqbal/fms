<?php
include("config.php");
if(isset($_GET['table']) && $_GET['table']=="staff"){
    $id = $_GET['id'];
     $sql= "delete from staff where id = $id";
     mysqli_query($db, $sql) ;
     echo "<script>window.location='../user.php';</script>"; 
}
if(isset($_GET['table']) && $_GET['table']=="student"){
    $id = $_GET['id'];
     $sql= "delete from student where st_id = $id";
     mysqli_query($db, $sql) ;
     echo 
     "<script>window.location='../student.php';</script>"; 
}
if(isset($_GET['table']) && $_GET['table']=="fees"){
    $id = $_GET['id'];
     $sql= "delete from fees where f_id = $id";
     mysqli_query($db, $sql) ;
     echo "<script>window.location='../fees.php';</script>"; 
}
if(isset($_GET['table']) && $_GET['table']=="paid"){
    $id = $_GET['id'];
     $sql= "delete from paid where p_id = $id";
     mysqli_query($db, $sql) ;
     echo "<script>window.location='../paid.php';</script>"; 
}

?>