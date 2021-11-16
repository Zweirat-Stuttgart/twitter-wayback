<html>
<head>
<title>Twitter Wayback Machine</title>
</head>
<body>
<?php 

$twitter_Name = $_POST["username"];
if (is_string($twitter_Name) AND strlen($twitter_Name) > 0 AND strlen($twitter_Name)<20)
	{
	print $twitter_Name;
	}
else
	{
	die ("na, no valid twitter name!");
	}

$offset = $_POST["daysoffset"];
if (is_numeric($offset))
	{
	print " mit dem Offset: " . $offset. " Tag(e)<br>\n";
	}
else
	{
	die ("not a proper offset!");
	}

// print "lower: ". $offsetdatePlus ." and upper:" . $offsetdateMinus;

$todaysday = date("d");
$todaysmonth = date("m");
$todaysyear = date("Y");

$offsetdatePlus=date('U', strtotime("-". ($offset-1) ." days"));
$offsetdateMinus=date('U', strtotime("-". ($offset+1) ." days"));

/*print "date: " . $offsetdatePlus ."<br>";
print "Plus: " . date("U", strtotime("+".$offset." days")) . "<br>\n";
print "Minus: " . date("U", strtotime("-".$offset." days")) . "<br>\n";*/
/*print "<br>Plus: " . strtotime("+".$offset." days") . "<br>\n";
print "Minus: " . strtotime("-".$offset." days") . "<br>\n";*/
$todaysdayPlus = date("d", $offsetdatePlus);
$todaysdayMinus = date("d", $offsetdateMinus);
$todaysmonthPlus = date("m", $offsetdatePlus);
$todaysmonthMinus = date("m", $offsetdateMinus);
$todaysyearPlus = date("Y", $offsetdatePlus);
$todaysyearMinus = date("Y", $offsetdateMinus);

$searchstring = $searchstring . "(since:".$todaysyearMinus."-".$todaysmonthMinus."-".$todaysdayMinus." until:".$todaysyearPlus."-".$todaysmonthPlus."-".$todaysdayPlus.")\n";

print "<br><br><a href=\"https://twitter.com/search?q=from:".$twitter_Name. " ". $searchstring ."&src=typd&f=live\" target=\"_blank\">Klick den Link f&uuml;r den ".($todaysdayMinus+1) .".". $todaysmonthMinus .".". $todaysyearMinus."</a>\n";

?>
</body>
</html>