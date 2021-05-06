<?php
    require_once("function.php");

    
     $result=update_FB($_POST['ID'],$_POST['status']);
     if($result=="YES")
     {
         echo "狀態更新成功";
     }
     else
     {
        echo $result;
     }

    
    
       
?>