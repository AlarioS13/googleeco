<?php
  // Je déclare mes variables
  $page = $_GET['page']; 
  $title;



// ou je repete head et navbar a chaque fois 
  
  if ($page === 'accueil' || $page === '')
  {
  $title = "Accueil";
  require "components/head.php";
  require "components/navbar.php";
  require "components/home.php";
  require "components/featuresintro.php";
  require "components/testimonies.php";
  require "components/Ilslontfait.php";
  }

  elseif ($page === 'bonnesPratiques')
  {
  $title = "Les bonnes pratiques";
  require "components/head.php";
  require "components/navbar.php";
  require "components/header1.php";
  require "components/contenupratique.php";

  }

  elseif ($page === 'contact')
  {
    $title = "Contactez-nous";
    require "components/head.php";
    require "components/navbar.php";
    require "components/form.php";
  }

  elseif ($page === 'ecoConception')
  {
    $title = "L'éco-conception";
    require "components/head.php";
    require "components/navbar.php";
    require "components/header2.php";
    require "components/groschiffres.php";
    require "components/schema.php";
    require "components/youtube.php"; 
  }

  elseif ($page === 'politique')
  {
    $title = "Notre politique";
    require "components/head.php";
    require "components/navbar.php";
    require "components/contenupolitique.php";

  }

  elseif ($page === 'traitement')
  {
    $title = "Incomplet";
    require "components/head.php";
    require "components/navbar.php";
    require "components/traitementcontenu.php";

  }

  else 
  {
    $title = "404ERROR";
    require "components/head.php";
    require "components/navbar.php";
    require 'components/error404.php';
  }

// // dans le cas où le visiteur rentre une valeur à page qui n'existe pas

//   if ($page !== 'accueil' && $page !=='contact' && $page !=='ecoConception' 
//   && $page !=='traitement' && $page !=="politique" && $page !=="bonnesPratiques" )
//   {
//     $title = "404ERROR";
//     require 'components/error404.php';
//   }
  

// ce que toutes les pages possèdent en pied de page

  require "components/footer.php";
  require "components/end.php";
?>  