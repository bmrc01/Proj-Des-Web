<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "<p>Connected successfully</p>";

    $conn->select_db("dionisiotech");

    $sql = "SELECT * FROM `usuario`;";

    $result = $conn->query($sql);

    foreach ($result as $row) {
        echo $row['nome'] . " " . $row['email'] . "<br>";
    }
