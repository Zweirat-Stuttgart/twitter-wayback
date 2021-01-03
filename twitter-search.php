<html>
<head>
<title>Twitter Wayback Machine</title>
</head>
<body>
<?php 
$twitter_Name = $_POST["username"];
print $twitter_Name;
$offset = $_POST["dateoffset"];
print " mit dem Offset: " . $offset. " Tag(e)<br>\n";

$todaysday = date("d");
$todaysmonth = date("m");
$todaysyear = date("Y");

$offsetdatePlus=date('U', strtotime("+".$offset." days"));
$offsetdateMinus=date('U', strtotime("-".$offset." days"));

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

/*if ($todaysyearPlus > $todaysyearMinus)
/{
	$todaysyearPlus++;
}
if ($todaysyearPlus < $todaysyearMinus)
{
	$todaysyearMinus--;
}*/

/*print $todaysdayPlus . "---" . $todaysdayMinus;
print $todaysmonthPlus . "---" . $todaysmonthMinus;
print $todaysyearPlus . "---" . $todaysyearMinus;*/

//it needs a proper limit. The first ever tweet was:
// --> https://twitter.com/jack/status/20 (on March 20th, 2006)
// Issue #1 in the repository.
// quick-and-dirty-fix: change search to start from 2007 instead of 2006.
// This search with FirstYear=2007 does not work in January 2020.

if ($todaysmonth >= 3)
{
	if ($todaysday >=12)
	{
		$firstYear = 2007;
	}
	else
	{
		$firstYear = 2008;
	}
}
else
{
	$firstYear = 2008;
}

if ($todaysday == 1)
{
	$yestermonth = $todaysmonth -1;
	$yesterday = 30;
}
else
{
	$yesterday = $todaysday-1;
	$yestermonth = $todaysmonth;
}
//$startYear = todaysyear-1
for ($yearCounter = $todaysyear-1; $yearCounter>= $firstYear; $yearCounter--)
{
	//print "im YearCounter: " . $yearCounter . "<br>\n";
	$todaysyearMinus--;
	$todaysyearPlus--;
	$searchstring = $searchstring . "(since:".$todaysyearMinus."-".$todaysmonthMinus."-".$todaysdayMinus." until:".$todaysyearPlus."-".$todaysmonthPlus."-".$todaysdayPlus.")\n";
	if ($yearCounter <> $firstYear)
	{
		$searchstring = $searchstring . "OR";
	}
}

print "<br><br><a href=\"https://twitter.com/search?q=from:".$twitter_Name. " ". $searchstring ."&src=typd\" target=\"_blank\">Klick den Link</a>\n";

?>
</body>
</html>
