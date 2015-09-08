<?php

$veza = new PDO("mysql:dbname=wt;host=localhost;charset=utf8", "wtuser", "wtpass");
$veza->exec("set names utf8");

$upit = $veza->prepare("select id, novost,tekst, autor, UNIX_TIMESTAMP(vrijeme) vrijeme2, email from komentari order by vrijeme asc");
$upit->execute();
if (!$upit) {
		$greska = $veza->errorInfo();
		print "SQL greška: " . $greska[2];
		exit();
		}

//foreach ($upit->fetchAll() as $novosti)
print "{ \"komentari\": " . json_encode($upit->fetchAll()) . "}";
?>