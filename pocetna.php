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
			<div id = "Novosti_lijevo">
			        	<div class="Ponuda">
            	<h1>Harry Potter i Kamen mudraca <span>(by J.K.R.)</span></h1>
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
						$promjena=true;
						$listaNovosti = '';
					 	$fajloviNovosti = glob("novosti/*.txt");
						
$niz = array();
					 	foreach ($fajloviNovosti as $fajl) 
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
							
							for($i=0;$i<count($fajloviNovosti)-1;$i++)
							{
								for($j=0;$j<count($fajloviNovosti)-1;$j++)
								{
									if(sortFunction($niz[$j],$niz[$j+1])==1)
									{
									$priv = $niz[$j + 1];
									$niz[$j + 1] = $niz[$j];
									$niz[$j] = $priv;
									$priv = $fajloviNovosti[$j + 1];
									$fajloviNovosti[$j + 1] = $fajloviNovosti[$j];
									$fajloviNovosti[$j] = $priv;
										
									}
									
								}
								
								
								
							}
						
						$brojac=true;
					 	foreach ($fajloviNovosti as $file) 
					 	{
							if($brojac==false)
							{
								$brojac=true;
								continue;
							}
							$opsirnije="";
					 		$content = file($file);
					 		$opisNovosti = "";
					 		$detaljanOpisNovosti = "";
					 		$bool = false;

					 		for($i = 4; $i < count($content); $i++)
					 		{
					 			if($content[$i] === "--\r\n")
					 			{
					 				$bool = true;
					 				continue;
					 			}

					 			if($bool == false)
					 			{
					 				$opisNovosti .= trim($content[$i]);
					 			}
					 			else if ($bool == true)
					 			{
					 				$detaljanOpisNovosti .= trim($content[$i]);
					 			}
					 		}
					 		$dateTime = "";
					 		$autorNovosti = "";
					 		$naslovNovosti = "";
					 		$slikaNovosti = "";

							
					 		$dateTime = trim($content[0]);
					 		$autorNovosti = trim($content[1]);
					 		$naslovNovosti = trim(ucfirst(strtolower($content[2])));
					 		$slikaNovosti = trim($content[3]);
							
					 		if($bool == true)//ima detaljan
					 		{
								$opsirnije = "<a onclick=\"loadPage('detaljanprikaz.php?dateTime=$dateTime&autor=$autorNovosti&naslov=$naslovNovosti&opis=$opisNovosti&detOpis=$detaljanOpisNovosti&slika=$slikaNovosti');\" >Opsirnije...</a>";
									
					 		}
							
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
								
								<div class="cleaner">&nbsp;</div>
								
						 		</div>';
								
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
            	<h1>Harry Potter i Odaja tajni <span>(by J.K.R.)</span></h1>
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
						$listaNovosti = '';
					 	$fajloviNovosti = glob("novosti/*.txt");
						
$niz = array();
					 	foreach ($fajloviNovosti as $fajl) 
					 	{
					 		$sadrzaj = file($fajl);
							array_push($niz, $sadrzaj);

					 	}
						//var_dump($niz);
						
							
							for($i=0;$i<count($fajloviNovosti)-1;$i++)
							{
								for($j=0;$j<count($fajloviNovosti)-1;$j++)
								{
									if(sortFunction($niz[$j],$niz[$j+1])==1)
									{
									$priv = $niz[$j + 1];
									$niz[$j + 1] = $niz[$j];
									$niz[$j] = $priv;
									$priv = $fajloviNovosti[$j + 1];
									$fajloviNovosti[$j + 1] = $fajloviNovosti[$j];
									$fajloviNovosti[$j] = $priv;
										
									}
									
								}
								
								
								
							}
						
						$brojac2=false;
					 	foreach ($fajloviNovosti as $file) 
					 	{
							if($brojac2==false)
							{
								$brojac2=true;
								continue;
							}
							$opsirnije="";
					 		$content = file($file);
					 		$opisNovosti = "";
					 		$detaljanOpisNovosti = "";
					 		$bool = false;

					 		for($i = 4; $i < count($content); $i++)
					 		{
					 			if($content[$i] === "--\r\n")
					 			{
					 				$bool = true;
					 				continue;
					 			}

					 			if($bool == false)
					 			{
					 				$opisNovosti .= trim($content[$i]);
					 			}
					 			else if ($bool == true)
					 			{
					 				$detaljanOpisNovosti .= trim($content[$i]);
					 			}
					 		}

					 		$dateTime = "";
					 		$autorNovosti = "";
					 		$naslovNovosti = "";
					 		$slikaNovosti = "";

							
							
					 		$dateTime = trim($content[0]);
					 		$autorNovosti = trim($content[1]);
					 		$naslovNovosti = trim(ucfirst(strtolower($content[2])));
					 		$slikaNovosti = trim($content[3]);
							
					 		if($bool == true)
					 		{
								$opsirnije = "<a onclick=\"loadPage('detaljanprikaz.php?dateTime=$dateTime&autor=$autorNovosti&naslov=$naslovNovosti&opis=$opisNovosti&detOpis=$detaljanOpisNovosti&slika=$slikaNovosti');\" >Opsirnije...</a>";
									
					 		}
							
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
								
								<div class="cleaner">&nbsp;</div>
								
						 		</div>';
								
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
	       <a href="pocetna.html">Početna</a> | <a href="#">Pretraga</a> | <a href="knjige.html">Knjige</a> | <a href="nova.html">Nova izdanja</a> | <a href="https://www.facebook.com/anes.luckin" target="_blank">Kompanija</a> | <a href="kontakt.html">Kontakt</a><br />
        Copyright © 2015 <a href="#"><strong>OnlineBiblio</strong></a> 
	</div>
	<script type="text/javascript" src="foo3.js"></script>
	<script type="text/javascript" src="prikaziMenu.js"></script>
	<script type="text/javascript" src="ucitavanjeStranice.js"></script>
</div> <!-- Kraj svega -->
</BODY>
</HTML>