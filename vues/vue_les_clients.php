
<h4> Liste des clients </h4>

<form method="post" action="">
  <input type="text" placeholder="Rechercher" name= "mot" value="">
  <input type="submit" name= "Rechercher" value="Rechercher">
</form>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<div class="container">

  <table class="table">
    <thead>
        <tr>
            <td><b>Id Client</b></td>
            <td><b>Nom Client</b></td>
            <td><b>Prénom Client</b></td>
            <td><b>Adresse</b></td>
            <td><b>Email</b></td>
            <td><b>Téléphone</b></td>
            <td> <b>Opérations </b></td>
        </tr>
      </thead>

  <?php
    foreach($lesClients as $unClient){
      echo "<tr>";
      echo "<td>".$unClient['idclient']."</td>";
      echo "<td>".$unClient['nom']."</td>";
      echo "<td>".$unClient['prenom']."</td>";
      echo "<td>".$unClient['adresse']."</td>";
      echo "<td>".$unClient['email']."</td>";
      echo "<td>".$unClient['tel']."</td>";
      echo "<td>";

      if(isset($_SESSION['email']) and $_SESSION['role']=='admin'){
        echo "<a href='index.php?page=1&action=sup&idclient=".$unClient['idclient']."'>";
        echo "<img src='images/sup.jpg' height='30' width='30'>";
        echo "</a>";
        echo "<a href='index.php?page=1&action=edit&idclient=".$unClient['idclient']."'>";
        echo "<img src='images/edit.png' height='30' width='30'>";
        echo "</a>";
      }
      echo "<a href='index.php?page=1&action=vehicule&idclient=".$unClient['idclient']."'>";
      echo "<img src='images/voiture.png' height='30' width='30'>";
      echo "</a>";
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
