<?php
/*$_SERVER */
// // $_SERVER 存放伺服器相關資訊
// print_r($_SERVER['PHP_SELF']);
// //到此顯示 : /disappear/menu.php

/*basename */
// //basename(路徑，要剔除的字) 取出路徑中的檔名/由絕對路徑取的路徑及檔名的方法
// //trim(字串，要剔除的字)
// echo "<br>".basename($_SERVER['PHP_SELF']);
// //到此顯示 : menu.php
// echo "<br>".basename($_SERVER['PHP_SELF'],".php");
// //到此顯示 : menu

$file_name = basename($_SERVER['PHP_SELF'], ".php");

switch ($file_name) {
    case 'about':
        $active_num = 1;
        break;
    case 'HL':
        $active_num = 2;
        break;
    case 'connect':
        $active_num = 3;
        break;
    default:
        $active_num = 0;
        break;
}
?>

<div class="header w3-top w3-bar w3-card w3-dark-gray">
    <a href="index.php" class="w3-bar-item w3-display-left">Disappear</a>
    <div class="w3-display-right w3-center">
        <a href="about.php" class="w3-bar-item w3-padding-large <?php if($active_num==1){echo 'active';}?>">關於我們</a>
        <a href="HL.php" class="w3-bar-item w3-padding-large <?php if($active_num==2){echo 'active';}?>">精華片段</a>
        <a href="connect.php" class="w3-bar-item w3-padding-large <?php if($active_num==3){echo 'active';}?>">聯絡我們</a>
    </div>
</div>