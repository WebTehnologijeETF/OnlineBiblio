<?php
$provjerena=false;
$komentarobrisan=false;
$prolazi=false;
$prazno=false;

		function test_input($data) 
      {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
      }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	
	$idNovosti=$_POST['id'];

	if(isset($_POST['obrisi'.$idNovosti])){
	$veza = new PDO("mysql:dbname=wt;host=localhost;charset=utf8", "wtuser", "wtpass");
	$veza->exec("set names utf8");
	$rezultat = $veza->query("DELETE FROM novosti WHERE id='".$idNovosti."'");
	$rezultat1 = $veza->query("DELETE FROM komentari WHERE novost='".$idNovosti."'");
	if (!$rezultat) {
	$greska = $veza->errorInfo();
	print "SQL greška: " . $greska[2];
	exit();
	}	
	$provjerena=true;
    }
	else if(isset($_POST['izmjena'.$idNovosti]))
	{
		$naslovNovosti1 = "";
		$autorNovosti1 = "";
		$slikaNovosti1 = "";
		$tekstNovosti1 = "";
		$opsirnoNovosti1="";
		
		$naslovNovosti1=test_input($_POST['naslov'.$idNovosti]);
		$autorNovosti1=test_input($_POST['autor'.$idNovosti]);
		$slikaNovosti1=test_input($_POST['slika'.$idNovosti]);
		$tekstNovosti1=test_input($_POST['tekst'.$idNovosti]);
		$opsirnoNovosti1=test_input($_POST['opsirno'.$idNovosti]);
		
		if(empty($naslovNovosti1))
		{
			$prazno=true;
		}
		else if(empty($autorNovosti1))
		{
			$prazno=true;
		}
		else if(empty($slikaNovosti1))
		{
			$prazno=true;
		}
		else if(empty($tekstNovosti1))
		{
			$prazno=true;
		}
		else if(empty($opsirnoNovosti1))
		{
			$prazno=true;
		}
		else
		{
				$konekcija = new PDO("mysql:dbname=wt;host=localhost;charset=utf8", "wtuser", "wtpass");
				$konekcija->exec("set names utf8");
				$povratak = $konekcija->query("UPDATE novosti SET naslov='".$naslovNovosti1."', autor='".$autorNovosti1."', tekst='".$tekstNovosti1."', opsirno='".$opsirnoNovosti1."', slika='".$slikaNovosti1."' WHERE id='".$idNovosti."'");
				if (!$povratak) {
				$greska = $konekcija->errorInfo();
				print "SQL greška: " . $greska[2];
				exit();
				}
				$prolazi=true;
		}
	}
	else{
	$idKomentara=0;
	while(1){

	if(isset($_POST['obrisikomentar'.$idKomentara]))
	{
		$novaveza = new PDO("mysql:dbname=wt;host=localhost;charset=utf8", "wtuser", "wtpass");
		$novaveza->exec("set names utf8");
		$obrisikomentar = $novaveza->query("DELETE FROM komentari WHERE id='".$idKomentara."'");
			if (!$obrisikomentar) {
			$greska = $novaveza->errorInfo();
			print "SQL greška: " . $greska[2];
			exit();
	}
		$komentarobrisan=true;
		break;
	}
	$idKomentara++;
	}
	}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<HEAD>
