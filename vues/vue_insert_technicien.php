<h4> Insertion d'un Technicien </h4>
<form method="post" action="">
  <table border="0">
    <tr>
      <td>
        <input type="text" placeholder="Nom" name="nom"
        value="<?php if($leTechnicien!=null){ echo $leTechnicien['nom'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input type="text" placeholder="Prénom" name="prenom"
        value="<?php if($leTechnicien!=null){ echo $leTechnicien['prenom'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input type="text" placeholder="Qualification" name="qualification"
        value="<?php if($leTechnicien!=null){ echo $leTechnicien['qualification'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input type="text" placeholder="Email" name="email"
        value="<?php if($leTechnicien!=null){ echo $leTechnicien['email'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input type="text" placeholder="Numéro de téléphone" name="tel"
        value="<?php if($leTechnicien!=null){ echo $leTechnicien['tel'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input type="password" placeholder="Mot de passe" name="mdp"
        value="<?php if($leTechnicien!=null){ echo $leTechnicien['mdp'];}  ?>">
      </td>
    </tr>
<?php
  if($leTechnicien != null){
    echo "<input type='hidden' name='idtechnicien' value = '".$leTechnicien['idtechnicien']."'>";
  }
?>
    <tr>
      <td>
        <input type="reset" name="Annuler" value="Annuler"> 
        <input type="submit"
        <?php
              if($leTechnicien!=null){ echo 'name="Modifier" value="Modifier"'; }
              else{ echo 'name="Valider" value="Valider"';} ?>>
      </td>
    </tr>
  </table>
</form>
