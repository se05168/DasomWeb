<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>회원가입</title>
        <link href="../FRAME/css/bootstrap.min.css" rel="stylesheet">
        <link href="../FRAME/css/myCss.css" rel="stylesheet">
        <script language="javascript" src="../FRAME/js/newcheck.js"></script>
        <script language="javascript" src="../FRAME/js/idcheck.js"></script>
    </head>

    <body>
        <div class="mydiv">
            <form class="form-inline" action="../DB/newcheck.php" method="POST" onSubmit="return chkForm();">
                <div>
                    <div>
                        <label for="inputName"><h1>Sign Up</h1></label>
                    </div>
                </div>
                <hr width="700" style="background-color:#222222; color:#222222; height:2px; border:none;" noshade/>
                <div style="padding-left:10px;" class="mydiv2">
                    <table>
                        <tr>
                            <!--name  -->
                            <td><label for="inputName" style="text-align:right;width:100px;">name</label></td>
                            <td><input type="text" maxlength="20" style="margin-left:20px;width:400px;" class="form-control" id="inputName" name="userName" onblur="fun_username(this.form);" placeholder="name" autofocus required></td>
                        </tr>
                        <tr>
                            <!--ID  -->
                            <td><label for="inputID" style="text-align:right;width:100px;">ID</label></td>
                            <td><input type="text" maxlength="20" style="margin-left:20px;width:304px;" class="form-control" id="inputID" name="userID" onblur="fun_userid(this.form);" placeholder="ID" required>
                            <input type="hidden" name="checkid" value=0>
                            <input type="button" style="margin-left:10px;" class="btn btn-default" id="btn" value="중복확인" onClick="openCheckId();"></td>
                        </tr>
                        <tr>
                            <!--PW  -->
                            <td><label for="inputPassword" style="text-align:right;width:100px;">Password</label></td>
                            <td><input type="Password" maxlength="20" style="margin-left:20px;width:400px;" class="form-control" id="inputPassword" name="userPassword" onblur="fun_userpw(this.form);" placeholder="Password" required></td>
                        </tr>
                        <tr>
                            <!--PWCH  -->
                            <td><label for="inputPasswordch" style="text-align:right;width:100px;">Password check</label></td>
                            <td><input type="password" maxlength="20" style="margin-left:20px;width:400px;" class="form-control" id="inputPasswordch" name="userPasswordch" onblur="fun_userpw_ch(this.form);" placeholder="Password check" required></td>
                        </tr>
                        <tr>
                            <!--button  -->
                            <td></td>
                            <td><button type="submit" style="margin-left:20px;" class="btn btn-default">Sign Up</button></td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
    </body>
</html>