<?php
  $langages =["banane", "fraise", "mangue", "pomme", "banane", "fraise", 
"guoyave"];
  // Supprimer les doublons
  $doublons = array_unique($langages);
  print_r($doublons);
?>

<?php
 // La rotation d'un tableau
$tableau = [2,8,6,9,18,3,5];
$rotation = array_slice($tableau,3,6);
print_r($rotation);
?>

<?php
 // éléments communs aux deux tableaux d'entiers
 $tableau1 = [2,4,6,8,7,12,25];
 $tableau2 = [2,4,6,8,30,55,65,15];
$result = array_intersect($tableau1,$tableau2);
print_r($result);
?>

<?php
 // compte le nombre d'éléments qui n'ont pas de doublons.
 $tab1 = [5,8,9,6,7,2,1,0,5,2,8,0];
 $elements = array_count_values($tab1);
 print_r($elements);
?>

<?php
 // calcul la médiane
$tab = [2,6,8,6,12,24];
if (count($tab)%2 == 0){
    $mediane = count($tab) / 2;
    print_r($mediane);
} else {
    $mediane = count($tab) / (2 - 1) + (count($tab) / 2) / (2.0);
   print_r($mediane);
}
?>

<?php
 // creer une nouvelle chaine en concaténant tous les elements
 $phrase = ["Bonjour ","Jean ","comment ça va ",];
 $resultat = implode($phrase);
 echo $resultat;
?>
