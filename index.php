<?php

include './gestion_eleve/eleve.php';

$i = 1;
$nom = readline("Indiquer le nom de l'élève : ");
$nombreDeNotes = intval(readline("Combien de notes : "));
$listNote = [];
while ($i <= $nombreDeNotes) {
    $note = intval(readline("Veuillez insérer la note numéro " . $i . " : "));
    array_push($listNote, $note);
    $i++;
}
$moyenne = array_sum($listNote)/$nombreDeNotes;
$actuelELeve = new eleve ($nom, $listNote , $moyenne , $note, $nombreDeNotes);
echo ($nom . " à pour moyenne " . $moyenne);