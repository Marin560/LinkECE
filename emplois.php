<?php

session_start();
$prenom=$_SESSION['prenom'];
$pp=$_SESSION['pp'];
$repertoire = $_SESSION['repertoire'];

?>


<!DOCTYPE html>
<html>
<head>
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<link rel="stylesheet" href="general.css">


	</head>
</head>
<body>
	<nav class="navbar navbar-default" id="tabcol">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><img src="<?php echo $repertoire.$pp; ?>" class="img-circle" height="30" alt="Avatar"></a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="accueil.php">Accueil</a></li>
				<li><a href="reseau.php">Mon réseau</a></li>
				<li><a href="mur.php">Vous</a></li>
				<li><a href="notifications.php">Notifications</a></li>
				<li><a href="messagerie.php">Messagerie</a></li>
				<li class="active"><a href="emplois.php">Emplois</a></li>
				<li ><a href="albums.php">Photos</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="connexion.php"><span class="glyphicon glyphicon-log-in"></span> Déconnecter</a></li>
			</ul>
		</div>
	</nav>
	<div class="container text-center">
		<div class="row">
			<div class="text-left">
			<button type="button" class="btn btn-info">Mes candidatures</button><p><br></p>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="well">

						<div class="row">
							<div class="p-3 mb-2 bg-info text-white" ><h2>McDonald's</h2></div>
							<br>
						</div>
						<div class="row">
							<h4 class="font-weight-bold"> Description de la mission :</h4>						
						</div>	

						<div class="row "><div class="col-sm-12"><p class="text-justify">Au sein de l'équipe marketing, rattaché(e) à un Chef de Projet Trade Marketing, vous participez à la mise en œuvre d'opérations ayant pour objectif de développer les ventes de notre réseau de restaurants. <br> Etudiant(e) en 2ème ou 3ème année d'Ecole de Commerce, Master vous justifiez idéalement d'un premier stage en gestion de projets marketing.
Vous êtes naturellement à l'aise à l'oral comme à l'écrit, vous êtes rigoureux autonome et organisé.
Votre sens de l'écoute et de l'analyse, ainsi que votre réactivité vous permettront de réussir cette mission.
Ce stage est à pourvoir dès à présent pour une durée de 6 mois au siège social de McDonald's France situé à Guyancourt (78).</p></div>
					</div>

					<div class="row">
						<button type="button" class="btn btn-info">Postuler</button>

					</div>

				</div>

			</div>
			<div class="col-sm-4">
				<div class="well">

					<div class="row">
						<div class="p-3 mb-2 bg-info text-white" ><h2>Heineken</h2></div>
						<br>
					</div>
					<div class="row">
						<h4 class="font-weight-bold"> Description de la mission :</h4>						
					</div>	

					<div class="row "><div class="col-sm-12"><p class="text-justify">HEINEKEN recrute pour le compte de sa filiale de distribution France BOISSONS, un(e)  commerciaL CHR  SECTEUR  Compiegne / Champigny

Placé(e) sous la responsabilité du Chef des Ventes, vous assurez le développement des ventes et du portefeuille clients pour atteindre les objectifs fixés. Vous développez également votre environnement relationnel via l'animation de votre réseau. </br>

De formation commerciale niveau Bac + 2 / Bac + 3 (commerce ou équivalent vente), vous êtes caractérisé par votre enthousiasme et votre goût du challenge. Vous présentez des qualités d'écoute, d'organisation et vous disposez d'une première expérience commerciale réussie de 1/2 ans minimum.

Votre motivation, votre capacité d'analyse ainsi que vos facultés d'adaptation seront les clés de votre réussite à ce poste. En rejoignant notre équipe, vous construisez, enfin, votre évolution dans une entreprise dynamique et reconnue.
Si votre profil nous intéresse, nous vous inviterons à réaliser un entretien vidéo différé afin d'en apprendre plus sur votre parcours et vos démarches.</p></div>
				</div>

				<div class="row">
					<button type="button" class="btn btn-info">Postuler</button>

				</div>

			</div>

		</div>
		<div class="col-sm-4">
			<div class="well">

				<div class="row">
					<div class="p-3 mb-2 bg-info text-white" ><h2>Chanel</h2></div>
					<br>
				</div>
				<div class="row">
					<h4 class="font-weight-bold"> Description de la mission :</h4>						
				</div>	

				<div class="row "><div class="col-sm-12"><p class="text-justify">Au sein de la Direction Artistique, dans le service création Visual Merchandising, vous serez le garant de l’image des points de vente parisiens de Chanel Parfums Beauté. En majeure partie sur le terrain, vous participerez à l’installation des campagnes dans les points de vente les plus importants de Paris et accompagnerez les équipes Merchandising dans l’exécution des guidelines et la maintenance des boutiques.  

Votre créativité, votre sens du détail et votre goût exigeant sont essentiels pour la réussite de vos missions, tout autant qu’un excellent relationnel.

