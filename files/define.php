<?php
    //DB
    define('__DB_USER__',      "root" );
    define('__DB_PASSWORD__',  "bobo" );
    define('__DB_NAME__' ,     "bitcoin" );
    define('__DB_HOST__',      "localhost" );
    // Create connection
    $conn = new mysqli(__DB_HOST__, __DB_USER__, __DB_PASSWORD__, __DB_NAME__);
    if ($conn->connect_error)
	    die("Database connection failed: " . $conn->connect_error);
    
