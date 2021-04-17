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

    .content {
        margin-top: 60px;
        background-color: blue;
    }

    .footer div {
        width: 100%;
        min-height: 95px;
    }

    .toolbar {
        padding: 20px;
        padding-top: 40px;
    }

    .search {
        /* background-color: blueviolet; */
    }

    .sort {
        /* background-color: sandybrown; */
    }

    .search label,
    .sort label {
        font-size: large;
        margin-right: 20px;
    }

    .search input {
        padding: 5px 0;
        width: 50%;
        border: black 2px solid;
    }

    .search button {
        padding: 5px 8px;
        margin-left: -9px;
        /* width: 50%; */
        border: black 2px solid;
    }

    .sort select {
        padding: 6px 0;
        border: black 2px solid;
    }
    .HL-card{
        width: 300px;
        border: black solid 3px;
        box-shadow: 0 4px 10px 0 rgb(0 0 0 / 20%), 0 4px 20px 0 rgb(0 0 0 / 19%);
        margin: 10px;
    }
    .HL-photo{
        border-right: black solid 2px;
        height: 150px ;
    }
</style>

<body>
    <!-- 頂端列 -->
    <div class="header w3-top w3-bar w3-card w3-dark-gray">
        <a href="#" class="w3-bar-item w3-display-left">Disappear</a>
        <div class="w3-display-right w3-center">
            <a href="#" class="w3-bar-item w3-padding-large">關於我們</a>
            <a href="#" class="w3-bar-item w3-padding-large active">精華片段</a>
            <a href="#" class="w3-bar-item w3-padding-large">聯絡我們</a>
        </div>
    </div>

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
            <div class="w3-row" style="background-color: blueviolet;margin: 10px;margin-top: 30px;">
                <div class="w3-col l4 m6 s12 HL-card" style="width: 400px;">
                    <div class="w3-row">
                        <div class="w3-col l4 m4 s12 w3-center HL-photo" style="background-color: brown;">照片</div>
                        <div class="w3-col l8 m8 s12 w3-center HL-info" style="background-color:darkcyan;">
                            <p>影片標題</p>
                            <p>影片簡介</p>
                            <p>影片標籤</p>
                        </div>
                    </div>
                </div>
                <div class="w3-col l4 m6 s12 HL-card" style="width: 400px;" >
                    <div class="w3-row">
                        <div class="w3-col l4 m4 s12 w3-center HL-photo" style="background-color: brown;">照片</div>
                        <div class="w3-col l8 m8 s12 w3-center HL-info" style="background-color:darkcyan;">
                            <p>影片標題</p>
                            <p>影片簡介</p>
                            <p>影片標籤</p>
                        </div>
                    </div>
                </div>
                <div class="w3-col l4 m6 s12 HL-card" style="width: 400px;">
                    <div class="w3-row">
                        <div class="w3-col l4 m4 s12 w3-center HL-photo" style="background-color: brown;">照片</div>
                        <div class="w3-col l8 m8 s12 w3-center HL-info" style="background-color:darkcyan;">
                            <p>影片標題</p>
                            <p>影片簡介</p>
                            <p>影片標籤</p>
                        </div>
                    </div>
                </div>
                <!-- 正確版 -->
                <div class="w3-col l4 m6 s12 HL-card" style="width: 400px;">
                    <div class="w3-row">
                        <div class="w3-col l4 m4 s12 w3-center HL-photo" style="background-color: brown;">照片</div>
                        <div class="w3-col l8 m8 s12 w3-center HL-info" style="background-color:darkcyan;">
                            <p style="padding: 10px 0; border-bottom: solid;">影片標題</p>
                            <p style="padding-bottom: 10px; border-bottom: solid;">影片簡介</p>
                            <p>影片標籤</p>
                        </div>
                    </div>
                </div>
                <!-- 正確版 -->
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