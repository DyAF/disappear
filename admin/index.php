<?php
include_once("../php/function.php");
if (!isset($_SESSION['is_admin_login']) || !$_SESSION['is_admin_login']) {
    header("Location:login.php");
}
$get_query_result = FB_undone();
?>

<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <!-- 相容 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- 響應式設計用 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Disappear-後台首頁</title>

    <meta name="description" content="描述">
    <meta name="author" content="作者">

    <link rel="icon" type="image/png" href="../image/LOGO.png" sizes="32x32">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
</head>

<style>
    body,
    html {
        min-height: 100%;
    }

    .header {
        font-size: 18px;
        height: 60px;
    }

    a {
        text-decoration: none;
        font-size: 20px;
    }

    .w3-display-right a:hover {
        color: black;
        background-color: gray;
    }

    .active {
        color: black;
        font-weight: bolder;
    }


    .footer div {
        position: fixed;
        bottom: 0px;
        min-width: 100%;
        min-height: 95px;
    }

    .content {
        margin-top: 120px;
        min-height: 100%;
        margin-bottom: 150px;
    }
</style>

<body>
    <!-- 頂端列 -->
    <?php include_once("menu.php")?>

    <div class="container">
        <div class="content w3-center">
            <h1>後台首頁</h1>
            <br>
            <!-- <p>系統時間:<?php echo date("Y/m/d  l  , A h+8:i:s"); ?></p> -->
            <div class="w3-panel w3-light-gray w3-round-xlarge" style="margin:0px 100px; padding-top:20px; margin-bottom:20px;">
                <p>YT API 預定地</p>
            </div>
            <div class="w3-panel w3-light-gray w3-round-xlarge" style="margin:0px 100px; padding-top:20px; margin-bottom:20px;">
                <p>尚有&ensp;<b><?php echo count($get_query_result)?></b>&ensp;則留言未回覆，請盡速處理。</p>
            </div>
        </div>
        

    </div>







    <!-- 頁底 -->
    <footer class="footer">
        <div class=" w3-card w3-dark-gray">
            <p class="w3-center" style="padding-top: 40px;">&copy; <?php echo date("Y"); ?> DISAPPEAR</p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>

    </script>
</body>

</html>