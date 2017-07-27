<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <title>2017.07.24 HOMEPAGE</title>
    </head>

    <body>
    	<div>
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
    </body>
</html>