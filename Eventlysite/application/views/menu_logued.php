<nav class="navbar navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url(); ?>"><img id="logo_blanc" src="<?php echo base_url(); ?>assets/img/logo_blanc.png"></a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    <ul class="nav navbar-nav navbar-right">
		    <?php var_dump($_SESSION['id']);?>
	    		<li><a href="#"><?php echo $_SESSION['id']; ?></a></li>
	    		<li><a href="<?php echo base_url(); ?>user/logout">Déconnexion</a></li>
	    	</ul>
	    </div>
	</div>
</nav>