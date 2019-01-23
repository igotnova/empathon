<h1 class="my-4">gebruikers</h1>
<table class="admintable" >
    <?php

    $sQuery = "SELECT * FROM users";
    $oStmt = $db->prepare($sQuery);
    $oStmt->execute();

    if ($oStmt->rowCount() > 0) {
        echo '<tbody>';
        while ($aRow = $oStmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <tr>
                <td> <?= $aRow{'username'}; ?></td>
                <td> <?= $aRow['password']; ?></td>
                <td> <?= $aRow['name']; ?></td>
                <td> <a href="detail.php?id=<?= $aRow['id']; ?>">Details</a></td>
                <td> <a href="edit.php?id=<?= $aRow['id']; ?>">Edit</a></td>
                <td> <a href="delete.php?id=<?= $id; ?>">Delete</a></td>
            </tr>
            <?php
        }
        echo '';
    } else {
        echo 'Helaas, Geen gebruikers Bekend';
    }?>
</table>

<h1 class="my-4">Locaties</h1>
<table class="admintable" >
<?php

$sQuery = "SELECT * FROM location ";
$oStmt = $db->prepare($sQuery);
$oStmt->execute();

if ($oStmt->rowCount() > 0) {
    echo '<tbody>';
    while ($aRow = $oStmt->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <tr>
            <td><?= $aRow{'id'}; ?></td>
            <td><?= $aRow['city_id']; ?></td>
            <td><?= $aRow['adres']; ?></td>
            <td><a href="detail.php?id=<?= $aRow['id']; ?>">Details</a></td>
            <td><a href="edit.php?id=<?= $aRow['id']; ?>">Edit</a></td>
            <td><a href="delete.php?id=<?= $id; ?>">Delete</a></td>
        </tr>
        <?php
    }
    echo '';
} else {
    echo 'Helaas, Geen locaties Bekend';
}?>
</table>





<h1 class="my-4">kamers</h1>
<table class="admintable" >
    <?php

    $sQuery = "SELECT * FROM `room` INNER JOIN location ON room.adres_id = location.id";
    $oStmt = $db->prepare($sQuery);
    $oStmt->execute();

    if ($oStmt->rowCount() > 0) {
        echo '<tbody>';
        while ($aRow = $oStmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <tr>
                <td>Kamer <?= $aRow{'number'}; ?></td>
                <td> <?= $aRow['adres']; ?></td>
                <td> <?= $aRow['description']; ?></td>
                <td> <a href="detail.php?id=<?= $aRow['id']; ?>">Details</a></td>
                <td> <a href="edit.php?id=<?= $aRow['id']; ?>">Edit</a></td>
                <td> <a href="delete.php?id=<?= $id; ?>">Delete</a></td>
            </tr>
            <?php
        }
        echo '';
    } else {
        echo 'Helaas, Geen kamers Bekend';
    }?>
</table>

<h1 class="my-4">reservation</h1>
<table class="admintable" >
    <?php

    $sQuery = "SELECT * FROM `reservation` INNER JOIN users ON reservation.user_id = users.id INNER JOIN location ON reservation.location_id = location.id INNER JOIN room ON reservation.room_id = room.id";
    $oStmt = $db->prepare($sQuery);
    $oStmt->execute();

    if ($oStmt->rowCount() > 0) {
        echo '<tbody>';
        while ($aRow = $oStmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <tr>
                <td>Kamer <?= $aRow{'number'}; ?></td>
                <td> <?= $aRow['adres']; ?></td>
                <td> <?= $aRow['description']; ?></td>
                <td> <a href="detail.php?id=<?= $aRow['id']; ?>">Details</a></td>
                <td> <a href="edit.php?id=<?= $aRow['id']; ?>">Edit</a></td>
                <td> <a href="delete.php?id=<?= $id; ?>">Delete</a></td>
            </tr>
            <?php
        }
        echo '';
    } else {
        echo 'Helaas, Geen reserveringen Bekend';
    }?>
</table>