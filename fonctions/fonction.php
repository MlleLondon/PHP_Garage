<?php
  function connexion(){
    $con=mysqli_connect("localhost", "root","","garage_250");
    if($con==null){
      echo "Erreur de connexion à la bdd";
    }
    return $con;
  }

  function deconnexion($con){
    mysqli_close($con);
  }
/********* Fonctions Clients ***/
  function selectAllClients(){
    $requete ="select * from client;";
    $con=connexion();
    if($con){
      $lesClients = mysqli_query($con, $requete);
    }
    else{
      return null;
    }
    deconnexion($con);
    return $lesClients;
  }
        /**** Ajouter un client avec le formulaire***/
  function insertClient($tab){
    $requete ="insert into client values(null,'".$tab['nom']."', '".$tab['prenom']."' ,
                '".$tab['adresse']."' ,'".$tab['email']."','".$tab['mdp']."', '".$tab['tel']."');";
    $con=connexion();
    if($con){
      mysqli_query($con, $requete);
    }
    deconnexion($con);
  }
          /**** Supprimer un client de la bdd***/
  function deleteClient($idclient){
    $requete ="delete from client where idclient = ".$idclient;
    $con=connexion();
    if($con){
      mysqli_query($con, $requete);
    }
    deconnexion($con);
  }

  function selectWhereClient($idclient){
    $requete ="select * from client where idclient =".$idclient ;
    $con=connexion();
    if($con){
      $lesClients = mysqli_query($con, $requete);
      $unClient = mysqli_fetch_assoc($lesClients);  //Recuperer un client sous forme de tableau associatif
    }
    else{
      return null;
    }
    deconnexion($con);
    return $unClient;
  }
      /***Modifier un client ***/
  function updateClient($tab){
    $requete ="update client set nom = '".$tab['nom']."', prenom = '".$tab['prenom']."' , adresse = '".$tab['adresse']."'
              , email = '".$tab['email']."', mdp ='".$tab['mdp']."', tel ='".$tab['tel']."' where idclient =" .$tab['idclient'];
    $con=connexion();
    if($con){
      mysqli_query($con, $requete);
    }
    deconnexion($con);
  }
      /***Chercher un client ***/
  function searchClients($mot){
    $requete ="select * from client where nom like '%".$mot."%' or prenom like '%".$mot."%' or adresse like '%".$mot."%' or email like '%".$mot."%' or tel like '%".$mot."%';";
    $con=connexion();
    if($con){
      $lesClients = mysqli_query($con, $requete);
    }
    else{
      return null;
    }
    deconnexion($con);
    return $lesClients;
  }
        /***Donne le nombre de clients ***/
  function  countClients(){
    $requete = "select count(*) as nb from client;";
    $con=connexion();
    if($con){
      $resultat = mysqli_query($con, $requete);
      $nb=mysqli_fetch_assoc($resultat);
    }
    else{
      return null;
    }
    deconnexion($con);
    return $nb["nb"];
  }
  function selectVehiculesClients($idclient){
    $requete ="select * from vehicule where idclient =".$idclient;
    $con=connexion();
    if($con){
      $lesVehicules = mysqli_query($con, $requete);
    }
    else{
      return null;
    }
    deconnexion($con);
    return $lesVehicules;
  }

  /**** Fonction Tehcniciens***/
  function selectAllTechniciens(){
    $requete ="select * from technicien;";
    $con=connexion();
    if($con){
      $lesTechniciens = mysqli_query($con, $requete);
    }
    else{
      return null;
    }
    deconnexion($con);
    return $lesTechniciens;
  }
      /**** Ajouter un Technicien avec le formulaire***/
  function insertTechnicien($tab){
    $requete ="insert into technicien values(null,'".$tab['nom']."', '".$tab['prenom']."' ,'".$tab['qualification']."' ,'".$tab['email']."','".$tab['mdp']."', '".$tab['tel']."');";
    $con=connexion();
    if($con){
      mysqli_query($con, $requete);
    }
    deconnexion($con);
  }
      /**** Supprimer un Technicien de la bdd***/
  function deleteTechnicien($idtechnicien){
    $requete ="delete from technicien where idtechnicien = ".$idtechnicien;
    $con=connexion();
    if($con){
      mysqli_query($con, $requete);
    }
    deconnexion($con);
  }
  function selectWhereTechnicien($idtechnicien){
    $requete ="select * from technicien where idtechnicien =".$idtechnicien ;
    $con=connexion();
    if($con){
      $lesTechniciens = mysqli_query($con, $requete);
      $unTechnicien = mysqli_fetch_assoc($lesTechniciens);  //Recuperer un technicien sous forme de tableau associatif
    }
    else{
      return null;
    }
    deconnexion($con);
    return $unTechnicien;
  }
      /***Modifier un technicien ***/
  function updateTechnicien($tab){
    $requete ="update technicien set nom = '".$tab['nom']."', prenom = '".$tab['prenom']."' , qualification = '".$tab['qualification']."'
              , email = '".$tab['email']."', mdp ='".$tab['mdp']."', tel ='".$tab['tel']."' where idtechnicien =" .$tab['idtechnicien'];
    $con=connexion();
    if($con){
      mysqli_query($con, $requete);
    }
    deconnexion($con);
  }
      /***Chercher un technicien ***/
  function searchTechniciens($mot){
    $requete ="select * from technicien where nom like '%".$mot."%' or prenom like '%".$mot."%' or qualification like '%".$mot."%' or email like '%".$mot."%' or tel like '%".$mot."%';";
    $con=connexion();
    if($con){
      $lesTechniciens = mysqli_query($con, $requete);
    }
    else{
      return null;
    }
    deconnexion($con);
    return $lesTechniciens;
  }

  function countTechniciens(){
    $requete = "select count(*) as nb from technicien;";
    $con=connexion();
    if($con){
      $resultat = mysqli_query($con, $requete);
      $nb=mysqli_fetch_assoc($resultat);
    }
    else{
      return null;
    }
    deconnexion($con);
    return $nb["nb"];
  }
  /**** Fonction Vehicules***/
  function selectAllVehicules(){
    $requete ="select * from vehicule;";
    $con=connexion();
    if($con){
      $lesVehicules = mysqli_query($con, $requete);
    }
    else{
      return null;
    }
    deconnexion($con);
    return $lesVehicules;
  }

      /**** Ajouter un Vehicule avec le formulaire***/
  function insertVehicule($tab){
    $requete ="insert into vehicule values(null,'".$tab['matricule']."', '".$tab['marque']."' ,'".$tab['datecirculation']."' ,'".$tab['nbkm']."','".$tab['idclient']."');";
    $con=connexion();
    if($con){
      mysqli_query($con, $requete);
    }
    deconnexion($con);
  }
      /**** Supprimer un Vehicule de la bdd***/
  function deleteVehicule($idvehicule){
    $requete ="delete from vehicule where idvehicule = ".$idvehicule;
    $con=connexion();
    if($con){
      mysqli_query($con, $requete);
    }
    deconnexion($con);
  }
      //Rechercher un vehicule
  function searchVehicules($mot){
    $requete ="select * from vehicule where matricule like '%".$mot."%' or marque like '%".$mot."%' or datecirculation like '%".$mot."%' or nbkm like '%".$mot."%' or idclient like '%".$mot."%'; ";
    $con = connexion();
    if($con){
      $lesVehicules = mysqli_query($con, $requete);
    }
    else{
      return null;
    }
    deconnexion($con);
    return $lesVehicules;
  }
  function selectWhereVehicule($idvehicule){
    $requete = "select * from vehicule where idvehicule = " .$idvehicule;
    $con = connexion();
    if ($con){
      $lesVehicules = mysqli_query($con, $requete);
      $unVehicule = mysqli_fetch_assoc($lesVehicules);
    }
    else{
      return null;
    }
    deconnexion($con);
    return $unVehicule;
  }
  function updateVehicule ($tab){
    $requete = "update vehicule set matricule = '".$tab['matricule'] ."', marque = '".$tab['marque'] ."', datecirculation = '".$tab['datecirculation'] ."', nbkm = '".$tab['nbkm'] ."', idclient = '".$tab['idclient'] ."' where idvehicule = ".$tab['idvehicule'];
    // echo $requete;
    $con = connexion ();
    if ($con){
      mysqli_query($con, $requete);
    }
    deconnexion($con);
  }
  function  countVehicules(){
    $requete = "select count(*) as nb from vehicule;";
    $con=connexion();
    if($con){
      $resultat = mysqli_query($con, $requete);
      $nb=mysqli_fetch_assoc($resultat);
    }
    else{
      return null;
    }
    deconnexion($con);
    return $nb["nb"];
  }

  /**** Fonction Intervention***/
  function selectAllInterventions(){
    $requete ="select * from intervention;";
    $con=connexion();
    if($con){
      $lesInterventions = mysqli_query($con, $requete);
    }
    else{
      return null;
    }
    deconnexion($con);
    return $lesInterventions;
  }
        /**** Ajouter une Intervention avec le formulaire***/
  function insertIntervention($tab){
    $requete ="insert into intervention values(null,'".$tab['description']."', '".$tab['dateinter']."' ,'".$tab['prix']."' ,'".$tab['idvehicule']."','".$tab['idtechnicien']."');";
    $con=connexion();
    if($con){
      mysqli_query($con, $requete);
    }
    deconnexion($con);
  }
      /**** Supprimer une Intervention de la bdd***/
  function deleteIntervention($idintervention){
    $requete ="delete from intervention where idintervention = ".$idintervention;
    $con=connexion();
    if($con){
      mysqli_query($con, $requete);
    }
    deconnexion($con);
  }
  function selectWhereIntervention($idintervention){
    $requete ="select * from intervention where idintervention =".$idintervention ;
    $con=connexion();
    if($con){
      $lesInterventions = mysqli_query($con, $requete);
      $uneIntervention = mysqli_fetch_assoc($lesInterventions);  //Recuperer une intervention sous forme de tableau associatif
    }
    else{
      return null;
    }
    deconnexion($con);
    return $uneIntervention;
  }
  /***Modifier une intervention ***/
  function updateIntervention($tab){
  $requete ="update intervention set description = '".$tab['description']."', dateinter = '".$tab['dateinter']."' , prix = '".$tab['prix']."'
          , idvehicule = '".$tab['idvehicule']."', idtechnicien ='".$tab['$idtechnicien'];
  $con=connexion();
  if($con){
    mysqli_query($con, $requete);
  }
  deconnexion($con);
  }
/***Chercher une intervention ***/
  function searchInterventions($mot){
    $requete ="select * from intervention where description like '%".$mot."%' or dateinter like '%".$mot."%' or prix like '%".$mot."%' or idvehicule like '%".$mot."%' or idtechnicien like '%".$mot."%';";
    $con=connexion();
    if($con){
      $lesInterventions = mysqli_query($con, $requete);
    }
    else{
      return null;
    }
    deconnexion($con);
    return $lesInterventions;
  }

  function  countInterventions(){
    $requete = "select count(*) as nb from intervention;";
    $con=connexion();
    if($con){
      $resultat = mysqli_query($con, $requete);
      $nb=mysqli_fetch_assoc($resultat);
    }
    else{
      return null;
    }
    deconnexion($con);
    return $nb["nb"];
  }

  /*********** Fonction User ************/
  function selectUser($email, $mdp){
    $requete = "select * from user where email='" .$email."' and mdp='".$mdp."';";
    $con=connexion();
    if($con){
      $resultat = mysqli_query($con, $requete);
      $unUser=mysqli_fetch_assoc($resultat);
    }
    else{
      return null;
    }
    deconnexion($con);
    return $unUser;
  }
?>
