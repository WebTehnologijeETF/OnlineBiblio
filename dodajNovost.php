<?php
		function test_input($data) 
      {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
      }
	  
	 $naslov=""; 
	 $autor="";
	 $slika=""; 
	 $tekst=""; 
	 $opsirno=""; 
	 $pomocna=0;
	  
	 if($_SERVER["REQUEST_METHOD"] == "POST"){
	  
	$naslov = test_input($_POST["naslovNovosti"]);
    $autor = test_input($_POST["autorNovosti"]);
    $slika = test_input($_POST["slikaNovosti"]);
	$tekst = test_input($_POST["tekstNovosti"]);
	$opsirno = test_input($_POST["opsirnoNovosti"]);
	
	$veza = new PDO("mysql:dbname=wt;host=localhost;charset=utf8", "wtuser", "wtpass");
	$veza->exec("set names utf8");
	$rezultat = $veza->query("INSERT INTO novosti SET naslov='$naslov', tekst='$tekst', autor='$autor', slika='$slika' , opsirno='$opsirno'");
	if (!$rezultat) {
		$greska = $veza->errorInfo();
		print "SQL greška: " . $greska[2];
		exit();
	}
	$pomocna=1;
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
	<form name="dodajNovost" id="dodajNovost" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<h1>Dodavanje Novosti</h1><br>
		<div>Naslov:</div>
		<input type="text" name="naslovNovosti" id="naslovNovosti" class="input"/><br><br>
		<p>---------------------------------------------------------------------------------------------------------------------------------</p>
		<div>Autor:</div>
		<input type="text" name="autorNovosti" id="autorNovosti" class="input"/><br><br>
		<p>---------------------------------------------------------------------------------------------------------------------------------</p>
		<div>Slika(URL unesite):</div>
		<input type="text" name="slikaNovosti" id="slikaNovosti" class="input"/><br><br>
		<p>---------------------------------------------------------------------------------------------------------------------------------</p>
		<div>Tekst:</div>
		<textarea name="tekstNovosti" class="input" rows="4" cols="50"></textarea><br><br>
		<p>---------------------------------------------------------------------------------------------------------------------------------</p>
		<div>Opsirno:</div>
		<textarea name="opsirnoNovosti" class="input" rows="4" cols="50"></textarea><br><br>
		<p>---------------------------------------------------------------------------------------------------------------------------------</p>

		
		
		<button type="submit">Dodaj Novost</button>
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
$novost = "Uspjesno dodana novost!";
echo "<script type='text/javascript'>alert('$novost');</script>";
}
?>