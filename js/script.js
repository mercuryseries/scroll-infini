/*
	LES TEACHERS DU NET
	Created by Honoré Hounwanou
	@ www.youtube.com/hounwanou1993
	@ www.facebook.com/honore.hounwanou
	All rights reserved
	* Date: September 06, 2013
*------------------------------------------------------------------------------------------------*/


//Le code ci-dessous sera exécuté lorsqu'on scrolle 
$(window).scroll(function(){
	//Cette condition vérifie si OUI ou NON l'utilisateur est
	//arrivé en fin de page
	if($(window).scrollTop() == $(document).height() - $(window).height()){
		

		//S'il est en fin de page
		//On charge de nouveaux commentaires dans la mesure du possible
		$.ajax({
		url: "load.php?last_id=" + $(".post:last").attr('id'),
		beforeSend: function(){$("#loader").show();}, //On affiche le loader avant d'envoyer la requête AJAX
		success: function(html) {
					//Si on reçoit de news comments on les affiche et on cache le loader
					if(html){
						$("#comments").append(html);
						$("#loader").hide();
					} else {
						//Dans le cas contraire, on cache tout simplement le loader
						//Ce qui signifie qu'il n'y a plus de commentaires
						$("#loader").hide();
					}
				}
		});
	} 
});