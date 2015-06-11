<?php


$_POST = array_merge($_POST);

$allTasks = array_map('str_getcsv', file('data.csv'));

for ($i=0; $i < count($_POST); $i++){
        if (isset($_POST[$i]))
        {
            unset($allTasks[$_POST[$i]]);  
        }
}

var_dump($allTasks);
$allTasks = array_merge($allTasks);

$file = fopen("data.csv", "w");
for ($i=0; $i < count($allTasks); $i++){
    fputcsv($file,$allTasks[$i]);
}
fclose($file);

// Ouvrir le fichier en écriture et supprimer tout le contenu du fichier
// Parcourir $toutesLesTaches
    // Utiliser fputcsv -> un tableau
    // $toutesLesTaches[0]
    // $toutesLesTaches[1]
// Fermer le fichier

header("Location:index.php");
die();

