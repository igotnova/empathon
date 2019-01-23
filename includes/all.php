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