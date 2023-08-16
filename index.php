<?php

include './gestion_eleve/eleve.php';

$nom = readline("Veuillez entrer le nom de l'élève : ");
$i = 1;

$nombreDeNotes = readline("Combien de notes : ");
$listNote = [];
while ($i <= $nombreDeNotes) {
    $note = readline("Veuillez insérer la note numéro " . $i . " : ");
    array_push($listNote, $note);
    $i++;
}

$moyenne = array_sum($listNote)/$nombreDeNotes;
echo ($nom . " a une moyenne de " . $moyenne . " !");
