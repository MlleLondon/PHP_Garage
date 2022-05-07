<h3>Gestion des véhicules</h3>

<?php
$lesClients = selectAllClients();
$leVehicule = null;
if(isset($_SESSION['email']) and $_SESSION['role'] == "admin"){
  //Modif et sup'
  if (isset($_GET['action']) && isset($_GET['idvehicule'])){
    $action = $_GET['action'];
    $idvehicule = $_GET['idvehicule'];
    switch ($action) {
      case 'sup':
        deleteVehicule($idvehicule);
        break;
      case 'edit' :
        $leVehicule = selectWhereVehicule($idvehicule);
        break;
    }
  }
  //Option modifier
  require_once ("vues/vue_insert_vehicule.php");
  if (isset($_POST['Modifier'])) {
      updateVehicule($_POST);
      header("Location: index.php?page=3");
  }

  if (isset($_POST['Valider'])){
    insertVehicule($_POST);
  }
}
//Option rechercher
if (isset($_POST['Rechercher'])){
  $mot = $_POST['mot'];
  $lesVehicules = searchVehicule($mot);
}
else {
  $lesVehicules = selectAllVehicules();
}
require_once ("vues/vue_les_vehicules.php");
?>
