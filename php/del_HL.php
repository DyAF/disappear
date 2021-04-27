<?php
    require_once("function.php");

    
     $result=del_HL($_POST['ID']);
     if($result=="YES")
     {
         echo "刪除成功";
     }
     else
     {
        echo $result;
     }

    
    
       
?>