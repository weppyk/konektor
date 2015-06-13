<?php

class Connector
{
	public $inputFile, $outputFile;
	public $dbHost, $dbName, $dbLogin;

	public function exportToFlexibee()
	{

	}
	public function test()
	{
		echo 'TEST<br>';
		echo 'vstupni soubor: '.$this->inputFile.'<br>';
		echo 'vystupni soubor: '.$this->outputFile.'<br>';
		echo 'HOST: '.$this->dbHost.'<br>';
		echo 'Název databáze: '.$this->dbName.'<br>';
		echo 'Login: '.$this->dbLogin.'<br>';
	}
}
