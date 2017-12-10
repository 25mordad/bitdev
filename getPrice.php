<?php

/**
 * Project: BTC Price
 * File:    getPrice.php
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
	$query="INSERT INTO `btcrate` (`id`, `date`, `time`, `currency`, `rate`) VALUES (NULL, '".date("Y-m-d")."', '".date("H:i")."', '".$obj[1]->code."', '".$obj[1]->rate."')";
	if (!mysqli_query($connection ,$query))
		print("Error Insert!");