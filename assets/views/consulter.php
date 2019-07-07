<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
        <?php if(isset($_GET['code'])) {
        $codeConsultation = mysqli_real_escape_string($connect,$_GET['code']);
        $codeConsultation = (int) $codeConsultation;
        $sql = "SELECT * ";
        $sql .="FROM patient,medecin,consultation,service ";
        $sql .="WHERE medecin.codeService = service.codeService ";
        $sql .="AND consultation.IP = patient.IP ";
        $sql .="AND consultation.codeMedecin = medecin.codeMedecin ";
        $sql .="AND consultation.numeroConsultation = '".$codeConsultation."' ";
        $result = $connect->query($sql);
        $Consultation = $result->fetch_assoc()
           // print_r($Consultation);
        ?>
        <h2>Bonjour <?=$Consultation['nomPatient']." ".$Consultation['prenomPatient']?></h2>
        <h2>Votre code de suivie est: <a href="http://<?=$options['home']?>/index.php?page=consulter&code=<?=$codeConsultation?>"><span class="text-success" ><?=$codeConsultation?></span></a></h2>
        
        
        <?php }else{ ?>
<form action="http://<?=$options['home']?>/index.php" method="GET">
    <h2>Entrer votre code de suivie</h2>
    <input name="page" value="consulter" type="hidden" >
    <input name="code" type="text" class="form-control" >
    <button type="submit" class="btn btn-primary">Rechercher.</button>
</form>
        <?php } ?>
        
        </div>
    </div>
</div>
<!-- TODO 


consulter ....

JournalClinique .....

liste des medecins khashom ykono selon le service
Ajouter medecin, 
supprimer medecin, modifier, 
confirmer consultation ... (confirmation dnc ndiro Journal)
annuler consultation ... (motif d'annulation)




 -->