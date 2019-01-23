
<?php
$cityID = $_GET['id'];
$sQuery= "SELECT * FROM location INNER JOIN city ON location.city_id = city.id WHERE `city_id` = " . $cityID;

$oStmt= $db->prepare($sQuery);
$oStmt->execute();

if($oStmt->rowCount()>0)
{
    echo'<div class="list-group">';
    while($aRow = $oStmt-> fetch(PDO::FETCH_ASSOC))
    {
        echo '<a href="reseveer.php?id='.$aRow{'id'}.'" class="list-group-item">'.$aRow{'adres'}.'</a>';
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

