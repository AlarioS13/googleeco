<!-- // xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxNOMxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
<div class="divmain bigspacedy column flexcenterbw">
		<p><?php
			if ((isset($_POST['inputName'])) AND (isset($_POST['inputFirstname'])) && strlen($_POST['inputName']) != 0)
			{
				$name= htmlspecialchars($_POST['inputName']);
				$firstname= htmlspecialchars($_POST['inputFirstname']);
				echo htmlspecialchars("Bonjour, $name" . " $firstname !"); 
			}	
			else
			{
				echo ("Veuillez renseigner votre nom...");
			}	
		?></p>
<!-- // xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx EMAIL xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->

		<p><?php	
			if (isset($_POST['inputEmail4']) && strlen($_POST['inputEmail4']) != 0)
			{
				$email= htmlspecialchars($_POST['inputEmail4']);
				echo ("Nous avons bien noté votre e-mail.");
			}	
			else
			{
				echo ("Notez que si vous ne renseignez pas votre e-mail, nous ne serons pas en mesure de vous recontacter.");
			}	
		?></p>	
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx ADRESSE xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
 
		<p><?php
			if ((isset($_POST['inputAddress'])) AND (isset($_POST['inputAddress2'])) AND (isset($_POST['inputCity'])) AND (isset($_POST['inputState'])) && strlen($_POST['inputCity']) != 0)
			{
				echo "Votre adresse est bien enregistrée. Nous vous recontacterons dans les plus brefs délais.";
			}	
			else
			{
				echo ("Notez que si vous ne renseignez pas vos coordonnées, nous ne serons pas en mesure de vous recontacter.");
			}	
		?></p>	
			<div class="centered rowcss spacedy-sup">
				<button class="btn btn-outline-primary spaced"><a href="contact.php"><svg height="15px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-left" class="svg-inline--fa fa-arrow-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"></path></svg> Retour</a></button>
			</div>
		</div>
    </main>
    <br><br><br><br><br><br><br><br><br>