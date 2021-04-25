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

    <link rel="icon" type="image/png" href="image/LOGO.png" sizes="32x32">
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
    }

    .new {
        padding-top: 120px;
        padding-bottom: 128px;
        background-color: cornflowerblue;
    }

    .new .w3-row {
        margin: 5px;
    }

    .new .w3-row .w3-col {
        padding: 5px;
    }

    .title_input,
    .YT_input,
    textarea {
        width: 100%;
    }

    label {
        font-size: 18px;
    }



    .update {
        padding-top: 120px;
        padding-bottom: 128px;
        background-color: pink;
    }

    .card {
        margin-top: 10px;
        margin-bottom: 10px;
        padding: 10px;
        border: black solid 3px;
        box-shadow: 0 4px 10px 0 rgb(0 0 0 / 20%), 0 4px 20px 0 rgb(0 0 0 / 19%);
    }



    .container {
        width: 800px;
    }

    .del {
        padding-top: 120px;
        padding-bottom: 128px;
        background-color: #5646;
    }
</style>

<body>
    <!-- 頂端列 -->
    <div class="header w3-top w3-bar w3-card w3-dark-gray">
        <a href="#" class="w3-bar-item w3-display-left">Disappear</a>
        <div class="w3-display-right w3-center">
            <a href="#" class="w3-bar-item w3-padding-large">登出</a>
            <a href="#" class="w3-bar-item w3-padding-large active">精華管理</a>
            <a href="#" class="w3-bar-item w3-padding-large">留言管理</a>
        </div>
    </div>

    <!-- 工具列 -->
    <div class="tool-bar w3-top">
        <a href="#new" class="w3-bar-item w3-padding-large">新增</a>
        <label>|</label>
        <a href="#update" class="w3-bar-item w3-padding-large">修改</a>
        <label>|</label>
        <a href="#del" class="w3-bar-item w3-padding-large">刪除</a>
    </div>

    <div class="new" id="new">
        <h1 class="w3-center">新增精華</h1>
        <br>
        <div class="container">
            <div >
                <form action="">
                    <!-- 因鋪 -->
                    <div class="w3-row">
                        <div class="w3-col l2 m2 s12 w3-center"><label for="title"><b>影片標題</b> </label></div>
                        <div class="w3-col l10 m10 s12"><input class="title_input" type="text"></div>
                    </div>
                    <div class="w3-row">
                        <div class="w3-col l2 m2 s12 w3-center"><label for="title"><b>影片連結</b> </label></div>
                        <div class="w3-col l10 m10 s12"><input class="YT_input" type="text"></div>
                    </div>
                    <!-- TEXT噁瑞 -->
                    <div class="w3-row">
                        <div class="w3-col l2 m2 s12 w3-center"><label for="introduce"><b>影片簡介</b> </label></div>
                        <div class="w3-col l10 m10 s12"><textarea name="introduce" cols="65" rows="10"></textarea></div>
                    </div>
                    <!-- 檔案選擇 -->
                    <div class="w3-row">
                        <div class="w3-col l2 m2 s12 w3-center"><label for="introduce"><b>影片縮圖</b> </label></div>
                        <div class="w3-col l10 m10 s12"><input type="file" id="myFile" name="filename"></div>
                    </div>
                    <!-- 標籤 -->
                    <div class="w3-row">
                        <div class="w3-col l2 m2 s12 w3-center"><label for="introduce"><b>影片標籤</b> </label></div>
                        <div class="w3-col l10 m10 s12">
                            <input type="checkbox"><label for="title">&ensp;全選&ensp;</label>
                            <input type="checkbox"><label for="title">&ensp;01&ensp;</label>
                            <input type="checkbox"><label for="title">&ensp;07&ensp;</label>
                            <input type="checkbox"><label for="title">&ensp;08&ensp;</label>
                            <input type="checkbox"><label for="title">&ensp;21&ensp;</label>
                            <input type="checkbox"><label for="title">&ensp;27&ensp;</label>
                            <input type="checkbox"><label for="title">&ensp;32&ensp;</label>
                        </div>
                    </div>
                    <div class="w3-row w3-center" style="padding: 5px;"><button type="submit" class="btn btn-primary">新增</button></div>
                </form>
            </div>
        </div>

    </div>

    <div class="update" id="update">
        <h1 class="w3-center">修改精華</h1>
        <br>
        <div class="container">
            <div class="card" style=" background:blanchedalmond;">
                <div class="card-head w3-row">
                    <div class="w3-col l4 m6 s12"><button class="w3-button w3-black">修改</button></div>
                    <div class="w3-col l8 m6 s12"><button class="w3-button w3-black w3-right">儲存</button></div>
                </div>
                <div class="card-body w3-row">
                    <div class="w3-col l4 m6 s12">照片</div>
                    <div class="w3-col l8 m6 s12">
                        <div><input type="text" style="margin: 5px;"></div>
                        <div><input type="text" style="margin: 5px;"></div>
                        <div><textarea name="" id="" cols="" rows="" style="margin: 5px;"></textarea></div>
                    </div>
                </div>
                <div class="card-foot w3-row">
                    <div class="w3-col l4 m6 s12"><input type="file"></button></div>
                    <div class="w3-col l8 m6 s12">
                        <input type="checkbox" style="margin-left:10px;"><label for="title">&ensp;全選&ensp;</label>
                        <input type="checkbox"><label for="title">&ensp;01&ensp;</label>
                        <input type="checkbox"><label for="title">&ensp;07&ensp;</label>
                        <input type="checkbox"><label for="title">&ensp;08&ensp;</label>
                        <input type="checkbox"><label for="title">&ensp;21&ensp;</label>
                        <input type="checkbox"><label for="title">&ensp;27&ensp;</label>
                        <input type="checkbox"><label for="title">&ensp;32&ensp;</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="del" id="del">
        <h1 class="w3-center">刪除精華</h1>
        <br>
        <div class="container">
            <div class="card" style=" background:blanchedalmond;">
                <div class="card-head w3-row">
                    <div><button class="w3-button w3-black w3-right">刪除</button></div>
                </div>
                <div class="card-body w3-row">
                    <div class="w3-col l4 m6 s12">照片</div>
                    <div class="w3-col l8 m6 s12">
                        <div><input type="text" style="margin: 5px;"></div>
                        <div><input type="text" style="margin: 5px;"></div>
                        <div><textarea name="" id="" cols="" rows="" style="margin: 5px;"></textarea></div>
                    </div>
                </div>
                <div class="card-foot w3-row">
                    <div class="w3-col l4 m6 s12"><input type="file"></button></div>
                    <div class="w3-col l8 m6 s12">
                        <input type="checkbox" style="margin-left:10px;"><label for="title">&ensp;全選&ensp;</label>
                        <input type="checkbox"><label for="title">&ensp;01&ensp;</label>
                        <input type="checkbox"><label for="title">&ensp;07&ensp;</label>
                        <input type="checkbox"><label for="title">&ensp;08&ensp;</label>
                        <input type="checkbox"><label for="title">&ensp;21&ensp;</label>
                        <input type="checkbox"><label for="title">&ensp;27&ensp;</label>
                        <input type="checkbox"><label for="title">&ensp;32&ensp;</label>
                    </div>
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