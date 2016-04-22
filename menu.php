<?php
	session_start();
	//J'initialise la session 'panier' si elle n'existe pas, sinon je réinitialise ses id pour le cas de suppression d'une pizza dans le panier
	if(!isset($_SESSION['panier'])){
	$_SESSION['panier'] = [];
	}
	else{
		$_SESSION['panier'] = array_values($_SESSION['panier']);
	}
	//print_r($_SESSION);
	//Ajouter des pizzas dans le panier
		//Marguerite
	if(isset($_POST['Marguerite_L'])){
		array_push($_SESSION['panier'],["pizza" => "Marguerite taille L","prix" => 7.00]);
		unset($_POST);
		header('Location:menu.php');
	}
	elseif(isset($_POST['Marguerite_XL'])){
		array_push($_SESSION['panier'],["pizza" => "Marguerite taille XL","prix" => 12.00]);
		unset($_POST);
		header('Location:menu.php');
	}
	elseif(isset($_POST['Marguerite_XXL'])){
		array_push($_SESSION['panier'],["pizza" => "Marguerite taille XXL","prix" => 18.00]);
		unset($_POST);
		header('Location:menu.php');
	}
		//Merguez
	if(isset($_POST['Merguez_L'])){
		array_push($_SESSION['panier'],["pizza" => "Merguez taille L","prix" => 7.80]);
		unset($_POST);
		header('Location:menu.php');
	}
	elseif(isset($_POST['Merguez_XL'])){
		array_push($_SESSION['panier'],["pizza" => "Merguez taille XL","prix" => 13.20]);
		unset($_POST);
		header('Location:menu.php');
	}
	elseif(isset($_POST['Merguez_XXL'])){
		array_push($_SESSION['panier'],["pizza" => "Merguez taille XXL","prix" => 19.50]);
		unset($_POST);
		header('Location:menu.php');
	}
		// Reine
	if(isset($_POST['Reine_L'])){
		array_push($_SESSION['panier'],["pizza" => "Reine taille L","prix" => 7.40]);
		unset($_POST);
		header('Location:menu.php');
	}
	elseif(isset($_POST['Reine_XL'])){
		array_push($_SESSION['panier'],["pizza" => "Reine taille XL","prix" => 12.80]);
		unset($_POST);
		header('Location:menu.php');
	}
	elseif(isset($_POST['Reine_XXL'])){
		array_push($_SESSION['panier'],["pizza" => "Reine taille XXL","prix" => 19.00]);
		unset($_POST);
		header('Location:menu.php');
	}
		// Roquefort
	if(isset($_POST['Roquefort_L'])){
		array_push($_SESSION['panier'],["pizza" => "Roquefort taille L","prix" => 8.20]);
		unset($_POST);
		header('Location:menu.php');
	}
	elseif(isset($_POST['Roquefort_XL'])){
		array_push($_SESSION['panier'],["pizza" => "Roquefort taille XL","prix" => 13.50]);
		unset($_POST);
		header('Location:menu.php');
	}
	elseif(isset($_POST['Roquefort_XXL'])){
		array_push($_SESSION['panier'],["pizza" => "Roquefort taille XXL","prix" => 20.00]);
		unset($_POST);
		header('Location:menu.php');
	}
		// Royal Bacon Cheese
	if(isset($_POST['RoyalBaconCheese_L'])){
		array_push($_SESSION['panier'],["pizza" => "Royal Bacon Cheese taille L","prix" => 9.80]);
		unset($_POST);
		header('Location:menu.php');
	}
	elseif(isset($_POST['RoyalBaconCheese_XL'])){
		array_push($_SESSION['panier'],["pizza" => "Royal Bacon Cheese taille XL","prix" => 14.50]);
		unset($_POST);
		header('Location:menu.php');
	}
	elseif(isset($_POST['RoyalBaconCheese_XXL'])){
		array_push($_SESSION['panier'],["pizza" => "Royal Bacon Cheese taille XXL","prix" => 21.20]);
		unset($_POST);
		header('Location:menu.php');
	}
		// Royal
	if(isset($_POST['Royal_L'])){
		array_push($_SESSION['panier'],["pizza" => "Royal taille L","prix" => 9.60]);
		unset($_POST);
		header('Location:menu.php');
	}
	elseif(isset($_POST['Royal_XL'])){
		array_push($_SESSION['panier'],["pizza" => "Royal taille XL","prix" => 14.10]);
		unset($_POST);
		header('Location:menu.php');
	}
	elseif(isset($_POST['Royal_XXL'])){
		array_push($_SESSION['panier'],["pizza" => "Royal taille XXL","prix" => 20.20]);
		unset($_POST);
		header('Location:menu.php');
	}
		// Saumon
	if(isset($_POST['Saumon_L'])){
		array_push($_SESSION['panier'],["pizza" => "Saumon taille L","prix" => 10.60]);
		unset($_POST);
		header('Location:menu.php');
	}
	elseif(isset($_POST['Saumon_XL'])){
		array_push($_SESSION['panier'],["pizza" => "Saumon taille XL","prix" => 15.40]);
		unset($_POST);
		header('Location:menu.php');
	}
	elseif(isset($_POST['Saumon_XXL'])){
		array_push($_SESSION['panier'],["pizza" => "Saumon taille XXL","prix" => 22.20]);
		unset($_POST);
		header('Location:menu.php');
	}
		// Savoyarde
	if(isset($_POST['Savoyarde_L'])){
		array_push($_SESSION['panier'],["pizza" => "Savoyarde taille L","prix" => 10.40]);
		unset($_POST);
		header('Location:menu.php');
	}
	elseif(isset($_POST['Savoyarde_XL'])){
		array_push($_SESSION['panier'],["pizza" => "Savoyarde taille XL","prix" => 14.80]);
		unset($_POST);
		header('Location:menu.php');
	}
	elseif(isset($_POST['Savoyarde_XXL'])){
		array_push($_SESSION['panier'],["pizza" => "Savoyarde taille XXL","prix" => 21.20]);
		unset($_POST);
		header('Location:menu.php');
	}
		// Texane
	if(isset($_POST['Texane_L'])){
		array_push($_SESSION['panier'],["pizza" => "Texane taille L","prix" => 11.40]);
		unset($_POST);
		header('Location:menu.php');
	}
	elseif(isset($_POST['Texane_XL'])){
		array_push($_SESSION['panier'],["pizza" => "Texane taille XL","prix" => 15.50]);
		unset($_POST);
		header('Location:menu.php');
	}
	elseif(isset($_POST['Texane_XXL'])){
		array_push($_SESSION['panier'],["pizza" => "Texane taille XXL","prix" => 22.50]);
		unset($_POST);
		header('Location:menu.php');
	}
	else {}
	// vider panier
	if(isset($_POST['delete'])){
		unset($_SESSION);
		unset($_POST);
		session_destroy();
		header('Location:menu.php');
	}
	// Supprimer UNE pizza du panier
	foreach($_SESSION['panier'] as $cle => $valeur){
		$cle = ''.$cle;
		if(isset($_POST[$cle])){
			$cle = (int)$cle;
			unset($_SESSION['panier'][$cle]);
			header('Location:menu.php');
		}
	}

