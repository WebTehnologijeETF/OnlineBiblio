<?php

$veza = new PDO("mysql:dbname=wt;host=localhost;charset=utf8", "wtuser", "wtpass");
$veza->exec("set names utf8");

$upit = $veza->prepare("select id, naslov, autor, tekst, opsirno, UNIX_TIMESTAMP(vrijeme) vrijeme2, slika from novosti order by vrijeme desc");
$upit->execute();
if (!$upit) {
		$greska = $veza->errorInfo();
		print "SQL greška: " . $greska[2];
		exit();
		}

//foreach ($upit->fetchAll() as $novosti)
print "{ \"novosti\": " . json_encode($upit->fetchAll()) . "}";
?>

