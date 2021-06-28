<?php
    define('DB_NAME','menu');
    define('DB_USER','root');
    define('DB_PASSWORD','');
    define('DB_HOST','localhost');
    
    /* Attempt to connect to MySQL database */
    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
 
    // Check connection
    if($connection === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>