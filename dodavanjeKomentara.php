<?php
		function test_input($data) 
      {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
      }
	  
	 $email=""; 
	  
	  if($_SERVER["REQUEST_METHOD"] == "POST"){
	  
	$autor = test_input($_POST["autor"]);
    $email = test_input($_POST["email"]);
    $poruka = test_input($_POST["poruka"]);
	$id = test_input($_POST["id"]);
	
	
	$veza = new PDO("mysql:dbname=wt;host=localhost;charset=utf8", "wtuser", "wtpass");
	$veza->exec("set names utf8");
	 $rezultat = $veza->query("INSERT INTO komentari SET novost=".$id.", tekst='".$poruka."', autor='".$autor."', email='".$email."'");
	 if (!$rezultat) {
		$greska = $veza->errorInfo();
		print "SQL greška: " . $greska[2];
		exit();
	}
	
}

?>