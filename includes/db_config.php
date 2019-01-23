<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=empathon;charset=utf8','root','');
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$db->query("SET SESSION sql_mode ='ANSI,ONLY_FULL_GROUP_BY'");
}
catch(PDOException $e)
{
	$sMsg = '<p>
			Regelnummer:'.$e->getLine().'<br/>
			Bestand:'.$e->getFile().'<br/>
			Foutmelding:'.$e->getMessage().'
			</p>';
			
			
			trigger_error($sMsg);
}
?>
	