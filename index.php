<?php


//$allTasks = array_map('str_getcsv', file('data.csv'));



$toutesLesTaches=array();
$row = 1;
if (($file = fopen("data.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($file)) !== FALSE) {
        $num = count($data);
        //$toutesLesTaches[]=$row;
        //echo "<p>  tache $row: </p>";
        $row++;
        $onTask = [];
        for ($c=0; $c < $num; $c++) {
            //echo $data[$c] . " ";
            $onTask[] = $data[$c];
        }
        $toutesLesTaches[] = $onTask;
        //echo "\n";
    }
    fclose($file);
}

include "page.phtml";
