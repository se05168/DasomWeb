<?php
    require "../DB/dbconfig.php"; //연결

    mysqli_set_charset($db, 'utf8');

    $userid=$_GET["userid"];	// ID

    $sql = "SELECT * FROM user WHERE ID='$userid'";

    $rst=mysqli_query($db, $sql);
    $cnt=mysqli_num_rows($rst);
?>

<script type="text/javascript">

    var a=0;

    function useID(v){
        opener.document.all.checkid.value=1;
        opener.document.all.userID.value=v;
        var id = opener.document.getElementById('inputID'); // 인풋창 비활성화
        id.readOnly = true;
        window.close();
    }

    function chkId(){
        var userid=document.all.userid.value;
        if(userid){
            url="http://127.0.0.1/homepage/PAGE/idcheck.php?userid="+userid;
            location.href=url;
        } else{
            alert("ID를 입력하세요!");
        }
    }
    
    function fun_userid(form) {
        if(a==0){
            if (form.userid.value.length < 6 || form.userid.value.length > 20) {
                alert("아이디는 6~20자로 입력해주십시오.");
                form.userid.value="";
                form.userid.focus();
                a=1;
            }

        } else {
            a=0;
        }   

    //     for (i=0; i<form.userid.value.length; i++) {
    //         var ch = form.userid.value.charAt(i);

    //         if ( ( ch < "a" || ch > "z") && (ch < "A" || ch > "Z") && (ch < "0" || ch > "9" ) ) {
    // //         if(!(ch=="!" || ch=="@" || ch=="#" || ch=="$" || ch=="&" || ch=="*" || ch=="-" || ch=="_" || ch=="+" || ch=="?")) {
    //                 alert("아이디는 대문자, 소문자, 숫자, 특수문자(!,@,#,$,&,*,-,_,+,?)를 조합하여 입력해주십시오.");
    //                 form.userid.value="";
    //                 form.userid.select();
    //                a=1;
    // //         }
    //         }
    //     }
    }
</script>

<?if($cnt){?> <center> <span style="color:red"> <strong>

<?=$userid?></strong></span>는<br />사용하실 수 없는 ID입니다 </center> <br />

<center>
<form>
    <input type=text maxlength=20 size=20 name="userid" onblur="fun_userid(this.form)" required>
    <input type=button value="ID중복확인" onClick="chkId();">
</form>
</center>

<?}else{?> <center> <span style="color:red"> <strong>

<?=$userid?></strong></span>는<br />사용가능한 ID입니다. </center> <br />

<center>
<a href="#" onClick="useID('<?=$userid?>');">사용하기</a>  <a href="#" onClick="window.close();">닫기</a>
</center>

<?}?>


