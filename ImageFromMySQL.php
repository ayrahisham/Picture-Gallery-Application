<?php
    header("Content-type: image/jpeg");
    
    $id = $_GET["ident"];
    $idmatch = '/[0-9]+$/';
    if (!preg_match($idmatch, $id))
    {
        exit;
    }
    
    global $mysqli;
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'gallery';
    $mysqli = new mysqli($hostname, $username, $password, $db);
                        
    $query = "SELECT picture FROM image where ident=$id";
    
    $result = $mysqli->query($query);
    
    $err = $mysqli->error;
    
    if (!empty($err))
    {
        exit;
    }
    
    $row = $result->fetch_array(MYSQLI_NUM);
    $bytes = $row[0];
    
    echo $bytes;
?>