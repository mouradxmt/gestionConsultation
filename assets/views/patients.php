<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
             <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th class="text-center">#</th>
                        <th></th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Sexe</th>
                        <th>Date de naissance</th>
                        <th>Adresse</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>

                <?php 
                //$sql = "SELECT numeroPatient,nomPatient,prenomPatient,sexePatient,dateNaissancePatient,nomService,etatPatient,nomMedecin,datePatient,journalClinique ";
                $sql = "SELECT * ";
                $sql .="FROM patient ";
                $result = $connect->query($sql);
                      while($Patient = $result->fetch_assoc()) {
                ?>

                      <tr>
                        <td class="text-center"><?=$Patient['IP']?></td>
                        <td class="text-center">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" checked>
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td><?=$Patient['nomPatient']?></td>
                        <td><?=$Patient['prenomPatient']?></td>
                        <td><?php sexeIco($Patient['sexePatient']); ?></td>
                        <td><?=$Patient['dateNaissancePatient']?></td>
                        <td><?=$Patient['adressePatient']?></td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" class="btn btn-danger btn-just-icon btn-sm">
                            <i class="material-icons">close</i>
                          </button>
                        </td>

                      </tr>
                    <?php } ?>
                      
                    </tbody>
                  </table>
                           
                </div>
        </div>
    </div>
</div>
