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
            <li><a  onclick="loadPage('pocetna.html')" class="trenutna">Naslovna</a></li>
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
            <li><a onclick="loadPage('kontakt.html')">Kontakt</a></li>
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
		<div class =  "detaljnaNovost" id = "detaljnaNovost">
			 <?php 
				$dateTime = isset($_GET['dateTime']) ? $_GET['dateTime'] : '';
				$autor = isset($_GET['autor']) ? $_GET['autor'] : '';
				$naslov = isset($_GET['naslov']) ? $_GET['naslov'] : '';
				$opis = isset($_GET['opis']) ? $_GET['opis'] : '';
				$detOpis = isset($_GET['detOpis']) ? $_GET['detOpis'] : '';
				$slika = isset($_GET['slika']) ? $_GET['slika'] : '';
				echo '<img src = "'.$slika.'" alt="Smiley face" ><br>
				<div class = "detaljnaNovost">'.$dateTime.'<br>'.$autor.'<br>'.$naslov.'<br>'.$opis.'<br>'.$detOpis.'</div>';
			?>
		</div>
	</div>
    </div>
	<div id="footer">
	       <a href="pocetna.html">Početna</a> | <a href="#">Pretraga</a> | <a href="knjige.html">Knjige</a> | <a href="nova.html">Nova izdanja</a> | <a href="https://www.facebook.com/anes.luckin" target="_blank">Kompanija</a> | <a href="kontakt.html">Kontakt</a><br />
        Copyright © 2015 <a href="#"><strong>OnlineBiblio</strong></a> 
	</div>
	<script type="text/javascript" src="prikaziMenu.js"></script>
	<script type="text/javascript" src="ucitavanjeStranice.js"></script>
	</div><!-- Kraj svega -->
</BODY>
</HTML>