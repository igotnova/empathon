<!DOCTYPE html>
<?php
require_once 'db_config.php';
?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Empathon kamer booking</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/empathon.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Empathon</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">Locaties</h1>
          <div class="list-group">
            <a href="#" class="list-group-item">hellevoetsluis</a>
            <a href="#" class="list-group-item">spijkenisse</a>
            <a href="#" class="list-group-item">rotterdam</a>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div class="row">

              <?php
                    try{
                        $sQuery= "SELECT * FROM room INNER JOIN location on location.id = room.location_id WHERE location_id = 2";
                        $oStmt= $db->prepare($sQuery);
                        $oStmt->execute();

		if($oStmt->rowCount()>0)
	{
		echo '<table class="table" >';
		echo '<thead>';
		echo '<td>city</td>';
		echo '<td>adres</td>';
		echo'</thead>';
		while($aRow = $oStmt-> fetch(PDO::FETCH_ASSOC))
		{
			echo '<tr>';
			echo '<td>'.$aRow{'name'}.'</td>';
			echo '<td>'.$aRow{'adres'}.'</td>';
			echo '</tr>';
		}
		echo '</table.';
	}
	else
	{
		echo 'Helaas, Geen Gegevens Bekend';
	}
	}
catch(PDOException $e)
	{
		$sMsg ='<p>
		Regelnummer:'.$e->getLine().'<br/>
		Bestand:.'.$e->getFile().'<br/>
		Foutmelding:'.$e->getMessage().'
		</p>';
		trigger_error($sMsg);
	}
	$db = null;
	?>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item One</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
              <?php ?>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Empathon 2019</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
