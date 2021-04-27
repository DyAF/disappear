<?php
    @session_start();
    include_once("DB_connect.php");
    //include = 引不到程式不會停
    //require = 引不到程式會停
    //once=避免重複引入

    function login($account,$password)
    {   
        $login_result=null;

        //SQL語法
        $sql= "SELECT * FROM `admin` WHERE `account` = '{$account}' AND `password`='{$password}'";
        //$sql= "SELECT * FROM `admin`";
        //執行SQL語法後的結果
        //mysqli_query(連線,sql語法)
        $sql_query_result = mysqli_query($_SESSION['link'],$sql);
        //到此會顯示 mysqli_result Object ( [current_field] => 0 [field_count] => 3 [lengths] => [num_rows] => 1 [type] => 0 )
        
        //判斷有沒有符合結果
        if(mysqli_num_rows($sql_query_result)>=1)
        {
            //有查到結果=帳密正確
            $login_result = "YES";
            $_SESSION['is_admin_login']=true;
        }
        else
        {
            $login_result = "NO";
        }


        //把資料取出來，只取一行。要全部要迴圈
        //mysqli_fetch_assoc(查詢結果)
        //$query_result_data=mysqli_fetch_assoc($sql_query_result);
        //到此顯示 Array ( [ID] => 1 [account] => DaDing [password] => 123 )




        
        return $login_result;

    }

    function new_HL($title,$URL,$JPG,$introduce,$tag01,$tag07,$tag08,$tag21,$tag27,$tag32)
    {
        $new_HL_result=null;
        $sql = "INSERT INTO `highlight`(`title`, `URL`, `JPG`, `introduce`, `tag01`, `tag07`, `tag08`, `tag21`, `tag27`, `tag32`) 
        VALUES ('{$title}','{$URL}','{$JPG}','{$introduce}','{$tag01}','{$tag07}','{$tag08}','{$tag21}','{$tag27}','{$tag32}')";
        $sql_query_result=mysqli_query($_SESSION['link'],$sql);
        //有成功就會顯示1
        if($sql_query_result)
        {
            $new_HL_result="YES";
        }
        else
        {
            $new_HL_result=mysqli_error($_SESSION['link']);
        }
        
        return $new_HL_result;
    }

    function query()
    {
        
        $sql="SELECT * FROM `highlight`";
        $sql_query_result=mysqli_query($_SESSION['link'],$sql);
        if(mysqli_num_rows($sql_query_result)>=1)
        {
            while($query_result_data=mysqli_fetch_assoc($sql_query_result))
            {
                $query_result[]=$query_result_data;
            }
        }
        else
        {
            $query_result = "查無資料";
        }

        return $query_result;
    }

    function update_HL($ID,$title,$url,$introduce,$tag01,$tag07,$tag08,$tag21,$tag27,$tag32)
    {
        $sql="UPDATE `highlight` SET `title`='{$title}',`URL`='{$url}',`introduce`='{$introduce}',`tag01`='{$tag01}',`tag07`='{$tag07}',`tag08`='{$tag08}',`tag21`='{$tag21}',`tag27`='{$tag27}',`tag32`='{$tag32}' WHERE `ID`=$ID";
        $sql_query_result=mysqli_query($_SESSION['link'],$sql);
        //有成功就會顯示1
        if($sql_query_result)
        {
            $update_HL_result="YES";
        }
        else
        {
            $update_HL_result=mysqli_error($_SESSION['link']);
        }
        
        return $update_HL_result;
    }

    function del_HL($ID)
    {
        $sql="DELETE FROM `highlight` WHERE `ID`=$ID";
        $sql_query_result=mysqli_query($_SESSION['link'],$sql);
        //有成功就會顯示1
        if($sql_query_result)
        {
            $update_HL_result="YES";
        }
        else
        {
            $update_HL_result=mysqli_error($_SESSION['link']);
        }
        
        return $update_HL_result;
    }
?>