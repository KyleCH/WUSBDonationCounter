<?php 

$myfile = fopen("values", "r");
$oldvalue =  fread($myfile,filesize("values"));





// add values
$newamount = $oldvalue + intval($_GET[0]);

$mynewfile = fopen("values", "w");
fwrite($mynewfile, $newamount);



?>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<div style="text-align:center;">
	<a href="http://www.fund-raising-ideas-center.com/" alt="Fundraising Thermometer">
		<img border="0" src="http://thermometer.fund-raising-ideas-center.com/thermometer.php?currency=dollar&goal=75000&current=<?php echo $oldvalue;?>&color=red&size=large">
	</a>

	<p style="font-size:.8em; color:#999">Provided by<a href="http://www.fund-raising-ideas-center.com/" rel="nofollow" style="display:block; text-decoration:none; font-size:.8em; color:#999">Fund-Raising-Ideas-Center.com</a></p>
</div>
