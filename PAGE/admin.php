<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <title>2017.07.24 HOMEPAGE</title>
        <link href="../FRAME/css/bootstrap.min.css" rel="stylesheet">
        <link href="../FRAME/css/myCss.css" rel="stylesheet">
    </head>
    
    <body>
        <div class="mydiv">
            <div>
                <div>
                    <label for="inputID"><h1>Admin</h1></label>
                </div>
            </div>
            <hr width="700" style="background-color:#222222; color:#222222; height:2px; border:none;" noshade/>
            <div style="margin-top:0px; padding-top:0px; padding-bottom:0px; overflow-y:scroll; width:700px; height:550px;" class="mydiv2">
                <div class="table-responsive">
                    <table class="table table-condensed table-hover">
                    <tr class="active">
                        <td style="width:100px;font-weight:bold;font-size:1.25em;vertical-align:middle;">#</td>
                        <td style="width:225px;font-weight:bold;font-size:1.25em;vertical-align:middle;" align="left">이름</td>
                        <td style="width:225px;font-weight:bold;font-size:1.25em;vertical-align:middle;" align="left">ID</td>
                        <td style="font-weight:bold;font-size:1.25em;vertical-align:middle;" align="left">승인여부</td>
                    </tr>
                    <?php
                        require "../DB/dbconfig.php";
                        if (!$db) {
                            die("Connection failed: " . mysqli_connect_error());
                        }
                        $sql = "SELECT * FROM user";
                        $result = mysqli_query($db, $sql);
                        $num = 1;
                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                                if($row["IsVerify"] == "NO") {
                                    echo "<tr>
                                        <td style='font-size:1.1em;vertical-align:middle;'>".$num."</td>
                                        <td style='font-size:1.1em;vertical-align:middle;' align='left'>".$row["name"]."</td>
                                        <td style='font-size:1.1em;vertical-align:middle;' align='left'>".$row["ID"]."</td>
                                        <td style='vertical-align:middle;' align='left'>
                                        <form action='../DB/setVerify.php' method='POST'>
                                        <input type='hidden' name='checkid' value=".$row["ID"].">
                                        <button class='btn btn-default' type='submit'>승인</button>
                                        </form></td>
                                    </tr>";
                                } $num++;
                            }
                        } else {
                            echo "0 results";
                        }
                    ?>
                    </table>
                </div>
            </div>
            <a style="margin-top:15px;" class="btn btn-default" href="../index.php" role="button">back</a>
        </div>
    </body>
</html>