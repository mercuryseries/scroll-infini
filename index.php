<?php 
	/*
	LES TEACHERS DU NET
	Created by Honoré Hounwanou
	@ www.youtube.com/hounwanou1993
	@ www.facebook.com/honore.hounwanou
	All rights reserved
	* Date: September 06, 2013
*------------------------------------------------------------------------------------------------*/

	//Connexion à la base de données
	require_once("config/connect_db.php");
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Scroll Infini</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</head>
	<body>
		<div id="main_wrapper" >
			<h1>Teacher du Net .::. Mon super blog !!</h1>
			<div id="comments">
				<?php
					//On affiche les 10 premiers commentaires de notre table "comments"
					$q = $db->query('SELECT id, comment FROM comments ORDER BY id DESC LIMIT 0,10');
					while($data = $q->fetch(PDO::FETCH_OBJ)){
						echo '<div class="post" id="'.$data->id.'">
									<h2><img src="img/comment.png" alt="comment" />Commentaire n°'.$data->id.'</h2>
									<p>'.$data->comment.'</p>
							  </div>';
					}
				?>
			</div>
			<div id="loader"><img src="img/ajax-loader.gif" alt="loader"/></div> 
			<!-- Loader invisible par défaut 
			Voir un fameux (display: none;) au niveau du CSS -->
		</div>
	</body>
</html>