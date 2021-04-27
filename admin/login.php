<?php
include_once("../php/function.php");
if(isset($_SESSION['is_admin_login'])&&$_SESSION['is_admin_login'])
    {
      header("Location:HLmanage.php");
    }

?>
<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <!-- 相容 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- 響應式設計用 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Disappear-admin-login</title>

    <meta name="description" content="描述">
    <meta name="author" content="作者">

    <link rel="icon" type="image/png" href="../image/LOGO.png" sizes="32x32">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<style>
    body,
    html {
        height: 100%;
        background-color: gray;
    }

    .bg img {
        width: 100%;
    }

    .login_form {
        border: 3px solid black;
        background-color: gray;
        width: 50%;
        padding-bottom: 20px;
        margin-top: 20%;
    }
</style>

<body>
    <div class="w3-display-container bg">
        <img src="../image/B-BG.png" alt="Lights" class="w3-image">
        <div class="container">
            <div class="w3-container login_form w3-display-topmiddle">
                <div class="w3-section">
                    <form id="form_login" method="POST">
                        <label><b>帳號</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="輸入帳號" required id="account">

                        <label><b>密碼</b></label>
                        <input class="w3-input w3-border" type="password" placeholder="輸入密碼" required id="password">
                        <p id="p_error" class="w3-hide" style="color:red; margin-top:10px;"><b>*帳號或密碼錯誤，請確認後重新輸入*</b></p>

                        <button id="btn_login" type="submit" class="w3-button w3-block w3-green w3-section w3-padding"><b>登入</b></button>
                        <label><input type="checkbox" checked="checked">&nbsp;記住帳密</label>
                    </form>
                </div>
                <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                    <a href="javascript:void(0)"><span class="w3-right w3-padding w3-hide-small"><u>Forgot password?</u></span></a>
                </div>
            </div>
        </div>

    </div>

    <footer class="footer">
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#form_login").submit(function(){
                
                $.ajax({
                    type:'POST',
                    url:'../php/verify_admin.php',
                    data:{
                        'account':$("#account").val(),
                        'password':$("#password").val()
                    },
                    dataType:'html',
                    success:function(data){
                        //data會收到verify_admin.php回傳的資訊
                        console.log(data);
                        if(data=="登入成功")
                        {
                            window.location.href="HLmanage.php";
                        }
                        if(data=="登入失敗")
                        {
                            $("#p_error").removeClass("w3-hide");
                            $("#p_error").addClass("w3-show");
                        }
                    },
                    error:function(jqXHR,textStatus,errorThrown){
                        alert("資料沒有傳過去");
                        console.log(jqXHR,ResponseText);
                            
                    }
                });
                return false;
            });

            
        });
    </script>
</body>

</html>