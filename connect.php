<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <!-- 相容 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- 響應式設計用 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Disappear-Contact</title>

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
        /* background-color: blue; */
    }

    .footer div {
        width: 100%;
        min-height: 95px;
    }

    /*到這邊*/
    form {
        border: gray 1px solid;
        margin-top: 20px;
        margin-bottom: 20px;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    form div {
        padding: 5px;
    }

    form label {
        font-size: large;
        font-weight: bolder;
        padding-left: 100px;
    }

    form input,
    form select {
        border: solid 2px black;
        border-radius: 8px;
        padding: 5px;
        width: 250px;
    }

    form textarea {
        border: solid 2px black;
        border-radius: 8px;
        padding: 5px;
    }

    form button {
        margin-right: 152px;
    }
</style>

<body>
    <!-- 頂端列 -->
    <?php include_once("menu.php")?>

    <!-- 內容 -->
    <div class="content container">
        <div style="padding:5px;">
            <form id="connect" method="POST">
                <div class="type w3-row">
                    <div class="w3-col l2 m12 s12">
                        <label>回應方式</label>
                    </div>
                    <div class="w3-col l10 m12 s12">
                        <select name="option" id="type" required>
                            <option value="" disabled selected>請選擇與您聯絡方式</option>
                            <option value="1">無須回應</option>
                            <option value="2">電子郵件</option>
                            <option value="3">電話聯繫</option>
                        </select>
                    </div>
                </div>
                <div class="name w3-row">
                    <div class="w3-col l2 m12 s12">
                        <label>姓名</label>
                    </div>
                    <div class="w3-col l10 m12 s12">
                        <input required placeholder="希望我們如何稱呼您" id="name">
                    </div>
                </div>
                <div class="email w3-row">
                    <div class="w3-col l2 m12 s12">
                        <label>電子郵件</label>
                    </div>
                    <div class="w3-col l10 m12 s12">
                        <input placeholder="輸入您的電子郵件" type="email"  id="email">
                    </div>
                </div>
                <div class="phone w3-row">
                    <div class="w3-col l2 m12 s12">
                        <label>連絡電話</label>
                    </div>
                    <div class="w3-col l10 m12 s12">
                        <input placeholder="輸入您的聯絡電話" type="tel" id="phone">
                    </div>


                </div>
                <div class="subject w3-row">
                    <div class="w3-col l2 m12 s12">
                        <label>主旨</label>
                    </div>
                    <div class="w3-col l10 m12 s12">
                        <input required id="subject">
                    </div>
                </div>
                <div class="feedback w3-row">
                    <div class="w3-col l2 m12 s12">
                        <label>內容</label>
                    </div>
                    <div class="w3-col l10 m12 s12">
                        <textarea required rows="10" cols="50" id="feedback_content"></textarea>
                    </div>
                </div>
                <div class="submit w3-row">
                    <button class="w3-right w3-btn w3-gray w3-round" style="border: black 2px solid;">送出</button>
                </div>
            </form>
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
        $(document).ready(function() {
            $("#connect").submit(function() { 
                var status=0;
                $.ajax({
                    type: 'POST',
                    url: 'php/new_FB.php',
                    data: {
                        'type': $("#type").val(),
                        'name': $("#name").val(),
                        'email': $("#email").val(),
                        'phone': $("#phone").val(),
                        'subject': $("#subject").val(),
                        'content': $("#feedback_content").val(),
                        'status': status

                    },
                    dataType: 'html',
                    success: function(data) {

                        console.log(data);
                        if (data == "留言成功") {
                            location.reload();
                        } else {
                            alert("留言失敗，請F12");
                            console.log(data);

                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert("資料沒有傳過去");
                        console.log(jqXHR, ResponseText);

                    }
                }); 
                return false;
            });
        });
    </script>
</body>

</html>