<TITLE>Online Biblioteka, Online Prodavnica</TITLE>
<link href="stil.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</HEAD>
<BODY>
<div id="kompletna">
	<div id="menu">
	<a onclick="loadPage('index.php')"><img src="Slike/logo.jpg" alt="image"></a>
    	<ul>
            <li><a  onclick="loadPage('index.php')" class="trenutna">Naslovna</a></li>
            <li onmouseover="prikaziMenu();" onmouseout="sakrijMenu();"><a onclick="loadPage('cjenovnik.html')">Pretraga <img src="Slike/strelica.jpg" alt="image"></a>
			<div id="padajuci">
				<a onclick="loadPage('knjige.html')">Roman</a>
				<a onclick="loadPage('knjige.html')">Drama</a>
				<a onclick="loadPage('knjige.html')">Film</a>
				<a onclick="loadPage('knjige.html')">Triler</a>
				<ul><li id="strelicadesno" onmouseover="prikaziPodMenu();" onmouseout="sakrijPodMenu();"><a onclick="loadPage('knjige.html')">Historijski<img src="Slike/strelica2.jpg" alt="image"></a>
				<div id="padajucipodmenu">
				<a onclick="loadPage('knjige.html')">Istiniti</a>
				<a onclick="loadPage('knjige.html')">Fikcija</a>
				</div>
				</li>
				</ul>
				<a onclick="loadPage('knjige.html')">Ljubavni</a>
				<a onclick="loadPage('knjige.html')">Muzika</a>
				<a onclick="loadPage('knjige.html')">Priče</a>
				<a onclick="loadPage('knjige.html')">Horor</a>
				<a onclick="loadPage('knjige.html')">Biografija</a>
				<a onclick="loadPage('knjige.html')">Fantastika</a>
				<a onclick="loadPage('knjige.html')">Naučna Fantastika</a>
			</div>
			</li>
            <li><a onclick="loadPage('knjige.html')">Knjige</a></li>            
            <li><a onclick="loadPage('nova.html')">Nova izdanja</a></li>  
            <li><a onclick="loadPage('cjenovnik.html')">Cjenovnik</a></li> 
            <li><a onclick="loadPage('kontakt.php')">Kontakt</a></li>
    	</ul>
    </div> <!-- Kraj menija -->
	<div id="header">
	
		<div id="Popust">
			<p>
                <span>30%</span> popusta na kupovinu veću od 100 KM!
        	</p>
			<a href="#">Detaljnije...</a>
		</div>
		<div id="Nove_knjige">
        	<ul>
                <li>Hobit: Smaugova pustošenja</li>
                <li>Gospodar prstenova: Povratak kralja</li>
            </ul>
            <a href="#">Detaljnije...</a>
        </div>
				<div id="login">
		<?php 
		session_start();
		
		if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
		?>
		<a onclick="loadPage('adminpanel.php')">Admin Panel</a>
		<a onclick="loadPage('odjava.php')">Odjavite se</a>
		<?php
		}
		else{
		?>
		
		<a onclick="loadPage('prijavaKorisnika.php')">Prijavite se</a>
		
		<?php
		}
		?>
				</div>
				<div id="ex">
		<a href="https://www.facebook.com/anes.luckin" target="_blank"><img src="Slike/fejs.jpg" alt="image"></a>
		<a href="https://plus.google.com/u/0/" target="_blank"><img src="Slike/gmail.jpg" alt="image"></a>
		</div>
    </div>
	<div id="Sadrzaj">
	<div id="Sadrzaj_lijevo">
	        	<div class="Sadrzaj_lijevi_dio">
            	<h1>Kategorije</h1>
                <ul>
				    <li><a onclick="loadPage('knjige.html')">Roman</a></li>
                    <li><a onclick="loadPage('knjige.html')">Drama</a></li>
                    <li><a onclick="loadPage('knjige.html')">Film</a></li>
                    <li><a onclick="loadPage('knjige.html')">Triler</a></li>
                    <li><a onclick="loadPage('knjige.html')">Historijski</a></li>
                    <li><a onclick="loadPage('knjige.html')">Ljubavni</a></li>
                    <li><a onclick="loadPage('knjige.html')">Muzika</a></li>
                    <li><a onclick="loadPage('knjige.html')">Priče</a></li>
                    <li><a onclick="loadPage('knjige.html')">Horor</a></li>
                    <li><a onclick="loadPage('knjige.html')">Biografija</a></li>
					<li><a onclick="loadPage('knjige.html')">Fantastika</a></li>
					<li><a onclick="loadPage('knjige.html')">Naučna fantastika</a></li>
            	</ul>
				</div>
				<div class="Sadrzaj_lijevi_dio">
            	<h1>Najprodavanije</h1>
                <ul>
                    <li><a onclick="loadPage('knjige.html')">Grof Monte Kristo</a></li>
                    <li><a onclick="loadPage('knjige.html')">Hobit: Neočekivana avantura </a></li>
                    <li><a onclick="loadPage('knjige.html')">Ponos i predrasuda</a></li>
                    <li><a onclick="loadPage('knjige.html')">Romeo i Julija</a></li>
                    <li><a onclick="loadPage('knjige.html')">Orkanski visovi</a></li>
                    <li><a onclick="loadPage('knjige.html')">Dracula</a></li>
                    <li><a onclick="loadPage('knjige.html')">Hamlet</a></li>
                    <li><a onclick="loadPage('knjige.html')">Zlocin i kazna</a></li>
                    <li><a onclick="loadPage('knjige.html')">Gospodar prstenova: Prstenova družina</a></li>
					<li><a onclick="loadPage('knjige.html')">Gospodar prstenova: Dvije kule</a></li>
					<li><a onclick="loadPage('knjige.html')">Gospodar prstenova: Povratak kralja</a></li>
            	</ul>
            </div>
			</div>
	<div id="Sadrzaj_desni">
	<div id = "Novosti_lijevo">
	<?php
				if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
				$veza = new PDO("mysql:dbname=wt;host=localhost;charset=utf8", "wtuser", "wtpass");
				$veza->exec("set names utf8");
				$sve = $veza->query("select id, naslov, autor, tekst, opsirno, UNIX_TIMESTAMP(vrijeme) vrijeme2, slika from novosti order by vrijeme desc");
				if (!$sve) {
				$greska = $veza->errorInfo();
				print "SQL greška: " . $greska[2];
				exit();
				}
				$promjena=true;
				
				foreach($sve as $jedan)
				{
					if($promjena==false){
						$promjena=true;
						continue;
						}
						else{
					$sadasnjiDatum = date("d.m.Y. H:i:s", $jedan['vrijeme2']);
					echo '
								<div class = "Ponuda">
								<h1> '.$jedan['naslov']. '<span>(by '.$jedan['autor'].')</span></h1>
					 			<img src = "'.$jedan['slika'].'" alt="Smiley face">
								<div class="ukratko">
								<p>'.$jedan['tekst'].'</p>
								<h3>15 KM</h3>
								</div>
								<div><p id="datumObjave">Datum objave: '.$sadasnjiDatum.'</p></div>
								<br>';
								echo '<div>-------------------------------------------------------------</div>';
								$id=$jedan['id'];
								$komentari = $veza->query("select id, novost,tekst, autor, UNIX_TIMESTAMP(vrijeme) vrijeme2, email from komentari where novost = '$id' order by vrijeme asc");
								$brojKomentara = $komentari->rowCount();
								?>
								<form name="formaUredi" id="dodajNovost" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
								<?php
								echo '<div id="paragraf" onclick="prikaziKomentar(\''; echo 'komentari'.$id; echo '\');">Broj komentara: '.$brojKomentara.'</div>
								<div id="komentari'.$id.'" class="komentari">';
								
							foreach($komentari as $dva){
							$noviDatum = date("d.m.Y. H:i:s", $dva['vrijeme2']);
							echo '
							<div>-------------------------------------------------------</div>
							<div id="komentar'.$dva['id']; echo '"class="komentar">
							
							<div>Datum objave: </div>'.$noviDatum.'<br><br> <div id="autor" class="autor">Autor: '.$dva['autor'].'</div><br> <div id="mail'.$dva['id']; echo '" class="mail">Email: </div>'.$dva['email'].'<br><br>
							<div>Komentar:</div>'.$dva['tekst'].'
							<input id="idkomentara" name="idkomentara'.$dva['id'].'" value = "'.$dva['id'].'" type = "hidden">
							</div>
							<div id="odmakni">
							<ul>
							<li><button type="submit" name="obrisikomentar'.$dva['id'].'">Obrisi Komentar</button></li>
							</ul>
							</div>
							';
							}
								
								echo '
								</div>
								<div>-------------------------------------------------------</div>';
								echo '<div id="dugmadAdminPanel">
								<h1>Promijenite sadržaj novosti ovdje:</h1>
								<input id = "id" name ="id" value = "'.$id.'" type = "hidden">
								<div>Naslov:</div>
								<input type="text" name="naslov'.$id; echo '" id="autor" class="input" placeholder="Unesite naslov ovdje..."/><br>
								<div>Autor:</div>
								<input type="text" name="autor'.$id; echo '" id="autor" class="input" placeholder="Unesite ime autora ovdje..."/><br>
								<div>Slika(URL unesite):</div>
								<input type="text" name="slika'.$id; echo '" id="autor" class="input" placeholder="Unesite URL ovdje..."/><br>
								<div>Tekst:</div>
								<textarea name="tekst'.$id; echo '" id="poruka" class="input" rows="3" cols="30" placeholder="Unesite tekst ovdje..."></textarea><br>
								<div>Opsirno:</div>
								<textarea name="opsirno'.$id; echo '" id="poruka" class="input" rows="3" cols="30" placeholder="Unesite opsirni tekst ovdje..."></textarea><br>
								<ul>
								<li><button type="submit" name="izmjena'.$id.'">Izmijeni Novost</button></li>
								<li><button type="submit" name="obrisi'.$id.'">Izbrisi Novost</button></li>
								</ul>
								</div>
								</form>
								<div>-------------------------------------------------------------</div>
								<br>
								</div>
								
								';
								$promjena=false;
				}
				}
	?>
	</div>
	<div id = "Novosti_desno">
		<?php
				$veza = new PDO("mysql:dbname=wt;host=localhost;charset=utf8", "wtuser", "wtpass");
				$veza->exec("set names utf8");
				$sve = $veza->query("select id, naslov, autor, tekst, opsirno, UNIX_TIMESTAMP(vrijeme) vrijeme2, slika from novosti order by vrijeme desc");
				if (!$sve) {
				$greska = $veza->errorInfo();
				print "SQL greška: " . $greska[2];
				exit();
				}
				
				$promjena2=false;
				
				foreach($sve as $jedan)
				{
					if($promjena2==false){
						$promjena2=true;
						continue;
						}
						else{
					$sadasnjiDatum = date("d.m.Y. H:i:s", $jedan['vrijeme2']);
					echo '
								<div class = "Ponuda">
								<h1> '.$jedan['naslov']. '<span>(by '.$jedan['autor'].')</span></h1>
					 			<img src = "'.$jedan['slika'].'" alt="Smiley face">
								<div class="ukratko">
								<p>'.$jedan['tekst'].'</p>
								<h3>15 KM</h3>
								</div>
								<div><p id="datumObjave">Datum objave: '.$sadasnjiDatum.'</p></div>
								<br>';
								echo '<div>-------------------------------------------------------------</div>';
								$id=$jedan['id'];
								$komentari = $veza->query("select id, novost,tekst, autor, UNIX_TIMESTAMP(vrijeme) vrijeme2, email from komentari where novost = '$id' order by vrijeme asc");
								$brojKomentara = $komentari->rowCount();
								?>
								<form name="formaUredi" id="dodajNovost" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
								<?php
								echo '<div id="paragraf" onclick="prikaziKomentar(\''; echo 'komentari'.$id; echo '\');">Broj komentara: '.$brojKomentara.'</div>
								<div id="komentari'.$id.'" class="komentari">';
								
							foreach($komentari as $dva){
							$noviDatum = date("d.m.Y. H:i:s", $dva['vrijeme2']);
							echo '
							<div>-------------------------------------------------------</div>
							<div id="komentar'.$dva['id']; echo '"class="komentar">
							
							<div>Datum objave: </div>'.$noviDatum.'<br><br> <div id="autor" class="autor">Autor: '.$dva['autor'].'</div><br> <div id="mail'.$dva['id']; echo '" class="mail">Email: </div>'.$dva['email'].'<br><br>
							<div>Komentar:</div>'.$dva['tekst'].'
							<input id="idkomentara" name="idkomentara'.$dva['id'].'" value = "'.$dva['id'].'" type = "hidden">
							</div>
							<div id="odmakni">
							<ul>
							<li><button type="submit" name="obrisikomentar'.$dva['id'].'">Obrisi Komentar</button></li>
							</ul>
							</div>
							';
							}
								
								echo '
								</div>
								<div>-------------------------------------------------------</div>';
								echo '<div id="dugmadAdminPanel">
								<h1>Promijenite sadržaj novosti ovdje:</h1>
								<input id = "id" name ="id" value = "'.$id.'" type = "hidden">
								<div>Naslov:</div>
								<input type="text" name="naslov'.$id; echo '" id="autor" class="input" placeholder="Unesite naslov ovdje..."/><br>
								<div>Autor:</div>
								<input type="text" name="autor'.$id; echo '" id="autor" class="input" placeholder="Unesite ime autora ovdje..."/><br>
								<div>Slika(URL unesite):</div>
								<input type="text" name="slika'.$id; echo '" id="autor" class="input" placeholder="Unesite URL ovdje..."/><br>
								<div>Tekst:</div>
								<textarea name="tekst'.$id; echo '" id="poruka" class="input" rows="3" cols="30" placeholder="Unesite tekst ovdje..."></textarea><br>
								<div>Opsirno:</div>
								<textarea name="opsirno'.$id; echo '" id="poruka" class="input" rows="3" cols="30" placeholder="Unesite opsirni tekst ovdje..."></textarea><br>
								<ul>
								<li><button type="submit" name="izmjena'.$id.'">Izmijeni Novost</button></li>
								<li><button type="submit" name="obrisi'.$id.'">Izbrisi Novost</button></li>
								</ul>
								</div>
								</form>
								<div>-------------------------------------------------------------</div>
								<br>

								</div>
								
								';
								$promjena2=false;
				}
				}
				}
	?>
	</div>
	
	</div>
    </div>
	<div id="footer">
	       <a href="index.php">Početna</a> | <a href="#">Pretraga</a> | <a href="knjige.html">Knjige</a> | <a href="nova.html">Nova izdanja</a> | <a href="https://www.facebook.com/anes.luckin" target="_blank">Kompanija</a> | <a href="kontakt.html">Kontakt</a><br />
        Copyright © 2015 <a href="#"><strong>OnlineBiblio</strong></a> 
	</div>
	<script type="text/javascript" src="prikaziMenu.js"></script>
	<script type="text/javascript" src="ucitavanjeStranice.js"></script>
	<script type="text/javascript" src="prikazKomentara.js"></script>
</div> <!-- Kraj svega -->
</BODY>
</HTML>
<?php
if($provjerena){
	
$me = "Uspjesno obrisana novost!";
echo "<script type='text/javascript'>alert('$me');</script>";
}

if($komentarobrisan)
{
	$m = "Uspjesno obrisan komentar!";
echo "<script type='text/javascript'>alert('$m');</script>";
}

if($prolazi)
{
	$mo = "Uspjesno izmijenjena novost!";
echo "<script type='text/javascript'>alert('$mo');</script>";
}
if($prazno)
{
	$mi = "Popunite sva polja forme!";
echo "<script type='text/javascript'>alert('$mi');</script>";
}
?>