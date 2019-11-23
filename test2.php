<?php 
    
    $type = $_POST["gender"];
    echo $type;
    echo "<br/>";

    $fullname = $_POST["name"];
    echo $_POST["name"]; 
    echo "<br/>";

    $province = $_POST["province"];
    echo $province;
    echo "<br/>";

    $suid = $_GET["suid"];
    echo $suid;
    echo "<br/>";

    $fc = $_POST["favcolor"];
    echo $favcolor; 
    echo "<br/>";

    $size = $_POST["size"];
    echo $size;
    echo "<br/>";

    $mobile_number = $_POST["mobile_number"];
    echo $mobile_number; 
    echo "<br/>";

    $pwd = $_POST["pwd"];
    echo $pwd;
    echo "<br/>";

    $intro = $_POST["intro"];
    echo $intro; 
    echo "<br/>";

    echo "<font color=\"$fc\"size=\"$size\">$fullname</font>";
    setcookie('city',$_POST["province"],time()+60);
    echo "<a href=\"cookie.php\">ดูค่า cookie</a>";


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shop";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    mysqli_set_charset($conn,"utf8");

    //$sql = "INSERT INTO user (suuid, sugender, suname, suprovince, sufavcolor, susize, sumobile_number, supwd, suintro) VALUES (NULL, 'male', 'สมศรี', 'กาญจนบุรี', '#00f00', '5', '12345', '9876543210','Hello')";
    $sql = "INSERT INTO user (suuid, sugender, suname, suprovince, sufavcolor, susize, sumobile_number, supwd, suintro) VALUES (NULL, '$type', '$fullname', '$province', '$fc', '$size', '$mobile_number', '$pwd','$intro')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();

?>