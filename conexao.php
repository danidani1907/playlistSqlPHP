<?php
    
    $servername = "localhost:3306";
    $username ="root";
    $password= "";
    $dbname="playlistmusic";


$conn = new mysqli($servername, $username, $password, $dbname );


    if($conn -> connect_error){

        echo"erro de conexão"  .$conn->connect_error;

    }

    else{
        echo"";
    }
?>