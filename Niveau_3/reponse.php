<?php



$reponse = $_POST["reponse"];
$solution = $_POST["solution"];

if($reponse==$solution)
{
echo"vous avez gagné : ".$solution;
}
else{
echo"vous avez perdu, la réponse était : ".$solution;
echo "<br><br><a href='index.php'>retour</a>";
}


?>