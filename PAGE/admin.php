<!DOCTYPE html>
<html>
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
            <div class="mydiv2">
                <table class="table">
                <tr><th>이름</th><th>ID</th><th>승인여부</th></tr>
                <?php
                    require "../DB/dbconfig.php";
                    if (!$db) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    $sql = "SELECT * FROM user";
                    $result = mysqli_query($db, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            if($row["IsVerify"] == "NO") {
                                echo "<tr><td>".$row["name"]."</td><td>".$row["ID"]."</td><td>
                                <form action='../DB/setVerify.php' method='POST'>
                                <input type='hidden' name='checkid' value=".$row["ID"].">
                                <button class='btn btn-default' type='submit'>승인</button>
                                </form>
                                </td></tr>";
                            }
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