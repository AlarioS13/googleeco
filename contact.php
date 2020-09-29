<!DOCTYPE html>
<html>
<head>
	<title>contact</title>
	<meta http-equiv="content-language" content="fr">
	<meta charset="utf-8">
	<link rel="icon" type="image" href="img/googlelogo.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.5.2-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="stylecontact.css">
	<link rel="stylesheet" media="all and (max-width: 800px)" href="mini.css">
</head>
<body>
	<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  		<a class="navbar-brand" href="#"><img src="img/googlelogo.png" class="logo"></a>
  		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
  		   <div class="navbar-nav">
  		      <a class="nav-link spaced text-muted" href="#">EcoConception</a>
  		      <a class="nav-link spaced text-muted" href="#">BonnesPratiques</a>
  		      <a class="nav-link spaced text-muted" href="#">Politique</a>
  		   </div>
 		</div>
 		<button class="btn btn-outline-primary spaced">Contact</button>
	</nav>
	<br><br>
	<main>
		<div class="intro bigspacedy">
			<h3>Contactez-nous !</h3>
			<p>Vous avez des questions? N'hésitez pas à nous contacter.</p>
		</div>
		<div class="form centered spaced-y">
			<form method="post" action="traitement.php">
 				<div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputName">Nom</label>
                <input type="text" class="form-control" id="inputName">
            </div>
    				<div class="form-group col-md-3">
      					<label for="inputFirstname">Prénom</label>
      					<input type="text" class="form-control" id="inputFirstname">
    				</div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
  				</div>
  				<div class="form-group">
    				<label for="inputAddress">Adresse</label>
    				<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  				</div>
  				<div class="form-group">
    				<label for="inputAddress2">Adresse 2</label>
    				<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or 	floor">
  				</div>
  				<div class="form-row">
    				<div class="form-group col-md-6">
      				<label for="inputCity">Ville</label>
      					<input type="text" class="form-control" id="inputCity">
    				</div>
    				<div class="form-group col-md-6">
      					<label for="inputState">Pays</label>
                  <input type="text" class="form-control" id="inputState">
    				</div>
  				</div>
  				<div class="form-group">
    			<div class="form-check">
      					<input class="form-check-input" type="checkbox" id="gridCheck">
      					<label class="form-check-label" for="gridCheck">
        				Check me out
      				</label>
    				</div>
  				</div>
  				<button type="submit" class="btn btn-primary">Envoyer</button>
			</form>
		</div>
		<br><br><br>
		<h2 class="flexcenter spacedy-sup">Prêt à vous lancer?</h2>
		<div class="centered rowcss spacedy-sup">
			<button class="btn btn-outline-primary spaced">Contact</button>
		</div>
		<br><br>
	</main>
	<footer class="rowcss bg-light">
		<div class="text-dark">
			<?php 
			$dateTimeZone = new DateTimeZone('Europe/Paris');
			$dateTime = new DateTime('now', $dateTimeZone);
			echo "© " . $dateTime -> format('Y'). ' Google'?>
			<a href="#" style="color: #5f6368">Credits </a><a href="#" style="color: #5f6368"> Privacy policy</a>
		</div>
  		<div class="rowdiv text-light">
  			<div class="svg spaced">
  				<a href="#"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin" class="svg-inline--fa fa-linkedin fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path></svg></a>
  			</div>
  			<div class="svg spaced">
  				<a href="#"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-square" class="svg-inline--fa fa-facebook-square fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"></path></svg></a>
  			</div>
  			<div class="svg spaced">
  				<a href="#"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter-square" class="svg-inline--fa fa-twitter-square fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-48.9 158.8c.2 2.8.2 5.7.2 8.5 0 86.7-66 186.6-186.6 186.6-37.2 0-71.7-10.8-100.7-29.4 5.3.6 10.4.8 15.8.8 30.7 0 58.9-10.4 81.4-28-28.8-.6-53-19.5-61.3-45.5 10.1 1.5 19.2 1.5 29.6-1.2-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3a65.447 65.447 0 0 1-29.2-54.6c0-12.2 3.2-23.4 8.9-33.1 32.3 39.8 80.8 65.8 135.2 68.6-9.3-44.5 24-80.6 64-80.6 18.9 0 35.9 7.9 47.9 20.7 14.8-2.8 29-8.3 41.6-15.8-4.9 15.2-15.2 28-28.8 36.1 13.2-1.4 26-5.1 37.8-10.2-8.9 13.1-20.1 24.7-32.9 34z"></path></svg></a>
  			</div>
  		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script src="script.js"></script>	
</body>
</html>
