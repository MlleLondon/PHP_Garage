<h3>Accueil du site</h3>
</br>
<h4> <?php echo "Bienvenue " .$_SESSION['nom']."   " .$_SESSION['prenom'];
      echo "</br> Vous avez le role: ".$_SESSION['role'];?>
</h4>
</br>
<img src="images/logo.jpg" height="150" width="150">
</br>
<p>
  <div class="desc">
  <b>Notre garage est le top des garages dans la région.
  </br>
  Venez nous voir, nous serons ravis de vous accueillir et de vous rendre service.</b>
  </div>
</p>
<?php
  $nbClients= countClients();
  $nbTechniciens= countTechniciens();
  $nbVehicules= countVehicules();
  $nbInterventions= countInterventions();
?>
</br>
  <h2>Statistiques de la Base de données</h2>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  <div class="main">
  <div class="container">
    <table border="1" style="text-align: center">
      <tr>
        <td> <b>Nombre de clients </b></td>
        <td> <b>Nombre de techniciens </b></td>
        <td> <b>Nombre de vehicules </b></td>
        <td> <b>Nombre d'interventions </b></td>
      </tr>
      <?php
        echo "<tr>";
        echo "<td>".$nbClients."</td>";
        echo "<td>".$nbTechniciens."</td>";
        echo "<td>".$nbVehicules."</td>";
        echo "<td>".$nbInterventions."</td>";
        echo "</tr>";

        ?>
    </table>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</br>
  <img src="images/garage.png" height="600" width="800">
</br>
</div>

<footer>
  <div class="left">
    <p><b>Coordonnées :</b>
      <br> DUGIMONT Garance
      <br> garancedugimont@gmail.com
      <br> 06.68.57.12.91
    </p>
  </div>
  <div class="center">
    <p><b> Réseaux sociaux : </b>
      <br><a href="https://www.instagram.com/garance_dugimont/">
            <img src="images/insta.png" height="30" width="30">
          </a>
      <br><a href="https://twitter.com/GDugimont">
            <img src="images/twitter.png" height="30" width="30">
          </a>
      <br><a href="https://www.linkedin.com/in/garance-dugimont-00073b152/">
            <img src="images/linkedin.png" height="30" width="30">
          </a>
    </p>
  </div>
</footer>

<style>
  .desc{
    font-size: 25px;
  }
  .container {
    background-color: #b9dbf0;
    color: black;
    padding: 15px 32px;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
  }
    .main{
    background-color: #b9dbf0;

  }
  footer{
    padding: 5px;
    clear: both;
    position: absolute;
    height:130px;
    bottom: 0;
    width:100%;
    background-color: #95cbed;
  }
  footer .left{
    padding: 0px;
    clear: both;
    position: absolute;
    height: 140px;
    text-align: left;
  }
  footer .center{
      padding: 0px;
      text-align: center;
  }


</style>
