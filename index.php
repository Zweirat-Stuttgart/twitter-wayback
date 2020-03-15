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
<form action="twitter-search.php" method="post">
Twitter-Username: <input type="text" name="username"><br>
<input type="submit" value="Submit"><br><br>
Anzahl der Tage vor und nach heute (<?php print date("d.m.");?>):<br>
<input type="radio" name="dateoffset" value="1" checked>+/- ein Tag<br> 
<input type="radio" name="dateoffset" value="3">+/- drei Tage<br> 
<input type="radio" name="dateoffset" value="7">+/- eine Woche<br> 
</form>
<i>Wir wissen, was Du letztes Jahr getwittert hast!</i>
<br><br>
<p>P.S. Nat&uuml;rlich gibt es noch so eine Datenschutz-Info:<br>
Hier wird nichts gespeichert! Alle Daten, die Du hier eingibst, sind f&uuml;r uns nicht einsehbar.</p><br>
<p>P.P.S: Und noch ein Hinweis:<br>
Dieses kleine Projekt ist &ouml;ffentlich, kann von jeder:m weiterbearbeitet oder auch einfach nur genutzt werden.<br>
Der Code liegt im GitHub: <a href="https://github.com/mega-stoffel/twitter-wayback" target="_blank">https://github.com/mega-stoffel/twitter-wayback</a></p>
</body>
</html>