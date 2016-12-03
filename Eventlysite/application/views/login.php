<!DOCTYPE html>
<html>
<head>
  <title>Evently</title>
</head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/inscription.css">
<body>
<?php 
  include("menu.php");
  echo form_open('user/login');
?>
  <div id="fondform" class="row">
  <h1>Connexion</h1>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Adresse Email">
  </div>
  <div class="form-group">
    <label for="password">Mot de passe</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Entrer mot de passe">
  </div>
  <div class="form-group">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Se souvenir de moi
        </label>
      </div>
  </div>
  <div class="form-group">
      <button type="submit" class="btn btn-default">Valider</button>
  </div>
<?php
  echo form_close();
?>
</div>
</body>
</html>