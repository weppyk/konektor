<?php
	require("classes/Connector.php");
	$konektor = new Connector;
	$konektor->inputFile='neco.xml';
	$konektor->dbHost='dbHost';
	$konektor->dbName='dbName';
	$konektor->test();

?>