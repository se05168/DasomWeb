<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <title>2017.07.24 HOMEPAGE</title>
        <link href="../FRAME/css/bootstrap.min.css" rel="stylesheet">
        <link href="../FRAME/css/myCss.css" rel="stylesheet">
        <style type="text/css">
            a:link { color: black; text-decoration: none; }
            a:visited { color: black; text-decoration: none; }
            a:hover { color: blue; text-decoration: underline; }
        </style>
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
                <table class="table table-condensed table-hover">
                    <tr class="active">
                        <td style="width:150px;font-weight:bold;font-size:1.2em;vertical-align:middle;">#</td>
                        <td style="width:200px;font-weight:bold;font-size:1.2em;vertical-align:middle;border-right:1px solid #888;" align="left">NOW</td>
                        <td style="width:150px;font-weight:bold;font-size:1.2em;vertical-align:middle;" align="left">#</td>
                        <td style="width:200px;font-weight:bold;font-size:1.2em;vertical-align:middle;" align="left">LAST</td>
                    </tr>
                <?php
                    require "../DB/dbconfig.php";
                    if (!$db) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    $sql = "SELECT * FROM ranking";
                    # $sql_new = "SELECT * FROM ranking_new";
                    $result = mysqli_query($db, $sql);
                    # $result_new = mysqli_query($db, $sql_new);
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            # $row_new = mysqli_fetch_assoc($result_new)
                            echo "<tr>
                            <td style='font-size:1.1em;vertical-align:middle;width:150px;height:40px;'>".$row["num"]."위</td>
                            <td style='font-size:1.1em;vertical-align:middle;width:200px;border-right:1px solid #888;height:40px;'>
                                <a href='".$row['url']."' name='rank_url'>".$row["con"]."</a>
                            </td>
                            <td style='font-size:1.1em;vertical-align:middle;width:150px;height:40px;'><label for='rank_new_url'>".$row["num"]."위</td>
                            <td style='font-size:1.1em;vertical-align:middle;width:200px;height:40px;'>
                                <a href='".$row['url']."' id='rank_new_url'>".$row["con"]."</a>
                            </td>
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