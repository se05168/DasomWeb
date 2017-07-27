<?php
    require "dbconfig.php";
    mysqli_set_charset($db, 'utf8');

    $userid=$_POST['userID'];		    // ID
    $userpw=$_POST['userPassword'];		// PW

    $sql_new = "SELECT * FROM User WHERE ID = '$userid' AND password = '$userpw'";

    $result = mysqli_query($db, $sql_new);
    $count = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result); // 추가

    if($count == 1) {
        if($userid == "admin") echo"<script>alert('관리자 ID로 로그인하셨습니다. 관리창으로 이동합니다.');location.href='../PAGE/admin.php';</script>";
        else if($row["IsVerify"] == "NO") echo "<script>alert('ERROR: 관리자의 승인이 필요한 계정입니다.');history.go(-1);</script>"; // 추가
        else echo "<script>alert('로그인에 성공하였습니다.');location.href='../PAGE/mainPage.php';</script>";
    } else {
        echo mysqli_connect_error();
        echo "<script>alert('ERROR: ID와 password가 일치하지 않습니다.');history.go(-1);</script>";
    }

    mysqli_close($db);
?>