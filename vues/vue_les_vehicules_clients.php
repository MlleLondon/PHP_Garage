

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
