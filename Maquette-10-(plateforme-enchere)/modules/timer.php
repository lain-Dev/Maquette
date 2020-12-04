<?php
?>
<script>
    var timer = setInterval(function countDown() {
    var tempAct = new Date(); //On recupere la date UNIX
    var heure = Math.floor(tempAct.getTime() / 1000); //On transforme la date en secondes depuis la date fixe UNIX
    var timeRemaining = <?php echo $items['date_fin']?> - heure; //On compare les secondes depuis date fixe UNIX PHP à JS
    var hoursRemaining = parseInt(timeRemaining / 3600); // conversion en heures
    var minutesRemaining = parseInt((timeRemaining % 3600) / 60); // conversion en minutes
    var secondsRemaining = parseInt((timeRemaining % 3600) % 60); // conversion en secondes
    //On attribue l'id de l'enchere dans la zone où il y a le timer et on dit que l'on souhaite afficher le timer
    document.getElementById('<?= $items['id'] ?>').innerHTML = hoursRemaining + ' h : ' + minutesRemaining + ' m : ' + secondsRemaining + ' s ';
    if (timeRemaining <= 0) {//Sinon on met expire et on desactive le bouton encherir
        document.getElementById('<?= $items['id'] ?>').innerHTML = "EXPIRE";
        document.getElementById('_<?= $items['id'] ?>').setAttribute('disabled', ''); // Bouton disabled quand temps expiré
        document.getElementById('_<?= $items['id'] ?>').classList.remove('btn-listEnchere');
        document.getElementById('_<?= $items['id'] ?>').classList.add('btn-listEnchere2');
    }
}, 1000); // répéte la fonction toutes les 1 seconde
</script>
<?php
?>