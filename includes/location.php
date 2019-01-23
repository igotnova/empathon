<div class="col-lg-3">
<h1 class="my-4">Locaties</h1>

<?php

    $sQuery = "SELECT * FROM city ";
    $oStmt = $db->prepare($sQuery);
    $oStmt->execute();

    if ($oStmt->rowCount() > 0) {
        echo '<div class="list-group">';
        while ($aRow = $oStmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<a href="index.php?id=' . $aRow{'id'} . '" class="list-group-item">' . $aRow{'name'} . '</a>';
        }
        echo '</div>';
    } else {
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
</div>