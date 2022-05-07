<h3>Gestion des interventions</h3>

<?php
  $lesVehicules = selectAllVehicules();
  $lesTechniciens = selectAllTechniciens();
  $lIntervention = null;
  if(isset($_SESSION['email']) and $_SESSION['role']=='admin'){
    if(isset($_GET['action']) && isset($_GET['idintervention'])){

      $action= $_GET['action'];
      $idintervention= $_GET['idintervention'];
      switch($action){
        case 'sup':
          deleteIntervention($idintervention);
          break;
          case 'edit':
          $lIntervention = selectWhereIntervention($idintervention);
                //var_dump($lIntervention);
          break;
        }
      }

    require_once("vues/vue_insert_intervention.php");
    if (isset($_POST['Modifier'])){
      updateIntervention($_POST);
      //On recharge la page
      header("Location: index.php?page=4");
    }
    if (isset($_POST['Valider'])){
      insertIntervention($_POST);
    }
  }
  if (isset($_POST['Rechercher'])){
  $mot = $_POST['mot'];
  $lesInterventions = searchInterventions($mot);
  }
  else{
    $lesInterventions = selectAllInterventions();
  }
  require_once("vues/vue_les_interventions.php");
?>
