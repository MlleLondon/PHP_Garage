<h4> Insertion d'une intervention </h4>
<form method="post" action="">
  <table border="0">
    <tr>
      <td>
        <input type="text" placeholder="Description" name="description"
        value="<?php if($lIntervention!=null){ echo $lIntervention['description'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input type="date" name="dateinter"
        value="<?php if($lIntervention!=null){ echo $lIntervention['dateinter'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input type="text" placeholder="Prix" name="prix"
        value="<?php if($lIntervention!=null){ echo $lIntervention['prix'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <select name="idvehicule">
          <?php
            foreach($lesVehicules as $unVehicule){
              echo "<option value='".$unVehicule['idvehicule']."'>";
              echo $unVehicule['idvehicule']. "--" .$unVehicule['matricule']."  ".$unVehicule['marque'];
              echo "</option>";
            }
          ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>
        <select name="idtechnicien">
          <?php
            foreach($lesTechniciens as $unTechnicien){
              echo "<option value='".$unTechnicien['idtechnicien']."'>";
              echo $unTechnicien['idtechnicien']. "--" .$unTechnicien['nom']."  ".$unTechnicien['prenom']. " -> " .$unTechnicien['qualification'];
              echo "</option>";
            }
          ?>
        </select>
      </td>
    </tr>
    <?php
      if ($lIntervention != null) echo "<input type='hidden' name='idintervention' value = '".$lIntervention['idintervention']."' >";
    ?>
    <tr>
      <td>
        <input type="reset" name="Annuler" value="Annuler">
        <input type="submit" <?php
              if($lIntervention!=null){ echo 'name="Modifier" value="Modifier"'; }
              else{ echo 'name="Valider" value="Valider"';} ?>>
      </td>
    </tr>
  </table>
</form>
