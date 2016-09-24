<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

	<title>Evently</title>

  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <link rel="stylesheet" type="text/css" href="assets/css/inscription.css">
</head>

<body>
<?php 
	include("menu.php");
?>
<div id="fondform" class="row">
<h1>Inscription</h1>
  <form method="post" action="">
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
      <input type="password" class="form-control" id="confirmpassword" placeholder="Confirmer le mot de passe">
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
    <div id="bouton">
      <button type="reset" class="btn btn-default">Réinitialiser</button>
      <button type="submit" class="btn btn-default">Envoyer</button>
    </div>
  </form>
</div>
</body>
</html>