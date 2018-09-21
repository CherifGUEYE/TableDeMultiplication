<?php

$table = $_POST['table'] ;
$aleatoire = rand(1,10);
$solution =  $table*$aleatoire;

echo  "Combien vaut ". $table . "X" . $aleatoire . " ?"  ;
	


/*		echo "Table de multiplication".$i.'<br>';

echo $i."x".$j."=".$r.'<br>';*/

?>

<form action="reponse.php" method="post">
	
<label>Votre réponse :</label><input type="text" name="reponse">
<input type="hidden" name="solution" value="<?php echo $solution ; ?>">
<input type="submit" name="valider" value="valider">


</form>