
<div class="main main-raised">
  <div class="container">
    <div class="section text-center">
      <h2 class="title">Consultation medicale</h2>
      <h3 class="title">Vous êtes:</h3>
    <div class="row">
  <div class="col-md-6">
      <div class="card">
          <div class="card-header card-header-icon card-header-rose">
            <div class="icon">
              <h3><i class="fas fa-user-injured"></i></h3>
              <h4>PATIENT</h4>
            </div>
          </div>
          <div class="card-body">
              <h4 class="card-title">Vous êtes patient?</h4>
                  Vous pouvez demander un <i>rendez-vous</i> par remplir le formulaire suivant, et consulter le medecin.
                    <div>
                        <a class="btn btn-primary btn-round" href="http://<?=$options['home']?>/index.php?page=RV">
                        <i class="material-icons">list_alt</i> Rendez-vous
                        </a>
                        <a class="btn btn-primary btn-round" href="http://<?=$options['home']?>/index.php?page=consulter">
                        <i class="material-icons">search</i> Consulter
                        </a>
                    </div>
          </div>
      </div>
  </div>

  <div class="col-md-6">
      <div class="card">
          <div class="card-header card-header-text card-header-primary">
            <div class="icon">
            <h3><i class="fa fa-stethoscope"></i></h3>
              <h4>MEDECIN</h4>
          </div>
          </div>
          <div class="card-body">
              <h4 class="card-title">Vous êtes médecin?</h4>
                  Vous pouvez consulter les patients.
                    <div>
                        <a href="http://<?=$options['home']?>/index.php?page=consultations&filter=Attente" class="btn btn-primary btn-round">
                        <i class="fas fa-list"></i> liste des rendez-vous en attente
                        </a>
                    </div>
          </div>
      </div>
  </div>
</div>
    </div>
  </div>
</div>