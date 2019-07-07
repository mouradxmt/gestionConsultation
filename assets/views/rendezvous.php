
<div class="main main-raised">
  <div class="container">
    <div class="section text-center">
<form action="assets/forms/createRV.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputNom">Nom</label>
      <input type="text" class="form-control" id="inputNom" name="Nom" placeholder="Nom">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPrenom">Prenom</label>
      <input type="text" class="form-control" id="inputPrenom" name="Prenom" placeholder="Prenom">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" name="Adresse" placeholder="1234 Main St">
  </div>
  <div class="form-group col-md-6">
      <label for="inputDateN">Date de Naissance</label>
      <input type="date" class="form-control datepicker" id="inputDateN" name="DateN">
    </div>
  </div>
<div class="form-row">
    <div class="form-group col-md-3">
    <label for="inputSexe">Sexe</label>
      <select name ="Sexe" id="inputSexe" class="form-control selectpicker" data-style="btn btn-link">
        <option value="H">Homme</option>
        <option value="F">Femme</option>
      </select>
    </div>
    <div class="form-group col-md-3">
    <label for="inputService">Service</label>
      <select name ="Service" id="inputService" class="form-control selectpicker" data-style="btn btn-link">
    <?php       $sql = "SELECT * ";
                $sql .="FROM service";
                $result = $connect->query($sql);
                    while($service = $result->fetch_assoc()) {
                ?>
        <option value="<?=$service['codeService']?>"><?=$service['nomService']?></option>
                    <?php } ?>
      </select>
    </div>
    <div class="form-group col-md-3">
    <label for="inputMedecin">Medecin</label>
      <select name ="Medecin" id="inputMedecin" class="form-control selectpicker" data-style="btn btn-link">
    <?php       $sql = "SELECT * ";
                $sql .="FROM medecin";
                $result = $connect->query($sql);
                    while($medecin = $result->fetch_assoc()) {
                ?>
        <option value="<?=$medecin['codeMedecin']?>"><?=$medecin['nomMedecin']." ".$medecin['prenomMedecin']?></option>
                    <?php } ?>
      </select>
    </div>
  
  </div>
  <div class="form-group">
  vous avez dèjà demander un rendez-vous ? <a href="http://<?=$options['home']?>/index.php?page=consulter" class="btn btn-success  btn-sm">verifier l'état.</a>
  </div>
  <button type="submit" class="btn btn-primary">Demander un rendez-vous.</button>
</form>
</div>
</div>
</div>
                  