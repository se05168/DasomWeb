<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <title>2017.07.24 HOMEPAGE</title>
        <link href="FRAME/css/bootstrap.min.css" rel="stylesheet">
        <link href="FRAME/css/myCss.css" rel="stylesheet">
    </head>
    
    <body>
        <div class="mydiv">
            <form class="form-horizontal" action="DB/logincheck.php" method="POST">
                <div>
                    <div>
                        <label for="inputID"><h1>Login</h1></label>
                    </div>
                </div>
                <hr width="700" style="background-color:#222222; color:#222222; height:2px; border:none;" noshade/>
                <div style="padding-left:10px;" class="mydiv2">
                    <table>
                        <tr>
                            <!--ID  -->
                            <td><label for="inputID" style="text-align:right;width:100px;">ID</label></td>
                            <td><input type="text" maxlength="20" style="margin-left:20px;width:400px;" class="form-control" id="inputID" name="userID" placeholder="ID" autofocus required></td>
                        </tr>
                        <tr>
                            <!--PW  -->
                            <td><label for="inputPassword" style="text-align:right;width:100px;">Password</label></td>
                            <td><input type="password" maxlength="20" style="margin-left:20px;width:400px;" class="form-control" id="inputPassword" name="userPassword" placeholder="IPasswordD" required></td>
                        </tr>
                        <tr>
                            <!--button  -->
                            <td></td>
                            <td><a style="margin-left:20px;" class="btn btn-default" href="PAGE/new.php" role="button">Sign Up</a>
                            <button type="submit" class="btn btn-default">Login</button></td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
    </body>
</html>