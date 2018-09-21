<?php

if (isset($_POST['checkbox']))
{
	foreach ($_POST['checkbox'] as $i)
	 {
		echo "Table de multiplication".$i.'<br>';
		for ($j=0; $j <=10 ; $j++)
		 { 
			$r=$i*$j;
			echo $i."x".$j."=".$r.'<br>';
		}
	}
}
/*AUTRE METHODE

 for ($i=0;$i<=10;$i++)
    {
    	if(isset($_POST['check_'.$i])){
    		echo "Table de multiplication de ".$i." <br>";
    		for($j=0;$j<=10;$j++)
			 {
			  $r=$i*$j;
			  echo $i."x".$j. "=".$r .'<br>';
			 }
			 echo '<br>';
    	}
    }*/

?>