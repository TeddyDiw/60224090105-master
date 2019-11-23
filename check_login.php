<?php
    $fullname = $_POST["name"];
    //echo $_POST["name"]; 
    //echo "<br/>";
  
    $pwd = $_POST["pwd"];
    //echo $pwd;
    //echo "<br/>";

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
    //echo "Connected successfully";
    mysqli_set_charset($conn,"utf8");

    $sql = "SELECT * FROM user ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo $row["suname"];
        //echo"<br/>";
        if($fullname==$row["suname"]&& $pwd==$row["supwd"]){
            echo"Got it";
            echo "<br/>";
            echo "Welcome : ",$row["suname"];
            setcookie('valid_user',1,time()+600);
            setcookie('username',$row["suname"],time()+600);
            setcookie('namecolor',$row["sufavcolor"],time()+600);
            setcookie('usize',$row["susize"],time()+600);
            header("refresh:1;url=/60224090105/show.php");
        }
    }
}

?>