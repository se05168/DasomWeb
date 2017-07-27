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
                    <label for="inputID"><h1>실시간 급상승 검색어</h1></label>
                </div>
            </div>
            <hr width="700" style="background-color:#222222; color:#222222; height:2px; border:none;" noshade/>
            <div class="mydiv2" style=" padding-top:0px; padding-bottom:0px; overflow-y:scroll; width:700px; height:550px;">
                <table class="table">
                <?php
                    require "../DB/dbconfig.php";
                    if (!$db) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    $sql = "SELECT * FROM ranking";
                    $result = mysqli_query($db, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                            <td style='font-size:1.1em;vertical-align:middle;width:300px;'>".$row["num"]."위</td>
                            <td style='font-size:1.1em;vertical-align:middle;'>".$row["con"]."</td>
                            </tr>";
                        }
                    } else {
                        echo "0 results";
                    }
                ?>
                </table>
            </div>
            <a style="margin-top:15px;" class="btn btn-default" href="../index.php" role="button">back</a>
        </div>
    </body>
</html>