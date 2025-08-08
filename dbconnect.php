<?php
function connect($server='localhost',$author='root',$password='',$database='instagram')
{
	//$server = 'localhost';
	//$author = 'root';
	//$password = '';
	//$database= 'justin';
	try{
		$conn = new PDO("mysql:host={$server};dbname={$database}",$author,$password);
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
	return $conn;
}
$conn=connect();
?>