// FIN du code PHP 
?>
<!-- DEBUT DU HTML  -->
<html>
<head>
	<link rel="stylesheet" type="text/css" href="la_tour_de_pisa.css">
	<script type="text/javascript" src="javascriptformulaire.js"></script>
	<title>Panier</title>
	<meta charset="UTF-8">
	<!--
		#panier{
			float:right;
		}
	-->
	</style>
</head>
<body>
  <section id="bloc_page">


<header>

      <nav>
        <ul id="menu">
          <li><a href="index.php">Accueil</a></li>
          <li><a href="menu.php">La Carte</a></li>
          <li><a href="page_reception.php">Soirées</a></li>
        
        </ul>
      </nav>

   		<div id="background">  <!--banière-->
   		 <p>
        <img src="images/bannieretourdepisa.png"> 
       </p>
   		</div>
  </header>

   		<div id="slider">
          <figure>
              <img src="http://image.noelshack.com/fichiers/2016/16/1461304971-chuckn.jpg" alt="">
          </figure>
      </div>




<!-- PANIER  -->
<div id="panier">
	Votre panier
	<p id="panierp" >
		<!-- DEBUT DU PHP : pour lister les éléments du panier et faire un total, bouton pour supprimer des pizzas de la commande et bouton pour vider le panier  -->
		<?php
			// var $i pour faire correspondre le name pour le $_POST avec l'id du tableau panier à supprimer
			$i = 0;
			// je parcours le panier
			foreach($_SESSION['panier'] as $pizzas){	
				// j'affiche la pizza et son prix
				echo '<li>'.$pizzas['pizza'].' : '.$pizzas['prix'].'€ ';
				// création du bouton pour supprimer la pizza dans le panier
				echo '<form action ="menu.php" method="post" style="display:inline-block;"><input type="submit" name="'.$i.'" value="x" style="border:1px solid black;border-radius:5px;"/></form></li>';
				// je calcule le total de la commande si la var est initialisée, sinon j'initialise la var
				if(!empty($total)){
					$total = $total + $pizzas['prix'];
				}
				else{
					$total = $pizzas['prix'];
				}
				// j'incrémente la var $i
				$i++;
			}
			// Afficher le total
			echo 'Total : '.$total.'€<br>';
			// Bouton pour passer commande
			if(!empty($_SESSION['panier'])){
				echo '<a href="formulaire.php"><button>Passer la commande</button></a>';
				// Bouton pour vider le panier
				echo '<form action="menu.php" method="post"><input type="submit" name="delete" value="Vider le panier"/></form>';
			}
		?>
	</p>
