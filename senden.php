<?php
$to = "info@carboland.de";
$extra = "Von: ".$_POST['email']."\r\nReply-To: ".$_POST['email']."\r\n";
$subject = "Nachricht von ".$_POST['name']."";
$mess = "Name und Nachname: ".$_POST['name']."\nE-mail: ".$_POST['email']."\nTelefon: ".$_POST['telefon']."\nGegenstand: ".$_POST['gegenstand']."\nNachricht:\n".$_POST['text']."";
mail ($to, $subject, $mess, $extra);
?>
<html><head>
<meta http-equiv="refresh" content="0; url=request#contact">
<title>Weiterleitung...</title>
</head><body></body></html>