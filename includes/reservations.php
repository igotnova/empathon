
<?php

$sQuery= "SELECT * FROM reservations";
$oStmt= $db->prepare($sQuery);
$oStmt->execute();

if($oStmt->rowCount()>0)
{
    echo'<div class="list-group">';
    while($aRow = $oStmt-> fetch(PDO::FETCH_ASSOC))
    {
        echo '<a href="#" class="list-group-item">'.$aRow{'adres'}.'</a>';
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

