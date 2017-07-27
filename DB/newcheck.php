<?php
    require "dbconfig.php";
    mysqli_set_charset($db, 'utf8');

    $username=$_POST['userName'];	    // 이름
    $userid=$_POST['userID'];		    // ID
    $userpw=$_POST['userPassword'];		// PW
    $userpwch=$_POST['userPasswordch'];	// PW 확인

    $sql_new = "INSERT INTO User (`name`, `ID`, `password`, `passwordch`, `IsVerify`)
                VALUES ('$username', '$userid', '$userpw', '$userpwch', 'NO')";

    if(mysqli_query($db, $sql_new)){
        echo"<script>alert('회원가입 성공을 축하드립니다. 로그인은 관리자의 가입허가 이후부터 가능하십니다.');location.href='../index.php';</script>";
    } 
    else{
        echo mysqli_connect_error();
        echo "<script>alert('ERROR: 동일한 ID가 존재합니다.');history.go(-1);</script>";
    }

    mysqli_close($db);
?>