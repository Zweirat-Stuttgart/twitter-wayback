<html>
<head>
<title>Twitter Wayback Machine</title>
</head>
<body>
Hallo und willkommen bei unseren kleinen &quot;twitter wayback machine&quot;<br>
Wir haben das zwar schon mal irgendwo gesehen, aber finden es nicht mehr. Also &Auml;rmel hochgekrempelt und schnell selbst so ein Ding erstellen.<br>
<br>Die Frage ist einfach:<br>
Was haben wir (oder jemand anderes) letztes, vorletztes, etc. Jahr an genau diesem Tag getwittert?<br>
Und hier gibt es die Antwort!<br>
<form action="twitter-search_year.php" method="post">
Twitter-Username: <input type="text" name="username"><br>
<input type="submit" value="Submit"><br><br>
Anzahl der Tage vor und nach heute (<?php print date("d.m.");?>):<br>
<input type="radio" name="dateoffset" value="1" checked>+/- ein Tag<br> 
<input type="radio" name="dateoffset" value="3">+/- drei Tage<br> 
<input type="radio" name="dateoffset" value="7">+/- eine Woche<br> 
</form>
<i>Wir wissen, was Du letztes Jahr getwittert hast!</i>
<br><br><hr><br>
Dann gibt es noch den anderen Anwendungsfall: Was haben wir heute vor 100, vor 1000 oder vor X Tagen getwittert?<br>
Und auch hierf&uuml;r gibt es eine Antwort!<br><br>
<form action="twitter-search_days.php" method="post">
Twitter-Username: <input type="text" name="username"><br>
<input type="submit" value="Submit"><br><br>
<input type="radio" name="daysoffset" value="100">vor 100 Tagen<br> 
<input type="radio" name="daysoffset" value="250">vor 250 Tagen<br> 
<input type="radio" name="daysoffset" value="500">vor 500 Tagen<br> 
<input type="radio" name="daysoffset" value="1000" checked>vor 1000 Tagen<br> 
<input type="radio" name="daysoffset" value="1500">vor 1500 Tagen<br> 
<input type="radio" name="daysoffset" value="2000">vor 2000 Tagen<br> 
<!-- first tweet ever: March 21, 2006
<input type="radio" name="daysoffset" min="1" max="5200"> Tagen<br> 
vor <input type="number" name="daysoffset" min="1" max="5200"> Tagen<br>  -->
</form>
Leider gibt es bei Twitter nicht die M&ouml;glichkeit, nach Tweets eines definierten Tages zu suchen. Daher ist bei der Suche +/- ein Tag angegeben.
<br><br>
<p>P.S. Nat&uuml;rlich gibt es noch so eine Datenschutz-Info:<br>
Hier wird nichts gespeichert! Alle Daten, die Du hier eingibst, sind f&uuml;r uns nicht einsehbar.</p><br>
<p>P.P.S: Und noch ein Hinweis:<br>
Dieses kleine Projekt ist &ouml;ffentlich, kann von jeder:m weiterbearbeitet oder auch einfach nur genutzt werden.<br>
Der Code liegt im GitHub: <a href="https://github.com/Zweirat-Stuttgart/twitter-wayback" target="_blank">https://github.com/Zweirat-Stuttgart/twitter-wayback</a></p>
</body>
</html>