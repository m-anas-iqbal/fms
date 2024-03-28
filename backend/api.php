<?php
include("config.php");
 $response = array();
if(isset($_POST['st_id']) && isset($_POST['login']) && $_POST['login'] == "login"){



$st_id= $_POST["st_id"];
$password = md5($_POST["password"]);

  $query="select * from student where st_id ='$st_id' AND pasword='$password'";
    $result=mysqli_query($db,$query);
    if(mysqli_num_rows($result)>0)
      {
             $row=mysqli_fetch_assoc($result);
              $id=$row['st_id'];
              $name=$row['name'];
              $img=$row['img'];
                
                //response to android app
                          $response["success"]= "1";
                          $response["message"]="Logged in successful";
                          $response["id"]=$id;
                          $response["name"]=$name;
                          $response["img"]=$img;
                          
                        //   converting response data into json format
            
       }else{
          $response["success"] = 0;
            $response["message"]="user is not Registered, Please Register";
             
       }
      
}

if(isset($_POST['st_id']) && isset($_POST['paid']) && $_POST['paid'] == "paid"){

  $st_id= $_POST["st_id"];
  // $st_id= 2;

    $query="SELECT  (select name from fees  where f_id = paid.f_id) as `f_name`, `amount`, `date`, (select name from staff  where id = paid.U_id) as `u_name` FROM `paid` WHERE st_id = '$st_id'";
      $result=mysqli_query($db,$query);
      if(mysqli_num_rows($result)>0)
        {
               while($row =  mysqli_fetch_assoc($result))
               {
               array_push($response,$row);
            //  echo  " <script> console.log(".array_push($response,$row).") </script>";
               }
              }
        
  }


  if(isset($_POST['st_id']) && isset($_POST['unpaid']) && $_POST['unpaid'] == "unpaid"){
    // $st_id= 2;
    $st_id= $_POST["st_id"];
    
                $resp = array();
                $sel="SELECT  f_id FROM `paid`  WHERE st_id ='{$st_id}' ";
            
               $q1=mysqli_query($db,$sel);
               while($row1 =  mysqli_fetch_assoc($q1))
               {
                array_push($resp,$row1['f_id']);
               } 
             $resp = implode(",",$resp);
               $sel="select * from fees WHERE f_id not in ('{$resp}')";
            
                $q1=mysqli_query($db,$sel);
                while($row =  mysqli_fetch_assoc($q1))
                {
                  array_push($response,$row);
                }
    }
echo json_encode($response);
// echo json_encode($response['0']['f_name']);
// echo  " <html><script> console.log(".json_encode($response,$row).") </script></html>";
?>