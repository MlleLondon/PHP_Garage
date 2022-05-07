<h3>Gestion des techniciens</h3>

<?php
  if(isset($_SESSION['email']) and $_SESSION['role']=='admin'){
    $leTechnicien =null;
    if(isset($_GET['action']) && isset($_GET['idtechnicien'])){

      $action= $_GET['action'];
      $idtechnicien= $_GET['idtechnicien'];
      switch($action){
        case 'sup':
          deleteTechnicien($idtechnicien);
          break;
        case 'edit':
          $leTechnicien = selectWhereTechnicien($idtechnicien);
                //var_dump($leTechnicien);
          break;
        }
      }

    require_once("vues/vue_insert_technicien.php");
    if (isset($_POST['Modifier'])){
      updateTechnicien($_POST);
      //On recharge la page
      header("Location: index.php?page=2");
   }
  if (isset($_POST['Valider'])){
    insertTechnicien($_POST);
  }
}
  if (isset($_POST['Rechercher'])){
    $mot= $_POST['mot'];
    $lesTechniciens = searchTechniciens($mot);
  }
  else{
    $lesTechniciens = selectAllTechniciens();
  }
  require_once("vues/vue_les_techniciens.php");
?>
