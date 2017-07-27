<?php
    require "dbconfig.php";
    mysqli_set_charset($db, 'utf8');

    $userID = $_POST['checkid'];

    $sql_new = "UPDATE user SET IsVerify='Yes' WHERE ID='$userID'";

    if(mysqli_query($db, $sql_new)){
        echo"<script>alert('승인에 성공했습니다.');location.href='../PAGE/admin.php';</script>";
    } 
    else{
        echo mysqli_connect_error();
        echo "<script>alert('ERROR: 에러가 발생했습니다.');history.go(-1);</script>";
    }

    mysqli_close($db);
?>