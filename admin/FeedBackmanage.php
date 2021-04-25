<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <!-- 相容 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- 響應式設計用 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Disappear-留言管理</title>

    <meta name="description" content="描述">
    <meta name="author" content="作者">

    <link rel="icon" type="image/png" href="../image/LOGO.png" sizes="32x32">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
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

    .footer div {
        width: 100%;
        min-height: 95px;
    }

    .content {
        margin-top: 120px;
        background-color: blue;
    }

    .tool-bar {
        top: 62px;
        padding-top: 10px;
        padding-left: 10px;
        width: 250px;
    }

    .new {
        padding-top: 120px;
        padding-bottom: 128px;
        background-color: cornflowerblue;
    }

    .container {
        width: 1000px;
    }

    .card {
        margin-top: 10px;
        margin-bottom: 10px;
        padding: 10px;
        border: black solid 3px;
        box-shadow: 0 4px 10px 0 rgb(0 0 0 / 20%), 0 4px 20px 0 rgb(0 0 0 / 19%);
    }
</style>

<body>
    <!-- 頂端列 -->
    <div class="header w3-top w3-bar w3-card w3-dark-gray">
        <a href="#" class="w3-bar-item w3-display-left">Disappear</a>
        <div class="w3-display-right w3-center">
            <a href="#" class="w3-bar-item w3-padding-large">登出</a>
            <a href="#" class="w3-bar-item w3-padding-large">精華管理</a>
            <a href="#" class="w3-bar-item w3-padding-large active">留言管理</a>
        </div>
    </div>

    <!-- 工具列 -->
    <div class="tool-bar w3-top">
        <select class="w3-select" name="option">
            <option value="" disabled selected>選擇留言類別</option>
            <option value="1">已回覆</option>
            <option value="2">未回覆</option>
            <option value="3">無須回覆</option>
            <option value="4">郵件回覆</option>
            <option value="5">電話回覆</option>
        </select>
    </div>

    <!-- 內容 -->
    <div class="new" id="new">
        <h1 class="w3-center">留言管理</h1>
        <br>
        <div class="container">
            <div class="card" style="background:blanchedalmond;">
                <div class="card-head w3-row">
                    <div class="w3-col l12 m12 s12"><span class="w3-tag w3-green w3-right">Done</span></div>
                </div>
                <div class="card-body w3-row">
                    <div class="w3-col l2 m3 s12 w3-display-cotainer"><img class="w3-middle" style="padding-left:20px;padding-top:20px;" src="../image/none.png" alt=""></div>
                    <div class="w3-col l10 m9 s12">
                        <div>
                            <p><b style="font-size:30px;">主旨</b></p>
                        </div>
                        <div>
                            <p style="padding-right:50px;">內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容容內容內容內容內容內容內容容內容內容內容內容內容內容</p>
                        </div>
                    </div>
                </div>
                <div class="card-foot w3-row">
                    <div class="w3-col l12 m12 s12"><button class="w3-button w3-circle w3-teal w3-right">+</button></div>
                </div>
            </div>
            <div class="card" style="background:blanchedalmond;">
                <div class="card-head w3-row">
                    <div class="w3-col l12 m12 s12"><span class="w3-tag w3-red w3-right">yet</span></div>
                </div>
                <div class="card-body w3-row">
                    <div class="w3-col l2 m3 s12 w3-display-cotainer"><img class="w3-middle" style="padding-left:20px;padding-top:20px;" src="../image/phone.png" alt=""></div>
                    <div class="w3-col l10 m9 s12">
                        <div>
                            <p><b style="font-size:30px;">主旨</b></p>
                        </div>
                        <div>
                            <p style="padding-right:50px;">內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容容內容內容內容內容內容內容容內容內容內容內容內容內容</p>
                        </div>
                    </div>
                </div>
                <div class="card-foot w3-row">
                    <div class="w3-col l12 m12 s12"><button class="w3-button w3-circle w3-teal w3-right">+</button></div>
                </div>
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
</body>

</html>