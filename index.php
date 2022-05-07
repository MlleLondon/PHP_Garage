<?php
  session_start(); //Démarrage de la session
  require_once("fonctions/fonction.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Site garage</title>
    <meta charset="utf-8">
  </head>
  <body>
    <div id="main">
      <center>
        <h1> Bienvenue sur le site Garage JGCM </h1>

<?php
  if(!isset($_SESSION['email'])){ //S'il n'y a pas de session
    require_once("vues/vue_connexion.php");
  }
  if(isset($_POST['Se_connecter'])){
    $email= $_POST['email'];
    $mdp= $_POST['mdp'];
    $unUser = selectUser($email, $mdp);
        //var_dump($unUser);
    if ($unUser ==null){
      echo "Veuillez vérifier vos identifiants !";
    }
    else{
      echo "Bienvenue ".$unUser['nom']." ".$unUser['prenom'];
      echo "</br>";
      echo "</br>";

      //Création de la session user
      $_SESSION['email'] = $unUser['email'];
      $_SESSION['nom'] = $unUser['nom'];
      $_SESSION['prenom'] = $unUser['prenom'];
      $_SESSION['role'] = $unUser['role'];
      //On recharge la page vers le home
      header("Location: index.php?page=0");
    }
  }
  if(isset($_SESSION['email'])){
    echo '
        <a href="index.php?page=0">
          <img src="images/home.jpg" height="60" width="60">
        </a>
        <a href="index.php?page=1">
          <img src="images/client.jpg" height="60" width="60">
        </a>
        <a href="index.php?page=2">
          <img src="images/technicien.jpg" height="60" width="60">
        </a>
        <a href="index.php?page=3">
          <img src="images/vehicule.jpg" height="60" width="60">
        </a>
        <a href="index.php?page=4">
          <img src="images/intervention.jpg" height="60" width="60">
        </a>
        <a href="index.php?page=5">
          <img src="images/deconnexion.jpg" height="60" width="60">
        </a>
        ';
    

      if(isset($_GET["page"])){
        $page=$_GET["page"];
      }
      else{
        $page=0;
      }
      switch($page){
        case 0:
          require_once("home.php");
          break;
        case 1:
          require_once("g_clients.php");
          break;
        case 2:
          require_once("g_techniciens.php");
          break;
        case 3:
          require_once("g_vehicules.php");
          break;
        case 4:
          require_once("g_interventions.php");
          break;
        case 5:
          // Deconnexion : suppression de la session
          session_destroy();
          header("Location: index.php"); //Recharger la page
          break;
      }
    }//if session
?>
    </center>

    <style>
      {
        margin:0;
        padding:0;
      }

      body, html{
        height:115%;
      }

      body{
        text-align:center;
        background-color: #d3e6f2;
      }

      #main{
        max-width:1280px;
        min-height:100%;
        margin:0 auto;
        position:relative;
      }

    </style>
  </body>
</html>