En tant que Visual Merchandiser dédié aux plus importants points de vente de Paris, et répondant au plus haut niveau d’exigence, vous serez l’ambassadeur/drice Merchandising Monde de Chanel Parfums Beauté. Vous participerez également à l'animation et la formation des Merchandisers de la communauté pour la transmission du savoir-faire.</p></div>
			</div>

			<div class="row">
				<button type="button" class="btn btn-info">Postuler</button>

			</div>

		</div>

	</div>
</div>
</br>
<div class="row">
	<div class="col-sm-4">
		<div class="well">

			<div class="row">
				<div class="p-3 mb-2 bg-info text-white" ><h2>Hermès</h2></div>
				<br>
			</div>
			<div class="row">
				<h4 class="font-weight-bold"> Description de la mission :</h4>						
			</div>	

			<div class="row "><div class="col-sm-12"><p class="text-justify">Mission Générale Vous aimez mettre votre talent au service d’une équipe dédiée à un seul objectif : une expérience client unique ! Vous êtes passionné (e) par nos produits mais également, sensible à l’artisanat et à l’identité de notre maison. CDD de juillet à décembre 2018. Eléments de contexte Principales activités Phases et rituels de la vente : - adapter sa tenue et son comportement à l'environnement Hermès et à la clientèle multiculturelle - prendre en charge le client avec disponibilité et chaleur - questionner, écouter pour comprendre les besoins - promouvoir l’esprit de chacune de nos créations - développer les ventes par des conseils adaptés - proposer des produits complémentaires - conclure la vente Participation à la vie de l’équipe : - communiquer son enthousiasme à son entourage - faire preuve de polyvalence : connaissance des produits et participation aux tâches annexes à la vente (propreté du magasin, déballages, étiquetages, …) - être solidaire de ses pairs en difficulté Finalités du poste</p></div>
		</div>

		<div class="row">
			<button type="button" class="btn btn-info">Postuler</button>

		</div>

	</div>

</div>
<div class="col-sm-4">
	<div class="well">

		<div class="row">
			<div class="p-3 mb-2 bg-info text-white" ><h2>La Banque Postale</h2></div>
			<br>
		</div>
		<div class="row">
			<h4 class="font-weight-bold"> Description de la mission :</h4>						
		</div>	

		<div class="row "><div class="col-sm-12"><p class="text-justify">Quand ? Maintenant!

Où ? À Saint-Denis (mais attention, tu pourras apercevoir au loin le Sacré Cœur).

 

Pourquoi ? Un CDI.

Pour quel poste ? Conseiller(ère) Commercial(e) à distance.

Quel salaire ? Viens nous rencontrer pour que l'on en discute !

Qui es-tu ? On dit de toi que tu as la fibre commerciale, on pourrait même penser que cela fait partie de ton ADN...

Tu es un(e) compétiteur(trice) dans l'âme, tu rêves d'intégrer une équipe jeune et dynamique?

On ne veut surtout pas passer à côté de TOI si tu as déjà travaillé dans un Centre de Relation Clients et si tu as de l'expérience dans le domaine bancaire ou l'assurance !

Tu t'es reconnu dans ce descriptif? Alors GO GO GO on n'attend plus et on postule !</p></div>
	</div>

	<div class="row">
		<button type="button" class="btn btn-info">Postuler</button>

	</div>

</div>

</div>
<div class="col-sm-4">
	<div class="well">

		<div class="row">
			<div class="p-3 mb-2 bg-info text-white" ><h2>Fnac</h2></div>
			<br>
		</div>
		<div class="row">
			<h4 class="font-weight-bold"> Description de la mission :</h4>						
		</div>	

		<div class="row "><div class="col-sm-12"><p class="text-justify">Mission globale : Identifier, Développer et Activer le réseau des vendeurs professionnels Grands Comptes de la Marketplace afin de contribuer directement à sa croissance
Missions permanentes :
Gestion / Enjeux économiques
*Identification, qualification, recrutement et accompagnement des partenaires à fort potentiel
*Assurer la visibilité des offres et catégories produits de nouveaux vendeurs partenaires en relation avec les account managers, le service marketing et l'animation commerciale
*Suivi hebdomadaire des indicateurs de performance des partenaires nouvellement recrutés
Commerce / Satisfaction Client
*Identification de tous les supports pertinents pour sourcer et recruter les partenaires à fort potentiel (marketplaces concurrentes, site internet, grossistes, marques…)
*Intégration des offres des prospects recrutés sur le site darty.com et formation/suivi de la création des catalogues produits liés à cette première activation
Organisation
*Proposition d'optimisations fonctionnelles et de nouveaux outils visant à améliorer l'expérience vendeurs
Compétences et expérience souhaitées
De formation supérieure en école de commerce, vous maitrisez couramment l'anglais et idéalement une seconde langue (Espagnol ou Allemand) ;
Vous maîtrisez le pack office Word, Excel et Powerpoint ;
Bénéficiant d'un sens commercial aiguisé et d'une bonne communication, vous délivrez la performance grâce à votre dynamisme et votre prise d'initiative</p></div>
	</div>

	<div class="row">
		<button type="button" class="btn btn-info">Postuler</button>

	</div>

</div>

</div>
</div>

</div>

</div>


</body>
</html>