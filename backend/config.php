<?php
session_start();



// $db ="";
 $db =  mysqli_connect('localhost', 'root', '', 'fms') ;

// if ($_SERVER['HTTP_HOST']=='Prince' || $_SERVER['HTTP_HOST']=='localhost' ) {
// 	$db =  mysqli_connect('localhost', 'root', '', 'fms') or die("Cant Connect");
// 	$domain='http://localhost/fms';

// }elseif ($_SERVER['HTTP_HOST']=='fms.iconicdev.co' ){
   
//     $db =  mysqli_connect('localhost', 'fms', 'fms', 'fms') or die("Cant Connect");
// 	$domain='https://fms.iconicdev.co';

// } 

?>