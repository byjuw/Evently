<div class="container">
  <div id="calendrier">
    <div id="titreCalendrier">
      <h1>
        <span class="glyphicon glyphicon-arrow-left navMois" aria-hidden="true" onclick="index--;calendrier(index);"></span>
        <span id="moisAn" onclick="index=0;calendrier(0);"></span>
        <span class="glyphicon glyphicon-arrow-right navMois" aria-hidden="true" onclick="index++;calendrier(index);"></span>
      </h1>
    </div>
    <div id="bodyCalendrier">
    <?php var_dump($event); ?>
      <script type="text/javascript">calendrier(0);</script>
    </div>
		<!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Création d'évènement</h4>
          </div>

          <div class="modal-body">
            <div class="form-group">
              <?php 
                echo form_open('ajoutevent');

                echo form_label('Nom', 'name');

                $name = array(
                  'type' => 'text', 
                  'name' => 'nom', 
                  'id' => 'nom', 
                  'class' => 'form-control',
                  'placeholder' => 'Le nom de l\'évènement', 
                  'value' => set_value('nom') 
                );

                echo form_input($name);
              ?>
            </div>

            <div class="form-group">
              <?php
                echo form_label('Lieu', 'lieu');

                $lieu = array(
                  'type' => 'text', 
                  'name' => 'lieu', 
                  'id' => 'lieu', 
                  'class' => 'form-control',
                  'placeholder' => 'Le lieu de l\'évènement', 
                  'value' => set_value('lieu') 
                );

                echo form_input($lieu);
              ?>
            </div>

            <div class="form-group">
              <?php 
                echo form_label('Heure de l\'évènement', 'heure');

                $heure = array(
                  'type' => 'text', 
                  'name' => 'heure', 
                  'id' => 'heure', 
                  'class' => 'form-control',
                  'placeholder' => 'L\'heure de l\'évènement', 
                  'value' => set_value('heure') 
                );

                echo form_input($heure);
              ?>
            </div>

            <div class="form-group">
              <?php
                echo form_label('Description', 'description');

                $description = array(
                  'type' => 'textarea', 
                  'name' => 'description', 
                  'id' => 'description', 
                  'class' => 'form-control',
                  'placeholder' => 'Description de l\'évènement',
                  'cols' => '10',
                  'rows' => '5',
                  'value' => set_value('description') 
                );

                echo form_textarea($description);
              ?>
            </div>

            <div class="form-group">
              <?php
                echo form_label('Organisme organisateur', 'organisme');

                $organisme = array(
                  'type' => 'text', 
                  'name' => 'organisme', 
                  'id' => 'organisme', 
                  'class' => 'form-control',
                  'placeholder' => 'L\'organisme qui organise l\'évènement', 
                  'value' => set_value('organisme') 
                );

                echo form_input($organisme);                
              ?>
            </div>

            <div class="form-group">
              <?php
                echo form_label('Co-organisateur', 'organisateurs');

                $organisateurs = array(
                  'type' => 'text', 
                  'name' => 'organisateurs', 
                  'id' => 'organisateurs', 
                  'class' => 'form-control',
                  'placeholder' => 'Co-organisateur', 
                  'value' => set_value('organisateurs') 
                );
                
                echo form_input($organisateurs);
              ?>
            </div>

            <tr>
              <td>
                <?php echo form_label('Public', 'radiopublic'); ?>                  
              </td>
              <td>
                <?php 
                  $public = array(
                    'name'          => 'confidentialite',
                    'id'            => 'radiopublic',
                    'value'         => 0,
                    'checked'       => TRUE
                  );

                  echo form_radio($public);
                ?>
              </td>
            </tr>
            <tr>
              <td>
                <?php echo form_label('Prive', 'radioprive'); ?>
              </td>
              <td>
                <?php 
                  $prive = array(
                    'name'          => 'confidentialite',
                    'id'            => 'radioprive',
                    'value'         => 1,
                    'checked'       => False
                  );
                  echo form_radio($prive);
                ?>
              </td>
            </tr>
          </div>
          <div class="modal-footer">
            <?php
              $reset = array(
                'type' => 'reset', 
                'name' => 'reset',
                'class' => 'btn btn-default',
                'value' => 'Réinitialiser' 
              );
              
              echo form_input($reset);

              $envoi = array(
                'type' => 'submit', 
                'name' => 'envoi',
                'class' => 'btn btn-primary',
                'value' => 'Valider' 
              );

              echo form_submit($envoi);

              echo form_close();
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>