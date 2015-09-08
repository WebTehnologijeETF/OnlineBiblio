<?php
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
	 $sada=0;
	  
	 if($_SERVER["REQUEST_METHOD"] == "POST"){
		 
	  
	$username = test_input($_POST["usernameKorisnika"]);
    $password = test_input($_POST["passwordKorisnika"]);
	$password=md5($password);
    $email = test_input($_POST["emailKorisnika"]);
	$admin = test_input($_POST["adminKorisnika"]);
	
	if(empty($username))
	{
		$pomocna=0;
			 $sada=1;
	}
	else if(empty($password))
	{
		$pomocna=0;	 
		$sada=1;
	}
	else if(empty($email))
	{
		$pomocna=0;
			 $sada=1;
	}
	else{
	
	$veza = new PDO("mysql:dbname=wt;host=localhost;charset=utf8", "wtuser", "wtpass");
	$veza->exec("set names utf8");
	$rezultat = $veza->query("INSERT INTO korisnici SET username='$username', password='$password', email='$email', admin='$admin'");
	if (!$rezultat) {
		$greska = $veza->errorInfo();
		print "SQL greška: " . $greska[2];
		exit();
	}
	$pomocna=1;
	$sad=0;
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
	<?php
			if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
				?>
	<form name="dodajNovost" id="dodajNovost" class="KorisnikForma" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<h1>Dodavanje Korisnika</h1><br>
		<div>Username:</div>
		<input type="text" name="usernameKorisnika" id="usernameKorisnika" class="input"/><br><br>
		<div>-------------------------------------------------------------------</div>
		<div>Password:</div>
		<input type="password" name="passwordKorisnika" id="passwordKorisnika" class="input"/><br><br>
		<div>-------------------------------------------------------------------</div>
		<div>Email:</div>
		<input type="text" name="emailKorisnika" id="emailKorisnika" class="input"/><br><br>
		<div>-------------------------------------------------------------------</div>
		<div>Admin:</div>
		<input type="hidden" name="adminKorisnika" value="0" />
		<input type="checkbox" name="adminKorisnika" id="adminKorisnika" class="input" value="1"/><br><br>
		<div>-------------------------------------------------------------------</div>
		
		<button type="submit">Dodaj Korisnika</button>
		<button type="reset">Ponisti</button><br>
		</form>
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
$novost = "Uspjesno dodan korisnik!";
echo "<script type='text/javascript'>alert('$novost');</script>";
}
if($sada)
{
$nov = "Unesite sva polja!";
echo "<script type='text/javascript'>alert('$nov');</script>";
}
?>