</div>
<!-- DIV PANIER FERMEE -->
<!-- INITIALISATION DU TABLEAU HTML - LE CODE POUR LES LIGNES ET COLS EST DANS LE PHP -->
<table id="menupizza" border=1 cellspacing=0>
<!-- CODE PHP POUR AFFICHER LA LISTE DES PIZZAS DEPUIS LE XML -->
<?php
	// j'initialise la variable col à 1 pour faire un tableau 3xX automatiquement
	$col = 1;
	// j'ouvre le xml
	$xml = simplexml_load_file('catalogue-pizzas.xml');
	//je parcours le xml
	foreach($xml as $pizza){
		// avec un switch je zap la particule devant le nom de la pizza
		switch($pizza->nom){
			case 'La Marguerite':
				$nom = 'Marguerite';
				break;
			case 'La Merguez':
				$nom = 'Merguez';
				break;
			case 'La Reine':
				$nom = 'Reine';
				break;
			case 'La Roquefort':
				$nom = 'Roquefort';
				break;
			case 'La Royal Bacon Cheese':
				$nom = 'RoyalBaconCheese';
				break;
			case 'La Royal':
				$nom = 'Royal';
				break;
			case 'La Saumon':
				$nom = 'Saumon';
				break;
			case 'La Savoyarde':
				$nom = 'Savoyarde';
				break;
			default:
				$nom = 'Texane';
		}
		// je crée une nouvelle ligne si la var col est à 1
		if($col == 1){
			echo '<tr>'; // ligne fermée
		}
		// j'affiche les informations (titre, image, ingrédients)
		// nom de la pizza (avec du style css intégré)
		echo '<td style="max-width:300px;list-style-type:none;padding:4px;"><center><h1>'.$pizza->nom.'</h1></center>';
		// image de la pizza (avec du style css intégré)
		echo '<center><a href="images/'.$pizza->image.'" target="_blank"><img id="imagepizza" src="images/'.$pizza->image.'" width="140px" height="100px" style="border-radius:5px;"/></a></center><br>';
		//
		echo '<p>Ingrédients :<br><i>'.$pizza->composition.'</i></p>';
		echo 'Taille :<br>';
		// je parcours les attributs de la balise xml prix
		foreach($pizza->prix->attributes() as $taille => $prix){
			// avec un switch je définis la taille en texte pour la réutiliser plus tard
			switch($taille){
				case 'taille_l':
					$taille = 'L';
					break;
				case 'taille_xl':
					$taille = 'XL';
					break;
				default:
					$taille = 'XXL';
			};
			// création d'un bouton 'Ajouter' pour ajouter une pizza au panier, la var $a crée le nom
			// qui sera envoyé pour le $_POST avec l'attribut "name"
			$a = $nom.'_'.$taille;
			echo '<li>'.$taille.' : '.$prix.'€';
			echo '<form action="menu.php" method="post"><input type="submit" name="'.$a.'" value="Ajouter"/></form>';
			echo '</li>';

		}
		// j'incrémente la var col
		$col++;
		// si après l'incrément de la var elle a une valeur supérieure à 3, je ferme la ligne du tableau et réinitialise la var
		if($col > 3){
			echo '</tr>';
			$col = 1;
		}
	}
?>

</table>
</section>


		<footer>
		<div id="ouverture">
   		<p id="titrefooter">Tour de Pisa</p>
   		<p id="ouverturejour">Ouvert 7j/7</p>
   		<p id="ouvertureheure">de 10h à 14h et de 18h à 23h </br> Le dimanche de 10h à 12h</p>
		</div>

		<div id="social">
		<a href="https://www.facebook.com/EGStephanoRC/"><img id="facebook" src="./images/facebook.png"></a>
		<a href="https://twitter.com/md_stephano?lang=fr"><img id="twitter" src="./images/twitter.png"></a>
		<a href="https://www.twitch.tv/mdstephano"><img id="twitch" src="./images/twitch.png"></a>
		</table>
		</div>

		<p id="copyright"> Coyright © 2016 - By Stephano</p>
		</footer>


</body>
</html>
