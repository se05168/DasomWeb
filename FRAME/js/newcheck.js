var a=0;

function fun_username(form) {
    if(a==0){
        if (form.userName.value.length < 2) {
            alert("이름은 2자 이상 입력해주십시오.");
            form.userName.value="";
            form.userName.focus();
            a=1;
        }
    } else {
        a=0;
    }
}

function fun_userid(form) {
    if(a==0){
        if (form.userID.value.length < 6 || form.userID.value.length > 20) {
            alert("아이디는 6~20자로 입력해주십시오.");
            form.userID.value="";
            form.userID.focus();
            a=1; return;
        }
    } else {
        a=0;
    }

    // for (var i=0; i<form.userID.value.length; i++) {
    //     var ch = form.userID.value.charAt(i);

    //     if ( ( ch < "a" || ch > "z") && (ch < "A" || ch > "Z") && (ch < "0" || ch > "9" ) ) {
    //     //    if(!(ch=="!" || ch=="@" || ch=="#" || ch=="$" || ch=="&" || ch=="*" || ch=="-" || ch=="_" || ch=="+" || ch=="?")) {
    //             alert("아이디는 대문자, 소문자, 숫자, 특수문자(!,@,#,$,&,*,-,_,+,?)를 조합하여 입력해주십시오.");
    //             form.userID.value="";
    //             form.userID.select();
    //             a=1; return;
    //     //    }
    //     }
    // }
}

function fun_userpw(form) {
    if(a==0){
        if (form.userPassword.value.length < 8 || form.userPassword.value.length > 20) {
            alert("비밀번호는 8~20자로 입력해주십시오.");
            form.userPassword.value="";
            form.userPassword.focus();
            a=1; return;
        }
    } else {
        a=0;
    }

    // for (var i=0; i<form.userPassword.value.length; i++) {
    //     var ch = form.userPassword.value.charAt(i);

    //     if ( ( ch < "a" || ch > "z") && (ch < "A" || ch > "Z") && (ch < "0" || ch > "9" ) ) {
    //     //    if(!(ch=="!" || ch=="@" || ch=="#" || ch=="$" || ch=="&" || ch=="*" || ch=="-" || ch=="_" || ch=="+" || ch=="?")) {
    //             alert("비밀번호는 대문자, 소문자, 숫자, 특수문자(!,@,#,$,&,*,-,_,+,?)를 조합하여 입력해주십시오.");
    //             form.userPassword.value="";
    //             form.userPassword.select();
    //             a=1; return;
    //     //    }
    //     }
    // }
}

function fun_userpw_ch(form) {
    if(a==0){
        if (form.userPassword.value != form.userPasswordch.value) {
            alert("비밀번호를 똑같이 입력해주십시오.");
            form.userPasswordch.value="";
            form.userPasswordch.focus();
            a=1;
        }
    } else {
        a=0;
    }
}
