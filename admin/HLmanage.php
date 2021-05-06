<?php
include_once("../php/function.php");
if (!isset($_SESSION['is_admin_login']) || !$_SESSION['is_admin_login']) {
    header("Location:login.php");
}
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

    <title>Disappear-精華管理</title>

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
    <?php include_once("menu.php")?>

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
            <div>
                <form id="form_new" method="POST">
                    <!-- 因鋪 -->
                    <div class="w3-row">
                        <div class="w3-col l2 m2 s12 w3-center"><label for="title"><b>影片標題</b> </label></div>
                        <div class="w3-col l10 m10 s12"><input id="title" class="title_input" type="text" required></div>
                    </div>
                    <div class="w3-row">
                        <div class="w3-col l2 m2 s12 w3-center"><label for="URL"><b>影片連結</b> </label></div>
                        <div class="w3-col l10 m10 s12"><input id="URL" class="YT_input" type="text" required></div>
                    </div>
                    <!-- TEXT噁瑞 -->
                    <div class="w3-row">
                        <div class="w3-col l2 m2 s12 w3-center"><label for="introduce"><b>影片簡介</b> </label></div>
                        <div class="w3-col l10 m10 s12"><textarea id="introduce" name="introduce" cols="65" rows="10" required></textarea></div>
                    </div>
                    <!-- 檔案選擇 -->
                    <div class="w3-row">
                        <div class="w3-col l2 m2 s12 w3-center"><label for="file"><b>影片縮圖</b> </label></div>
                        <div class="w3-col l10 m10 s12"><input id="file" type="file" id="myFile" name="filename" required></div>
                    </div>
                    <!-- 標籤 -->
                    <div class="w3-row">
                        <div class="w3-col l2 m2 s12 w3-center"><label for="tag"><b>影片標籤</b> </label></div>
                        <div class="w3-col l10 m10 s12">
                            <input id="new_all" type="checkbox"><label for="new_all">&ensp;全選&ensp;</label>
                            <input id="tag01" type="checkbox"><label for="tag01">&ensp;01&ensp;</label>
                            <input id="tag07" type="checkbox"><label for="tag07">&ensp;07&ensp;</label>
                            <input id="tag08" type="checkbox"><label for="tag08">&ensp;08&ensp;</label>
                            <input id="tag21" type="checkbox"><label for="tag21">&ensp;21&ensp;</label>
                            <input id="tag27" type="checkbox"><label for="tag27">&ensp;27&ensp;</label>
                            <input id="tag32" type="checkbox"><label for="tag32">&ensp;32&ensp;</label>
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
            <?php foreach ($get_query_result as $HL) : ?>
                <div class="card" style=" background:blanchedalmond;">
                    <div class="card-head w3-row">
                        <div class="w3-col l4 m6 s12"><button class="w3-button w3-black" name="btn_edit" data-id="<?php echo $HL['ID']; ?>">修改</button></div>
                        <div class="w3-col l8 m6 s12"><button class="w3-button w3-black w3-right" name="btn_save" data-id="<?php echo $HL['ID']; ?>">儲存</button></div>
                    </div>
                    <div class="card-body w3-row">
                        <div class="w3-col l4 m6 s12"><img style="width: 200px;" src="../image/<?php $jpg_array = str_split($HL['JPG']);for ($x = 10; $x <= count($jpg_array); $x++) :$str = $str . $jpg_array[$x];endfor;echo $str;$str = "";  ?>" alt=""></div>
                        <div class="w3-col l8 m6 s12">
                            <div><input type="text" style="margin: 5px;" placeholder="影片標題" name="edit_input_title" id="edit_title_<?php echo $HL['ID']; ?>" data-id="<?php echo $HL['ID']; ?>" disabled required value="<?php echo $HL['title']; ?>"></div>
                            <div><input type=" text" style="margin: 5px;" placeholder="影片網址" name="edit_input_URL" id="edit_URL_<?php echo $HL['ID']; ?>" data-id="<?php echo $HL['ID']; ?>" disabled required value="<?php echo $HL['URL']; ?>"></div>
                            <div><textarea style="margin: 5px;" placeholder="影片簡介" name="edit_input_introduce" id="edit_introduce_<?php echo $HL['ID']; ?>" data-id="<?php echo $HL['ID']; ?>" disabled required><?php echo $HL['introduce']; ?></textarea></div>
                        </div>
                    </div>
                    <div class="card-foot w3-row">
                        <div class="w3-col l4 m6 s12"><input name="edit_input_JPG" id="edit_JPG_<?php echo $HL['ID']; ?>" type="file" disabled required></button></div>
                        <div class="w3-col l8 m6 s12">
                            <input type="checkbox" id="update_all" data-id="<?php echo $HL['ID']; ?>" style="margin-left:10px;" disabled><label for="update_all">&ensp;全選&ensp;</label>
                            <input type="checkbox" name="edit_tag01" id="edit_tag01_<?php echo $HL['ID']; ?>" data-id="<?php echo $HL['ID']; ?>" disabled <?php if ($HL['tag01'] == 1) : ?>checked<?php endif; ?>><label for="edit_tag01_<?php echo $HL['ID']; ?>">&ensp;01&ensp;</label>
                            <input type="checkbox" name="edit_tag07" id="edit_tag07_<?php echo $HL['ID']; ?>" data-id="<?php echo $HL['ID']; ?>" disabled <?php if ($HL['tag07'] == 1) : ?>checked<?php endif; ?>><label for="edit_tag07_<?php echo $HL['ID']; ?>">&ensp;07&ensp;</label>
                            <input type="checkbox" name="edit_tag08" id="edit_tag08_<?php echo $HL['ID']; ?>" data-id="<?php echo $HL['ID']; ?>" disabled <?php if ($HL['tag08'] == 1) : ?>checked<?php endif; ?>><label for="edit_tag08_<?php echo $HL['ID']; ?>">&ensp;08&ensp;</label>
                            <input type="checkbox" name="edit_tag21" id="edit_tag21_<?php echo $HL['ID']; ?>" data-id="<?php echo $HL['ID']; ?>" disabled <?php if ($HL['tag21'] == 1) : ?>checked<?php endif; ?>><label for="edit_tag21_<?php echo $HL['ID']; ?>">&ensp;21&ensp;</label>
                            <input type="checkbox" name="edit_tag27" id="edit_tag27_<?php echo $HL['ID']; ?>" data-id="<?php echo $HL['ID']; ?>" disabled <?php if ($HL['tag27'] == 1) : ?>checked<?php endif; ?>><label for="edit_tag27_<?php echo $HL['ID']; ?>">&ensp;27&ensp;</label>
                            <input type="checkbox" name="edit_tag32" id="edit_tag32_<?php echo $HL['ID']; ?>" data-id="<?php echo $HL['ID']; ?>" disabled <?php if ($HL['tag32'] == 1) : ?>checked<?php endif; ?>><label for="edit_tag32_<?php echo $HL['ID']; ?>">&ensp;32&ensp;</label>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>

    <div class="del" id="del">
        <h1 class="w3-center">刪除精華</h1>
        <br>
        <div class="container">
            <?php foreach ($get_query_result as $HL) : ?>
                <div class="card" style=" background:blanchedalmond;" id="del_card_<?php echo $HL['ID']; ?>">
                    <div class="card-head w3-row">
                        <div class="w3-col l12 m12 s12"><button class="w3-button w3-black w3-right" name="btn_del" data-id="<?php echo $HL['ID']; ?>">刪除</button></div>
                    </div>
                    <div class="card-body w3-row">
                        <div class="w3-col l4 m6 s12"><img  style="width: 200px;" src="../image/<?php $jpg_array = str_split($HL['JPG']);for ($x = 10; $x <= count($jpg_array); $x++) :$str = $str . $jpg_array[$x];endfor;echo $str;$str = "";  ?>" alt=""></div>
                        <div class="w3-col l8 m6 s12">
                            <div><input type="text" style="margin: 5px;" placeholder="<?php echo $HL['title']; ?>" name="del_input_title" disabled></div>
                            <div><input type="text" style="margin: 5px;" placeholder="<?php echo $HL['URL']; ?>" name="del_input_URL" disabled></div>
                            <div><textarea style="margin: 5px;" placeholder="<?php echo $HL['introduce']; ?>" id="edit_textarea_introdue" disabled></textarea></div>
                        </div>
                    </div>
                    <div class="card-foot w3-row">
                        <div class="w3-col l4 m6 s12"><input type="file" disabled></button></div>
                        <div class="w3-col l8 m6 s12">
                            <input type="checkbox" style="margin-left:10px;" disabled><label for="title">&ensp;全選&ensp;</label>
                            <input type="checkbox" name="del_tag01" disabled <?php if ($HL['tag01'] == 1) : ?>checked<?php endif; ?>><label>&ensp;01&ensp;</label>
                            <input type="checkbox" name="del_tag07" disabled <?php if ($HL['tag07'] == 1) : ?>checked<?php endif; ?>><label>&ensp;07&ensp;</label>
                            <input type="checkbox" name="del_tag08" disabled <?php if ($HL['tag08'] == 1) : ?>checked<?php endif; ?>><label>&ensp;08&ensp;</label>
                            <input type="checkbox" name="del_tag21" disabled <?php if ($HL['tag21'] == 1) : ?>checked<?php endif; ?>><label>&ensp;21&ensp;</label>
                            <input type="checkbox" name="del_tag27" disabled <?php if ($HL['tag27'] == 1) : ?>checked<?php endif; ?>><label>&ensp;27&ensp;</label>
                            <input type="checkbox" name="del_tag32" disabled <?php if ($HL['tag32'] == 1) : ?>checked<?php endif; ?>><label>&ensp;32&ensp;</label>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

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
            //新增全選
            $("#new_all").click(function() {
                if ($("#new_all").is(":checked") == true) {
                    //console.log("選中");
                    $("#tag01").attr('checked', 'checked');
                    $("#tag07").attr('checked', 'checked');
                    $("#tag08").attr('checked', 'checked');
                    $("#tag21").attr('checked', 'checked');
                    $("#tag27").attr('checked', 'checked');
                    $("#tag32").attr('checked', 'checked');

                } else {
                    $("#tag01").removeAttr('checked');
                    $("#tag07").removeAttr('checked');
                    $("#tag08").removeAttr('checked');
                    $("#tag21").removeAttr('checked');
                    $("#tag27").removeAttr('checked');
                    $("#tag32").removeAttr('checked');

                }
            });
            //新增精華
            $("#form_new").submit(function() {
                if ($("#tag01").prop("checked") == true) {
                    tag01 = 1;
                } else {
                    tag01 = 0;
                };
                if ($("#tag07").prop("checked") == true) {
                    tag07 = 1;
                } else {
                    tag07 = 0;
                };
                if ($("#tag08").prop("checked") == true) {
                    tag08 = 1;
                } else {
                    tag08 = 0;
                };
                if ($("#tag21").prop("checked") == true) {
                    tag21 = 1;
                } else {
                    tag21 = 0;
                };
                if ($("#tag27").prop("checked") == true) {
                    tag27 = 1;
                } else {
                    tag27 = 0;
                };
                if ($("#tag32").prop("checked") == true) {
                    tag32 = 1;
                } else {
                    tag32 = 0;
                };

                $.ajax({
                    type: 'POST',
                    url: '../php/new_HL.php',
                    data: {
                        'title': $("#title").val(),
                        'URL': $("#URL").val(),
                        'JPG': $("#file").val(),
                        'introduce': $("#introduce").val(),
                        'tag01': tag01,
                        'tag07': tag07,
                        'tag08': tag08,
                        'tag21': tag21,
                        'tag27': tag27,
                        'tag32': tag32

                    },
                    dataType: 'html',
                    success: function(data) {

                        //console.log(data);
                        if (data == "新增成功") {
                            location.reload();
                        } else {
                            alert("新增失敗，請F12");
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
            //修改精華-編輯
            $("[name=btn_edit]").click(function() {
                var btn_id = $(this).attr("data-id");
                var title = "#edit_title_" + btn_id;
                var url = "#edit_URL_" + btn_id;
                var introduce = "#edit_introduce_" + btn_id;
                var img = "#edit_JPG_" + btn_id;
                var tagall = "#update_all";
                var tag01 = "#edit_tag01_" + btn_id;
                var tag07 = "#edit_tag07_" + btn_id;
                var tag08 = "#edit_tag08_" + btn_id;
                var tag21 = "#edit_tag21_" + btn_id;
                var tag27 = "#edit_tag27_" + btn_id;
                var tag32 = "#edit_tag32_" + btn_id;

                if ($(title).is(":disabled") == true) 
                {
                    $(title).prop("disabled", false);
                    $(url).prop("disabled", false);
                    $(introduce).prop("disabled", false);
                    $(img).prop("disabled", false);
                    $(tagall).prop("disabled", false);
                    $(tag01).prop("disabled", false);
                    $(tag07).prop("disabled", false);
                    $(tag08).prop("disabled", false);
                    $(tag21).prop("disabled", false);
                    $(tag27).prop("disabled", false);
                    $(tag32).prop("disabled", false);
                } 
                else 
                {
                    $(title).prop("disabled", true);
                    $(url).prop("disabled", true);
                    $(introduce).prop("disabled", true);
                    $(img).prop("disabled", true);
                    $(tagall).prop("disabled", true);
                    $(tag01).prop("disabled", true);
                    $(tag07).prop("disabled", true);
                    $(tag08).prop("disabled", true);
                    $(tag21).prop("disabled", true);
                    $(tag27).prop("disabled", true);
                    $(tag32).prop("disabled", true);
                }


            });
            //修改全選
            $("#update_all").click(function() {
                var btn_id = $(this).attr("data-id");
                var tag01 = "#edit_tag01_" + btn_id;
                var tag07 = "#edit_tag07_" + btn_id;
                var tag08 = "#edit_tag08_" + btn_id;
                var tag21 = "#edit_tag21_" + btn_id;
                var tag27 = "#edit_tag27_" + btn_id;
                var tag32 = "#edit_tag32_" + btn_id;
                if ($("#update_all").is(":checked") == true) {
                    //console.log("選中");
                    $(tag01).attr('checked', 'checked');
                    $(tag07).attr('checked', 'checked');
                    $(tag08).attr('checked', 'checked');
                    $(tag21).attr('checked', 'checked');
                    $(tag27).attr('checked', 'checked');
                    $(tag32).attr('checked', 'checked');

                } else {
                    $(tag01).removeAttr('checked');
                    $(tag07).removeAttr('checked');
                    $(tag08).removeAttr('checked');
                    $(tag21).removeAttr('checked');
                    $(tag27).removeAttr('checked');
                    $(tag32).removeAttr('checked');

                }
            });
            //修改精華-儲存
            $("[name=btn_save]").click(function() {
                var btn_id = $(this).attr("data-id");
                var title = "#edit_title_" + btn_id;
                var url = "#edit_URL_" + btn_id;
                var introduce = "#edit_introduce_" + btn_id;
                var img = "#edit_JPG_" + btn_id;
                var tag01_id = "#edit_tag01_" + btn_id;
                var tag07_id = "#edit_tag07_" + btn_id;
                var tag08_id = "#edit_tag08_" + btn_id;
                var tag21_id = "#edit_tag21_" + btn_id;
                var tag27_id = "#edit_tag27_" + btn_id;
                var tag32_id = "#edit_tag32_" + btn_id;

                if ($(tag01_id).prop("checked") == true) {
                    tag01 = 1;
                } else {
                    tag01 = 0;
                }
                if ($(tag07_id).prop("checked") == true) {
                    tag07 = 1;
                } else {
                    tag07 = 0;
                }
                if ($(tag08_id).prop("checked") == true) {
                    tag08 = 1;
                } else {
                    tag08 = 0;
                }
                if ($(tag21_id).prop("checked") == true) {
                    tag21 = 1;
                } else {
                    tag21 = 0;
                }
                if ($(tag27_id).prop("checked") == true) {
                    tag27 = 1;
                } else {
                    tag27 = 0;
                }
                if ($(tag32_id).prop("checked") == true) {
                    tag32 = 1;
                } else {
                    tag32 = 0;
                }


                $.ajax({
                    type: 'POST',
                    url: '../php/update_HL.php',
                    data: {
                        'ID': btn_id,
                        'title': $(title).val(),
                        'URL': $(url).val(),
                        'introduce': $(introduce).val(),
                        'img': $(img).val(),
                        'tag01': tag01,
                        'tag07': tag07,
                        'tag08': tag08,
                        'tag21': tag21,
                        'tag27': tag27,
                        'tag32': tag32

                    },
                    dataType: 'html',
                    success: function(data) {

                        //console.log(data);
                        if (data == "修改成功") {
                            location.reload();
                        } else {
                            alert("修改失敗，請F12");
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
            //刪除精華
            $("[name=btn_del]").click(function() {
                var btn_id = $(this).attr("data-id");
                var del_card_id = "#del_card_" + btn_id;
                var del_card = $(del_card_id)
                var check = confirm("確定要刪除該精華嗎?");
                if (check) {
                    $.ajax({
                        type: 'POST',
                        url: '../php/del_HL.php',
                        data: {
                            'ID': btn_id
                        },
                        dataType: 'html',
                        success: function(data) {

                            //console.log(data);
                            if (data == "刪除成功") {
                                del_card.fadeOut();
                                //location.reload();
                            } else {
                                alert("刪除失敗，請F12");
                                console.log(data);

                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            alert("資料沒有傳過去");
                            console.log(jqXHR, ResponseText);

                        }
                    });
                } //end if


                return false;


            });
        });
    </script>
</body>

</html>