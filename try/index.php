<?php
//Require music data to use variable in this file
require_once "includes/music-data.php";
?>
<!doctype html>
<html>
<head>
    <title>Music Collection</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<h1>Music Collection</h1>
<a href="create.php">Create new album</a>
<a href="index-alternative.php">Check alternative view</a>
<table>
    <thead>
    <tr>
        <th></th>
        <th>#</th>
        <th>Artist</th>
        <th>Album</th>
        <th>Genre</th>
        <th>Year</th>
        <th>Tracks</th>
        <th colspan="3"></th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <td colspan="10">&copy; My Collection</td>
    </tr>
    </tfoot>
    <tbody>

    <?php echo $data[0]['id'] ?>
    <?php foreach ($data as $musicAlbum) {
        $id = $musicAlbum['id'];
        ?>
        <tr>
            <td class="image"><img src="<?= $musicAlbum['image']; ?>" alt="<?= $musicAlbum['name']; ?>"/></td>
            <td><?= $musicAlbum['id']; ?></td>
            <td><?= $musicAlbum['artist']; ?></td>
            <td><?= $musicAlbum['name']; ?></td>
            <td><?= $musicAlbum['genre']; ?></td>
            <td><?= $musicAlbum['year']; ?></td>
            <td><?= $musicAlbum['tracks']; ?></td>
            <td><a href="detail.php?id=<?= $musicAlbum['id']; ?>">Details</a></td>
            <td><a href="edit.php?id=<?= $musicAlbum['id']; ?>">Edit</a></td>
            <td><a href="delete.php?id=<?= $id; ?>&image=<?= $musicAlbum['image']; ?>">Delete</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>
