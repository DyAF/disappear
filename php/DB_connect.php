<?php
@session_start();

$host ="localhost";
$db_account ="root";
$db_password ="mysql";
$db_name ="disappear";

$_SESSION['link']=mysqli_connect($host,$db_account,$db_password,$db_name);
if($_SESSION['link'])
{
    mysqli_query($_SESSION['link'],"SET NAMES utf8");
    //echo "已正確連線<br>";
}
else
{
    echo "無法連線mySQL資料庫: <br>" .mysqli_connect_error();
}


?>