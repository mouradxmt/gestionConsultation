<nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg"  color-on-scroll="100">
 
<div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="http://localhost/gestionconsultation/index.php?page=home">
          CHU - Consultation medicale</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="http://<?=$options['home']?>/index.php?page=medecins" class="nav-link">
                  <i class="material-icons">list_alt</i> Médecins
              </a>
            </li>

            <li class="nav-item">
              <a href="http://<?=$options['home']?>/index.php?page=patients" class="nav-link">
                  <i class="material-icons">list_alt</i> Patients
              </a>
            </li>

            <li class="nav-item">
              <a href="http://<?=$options['home']?>/index.php?page=consultations" class="nav-link">
                  <i class="material-icons">list_alt</i> Consultations
              </a>
            </li>

            <li class="nav-item">
              <a href="http://<?=$options['home']?>/index.php?page=services" class="nav-link">
                  <i class="material-icons">list_alt</i> Services
              </a>
            </li>

          </ul>
      </div>
  </div>
</nav>