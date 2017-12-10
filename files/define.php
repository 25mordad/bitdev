<?php
    //DB
    define('__DB_USER__',      "root" );
    define('__DB_PASSWORD__',  "bobo" );
    define('__DB_NAME__' ,     "bitcoin" );
    define('__DB_HOST__',      "localhost" );
    $connection = mysqli_connect(__DB_HOST__,__DB_USER__,__DB_PASSWORD__);
    if (!$connection)
	    die("Database connection failed: " . mysqli_error());
    $db_select = mysqli_select_db($connection, __DB_NAME__);
    
