<?php
    //IGNORE REGI HAS NO DATABASE PASSWORD RIPPPPPPPPPPP (very secure :w)
    #Create database constants.
    define("HOST", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASE", "library");

    #Create Connection
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>