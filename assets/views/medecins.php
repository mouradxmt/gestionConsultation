<div class="main main-raised">
    <div class="container">
   
        <div class="section text-center">
        <a href="#" class="btn btn-success" role="button" ><i class="material-icons">add</i>Ajouter medecin</a>
             <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th class="text-center">#</th>
                        <th></th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Service</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>

                <?php 
                $sql = "SELECT * ";
                $sql .="FROM medecin,service WHERE medecin.codeService = service.codeService";
                $result = $connect->query($sql);
                    while($Medecin = $result->fetch_assoc()) {
                ?>

                      <tr>
                        <td class="text-center"><?=$Medecin['codeMedecin']?></td>
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
                        <td><?=$Medecin['nomMedecin']?></td>
                        <td><?=$Medecin['prenomMedecin']?></td>
                        <td><?=$Medecin['nomService']?></td>
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
