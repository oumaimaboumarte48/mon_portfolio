<?php 
require_once('../language.php');	

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
	if(!isset($_SESSION['userlogin'])){
		header("Location: login.php");
	}

	require_once 'config.php';

	try {
	
		$sqlQuery = 'SELECT *
				   FROM projet';
	
		$query = $db->query($sqlQuery);
		$query->setFetchMode(PDO::FETCH_ASSOC);
	} catch (PDOException $e) {
		die("Could not connect to the database $dbname :" . $e->getMessage());
	}

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: login.php");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<style>
	.footer {
	position: fixed;
	left: 0;
	bottom: 0;
	width: 100%;
	background-color:#007bff;
	color: #ffffff;
	text-align: center;
	}
</style>
</head>
<body style="background-color:#F8F8F8;">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Accueil </a>
        </li>
	
        <li class="nav-item">
          <a class="nav-link" href="index.php?logout=true">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
		
		<div class="container " style="padding-top:30px; ">
		<div class="row">
		<div class="col-md-4">
			<form action="insert.php" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label>Titre</label>
					<input type="text" name="titre" class="form-control"  placeholder="titre" required>
				</div>
				<div class="form-group">
					<label>Url</label>
					<input type="text" name="url" class="form-control" placeholder="url" required>
				</div>
				<div class="form-group">
					<label>Description</label>
					<input type="text" name="description" class="form-control" placeholder="Entrer description" required>
				</div>
				<div class="form-group">
					<label>Image</label>
					<input type="file" name="image" accept="image/*" class="form-control" required>
				</div>
				<button type="submit" name="submit" class="btn btn-primary">Enregistrer</button>
			</form>
		</div>
		<div class="col-md-8">
		<h3>Projets</h3>
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Url</th>
						<th>Description</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $query->fetch()): ?>
                        <tr>
							<td><?=$row["titre"]?></td>
							<td><?=$row["url"]?></td>
							<td><?=$row["description"]?></td>
							<td><img src="./img/<?=$row["image"]?>" alt="..." class="img-thumbnail"></td>

                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>		</div>
		</div>
	</div>

<footer class="footer" >
	 <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <span >BOUMARTE Oumaima</span>
      </div>
</footer>

</body>
</html>

