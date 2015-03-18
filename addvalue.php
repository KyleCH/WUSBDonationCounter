<?php 

$myfile = fopen("values", "r");
$oldvalue =  fread($myfile,filesize("values"));





// add values
$newamount = $oldvalue + intval($_GET[0]);

$mynewfile = fopen("values", "w");
fwrite($mynewfile, $newamount);



?>
