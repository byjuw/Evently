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

<div id="fondform">

<h1>Connexion</h1>

<form class="form-horizontal">
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" placeholder="Adresse Email">
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-2 control-label">Mot de passe</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" placeholder="Entrer mot de passe">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Se souvenir de moi
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Valider</button>
    </div>
  </div>
</form>
</div>
</body>
</html>