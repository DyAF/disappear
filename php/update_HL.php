<?php
    require_once("function.php");

    
     $result=update_HL($_POST['ID'],$_POST['title'],$_POST['URL'],$_POST['introduce'],$_POST['img'],$_POST['tag01'],$_POST['tag07'],$_POST['tag08'],$_POST['tag21'],$_POST['tag27'],$_POST['tag32']);
     if($result=="YES")
     {
         echo "修改成功";
     }
     else
     {
        echo $result;
     }

    
    
       
?>