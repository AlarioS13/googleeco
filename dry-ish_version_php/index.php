<?php
  // Je déclare mes variables
  $page = $_GET['page']; 
  $title;



// Je repete head et navbar a chaque fois, title devant être déterminé avant le head.
// Une autre solution serait de refaire toute une serie de if, en determinant slmt title à chaque fois
// puis ensuite require head... c'est plus long.
  
if ($page === 'accueil' || $page === '')
{
  $title = "Accueil";
  require "components/head.php";
  require "components/navbar.html";
  require "components/home.html";
  require "components/featuresintro.html";
  require "components/testimonies.html";
  require "components/Ilslontfait.html";
}

  elseif ($page === 'bonnesPratiques')
  {
    $title = "Les bonnes pratiques";
    require "components/head.php";
    require "components/navbar.html";
    require "components/header1.html";
    require "components/contenupratique.html";
  }

  elseif ($page === 'contact')
  {
    $title = "Contactez-nous";
    require "components/head.php";
    require "components/navbar.html";
    require "components/form.html";
  }

  elseif ($page === 'ecoConception')
  {
    $title = "L'éco-conception";
    require "components/head.php";
    require "components/navbar.html";
    require "components/header2.html";
    require "components/groschiffres.html";
    require "components/schema.html";
    require "components/youtube.html"; 
  }

  elseif ($page === 'politique')
  {
    $title = "Notre politique";
    require "components/head.php";
    require "components/navbar.html";
    require "components/contenupolitique.html";
  }

  elseif ($page === 'traitement')
  {
    $title = "Incomplet";
    require "components/head.php";
    require "components/navbar.html";
    require "components/traitementcontenu.html";
  }
// // dans le cas où le visiteur rentre une valeur à page qui n'existe pas
  else 
  {
    $title = "404ERROR";
    require "components/head.php";
    require "components/navbar.html";
    require 'components/error404.html';
  }
// ce que toutes les pages possèdent en pied de page

require "components/footer.html";
require "components/end.html";
?>  