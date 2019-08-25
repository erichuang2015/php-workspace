<html>

<head>
</head>

<body>
    <?php
    phpinfo();
    $servername = "localhost";
    $username = "username";
    $password = "password";

    $conn = new mysqli($sername, $username, $password);

    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "CREATE DATABASE studentCentral";
    if ($conn->query($sql)===TRUE){
        echo "Database created successfully";
    }else{
        echo "Error creating database: " . $conn->error;
    }
    $conn->close();
    ?>
</body>

</html>