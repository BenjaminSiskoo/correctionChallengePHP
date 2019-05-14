<?php 
require_once 'includes/function.php';


if(!empty($_POST)){
	require 'userAction.php';
}


if(!isset($_GET['p'])){

	header('location: index.php?p=home');
	exit();

}else{
	include 'includes/header.php';
	$page = htmlspecialchars(strtolower($_GET['p']));
	switch($page)
	{
		//login ou register
		case 'login':
		case 'register':
		case 'reset':
			require 'formUser.php';
			break;

		case 'boutique':
			require 'boutique.php';
			break;
		case 'deconnect':
		case 'home':

			if (session_status() != PHP_SESSION_ACTIVE){
				session_start();
			}
			unset($_SESSION["auth"]);
			?>
				<section class="sectionHome">
					<h1>Bread Beer Shop</h1>
					<h2>Welcome!</h2>
					<article class="articleHome">
						<div>
							<img src="<?= uri("assets/img/BAP.jpg") ?>" alt="BAP logo">
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</article>
					<article class="articleHome">
						<div>
							<img src="<?= uri("assets/img/BAP.jpg") ?>" alt="BAP logo">
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</article>
				</section>
	<?php 
		break;
		default:
			require '404.php';
	}
	include 'includes/footer.php'; 
}

<<<<<<< HEAD
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
=======
>>>>>>> 48442a06a12a9b2cc71ff662c3b80293ef045bbf
