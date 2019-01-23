<h1 class="my-4">rooms</h1>
<?php
$adresID = $_GET['id'];
$sQuery= "SELECT * FROM `room` INNER JOIN location ON room.adres_id = location.id WHERE adres_id = " . $adresID;

$oStmt= $db->prepare($sQuery);
$oStmt->execute();

if($oStmt->rowCount()>0)
{
    echo'<div class="list-group">';
    while($aRow = $oStmt-> fetch(PDO::FETCH_ASSOC))
    {
        echo '<a href="reservation.php?id='.$aRow{'id'}.'" class="list-group-item">'.$aRow{'number'}.' '.$aRow{'description'}.'</a>';
    }
    echo '</div>';
}
else
{
    echo 'Helaas, Geen Gegevens Bekend';

}
/* catch(PDOException $e)
	{
		$sMsg ='<p>
		Regelnummer:'.$e->getLine().'<br/>
		Bestand:.'.$e->getFile().'<br/>
		Foutmelding:'.$e->getMessage().'
		</p>';
		trigger_error($sMsg);
	} */
?>

