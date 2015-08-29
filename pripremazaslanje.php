<?php
    
	      function test_input($data) 
      {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
      }
	  
	$ime = test_input($_POST["ime"]);
    $prezime = test_input($_POST["prezime"]);
    $email = test_input($_POST["email"]);
    $poruka = test_input($_POST["poruka"]);

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
	<a onclick="loadPage('pocetna.html')"><img src="Slike/logo.jpg" alt="image"></a>
    	<ul>
            <li><a  onclick="loadPage('pocetna.html')">Naslovna</a></li>
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
            <li><a onclick="loadPage('kontakt.php')"  class="trenutna">Kontakt</a></li>
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
				    <li><a href="#">Roman</a></li>
                    <li><a href="#">Drama</a></li>
                    <li><a href="#">Film</a></li>
                    <li><a href="#">Triler</a></li>
                    <li><a href="#">Historijski</a></li>
                    <li><a href="#">Ljubavni</a></li>
                    <li><a href="#">Muzika</a></li>
                    <li><a href="#">Priče</a></li>
                    <li><a href="#">Horor</a></li>
                    <li><a href="#">Biografija</a></li>
					<li><a href="#">Fantastika</a></li>
					<li><a href="#">Naučna fantastika</a></li>
            	</ul>
				</div>
				<div class="Sadrzaj_lijevi_dio">
            	<h1>Najprodavanije</h1>
                <ul>
                    <li><a href="#">Grof Monte Kristo</a></li>
                    <li><a href="#">Hobit: Neočekivana avantura </a></li>
                    <li><a href="#">Ponos i predrasuda</a></li>
                    <li><a href="#">Romeo i Julija</a></li>
                    <li><a href="#">Orkanski visovi</a></li>
                    <li><a href="#">Dracula</a></li>
                    <li><a href="#">Hamlet</a></li>
                    <li><a href="#">Zlocin i kazna</a></li>
                    <li><a href="#">Gospodar prstenova: Prstenova družina</a></li>
					<li><a href="#">Gospodar prstenova: Dvije kule</a></li>
					<li><a href="#">Gospodar prstenova: Povratak kralja</a></li>
            	</ul>
            </div>
			</div>
	<div id="Sadrzaj_desni">
		<div id="neki">
		<h1>Kontakt</h1>
		<p>
			<h2>Provjerite da li ste ispravno popunili kontakt formu.</h2>
			
			<form name="PrikazForma" action="posaljiMail.php" method="post">
			
			<p>Ime: <?php echo $ime?></p><br>
            <p>Prezime: <?php echo $prezime?></p><br>
            <p>Email: <?php echo $email?></p><br>
            <p>Poruka: <?php echo $poruka?></p><br>
			<h2>Da li ste sigurni da želite poslati ove podatke?</h2>
			
			<input type="submit" value="Siguran sam"/>
			</form>
			<br>
			
			<h2>Ako ste pogrešno popunili formu, možete ispod prepraviti unesene podatke</h2>

		</p>
		</div>
		<div class="Forma"> 
		<form name="EditForma" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		<ul>
		<li>Ime:</li>
		</ul><br>
		<input type="text" name="ime" id="ime" class="input" value="<?php 
										if(isset($_REQUEST['ime']))
                                       print $_REQUEST['ime'];
                                   ?>"/>
				
		<img id="errorIme" class="Greska" src="Slike/error.jpg" alt="image">
		<ul id="druginiz">
		<li>Prezime:</li>
		</ul><br>
		<input type="text" name="prezime" id="prezime" class="input" value="<?php 
										if(isset($_REQUEST['prezime']))
                                       print $_REQUEST['prezime'];
                                   ?>" />			
		<p>
		E-mail:
		</p> 
		<input type="text" name="email" id="email" class="input" value="<?php 
										if(isset($_REQUEST['email']))
                                       print $_REQUEST['email'];
                                   ?>"/>
						
		<img id="errorEmail" class="Greska" src="Slike/error.jpg" alt="image">
		<p>
		Poruka:
		</p> 
		<textarea name="poruka" class="input" rows="4" cols="50"><?php 
										if(isset($_REQUEST['poruka']))
                                       print $_REQUEST['poruka'];
                                   ?></textarea>
					
		<img id="errorPoruka" class="Greska" src="Slike/error.jpg" alt="image" />	
		<br>
		<br>
		<input type="submit" value="Izmijeni"/> <!--onclick="validirajFormu();"--> 
		<input type="reset" value="Ponisti"/>  <!--onclick="obrisiInput();"-->
		</form>
		</div>
	</div>
    </div>
	<div id="footer">
	       <a href="pocetna.html">Početna</a> | <a href="#">Pretraga</a> | <a href="knjige.html">Knjige</a> | <a href="nova.html">Nova izdanja</a> | <a href="https://www.facebook.com/anes.luckin" target="_blank">Kompanija</a> | <a href="kontakt.html">Kontakt</a><br />
        Copyright © 2015 <a href="#"><strong>OnlineBiblio</strong></a> 
	</div>
<script type="text/javascript" src="prikaziMenu.js" ></script>
<script type="text/javascript" src="validacijaForme.js" ></script>
<script type="text/javascript" src="ponisti.js" ></script>
<script src="ucitavanjeStranice.js"></script>
</div> <!-- Kraj svega -->
</BODY>
</HTML>