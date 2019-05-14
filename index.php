<?php 
require_once 'includes/function.php';

if(isset($_GET["deconnect"])){
	if (session_status() != PHP_SESSION_ACTIVE){
	session_start();
	}
	unset($_SESSION["auth"]);
}

include 'includes/header.php';
?>
	<section class="sectionHome">
		<h1>Bread Beer Shop</h1>
		<h2>Bienvenue !</h2>
		<article class="articleHome">
			<div>
				<img src="<?= uri("assets/img/BAP.jpg") ?>" alt="BAP logo">
			</div>
			<p>Cette bière de caractère légèrement ambrée est produite à Stuttgart en Allemagne par Kevin et Julien. Basé sur une recette simple à base de levure, d'eau de source et de pain fournis par les boulangeries dans un rayon de 10 km, le brassage est la clé de voûte pour la création d'une bière de qualité. Nous participons ainsi à rejoindre le mouvement locavore. Afin d'affiner encore plus notre produit, nous utilisons le cuivre pour nos cuves, qui donne un goût inimitable à notre BeerPoney.<br />
			Cette bière douce (5°) d'une couleur ambrée fait ressortir des arômes épicés avec une pointe d'orange. La contenance de notre bouteille en verre Bread Beer est de 15cl.</p>
		</article>
		<article class="articleHome">
			<div>
				<img src="<?= uri("assets/img/painvrac.jpg") ?>" alt="BAP logo">
			</div>
			<p>Afin de récompenser nos clients, nous vous proposons une offre exceptionnelle :<br /><br />
			Jusqu'au 26 Avril 2019 à 17H, pour une bière achetée, trois bières sont offertes.<br /><br />
			*limitée à une 1 offre par famille, et dans la limite des stocks disponibles</p>
			</p>
		</article>
	</section>
<?php include 'includes/footer.php'; ?>