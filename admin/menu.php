<?php


$file_name = basename($_SERVER['PHP_SELF'], ".php");

switch ($file_name) {
    case 'HLmanage':
        $active_num = 1;
        break;
    case 'FeedBackmanage':
        $active_num = 2;
        break;
    default:
        $active_num = 0;
        break;
}
?>

<div class="header w3-top w3-bar w3-card w3-dark-gray">
    <a href="index.php" class="w3-bar-item w3-display-left">Disappear-後台</a>
    <div class="w3-display-right w3-center">
        <a href="../php/logout.php" class="w3-bar-item w3-padding-large">登出</a>
        <a href="HLmanage.php" class="w3-bar-item w3-padding-large <?php if($active_num==1){echo 'active';}?>">精華管理</a>
        <a href="FeedBackmanage.php" class="w3-bar-item w3-padding-large <?php if($active_num==2){echo 'active';}?>">留言管理</a>
    </div>
</div>