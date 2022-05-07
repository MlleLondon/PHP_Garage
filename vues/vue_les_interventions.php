
<h4> Liste des interventions </h4>

<form method="post" action="">
  <input type="text" placeholder="Rechercher" name= "mot" value="">
  <input type="submit" name= "Rechercher" value="Rechercher">
</form>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<div class="container">

  <table class="table">
    <thead>
      <tr>
        <td><b>Id Intervention</b></tdS>
        <td><b>Description</b></td>
        <td><b>Date intervention</b></td>
        <td><b>Prix de l'intervention</b></td>
        <td><b>Id Véhicule</b></td>
        <td><b>Id Technicien</b></td>
        <td> <b>Opérations </b></td>
      </tr>
    </thead>

  <?php
    foreach($lesInterventions as $uneIntervention){
      echo "<thead>";
      echo "<tr>";
      echo "<td>".$uneIntervention['idintervention']."</td>";
      echo "<td>".$uneIntervention['description']."</td>";
      echo "<td>".$uneIntervention['dateinter']."</td>";
      echo "<td>".$uneIntervention['prix']."</td>";
      echo "<td>".$uneIntervention['idvehicule']."</td>";
      echo "<td>".$uneIntervention['idtechnicien']."</td>";
      /** Icone supprimer et edit **/
      echo "<td>";
      if(isset($_SESSION['email']) and $_SESSION['role']=='admin'){
        echo "<a href='index.php?page=4&action=sup&idintervention=".$uneIntervention['idintervention']."'>";
        echo "<img src='images/sup.jpg' height='30' width='30'>";
        echo "</a>";
        echo "<a href='index.php?page=4&action=edit&idintervention=".$uneIntervention['idintervention']."'>";
        echo "<img src='images/edit.png' height='30' width='30'>";
        echo "</a>";
      }
      echo "</td>";
      echo "</tr>";
      echo "</thead>";
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
