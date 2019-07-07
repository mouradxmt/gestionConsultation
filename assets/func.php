<?php
function sexeIco($sexe){
    if($sexe=="F")
    echo "<i class=\"fas fa-venus\"></i>";
    elseif($sexe=="H")
    echo "<i class=\"fas fa-mars\"></i>";
    else
    echo "?";

}
?>