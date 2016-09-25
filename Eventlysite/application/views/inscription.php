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
  echo form_open('validinscription');
?>

<div id="fondform" class="row">
<h1>Inscription</h1>
  <form method="post" action="controllers/validinscription/">
    <div class="form-group">
      <label for="nom">Nom *</label>
      <input type="text" class="form-control" id="nom" placeholder="Nom" value="<?php echo set_value('nom'); ?>">
      <div class="errorForm"><?php echo form_error('nom'); ?></div>
    </div>
    <div class="form-group">
      <label for="prenom">Prénom *</label>
      <input type="name" class="form-control" id="prenom" placeholder="Prénom" value="<?php echo set_value('prenom'); ?>">
      <div class="errorForm"><?php echo form_error('prenom'); ?></div>
    </div>
    <div class="form-group">
      <label for="email">Email *</label>
      <input type="email" class="form-control" id="email" placeholder="Email" value="<?php echo set_value('email'); ?>">
      <div class="errorForm"><?php echo form_error('email'); ?></div>
    </div>
    <div class="form-group">
      <label for="password">Mot de passe *</label>
      <input type="password" class="form-control" id="password" placeholder="Mot de passe">
      <div class="errorForm"><?php echo form_error('password'); ?></div>
    </div>
    <div class="form-group">
      <label for="passconf">Confirmer le mot de passe *</label>
      <input type="password" class="form-control" id="passconf" placeholder="Confirmer le mot de passe">
      <div class="errorForm"><?php echo form_error('confpass'); ?></div>
    </div>
    <div class="form-group">
      <label for="organisme">Organisme</label>
      <input type="text" class="form-control" id="organisme" placeholder="Entreprise ou association" value="<?php echo set_value('organisme'); ?>">
    </div>
    <div class="form-group">
      <label for="profession">Profession</label>
      <input type="text" class="form-control" id="profession" placeholder="Métier" value="<?php echo set_value('profession'); ?>">
    </div>
    <div class="form-group">
      <label for="telephone">Numéro de téléphone</label>
      <input type="text" class="form-control" id="telephone" placeholder="42 42 42 42 42" value="<?php echo set_value('telephone'); ?>">
    </div>
    <div id="oblig"><p>* Champs obligatoires</p></div>
    <div id="bouton">
      <button type="reset" class="btn btn-default">Réinitialiser</button>
      <button type="submit" class="btn btn-default">Envoyer</button>
    </div>
  </form>
  <?php  echo form_close(); ?>
</div>
</body>
</html>