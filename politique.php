<!DOCTYPE html>
<html>
<head>
	<title>Notre politique</title>
	<meta http-equiv="content-language" content="fr">
	<meta charset="utf-8">
	<link rel="icon" type="image/svg+xml" href="logo.svg">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href=https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	    <!--NAV-->

		
		<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="index.html"><img src="image/googlelogo.png"  height="30px"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" 
		data-target="#navbarNavAltMarkup" aria-controls="		navbarNavAltMarkup" 
		aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			   <div class="navbar-nav">
				 <a class="nav-link" href="EcoConception.php">EcoConception</a>
				 <a class="nav-link" href="BonnesPratiques.php">BonnesPratiques</a>
				 <a class="nav-link" href="Politique.php">Politique</a>
			   </div>
			 </div>
			 <button class="btn btn-outline-primary"><a href="contact.php">Contact</a></button>
		</nav>


	<main>
		<div class="container-fluid">
			<div class="row">
		
				<div class="col-sm-2" style="margin-top: 20px; margin-left: 20px;">
					<img src="image/eco-vert.jpeg" alt=image width="200px" height="200px" class="w3-circle">
				</div>
				<div class="col-sm-8" style="margin-top: auto; margin-bottom: auto;">
					<h1>La politique Google sur l’éco-conception</h1><br>
					 
					<h2>Le référencement SEO avec l’éco-conception</h2>
				</div>
		
			</div>
		</div>
		<div class="line" style="margin-bottom: 100px; margin-top: 100px; margin-left: 3%;">
			<p>Il vous faudra améliorer votre référencement SEO avec l’éco-conception en hackant les budgets Google Crawl.</p>
			<p>Les algorithmes SEO de Google se basent sur 3 domaines :</p>
				<ul><li>le crawling qui va permettre à Google d’évaluer vos pages en termes de temps de réponse, de qualité technique ;</li>
				<li>l’indexation qui va analyser le contenu (fraîcheur, richesse, qualité…) ;</li>
				<li>le ranking pour analyser la popularité de votre site.</li></ul>
			<p>Le crawling est une des parties les plus importantes, car c’est la manière dont Google va “afficher” vos pages. Les robots de Google (ou GoogleBots) vont analyser chaque url et les indexer. Le processus est itératif : les bots reviendront régulièrement réanalyser ces pages pour identifier les éventuels changements.</p>
			<p>La notion de Crawl budget : l’effort que les bots de Google vont fournir pour analyser votre site va influencer le nombre de pages qui seront référencées, la fréquence des vérifications ultérieures, ainsi que la notation globale de votre site.</p>
			<p>L’algorithme de Google est en effet dicté par un “effort maximum à fournir” qu’on appelle le “crawl budget“.</p>

		</div>
		<hr class="ligne">
		<div class="justifyandpadding" style="margin-left: 3%;">
			<p>Une autre explication à cette logique de budget, est que le crawling coûte de la ressource serveur à Google et que cette ressource a un coût.</p>  
			<p>Google est une entreprise non philanthropique. Il est compréhensible qu’elle veuille limiter ses coûts de fonctionnement tel que celui du crawling. Au passage, cela permet aussi de limiter l’impact environnemental de l’opération, ce qui est un point important pour Google.</p>
			<p>Il est donc nécessaire de surveiller le budget crawling et la manière dont Google analyse votre site. Cela peut se faire de différentes manières.</p>
		</div>
		<div class="centered rowcss bigspacedy">
			<button class="btn btn-primary spaced centered">Découvrir</button>
 		</div>
 		<div class="rowcss bigspacedy">
			<div class="column noroundpix" style="margin-left : 3%">
				<img src="image/PagesSpeed-Insights.jpeg">
				<h5>Page Speed Insights</h5>
			</div>
			<div class="text-left-column spaced-sup" style="margin-left : 3%">
				<h3>Notre outil</h3>
				<p>Google met à disposition un outil PageSpeed Insights, qui vous informe sur la vitesse de chargement de vos pages sur tous les appareils et qui vous indique le poids de vos pages et les moyens de le diminuer.</p> 
				<p>Autrement dit, Google ne veut pas passer trop de temps sur votre site, pour pouvoir consacrer du temps aux autres sites. Donc s’il détecte des lenteurs, l’analyse sera moins poussée. Toutes vos pages ne seront pas indexées, Google ne reviendra pas si souvent, résultat : vous allez perdre en référencement.</p>
			</div>
		</div>
		<h2 class="flexcenter spacedy-sup">Prêt à vous lancer?</h2>
		<div class="centered rowcss spacedy-sup">
			<button class="btn btn-outline-primary spaced">Contact</button>
		</div>
		<br>
	</div>
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