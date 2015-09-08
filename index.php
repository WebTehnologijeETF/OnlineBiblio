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
		<a onclick="loadPage('adminpanel.php')">Admin Panel  </a>
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
			        	<div class="Ponuda">
            	<h1>PROVJERITE PONUDE ISPOD,OVE SU PISANE <span>(by J.K.R.)</span></h1>
   	      <img src="Slike/mudrac.jpg" alt="image" />
                <div class="ukratko">
                	<p>Na početku priče, 1. studenog 1981., čarobnjak i vještica, Albus Dumbledore i Minerva McGonagall, se sreću...</p>
                  <h3>15 KM</h3>
                    <div class="kupi"><a href="#">Kupi</a></div>
                    <div class="detaljnije"><a href="#">Detaljnije</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
			
			
			
					<?php 
					include 'dodavanjeKomentara.php';
						$promjena=true;
					 	/*$ucitaniFajlovi = glob("Novosti/*.txt");
						
$niz = array();
					 	foreach ($ucitaniFajlovi as $fajl) 
					 	{
					 		$sadrzaj = file($fajl);
							array_push($niz, $sadrzaj);

					 	}
						//var_dump($niz);
						
						
						function sortFunction( $a, $b ) {
							
							$date1=explode('.', $a[0]);
							$date1[3]=trim($date1[3]);
							$date2=explode('.', $b[0]);
							$date2[3]=trim($date2[3]);
							if($date1[2]==$date2[2])
							{
								if($date1[1]==$date2[1])
								{
									if($date1[0]==$date2[0])
									{
										if($date1[3]==$date2[3])
										{
											return 1;
										}
										else if($date1[3]<$date2[3])
										{
											return 1;
										}
										else return -1;
									}
									else if($date1[0]<$date2[0])
									{
										return 1;
									}
									else return -1;
									
								}
								else if($date1[1]<$date2[1])
								{
									return 1;
								}
								else return -1;
							}
							
							
							}
							
							for($i=0;$i<count($ucitaniFajlovi)-1;$i++)
							{
								for($j=0;$j<count($ucitaniFajlovi)-1;$j++)
								{
									if(sortFunction($niz[$j],$niz[$j+1])==1)
									{
									$priv = $niz[$j + 1];
									$niz[$j + 1] = $niz[$j];
									$niz[$j] = $priv;
									$priv = $ucitaniFajlovi[$j + 1];
									$ucitaniFajlovi[$j + 1] = $ucitaniFajlovi[$j];
									$ucitaniFajlovi[$j] = $priv;
										
									}
									
								}
								
								
								
							}*/
							
							$veza = new PDO("mysql:dbname=wt;host=localhost;charset=utf8", "wtuser", "wtpass");
							$veza->exec("set names utf8");
							$rezultat = $veza->query("select id, naslov, autor, tekst, opsirno, UNIX_TIMESTAMP(vrijeme) vrijeme2, slika from novosti order by vrijeme desc");
							if (!$rezultat) {
							$greska = $veza->errorInfo();
							print "SQL greška: " . $greska[2];
							exit();
							}
							
						
						$brojac=true;
					 	foreach ($rezultat as $file) 
					 	{
							if($brojac==false)
							{
								$brojac=true;
								continue;
							}
							$id = $file['id'];
							
							$opsirnije="";
					 		$opisNovosti = $file['tekst'];
					 		$detaljanOpisNovosti = $file['opsirno'];
							$bool = true;
							if($detaljanOpisNovosti==null){
					 		$bool = false;
							}

					 		$dateTime = date("d.m.Y. H:i:s", $file['vrijeme2']);
					 		$autorNovosti = $file['autor'];
					 		$naslovNovosti = $file['naslov'];
					 		$slikaNovosti = $file['slika'];

							
							
					 		if($bool == true)
					 		{
								$opsirnije = "<a onclick=\"loadPage('detaljanprikaz.php?dateTime=$dateTime&autor=$autorNovosti&naslov=$naslovNovosti&opis=$opisNovosti&detOpis=$detaljanOpisNovosti&slika=$slikaNovosti');\" >Opsirnije...</a>";
									
					 		}
							
							$komentari = $veza->query("select id, novost,tekst, autor, UNIX_TIMESTAMP(vrijeme) vrijeme2, email from komentari where novost = '$id' order by vrijeme asc");
							$brojKomentara = $komentari->rowCount();
							
					 		echo '<div class = "Ponuda">
								  <h1> '.$naslovNovosti. '<span>(by '.$autorNovosti.')</span></h1>
					 			<img src = "'.$slikaNovosti.'" alt="Smiley face">
								<div class="ukratko">
								<p>'.$opisNovosti.'</p>
								<h3>15 KM</h3>
								<div class="kupi"><a href="#">Kupi</a></div>
								<div class="detaljnije">'.$opsirnije.'</div>
								</div>
								<div><p id="datumObjave">Datum objave: '.$dateTime.'</p></div>
								<div>-------------------------------------------------------------</div>
								<div id="paragraf" onclick="prikaziKomentar(\''; echo 'komentari'.$id; echo '\');">Broj komentara: '.$brojKomentara.'</div>
								<div id="komentari'.$id.'" class="komentari">';
								
							foreach($komentari as $jedan){
							$sadasnjiDatum = date("d.m.Y. H:i:s", $jedan['vrijeme2']);
							echo '
							<div>-------------------------------------------------------------</div>
							<div id="komentar'.$jedan['id']; echo '"class="komentar">
							
							<div>Datum objave: </div>'.$sadasnjiDatum.'<br><br> <div id="autor" class="autor">Autor: '.$jedan['autor'].'</div><br> <div id="mail'.$jedan['id']; echo '" class="mail">Email: </div>'.$jedan['email'].'<br><br>
							<div>Komentar:</div>'.$jedan['tekst'].'
							</div>
							';
							}
								
								echo '
								</div>
								<div>-------------------------------------------------------------</div>';?>
								<form id="formaKomentara" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
								<?php
								echo '<p>Dodajte vaš komentar:</p>
								<input id = "id" name ="id" value = "'.$id.'" type = "hidden">
								<p>Ime:</p>
								<input type="text" name="autor" id="autor'.$id; echo '" class="input" placeholder="Unesite ime ovdje..."/>
								<p>Email:</p>   
								<input type="text" name="email" id="email'.$id; echo '" class="input" placeholder="Unesite email ovdje..."/>
								<p>Komentar:</p>
								<textarea name="poruka" id="poruka'.$id; echo '" class="input" rows="3" cols="30" placeholder="Unesite tekst ovdje..."></textarea>
								
								<button type="submit">Komentiraj</button>
								<button type="reset">Ponisti</button>';?>
								   </form>
								<?php
						 		echo '</div>';
								
								if($promjena==true)
								{
									//echo '<div class="cleaner_with_width">&nbsp;</div>';
									$promjena=false;
									
								}
								else
								{
									//echo '<div class="cleaner_with_height">&nbsp;</div>';
									$promjena=true;
								}
							
								
								$brojac=false;
					 	}
					?>
				</div>
			
			<div id = "Novosti_desno">
						<div class="Ponuda">
            	<h1>U HTML-U RADI PRIMJERA IZGLEDA<span>(by J.K.R.)</span></h1>
   	      <img src="Slike/odaja.jpg" alt="image" />
                <div class="ukratko">
                	<p>Harry provodi još jedne ljetne praznike kod Dursleyjevih. U Kalinin prilaz dolazi kućni vilenjak Dobby...</p>
                  <h3>15 KM</h3>
                    <div class="kupi"><a href="#">Kupi</a></div>
                    <div class="detaljnije"><a href="#">Detaljnije</a></div>
                </div>
                <div class="cleaner">&nbsp;</div>
            </div>
				<?php 
						$promjena=true;
					 	/*$ucitaniFajlovi = glob("Novosti/*.txt");
						
$niz = array();
					 	foreach ($ucitaniFajlovi as $fajl) 
					 	{
					 		$sadrzaj = file($fajl);
							array_push($niz, $sadrzaj);

					 	}
						//var_dump($niz);
						
						
						function sortFunction( $a, $b ) {
							
							$date1=explode('.', $a[0]);
							$date1[3]=trim($date1[3]);
							$date2=explode('.', $b[0]);
							$date2[3]=trim($date2[3]);
							if($date1[2]==$date2[2])
							{
								if($date1[1]==$date2[1])
								{
									if($date1[0]==$date2[0])
									{
										if($date1[3]==$date2[3])
										{
											return 1;
										}
										else if($date1[3]<$date2[3])
										{
											return 1;
										}
										else return -1;
									}
									else if($date1[0]<$date2[0])
									{
										return 1;
									}
									else return -1;
									
								}
								else if($date1[1]<$date2[1])
								{
									return 1;
								}
								else return -1;
							}
							
							
							}
							
							for($i=0;$i<count($ucitaniFajlovi)-1;$i++)
							{
								for($j=0;$j<count($ucitaniFajlovi)-1;$j++)
								{
									if(sortFunction($niz[$j],$niz[$j+1])==1)
									{
									$priv = $niz[$j + 1];
									$niz[$j + 1] = $niz[$j];
									$niz[$j] = $priv;
									$priv = $ucitaniFajlovi[$j + 1];
									$ucitaniFajlovi[$j + 1] = $ucitaniFajlovi[$j];
									$ucitaniFajlovi[$j] = $priv;
										
									}
									
								}
								
								
								
							}*/
							
							$veza = new PDO("mysql:dbname=wt;host=localhost;charset=utf8", "wtuser", "wtpass");
							$veza->exec("set names utf8");
							$rezultat = $veza->query("select id, naslov, autor, tekst, opsirno, UNIX_TIMESTAMP(vrijeme) vrijeme2, slika from novosti order by vrijeme desc");
							if (!$rezultat) {
							$greska = $veza->errorInfo();
							print "SQL greška: " . $greska[2];
							exit();
							}
							
						
						$brojac2=false;
					 	foreach ($rezultat as $file) 
					 	{
							if($brojac2==false)
							{
								$brojac2=true;
								continue;
							}
							$id = $file['id'];
							
							$opsirnije="";
					 		$opisNovosti = $file['tekst'];
					 		$detaljanOpisNovosti = $file['opsirno'];
							$bool = true;
							if($detaljanOpisNovosti==null){
					 		$bool = false;
							}

					 		$dateTime = date("d.m.Y. H:i:s", $file['vrijeme2']);
					 		$autorNovosti = $file['autor'];
					 		$naslovNovosti = $file['naslov'];
					 		$slikaNovosti = $file['slika'];

							
							
					 		if($bool == true)
					 		{
								$opsirnije = "<a onclick=\"loadPage('detaljanprikaz.php?dateTime=$dateTime&autor=$autorNovosti&naslov=$naslovNovosti&opis=$opisNovosti&detOpis=$detaljanOpisNovosti&slika=$slikaNovosti');\" >Opsirnije...</a>";
									
					 		}
							
							$komentari = $veza->query("select id, novost,tekst, autor, UNIX_TIMESTAMP(vrijeme) vrijeme2, email from komentari where novost = '$id' order by vrijeme asc");
							$brojKomentara = $komentari->rowCount();
							
					 		echo '<div class = "Ponuda">
								  <h1> '.$naslovNovosti. '<span>(by '.$autorNovosti.')</span></h1>
					 			<img src = "'.$slikaNovosti.'" alt="Smiley face">
								<div class="ukratko">
								<p>'.$opisNovosti.'</p>
								<h3>15 KM</h3>
								<div class="kupi"><a href="#">Kupi</a></div>
								<div class="detaljnije">'.$opsirnije.'</div>
								</div>
								<div><p id="datumObjave">Datum objave: '.$dateTime.'</p></div>
								<div>-------------------------------------------------------------</div>
								<div id="paragraf" onclick="prikaziKomentar(\''; echo 'komentari'.$id; echo '\');">Broj komentara: '.$brojKomentara.'</div>
								<div id="komentari'.$id.'" class="komentari">';
								
							foreach($komentari as $jedan){
							$sadasnjiDatum = date("d.m.Y. H:i:s", $jedan['vrijeme2']);
							echo '
							<div>-------------------------------------------------------------</div>
							<div id="komentar'.$jedan['id']; echo '"class="komentar">
							
							<div>Datum objave: </div>'.$sadasnjiDatum.'<br><br> <div id="autor" class="autor">Autor: '.$jedan['autor'].'</div><br> <div id="mail'.$jedan['id']; echo '" class="mail">Email: </div>'.$jedan['email'].'<br><br>
							<div>Komentar:</div>'.$jedan['tekst'].'
							</div>
							';
							}
								
								echo '
								</div>
								<div>-------------------------------------------------------------</div>';?>
								<form id="formaKomentara" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
								<?php
								echo '<p>Dodajte vaš komentar:</p>
								<input id = "id" name ="id" value = "'.$id.'" type = "hidden">
								<p>Ime:</p>
								<input type="text" name="autor" id="autor'.$id; echo '" class="input" placeholder="Unesite ime ovdje..."/>
								<p>Email:</p>   
								<input type="text" name="email" id="email'.$id; echo '" class="input" placeholder="Unesite email ovdje..."/>
								<p>Komentar:</p>
								<textarea name="poruka" id="poruka'.$id; echo '" class="input" rows="3" cols="30" placeholder="Unesite tekst ovdje..."></textarea>
								
								<button type="submit">Komentiraj</button>
								<button type="reset">Ponisti</button>';?>
								   </form>
								<?php
						 		echo '</div>';
								
								if($promjena==true)
								{
									//echo '<div class="cleaner_with_width">&nbsp;</div>';
									$promjena=false;
									
								}
								else
								{
									//echo '<div class="cleaner_with_height">&nbsp;</div>';
									$promjena=true;
								}
							
								
								$brojac2=false;
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