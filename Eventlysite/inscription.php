<!DOCTYPE html>
<html>
<head>
	<title>Evently</title>
</head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/inscription.css">

<body>
<?php 
	include("menu.php");
?>
<div id="fondform" class="row">
<h1>Inscription</h1>
  <form>
    <div class="form-group">
      <label for="name">Nom</label>
      <input type="text" class="form-control" id="name" placeholder="Nom">
    </div>
    <div class="form-group">
      <label for="prenom">Prénom</label>
      <input type="name" class="form-control" id="prenom" placeholder="Prénom">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Email">
    </div>
    <div class="form-group">
      <label for="password">Mot de passe</label>
      <input type="password" class="form-control" id="password" placeholder="Mot de passe">
    </div>
    <div class="form-group">
      <label for="confirmpassword">Confirmer le mot de passe</label>
      <input type="password" class="form-control" id="confirmpassword" placeholder="Mot de passe">
    </div>
    <div class="form-group">
      <label for="organisme">Organisme</label>
      <input type="text" class="form-control" id="organisme" placeholder="Entreprise ou association">
    </div>
    <div class="form-group">
      <label for="profession">Profession</label>
      <input type="text" class="form-control" id="profession" placeholder="Métier">
    </div>
    <div class="form-group">
      <label for="numtel">Numéro de téléphone</label>
      <input type="text" class="form-control" id="numtel" placeholder="42 42 42 42 42">
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox"> Se souvenir de moi
      </label>
    </div>
    <div id="bouton">
      <button type="reset" class="btn btn-default">Réinitialiser</button>
      <button type="submit" class="btn btn-default">Envoyer</button>
    </div>
  </form>
</div>
</body>
</html>