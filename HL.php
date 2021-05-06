<?php
include_once("php/function.php");
$get_query_result = query();
?>
<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <!-- 相容 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- 響應式設計用 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Disappear-HighLight</title>

    <meta name="description" content="描述">
    <meta name="author" content="作者">

    <link rel="icon" type="../image/png" href="image/LOGO.png" sizes="32x32">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="css/lable.css">
</head>

<style>
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

    .content {
        margin-top: 60px;
        margin-bottom: 150px;
    }

    .footer div {
        position: fixed;
        bottom: 0px;
        min-width: 100%;
        min-height: 95px;
    }


    .HL-card {
        width: 400px;
        border: black solid 3px;
        box-shadow: 0 4px 10px 0 rgb(0 0 0 / 20%), 0 4px 20px 0 rgb(0 0 0 / 19%);
        margin: 10px;
        margin-top: 50px;
    }

    .HL-photo {
        border-right: black solid 2px;
        height: 150px;
    }

    .toolbar {
        margin-top: 100px;
    }
</style>

<body>
    <!-- 頂端列 -->
    <?php include_once("menu.php")?>

    <!-- 內容 -->
    <div class="content container">
        <div class="toolbar w3-row">
            <div class="w3-col l8 m6 s12 search">
                <label>Search</label>
                <input>
                <button class="search-icon"><i class="fa fa-search"></i></button>
            </div>
            <div class="w3-col l4 m6 s12 sort w3-center">
                <label>Sort</label>
                <select name="option">
                    <option value="" disabled selected>選擇排序方式</option>
                    <option value="1">依【名稱】排序</option>
                    <option value="2">依【日期】排序</option>
                    <option value="3">依【人氣*】排序</option>
                </select>
            </div>
        </div>
        <div class="highlight w3-center">
            <h1>Our HighLight</h1>
            <div class="w3-row">
                <?php foreach ($get_query_result as $HL) : ?>
                    <!-- 正確版 -->
                    <div class="w3-col l4 m6 s12 HL-card" style="width: 400px;">
                        <div class="w3-row">
                            <div class="w3-col l5 m5 s12 w3-center HL-photo w3-display-container"><a href="<?php echo $HL['URL'];?>"><img class="w3-display-middle" style="width: 150px;" src="image/<?php $jpg_array = str_split($HL['JPG']);for ($x = 10; $x <= count($jpg_array); $x++) :$str = $str . $jpg_array[$x];endfor;echo $str;$str = "";  ?>" alt=""></a></div>
                            <div class="w3-col l7 m7 s12 w3-center HL-info">
                                <p style="padding: 10px 0; border-bottom: solid;"><?php echo $HL['title']; ?></p>
                                <p style="padding-bottom: 10px; border-bottom: solid;"><?php echo $HL['introduce']; ?></p>
                                <p>
                                    <?php if ($HL['tag01'] == 1) : ?><label class="label label--blue">老人</label><?php endif; ?>
                                    <?php if ($HL['tag07'] == 1) : ?><label class="label label--orange">NeizKilor</label><?php endif; ?>
                                    <?php if ($HL['tag08'] == 1) : ?><label class="label label--red">Jarven</label><?php endif; ?>
                                    <?php if ($HL['tag21'] == 1) : ?><label class="label label--purple">大丁</label><?php endif; ?>
                                    <?php if ($HL['tag27'] == 1) : ?><label class="label label--yellow">PIPI</label><?php endif; ?>
                                    <?php if ($HL['tag32'] == 1) : ?><label class="label label--green">YouYuan</label><?php endif; ?>

                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- 正確版 -->
                <?php endforeach; ?>
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
        // $(document).ready(function() {
        //     //var a = $("#test").html();
        //     console.log("123");
        // });
        // var a = $("#test").text();
        // console.log(a);
    </script>
</body>

</html>