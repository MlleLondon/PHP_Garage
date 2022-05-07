<h4> Insertion d'un client </h4>
<form method="post" action="">
  <table border="0">
    <tr>
      <td>
        <input type="text" placeholder="Nom" name="nom"
        value="<?php if($leClient!=null){ echo $leClient['nom'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input type="text" placeholder="Prénom" name="prenom"
        value="<?php if($leClient!=null){ echo $leClient['prenom'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input type="text" placeholder="Adresse" name="adresse"
        value="<?php if($leClient!=null){ echo $leClient['adresse'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input type="text" placeholder="Email" name="email"
        value="<?php if($leClient!=null){ echo $leClient['email'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input type="text" placeholder="Numéro de téléphone" name="tel"
        value="<?php if($leClient!=null){ echo $leClient['tel'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input type="password" placeholder="Mot de passe" name="mdp"
        value="<?php if($leClient!=null){ echo $leClient['mdp'];}  ?>">
      </td>
    </tr>
<?php
  if($leClient != null){
    echo "<input type='hidden' name='idclient' value = '".$leClient['idclient']."'>";
  }
?>
    <tr>
      <td>
        <input type="reset" name="Annuler" value="Annuler">
        <input type="submit" <?php
              if($leClient!=null){ echo 'name="Modifier" value="Modifier"'; }
              else{ echo 'name="Valider" value="Valider"';} ?>>
      </td>
    </tr>
  </table>
</form>
