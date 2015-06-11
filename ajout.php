<?php 

var_dump($_POST);

$data = array();

if (empty($_POST)!==true){
				echo "tous les champs existent";
				}
if (empty($_POST['titre'])!==true && empty($_POST['description'])!==true){
		echo "titre existe";
		$date = $_POST['jour']."-".$_POST['mois']."-".$_POST['annee'];
		echo $date;
		/* this is the same 
		$data= [
							$_POST['titre'],
							$_POST['description'],
							$date,
							$_POST['priorite'],
						];
		that is the same as below      */
		$data[]=$_POST['titre'];
		$data[]=$_POST['description'];
		$data[]=$date;
		$data[]=$_POST['priorite'];

		//print_r($data);
		//var_dump($data);

		$file = fopen("data.csv", "a");
		fputcsv($file,$data);
		fclose($file);
}

header("Location:index.php?success=ok");
die();