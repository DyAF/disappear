<?php
    
    //require("DB_connect.php");
    require("function.php");

    // $account="DaDing";
    // $password="123";
    $account=$_POST['account'];
    $password=$_POST['password'];
     $result=login($account,$password);
     //print_r($result);
     if($result=="YES")
     {
         echo "登入成功";
     }
     else
     {
        echo "登入失敗";
     }

    // $sql="SELECT * FROM `admin`";
    // $sql_query_result = mysqli_query($_SESSION['link'],$sql);
    // $query_result_data=mysqli_fetch_assoc($sql_query_result);
    // print_r($query_result_data)  ;
?>