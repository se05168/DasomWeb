
function openCheckId() {
    var userID=document.all.userID.value;
    if(userID){
        url="http://127.0.0.1/homepage/PAGE/idcheck.php?userid="+userID;
        window.open(url,"chkid","width=500,height=300,top=300,left=700,menubar=no,toolbar=no");
    }else {
        alert("ID를 입력하세요!");
    }
}

function chkForm() {
    var checkid=document.all.checkid.value;
    if(checkid==0) {
        alert("ID 중복체크를 하세요!");
        return false;
    }
    return true;
}