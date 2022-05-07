<h4> Insertion d'un vehicule </h4>
<form method="post" action="">
  <table border="0">
    <tr>
      <td>
        <input type="text" placeholder="Matricule" name="matricule"
        value="<?php if($leVehicule!=null){ echo $leVehicule['matricule'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input type="text" placeholder="Marque" name="marque"
        value="<?php if($leVehicule!=null){ echo $leVehicule['marque'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input type="date" name="datecirculation"
        value="<?php if($leVehicule!=null){ echo $leVehicule['datecirculation'];}  ?>">
      </td>
    </tr>
    <tr>
        <td><input type="text" placeholder="Nombre de KiloMètre" name="nbkm"
        value="<?php if($leVehicule!=null){ echo $leVehicule['nbkm'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <select name="idclient">
          <?php
            foreach($lesClients as $unClient){
              echo "<option value='".$unClient['idclient']."'>";
              echo $unClient['idclient']. " -- " .$unClient['nom']."  ".$unClient['prenom'];
              echo "</option>";
            }
          ?>
        </select>
      </td>
    </tr>
    <?php
      if ($leVehicule != null) echo "<input type='hidden' name='idvehicule' value = '".$leVehicule['idvehicule']."' >";
    ?>
    <tr>
      <td>
        <input type="reset" name="Annuler" value="Annuler">
        <input type="submit" <?php
              if($leVehicule!=null){ echo 'name="Modifier" value="Modifier"'; }
              else{ echo 'name="Valider" value="Valider"';} ?>>
      </td>
    </tr>
  </table>
</form>
