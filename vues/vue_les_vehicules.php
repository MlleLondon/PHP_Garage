<h4> Liste des vehicules </h4>

<form method="post" action="">
  <input type="text" placeholder="Rechercher" name= "mot" value="">
  <input type="submit" name= "Rechercher" value="Rechercher">
</form>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<div class="container">

  <table class="table">
    <thead>
      <tr>
        <td><b>Id Véhicule</b></td>
        <td><b>Matricule</b></td>
        <td><b>Marque</b></td>
        <td><b>Date Circulation</b></td>
        <td><b>Nombre KiloMetre</b></td>
        <td><b>Id Client </b></td>
        <td><b> Opérations </b></td>
      </tr>
    </thead>

  <?php
    foreach($lesVehicules as $unVehicule){
      echo "<tr>";
      echo "<td>".$unVehicule['idvehicule']."</td>";
      echo "<td>".$unVehicule['matricule']."</td>";
      echo "<td>".$unVehicule['marque']."</td>";
      echo "<td>".$unVehicule['datecirculation']."</td>";
      echo "<td>".$unVehicule['nbkm']."</td>";
      echo "<td>".$unVehicule['idclient']."</td>";
      /** Icone supprimer et edit **/
      echo "<td>";
      if(isset($_SESSION['email']) and $_SESSION['role']=='admin'){
        echo "<a href='index.php?page=3&action=sup&idvehicule=".$unVehicule['idvehicule']."'>";
        echo "<img src='images/sup.jpg' height='30' width='30'>";
        echo "</a>";
        echo "<a href='index.php?page=3&action=edit&idvehicule=".$unVehicule['idvehicule']."'>";
        echo "<img src='images/edit.png' height='30' width='30'>";
        echo "</a>";
      }
      echo "</td>";
      echo "</tr>";
    }
  ?>
  </table>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<style>
.container {
  background-color: #b9dbf0; /* Green */
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>
