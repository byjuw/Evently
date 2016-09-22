<div class="container">
	<div id="calendrier">
		<div id="titreCalendrier">
			<h1><span id="moisG" class="glyphicon glyphicon-arrow-left navMois" aria-hidden="true" onclick="affichemois();moisG(-1)"></span>
			<script type="text/javascript">affichemois()</script><span class="glyphicon glyphicon-arrow-right navMois" aria-hidden="true"></span></h1>
		</div>
		    <script type="text/javascript">calendrier()</script>
		<!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <form class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Création d'évènement</h4>
              </div>

              <div class="modal-body">
            <div class="form-group">
              <label for="name">Nom</label>
                <input type="text" class="form-control" id="name" placeholder="Entré un nom de l'évènement">
            </div>

            <div class="form-group">
              <label for="lieu">Lieu</label>
                <input type="text" class="form-control" id="lieu" placeholder="Entrer un endroit">
            </div>

            <div class="form-group">
              <label for="datetime">Heure de début / Heure de fin</label>
                <input type="text" class="form-control" id="datetime" placeholder="Exemple: 12:42 // 16/42">
            </div>

            <div class="form-group">
              <label for="description">Description</label>
              <textarea name="description" class="form-control" rows="3" placeholder="Description de l'évènement"></textarea>
            </div>

              <div class="form-group">
              <label for="organisme">Organisme organisateur</label>
                <input type="text" class="form-control" id="organisme" placeholder="Entré un nom d'organisme-entreprise organisateur">
            </div>

            <div class="form-group">
              <label for="co_organisateur">Co-organisateur</label>
                <input type="text" class="form-control" id="co_organisateur" placeholder="Co-organisateur">
            </div>

            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
            Public
              </label>
            </div>

            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            Privé
              </label>
            </div>

              </div>
              <div class="modal-footer">
            <input name="resetform" type="reset" class="btn btn-default" value="Réinitialiser">
            <button type="submit" class="btn btn-primary">Envoyer</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>