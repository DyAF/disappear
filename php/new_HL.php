<?php
    require_once("function.php");

    
     $result=new_HL($_POST['title'],$_POST['URL'],$_POST['JPG'],$_POST['introduce'],$_POST['tag01'],$_POST['tag07'],$_POST['tag08'],$_POST['tag21'],$_POST['tag27'],$_POST['tag32']);
     if($result=="YES")
     {
         echo "新增成功";
     }
     else
     {
        echo $result;
     }
    
       
?>