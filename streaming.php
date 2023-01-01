<?php
    $host = "103.147.154.48"; 
    $dbname = "aladinal_alorstreaming";
    $username = "aladinal_alor";
    $password = "JnqXXxcGHa,O";

    $token = "";
    $table = "data_temp";
    
    $conn = new mysqli($host, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        echo "Connected to database. ";
    }
    
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if(!empty($_GET['token']) && !empty($_GET['query'])){
            $token = $_GET['token'];
            $query = $_GET['query'];
        }
    } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(!empty($_POST['token']) && !empty($_POST['query'])){
            $token = $_POST['token'];
            $query = $_POST['query'];
        }
    }
    
    if($token != ""){
        if($token == "PfZp6Qre552KxR9U"){
            if ($conn->query($query) === TRUE) {
                echo "Values are uploaded!";
            } else {
                echo "Error: ".$query."<br>".$conn->error;
            }
        } else {
            echo "Token invalid!";
        }
    }
        
    $conn->close();
?>
