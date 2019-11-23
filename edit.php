<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Edit page</title>
    </head>
    <body>
    <?php
            $keyword = $_GET["suid"];
            //echo $keyword;
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "shop";

            // echo $keyword;

                    // Create connection
        $conn = new mysqli($servername, $username, $password,$dbname);
    
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //echo "Connected successfully";
        mysqli_set_charset($conn,"utf8");
        
        $sql = "SELECT * FROM `user` WHERE suuid ='$keyword' ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {


                // echo $row["sugender"];
                $gtype = $row["sugender"];
                // echo "<br/>";

                // echo $row["suname"];
                $gfullname = $row["suname"];
                // echo "<br/>";

                // echo $row["suprovince"];
                $gprovince = $row["suprovince"];   
                // echo "<br/";

                // echo $row["suuid"];
                $gsuid = $row["suuid"];
                // echo "<br/";

                // echo $row["sufavcolor"];
                $gfc = $row["sufavcolor"];
                // echo "<br/>";

                // echo $row["susize"];
                $gsize = $row["susize"];
                // echo "<br/>";

                // echo $row["sumobile_number"];
                $gmobile_number = $row["sumobile_number"];
                // echo "<br/>";

                // echo $row["supwd"];
                $gpwd = $row["supwd"];
                // echo "<br/>";

                // echo $row["suintro"];
                $gintro = $row["suintro"];
                // echo "<br/>";

            }
        }
                // echo $gtype;
                // echo "<br/>";

                // echo $gfullname;
                // echo "<br/>";

                // echo $gprovince;
                // echo "<br/>";

                // echo $gsuid;
                // echo "<br/>";

                // echo $gfc;
                // echo "<br/>";

                // echo $gsize;
                // echo "<br/>";

                // echo $gmobile_number;
                // echo "<br/>";

                // echo $gpwd;
                // echo "<br/>";

                // echo $gintro;
                // echo "<br/>";
               
                echo"<center><h2>แก้ไขข้อมูลสมาชิกรหัส ".$keyword."</h2></center>";
                echo "<form method=\"post\" action=\"update.php\">";
                echo "เพศ : <br />";
                if($gtype=="male"){
                    echo "<input type=\"radio\" name=\"gender\" value=\"male\" checked> ชาย<br />";
                    echo "<input type=\"radio\" name=\"gender\" value=\"female\"> หญิง<br />";
                    echo "<input type=\"radio\" name=\"gender\" value=\"other\"> อื่น ๆ<br />";
                }else if($gtype=="female"){
                    echo "<input type=\"radio\" name=\"gender\" value=\"male\"> ชาย<br />";
                    echo "<input type=\"radio\" name=\"gender\" value=\"female\" checked> หญิง<br />";
                    echo "<input type=\"radio\" name=\"gender\" value=\"other\"> อื่น ๆ<br />";
                }else {
                    echo "<input type=\"radio\" name=\"gender\" value=\"male\"> ชาย<br />";
                    echo "<input type=\"radio\" name=\"gender\" value=\"female\"> หญิง<br />";
                    echo "<input type=\"radio\" name=\"gender\" value=\"other\" checked> อื่น ๆ<br />";
                }
                    echo "ชื่อ-นามสกุล :<br />";
                    echo "<input type=\"text\" name=\"name\" value=\"$gfullname\" placeholder=\"ชื่อ\"/><br />";
                    echo "จังหวัด : <br />";

                    if($gprovince=="กาญจนบุรี"){
                    echo "<option value=\"กาญจนบุรี\">Kanchanaburi</option>";
                    echo "<option value=\"กรุงเทพฯ\"selected>Bkk</option>";
                    echo "<option value=\"น่าน\">Nan</option>";
                    echo "<option value=\"ตาก\">Tak</option>";
                    echo "</select><br />";
                    }else{
                    echo "<option value=\"กาญจนบุรี\">Kanchanaburi</option>";
                    echo "<option value=\"กรุงเทพฯ\">Bkk</option>";
                    echo "<option value=\"น่าน\"selected>Nan</option>";
                    echo "<option value=\"ตาก\">Tak</option>";
                    echo "</select><br />";
                    }    
                    echo "<input type=\"submit\" value=\"อัพเดทข้อมูล\">";
                    echo "</form>";

            ?>
    </body>
    </html>