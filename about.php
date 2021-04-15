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
        width: 100%;
        min-height: 95px;
    }

    .about-us,
    .member {
        padding: 20px;
    }

    .member-card {
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .member-card-01 {
        margin: 0px;
        background-color: #0048EE;
    }

    .member-card-07 {
        margin: 0px;
        background-color: #FF7400;
    }
    .member-card-08 {
        margin: 0px;
        background-color: #FF0700;
    }
    .member-card-21 {
        margin: 0px;
        background-color: #8F0AD9;
    }

    .member-card-27 {
        margin: 0px;
        background-color: #FFDD00;
    }
    .member-card-32 {
        margin: 0px;
        background-color: #00E800;
    }

    .card {
        border: black solid 3px;
        box-shadow: 0 4px 10px 0 rgb(0 0 0 / 20%), 0 4px 20px 0 rgb(0 0 0 / 19%);
    }

    .head-photo {
        width: 120px;
        height: 120px;
        border: black solid 2px;
        border-radius: 100cm;
        margin: 5px 1px;

    }

    .head-photo p {
        padding-top: 35px;
        font-size: 36px;
        font-weight: bolder;
    }
    .introduce p{
        margin-top: 20px;
        font-size: 20px;
    }
    .head-photo-01{
        
        background-color: #3471FE;
        border: #0048EE solid 2px;
    }
    .head-photo-07{
        
        background-color: #FFA55B;
        border: #FF7400 solid 2px;
    }
    .head-photo-08{
        
        background-color: #FF5F5B;
        border: #FF0700 solid 2px;
    }
    .head-photo-21{
        
        background-color: #B058E0;
        border: #8F0AD9 solid 2px;
    }
    .head-photo-27{
        
        background-color: #FFE95B;
        border: #FFDD00 solid 2px;
    }
    .head-photo-32{
        
        background-color: #10FF10;
        border: #00E800 solid 2px;
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
                <!-- 自製醜名片卡 -->
                <div class="w3-col s12 m6 l4" name="01">
                    <div class="card w3-container member-card-01">
                        <div class="w3-row">
                            <div class="w3-col l4 m12 s12">
                                <div class="head-photo head-photo-01">
                                    <p class="w3-center">01</p>
                                </div>
                            </div>
                            <div class="w3-col l8 m12 s12">
                                <div class="name">
                                    <h1>老人</h1>
                                </div>
                                <div class="introduce">
                                    <p>創始/公關/業務</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w3-col s12 m6 l4" name="07">
                    <div class="card w3-container member-card-07">
                        <div class="w3-row">
                            <div class="w3-col l4 m12 s12">
                                <div class="head-photo head-photo-07">
                                    <p class="w3-center">07</p>
                                </div>
                            </div>
                            <div class="w3-col l8 m12 s12">
                                <div class="name">
                                    <h1>NeizKilor</h1>
                                </div>
                                <div class="introduce">
                                    <p>演員/業務/行政</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w3-col s12 m6 l4" name="08">
                    <div class="card w3-container member-card-08">
                        <div class="w3-row">
                            <div class="w3-col l4 m12 s12">
                                <div class="head-photo head-photo-08">
                                    <p class="w3-center">08</p>
                                </div>
                            </div>
                            <div class="w3-col l8 m12 s12">
                                <div class="name">
                                    <h1>Jarven</h1>
                                </div>
                                <div class="introduce">
                                    <p>演員/企劃/公關</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w3-col s12 m6 l4" name="21">
                    <div class="card w3-container member-card-21">
                        <div class="w3-row">
                            <div class="w3-col l4 m12 s12">
                                <div class="head-photo head-photo-21">
                                    <p class="w3-center">21</p>
                                </div>
                            </div>
                            <div class="w3-col l8 m12 s12">
                                <div class="name">
                                    <h1>大丁</h1>
                                </div>
                                <div class="introduce">
                                    <p>創始/企劃/剪輯</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w3-col s12 m6 l4" name="27">
                    <div class="card w3-container member-card-27">
                        <div class="w3-row">
                            <div class="w3-col l4 m12 s12">
                                <div class="head-photo head-photo-27">
                                    <p class="w3-center">27</p>
                                </div>
                            </div>
                            <div class="w3-col l8 m12 s12">
                                <div class="name">
                                    <h1>PIPI</h1>
                                </div>
                                <div class="introduce">
                                    <p>科技/行政/財務</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w3-col s12 m6 l4" name="32">
                    <div class="card w3-container member-card-32">
                        <div class="w3-row">
                            <div class="w3-col l4 m12 s12">
                                <div class="head-photo head-photo-32">
                                    <p class="w3-center">32</p>
                                </div>
                            </div>
                            <div class="w3-col l8 m12 s12">
                                <div class="name">
                                    <h1>YouYuan</h1>
                                </div>
                                <div class="introduce">
                                    <p>科技/行政/財務</p>
                                </div>
                            </div>
                        </div>
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