<?php

/**
 * Project: BTC Price
 * File:    index.php
 *
 *
 * @link http://www.25mordad.com
 * @copyright 2017 
 * @author Bahman R <25Mordad at gmail dot com> <++34 684 05 32 15 >
 * @version 0.0.1
 *
 */
	session_start();
	require_once(dirname(__FILE__)."/files/define.php");
	$json = file_get_contents('https://bitpay.com/api/rates');
	$obj = json_decode($json);
	//print_r($obj[1]);
	//query
	$query="SELECT * FROM `btcrate` ";
	$results = $conn->query($query);
	
	/* foreach ($results as $row){
		echo $row['date'];
	} */
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Bitcoin Rate</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.16/b-1.5.0/datatables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.16/b-1.5.0/datatables.min.js"></script>
	 
	</head>
  <body>
	
	
	
	
	
	<script type="text/javascript">
	test();
	function test() {
	    $('#example').DataTable();
	} 
	</script>
	
	
	
	
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>