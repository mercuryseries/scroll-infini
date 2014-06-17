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
	require("config/connect_db.php");
	
	//Récupération de nouveaux commentaires grâce au "last_id"
	//qui représente l'identifiant du dernier commentaire affiché
	if(isset($_GET['last_id']) && !empty($_GET['last_id'])){
		$last_id = $_GET['last_id'];
		
		$q = $db->prepare('SELECT id, comment FROM comments WHERE id < ? ORDER BY id DESC LIMIT 0,10');
		$q->execute(array($last_id));
		while($data = $q->fetch(PDO::FETCH_OBJ)){
			echo '<div class="post" id="'.$data->id.'">
					<h2><img src="img/comment.png" alt="comment" />Commentaire n°'.$data->id.'</h2>
					<p>'.$data->comment.'</p>
				  </div>';
			}
	}
?>