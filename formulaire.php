<?php
	session_start();
	// si le panier est vide, on est redirigé vers la page menu
	if(empty($_SESSION['panier'])){
		header('Location:menu.php');
	}
	// si les infos sont rentrées
	if(!empty($_POST)){
		// récupération des données dans des var
		$to = $_POST['email'];
		$from = 'stefano@tourdepisa.it';
		$date = date("d/m/Y");
		$sujet = 'Votre commande du '.$date;
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$tel = $_POST['tel'];
		$adresse = $_POST['adresse'];
		$ville = $_POST['ville'];
		$codepostal = $_POST['codepostal'];
		$message = 'Bonjour '.$prenom.' '.$nom.','."\n"."\n";
		$message .= 'Votre commande a été validée et est en chemin.'."\n"."\n";
		$message .= 'Elle sera livrée à l\'adresse :'."\n";
		$message .= $adresse."\n";
		$message .= $codepostal.'-';
		$message .= $ville."\n";
		$message .= 'Récapitulatif :'."\n"."\n";
		$total = 0;
		foreach($_SESSION['panier'] as $pizzas){
			$message .= $pizzas['pizza'].' - '.$pizzas['prix'].'€'."\n";
			$total += $pizzas['prix'];
		}
		$message .= "\n".'Total : '.$total.'€'."\n"."\n";
		$message .= 'La Tour de Pisa vous souhaite un bon appétit !';
		$headers = 'From : '.$from;
		//envoi du mail
		mail($to,$sujet,$message,$headers);
		// destruction du panier et des données
		unset($_POST);
		unset($total);
		unset($_SESSION);
		// switch ON que la commande est passée pour afficher le texte de validation de la commande
		$commande_passee = true;
		session_destroy();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="la_tour_de_pisa.css">
	<script type="text/javascript" src="javascriptformulaire.js"></script>
	<title>Panier</title>
	<meta charset="UTF-8">
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
<img src="http://image.noelshack.com/fichiers/2016/16/1461305252-jcvd.jpg" alt="">
</div>


   	<div id="contenu">

		<table class="table">
  			<thead>
    			<tr><th>Article</th><th>Prix</th></tr>
		    </thead>
         <tbody id="cart-tablebody">
		<-- CODE PHP POUR LE RECAPITULATIF -->
		<?php
			// on parcours le panier
			foreach($_SESSION['panier'] as $pizzas){
				echo '<tr><td>'.$pizzas['pizza'].'</td><td>'.$pizzas['prix'].'€</td></tr>';
				if(!empty($total)){
					$total = $total + $pizzas['prix'];
				}
				else{
					$total = $pizzas['prix'];
				}
			}
			
		?>
         </tbody>
        </table>
<!-- AJOUT DE LA VARIABLE $TOTAL ENTRE LES BALISES SPAN --> 
<p>Sous total : <span class="subtotal"><?php echo $total; ?></span>€</p>
<!-- Ci-dessous le code PHP pour la validation de la commande -->	
<?php if($commande_passee == true){ echo "<p>Votre commande a bien été passée, un mail vous a été envoyé.</p>"; } ?>
		<form method="post" action="formulaire.php">

  			 <label>E-Mail :</label></br><input type="email" name="email" placeholder="Ex : stephano@pro-gamer.kr" required /></br></br>
  			 <label>Nom :</label></br><input type="text" name="nom" required  /></br></br>
  			 <label>Prénom :</label></br><input type="text" name="prenom" required /></br></br>
  			 <label>Tel :</label></br><input type="tel"  name="tel" required /></br></br>
  			 <label>Adresse :</label></br><input type="text" name="adresse" required /></br></br>
  			 <label>Ville :</label></br><input type="text" name="ville" required /></br></br>
  			 <label>Code Postal :</label></br><input type="text" name="codepostal" required /></br></br>

  			 <input id="confirmer" type="submit" value="confirmer" onclick="confirm('Êtes-vous sûr de votre choix ?')"/>

		</form>



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

		</section>

	</body>
</html>
