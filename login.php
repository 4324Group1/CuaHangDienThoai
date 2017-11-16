<?php
include_once('users.php');

if(isset($_POST["login"]))
{
   //nếu nút login được click
  if(isset($_POST["user"]) && isset($_POST["pass"]))
   { // kiểm tra text field
    
      
     $user = new Users(); // tao mot object user
     $resultjson =  $user -> login($_POST["user"],$_POST["pass"]); // chạy kiểm tra đăng nhập phía service.
     $final_res =json_decode($resultjson, true) ;
  
         if($final_res['success']==0)
         {

           echo $final_res['error_msg'];
          
          } 
          else if ($final_res['success']==1)
          {
            $uid = $final_res['uid'];
            $_SESSION["user"] = $final_res ["uid"];
            $_SESSION["name"] = $final_res["user"]['name'];
            if ($final_res["user"]['mcv']=="1")
           {

             $_SESSION["authority"] ="admin";

            }
             else
             {

                $_SESSION["authority"] = "member";
              }
            
            header("location:index.php");// chuyển trang
      
          }
  
    }
}
?>