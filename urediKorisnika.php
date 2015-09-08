<?php
		session_start();
		function test_input($data) 
      {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
      }
	  
	 $username=""; 
	 $password="";
	 $email=""; 
	 $admin=""; 
	 $opsirno=""; 
	 $pomocna=0;
	 $drugapomocna=0;
	 $trecapomocna=0;
	 $korisnickiId="";
	  
	 if($_SERVER["REQUEST_METHOD"] == "POST"){
		 
		 $idKorisnika=$_POST['idKorisnika'];
		 $korisnickiId=$idKorisnika;
		 
		 if(isset($_POST['obrisiKorisnika'.$idKorisnika]))
		 {
			$novaveza = new PDO("mysql:dbname=wt;host=localhost;charset=utf8", "wtuser", "wtpass");
			$novaveza->exec("set names utf8");
			$obrisikomentar = $novaveza->query("DELETE FROM korisnici WHERE id = '".$idKorisnika."'");
			if (!$obrisikomentar) {
			$greska = $novaveza->errorInfo();
			print "SQL greška: " . $greska[2];
			exit();
			}
			 $drugapomocna=1;
			 
		 }
	else if(isset($_POST['izmijeniKorisnika'.$idKorisnika])){
			 
	  
	$username = test_input($_POST["usernameKorisnika".$idKorisnika]);
    $password = test_input($_POST["passwordKorisnika".$idKorisnika]);
    $email = test_input($_POST["emailKorisnika".$idKorisnika]);
	$admin = test_input($_POST["adminKorisnika".$idKorisnika]);
	
	if(empty($username))
	{
		$trecapomocna=1;
	}
	else if(empty($password))
	{
		$trecapomocna=1;
	}
	else if(empty($email))
	{
		$trecapomocna=1;
	}
	else{
	$password=md5($password);
	$konekcija = new PDO("mysql:dbname=wt;host=localhost;charset=utf8", "wtuser", "wtpass");
	$konekcija->exec("set names utf8");
	$povratak = $konekcija->query("UPDATE korisnici SET username='".$username."', password='".$password."', email='".$email."', admin='".$admin."' WHERE id='".$idKorisnika."'");
	if (!$povratak) {
	$greska = $konekcija->errorInfo();
	print "SQL greška: " . $greska[2];
	exit();
	}
	$pomocna=1;
	$trecapomocna=0;
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
	<?php
			if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
				
					$veza = new PDO("mysql:dbname=wt;host=localhost;charset=utf8", "wtuser", "wtpass");
					$veza->exec("set names utf8");
					$rezultat = $veza->query("select id, username, password, email, admin from korisnici");
					if (!$rezultat) {
					$greska = $veza->errorInfo();
					print "SQL greška: " . $greska[2];
					exit();
					}
					foreach($rezultat as $obicni)
					{
						?>
						<form name="dodajNovost" id="dodajNovost" class="KorisnikForma" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
						<?php 
						echo '<div class="Korisnik1">';
						echo '<h1>Podaci Korisnika</h1>';
						echo '<br><div> Username: '.$obicni['username'];
						if($obicni['admin'])
						{
						echo '[Admin]
						';
						}
						else
						{
							echo '[Clan/Korisnik]
							';
						}
						
						echo '</div><br>
						Email: '.$obicni['email'].
						'<br><button type=submit name="obrisiKorisnika'.$obicni['id'].'">Izbrisi Korisnika</button>';
						echo '<div>-------------------------------------------------------------</div>';
				?>

				
		<h1>Izmijeni Korisnika</h1><br>
		<input type="hidden" name="idKorisnika" id="usernameKorisnika" class="input" value="<?php echo $obicni['id'];
		?>"/>
		<div>Username:</div>
		<input type="text" name="usernameKorisnika<?php echo $obicni['id'];
		?>" id="usernameKorisnika" class="input"/><br><br>
		<div>-------------------------------------------------------------</div>
		<div>Password:</div>
		<input type="password" name="passwordKorisnika<?php echo $obicni['id'];
		?>" id="passwordKorisnika" class="input"/><br><br>
		<div>-------------------------------------------------------------</div>
		<div>Email:</div>
		<input type="text" name="emailKorisnika<?php echo $obicni['id'];
		?>" id="emailKorisnika" class="input"/><br><br>
		<div>-------------------------------------------------------------</div>
		<div>Admin:</div>
		<input type="hidden" name="adminKorisnika<?php echo $obicni['id'];
		?>" value="0" />
		<input type="checkbox" name="adminKorisnika<?php echo $obicni['id'];
		?>" id="adminKorisnika" class="input" value="1"/><br><br>
		<div>-------------------------------------------------------------</div>
		
		<button type="submit" name="izmijeniKorisnika<?php echo $obicni['id'];
		?>">Izmijeni Korisnika</button>
		<button type="reset">Ponisti</button><br>

		<?php
		echo '</div></form>';
				
			}
			?>
			<?php
			}
			?>
	
	
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
if($pomocna){
$novost = "Uspjesno izmijenjen korisnik!";
echo "<script type='text/javascript'>alert('$novost');</script>";
}
if($drugapomocna)
{
	$trenutni = $_SESSION['user_id'];
	if($trenutni==$korisnickiId)
	{
		session_destroy();
	}
	$no = "Uspjesno obrisan korisnik!";
echo "<script type='text/javascript'>alert('$no');</script>";
}
if($trecapomocna)
{
		$n = "Niste unijeli sve podatke!";
echo "<script type='text/javascript'>alert('$n');</script>";
}
?>