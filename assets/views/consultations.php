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
                        <th>Service</th>
                        <th>Etat</th>
                        <th>Date de consultation</th>
                        <th>Médecin</th>
                        <th>Journal Clinique</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>

                <?php 
                //$sql = "SELECT numeroConsultation,nomPatient,prenomPatient,sexePatient,dateNaissancePatient,nomService,etatConsultation,nomMedecin,dateConsultation,journalClinique ";
                $sql = "SELECT * ";
                $sql .="FROM patient,medecin,consultation,service ";
                $sql .="WHERE medecin.codeService = service.codeService ";
                $sql .="AND consultation.IP = patient.IP ";
                $sql .="AND consultation.codeMedecin = medecin.codeMedecin ";
                if(isset($_GET['filter']) && $_GET['filter']=="Attente"){
                  $sql .="AND consultation.etatConsultation = 'Attente' ";
                }
                $result = $connect->query($sql);
                
                             // output data of each row
                    while($Consultation = $result->fetch_assoc()) {
                ?>

                      <tr>
                        <td class="text-center"><?=$Consultation['numeroConsultation']?></td>
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
                        <td><?=$Consultation['nomPatient']?></td>
                        <td><?=$Consultation['prenomPatient']?></td>
                        <td><?php sexeIco($Consultation['sexePatient']); ?></td>
                        <td><?=$Consultation['dateNaissancePatient']?></td>
                        <td><?=$Consultation['nomService']?></td>
                        <td><?=$Consultation['etatConsultation']?></td>
                        <td><?=$Consultation['dateConsultation']?></td>
                        <td><?=$Consultation['nomMedecin']?></td>
                        <td>
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#JCModal" data-nomprenom="<?=$Consultation['nomPatient']." ".$Consultation['prenomPatient']?>" data-JC="<?=$Consultation['journalCliniqueConsultation']?>"><i class="material-icons">pageview</i></button>
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" class="btn btn-info btn-just-icon btn-sm">
                            <i class="material-icons">person</i>
                          </button>
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

<div id="JCModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="JCModalTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="JCModalTitle">Bonsoir</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    .... 
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <script>
$('#JCModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var nom = button.data('nomprenom')
  var JC = button.data('JC')
  var modal = $(this)
  modal.find('.modal-title').text(nomprenom)
  modal.find('.modal-body').text(JC)
})
</script>