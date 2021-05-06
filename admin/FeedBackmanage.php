<?php
include_once("../php/function.php");
if (!isset($_SESSION['is_admin_login']) || !$_SESSION['is_admin_login']) {
    header("Location:login.php");
}
$get_query_result = FB_query();
?>
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

    .detail {
        border: black solid 1px;
        box-shadow: 0 4px 10px 0 rgb(0 0 0 / 20%), 0 4px 20px 0 rgb(0 0 0 / 19%);
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .detail p {
        padding-top: 10px;
        padding-left: 5px;
    }
</style>

<body>
    <!-- 頂端列 -->
    <?php include_once("menu.php")?>

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
            <?php foreach ($get_query_result as $FB) : ?>
                <div class="card" style="background:blanchedalmond;">
                    <div class="card-head w3-row">
                        <div class="w3-col l12 m12 s12"><span id="span_<?php echo $FB['ID'];?>" class="w3-tag w3-right <?php if ($FB['status'] == 1) : ?> w3-green<?php else : ?>w3-red<?php endif; ?>"><?php if ($FB['status'] == 1) : ?>Done<?php else : ?>undone<?php endif; ?></span></div>
                    </div>
                    <div class="card-body w3-row">
                        <div class="w3-col l2 m3 s12 w3-display-cotainer"><img class="w3-middle" style="padding-left:20px;padding-top:20px;" src="<?php switch ($FB['type']):
                                                                                                                                                        case 1: ?>../image/none.png<?php break;
                                                                                                                                                                                                    case 2: ?>../image/mail.png<?php break;
                                                                                                                                                                                                                                            case 3: ?>../image/phone.png<?php break;
                                                                                                                                                                                                                                                                                endswitch; ?>" alt=""></div>
                        <div class="w3-col l10 m9 s12">
                            <div>
                                <p><b style="font-size:30px;"><?php echo $FB['subject']; ?></b></p>
                            </div>
                            <div>
                                <p style="padding-right:50px;min-height:50px"><?php echo $FB['content']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-foot w3-row">
                        <div class="w3-col l12 m12 s12"><button class="w3-button w3-circle w3-teal w3-right" name="btn_plus" data-id="<?php echo $FB['ID']; ?>">+</button></div>
                    </div>
                    <div class="w3-row detail w3-hide" style="background-color: white;" id="div_detail_<?php echo $FB['ID']; ?>">
                        <div class="w3-col l3 m3 s12" style="border-right: gray 2px soild;">
                            <p><?php echo $FB['name']; ?></p>
                        </div>
                        <div class="w3-col l3 m3 s12">
                            <p><?php echo $FB['email']; ?></p>
                        </div>
                        <div class="w3-col l3 m3 s12">
                            <p><?php echo $FB['phone']; ?></p>
                        </div>
                        <div class="w3-col l1 m1 s12">
                            <p>未回覆</p>
                        </div>
                        <div class="w3-col l1 m1 s12 ">
                            <div class="form-check form-switch" style="padding-left: 3.5em;">
                                <input class="form-check-input " type="checkbox" name="status" data-id="<?php echo $FB['ID'];?>" id="status_<?php echo $FB['ID'];?>" style="margin-top: 12px;">
                            </div>
                        </div>
                        <div class="w3-col l1 m1 s12">
                            <p>已回覆</p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <!-- <div class="card" style="background:blanchedalmond;">
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
                    </div>`
                </div>
                <div class="card-foot w3-row">
                    <div class="w3-col l12 m12 s12"><button class="w3-button w3-circle w3-teal w3-right">+</button></div>
                </div>
            </div> -->
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
            
            
            //點開詳細資訊
            $("[name=btn_plus]").click(function() {
                var btn_id = $(this).attr("data-id");
                //console.log(btn_id);
                var div_detail_id = "#div_detail_" + btn_id;
                if ($(div_detail_id).hasClass("w3-hide")) 
                {
                    $(div_detail_id).removeClass("w3-hide");
                    $(div_detail_id).addClass("w3-show");
                }
                else
                {
                    $(div_detail_id).removeClass("w3-show");
                    $(div_detail_id).addClass("w3-hide");
                }

            });
            //回覆未回覆
            $("[name=status]").click(function(){
                var btn_id = $(this).attr("data-id");
                var status_id = "#status_" + btn_id;
                var span_id = "#span_" + btn_id;
                if($(status_id).is(":checked") == true)
                {
                    $(span_id).removeClass("w3-red");
                    $(span_id).addClass("w3-green");
                    $(span_id).html("Done");
                }
                else
                {
                    $(span_id).removeClass("w3-green");
                    $(span_id).addClass("w3-red");
                    $(span_id).html("Undone");
                }
            });
            //修改精華-儲存
            $("[name=status]").blur(function() {
                var btn_id = $(this).attr("data-id");
                var status_id = "#status_" + btn_id;
                var status;
                if($(status_id).is(":checked") == true)
                {
                   status=1;
                }
                else
                {
                    status=0;
                }
                $.ajax({
                    type: 'POST',
                    url: '../php/update_FB.php',
                    data: {
                        'ID': btn_id,
                        'status': status
                    },
                    dataType: 'html',
                    success: function(data) {

                        //console.log(data);
                        if (data == "狀態更新成功") {
                            location.reload();
                        } else {
                            alert("狀態更新失敗，請F12");
                            console.log(data);

                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert("資料沒有傳過去");
                        console.log(jqXHR, ResponseText);

                    }
                });
                
                
                //return false;


            });

        });
    </script>
</body>

</html>