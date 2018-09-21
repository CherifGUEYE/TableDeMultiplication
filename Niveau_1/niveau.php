<?php
$p=$_POST['table'];
echo 'table de multiplication'.$p.'<br>';
for($i=0;$i<=10;$i++)
{
	echo $p.'x'.$i.'='.$p*$i.'<br>';
}
?>