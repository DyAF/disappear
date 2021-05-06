<?php
    require_once("function.php");

    
     $result=new_FB($_POST['type'],$_POST['name'],$_POST['email'],$_POST['phone'],$_POST['subject'],$_POST['content'],$_POST['status']);
     if($result=="YES")
     {
         echo "留言成功";
     }
     else
     {
        echo $result;
     }
    
       
?>