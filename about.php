<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <!-- 相容 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- 響應式設計用 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Disappear-About us</title>

    <meta name="description" content="描述">
    <meta name="author" content="作者">

    <link rel="icon" type="image/png" href="image/LOGO.png" sizes="32x32">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
    }

    .footer div {
        min-height: 150px;
        width: 100%;
        position: absolute;
        left: 0px;
        bottom: 0px;
    }

    .about-us,
    .member {
        background-color: blue;
        border: brown solid 1px;
        padding: 20px;
    }

    .member-card {
        background-color: red;
        border: brown solid 1px;
    }

    .member-card-01 {
        background-color: pink;
        border: brown solid 1px;
    }

    .member-card-07 {
        background-color: green;
        border: brown solid 1px;
    }
</style>

<body>
    <!-- 頂端列 -->
    <div class="header w3-top w3-bar w3-card w3-dark-gray">
        <a href="#" class="w3-bar-item w3-display-left">Disappear</a>
        <div class="w3-display-right w3-center">
            <a href="#" class=" active w3-bar-item w3-padding-large">關於我們</a>
            <a href="#" class="w3-bar-item w3-padding-large">精華片段</a>
            <a href="#" class="w3-bar-item w3-padding-large">聯絡我們</a>
        </div>
    </div>

    <!-- 內容 -->
    <div class="content container">
        <div class="about-us w3-center">
            <h1>About Us</h1>
            <p>曾經霸氣建立盛世王朝，如今消失群組長滿雜草。</p>
        </div>
        <div class="member w3-center">
            <h1>Member</h1>
            <div class="member-card w3-row">
                <div class="w3-col s12 m6 l4 member-card-01">01xl3bp6</div>
                <div class="w3-col s12 m6 l4 member-card-07">07dk au/6</div>
                <div class="w3-col s12 m6 l4 member-card-01">08xl3bp6</div>
                <div class="w3-col s12 m6 l4 member-card-07">21dk au/6</div>
                <div class="w3-col s12 m6 l4 member-card-01">27xl3bp6</div>
                <div class="w3-col s12 m6 l4 member-card-07">32dk au/6</div>
            </div>

        </div>
    </div>



    <!-- 頁底 -->
    <footer class="footer">
        <div class=" w3-card w3-dark-gray">
            <p class="w3-display-middle">&copy; <?php echo date("Y"); ?> DISAPPEAR</p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>