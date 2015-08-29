<?php
      
    
      $ime = "";
	  $prezime = "";
	  $email = "";
	  $poruka = "";
		$kod="";
		$kod1="";
		$errorIme="";
		$errorEmail="";
		$errorKod="";
		$errorKod1="";
		$errorPoruka="";
		$dalje=0;
			
    
      if($_SERVER["REQUEST_METHOD"] == "POST")
      {
             $dalje = 1;
    
          if(empty($_POST["ime"])){
             $errorIme = '<style type="text/css">
              #errorIme {
              visibility: visible;
              }
			  #ime{
				  border-color: red;
			  }
              </style>'; 
              $dalje = 0; 
          }
          else{
    
               $ime = test_input($_POST["ime"]);
               if(validateName($ime)){}
               else
               {
                    $errorIme = '<style type="text/css">
                    #errorIme {
                    visibility: visible;
                    }
					#ime{
				  border-color: red;
						}
                    </style>';  
                     $dalje = 0; 
               }
          }
    
          if(empty($_POST["email"]))
          {
              $errorEmail = '<style type="text/css">
              #errorEmail {
              visibility: visible;
              }
			  #email
			  {
				  border-color: red;
			  }
              </style>';  
               $dalje = 0; 
          }
          else{
    
               $email = test_input($_POST["email"]);
              if(validateEmail($email)){
    
               }
               else {
                    $errorEmail = '<style type="text/css">
                    #errorEmail {
                    visibility: visible;
                    }
					#email
					{
						border-color: red;
					}
                    </style>'; 
                     $dalje = 0; 
               }
          }
		  
		  if(empty($_POST["kod"]))
          {
              $errorKod = '<style type="text/css">
              #errorKod {
              visibility: visible;
              }
			  #kodslike
			  {
				  border-color: red;
			  }
              </style>';  
               $dalje = 0; 
          }
          else{
    
               $kod = test_input($_POST["kod"]);
              if(validateCode($kod)){
               }
               else {
                    $errorKod = '<style type="text/css">
                    #errorKod {
                    visibility: visible;
                    }
					#kodslike
					{
						border-color: red;
					}
                    </style>'; 
                     $dalje = 0; 
               }
          }
		  
		  
		  if(empty($_POST["kod1"]))
          {
              $errorKod1 = '<style type="text/css">
              #errorKod1 {
              visibility: visible;
              }
			  #kodslike1
			  {
				  border-color: red;
			  }
              </style>';  
               $dalje = 0; 
          }
          else{
    
               $kod1 = test_input($_POST["kod1"]);
              if($kod==$kod1){
    
               }
               else {
                    $errorKod1 = '<style type="text/css">
                    #errorKod1 {
                    visibility: visible;
                    }
					#kodslike1
					{
						border-color: red;
					}
                    </style>'; 
                     $dalje = 0; 
               }
          }
		  
		  
    
          if(empty($_POST["poruka"])){
             $errorPoruka = '<style type="text/css">
              #errorPoruka {
              visibility: visible;
              }
              </style>';  
               $dalje = 0; 
          }
          else{
    
               $poruka = test_input($_POST["poruka"]);
          }
		  
	
          }
		  
		  
		 function test_input($data) 
      {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
      }
	  
      function validateEmail($email){
          if(filter_var($email, FILTER_VALIDATE_EMAIL)) return true;
          else return false;
      }
    
      function validateName($name){
          if(preg_match("/^[a-zA-Z ]*$/",$name)) return true;
          else return false;
      }
	  
	  function validateCode($kod)
	  {
		  if( $kod == "aZ09AN11" )
		  {
			  return true;
		  }
		  else return false;
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
			Kontaktirajte nas putem navedenih brojeva telefona,<br>
			
			<br>

			Tel: +61 328 795<br>

			Fax: +385 52 852 269<br>
			
			<br>
			
			Putem e-mail-a:<br>
			
			<br>

			E-mail: aluckin1@etf.unsa.ba<br>
			
			<br>
			
			Igmanske oluje, 17<br>
			71000, Sarajevo.<br>
			Za slanje privatne poruke vlasnicima na sajtu, molimo popunite sljedeci formular:<br>
		</p>
		</div>
		<div class="Forma"> 
		<form name="KontaktForma" id="formavalidiranje" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		<ul>
		<li>Ime:</li>
		<li>Mjesto:</li>
		</ul><br>
		<input type="text" name="ime" id="ime" class="input" value="<?php 
										if(isset($_REQUEST['ime']))
                                       print $_REQUEST['ime'];
                                   ?>"/>
								   <span><?php echo $errorIme ?></span>
		<img id="errorIme" class="Greska" src="Slike/error.jpg" alt="image">
		<input type="text" name="mjesto" id="mjesto" class="input" value="Ne morate unositi!"/>
		<ul id="druginiz">
		<li>Prezime:</li>
		<li>Opcina:</li>
		</ul><br>
		<input type="text" name="prezime" id="prezime" class="input" value="<?php 
										if(isset($_REQUEST['prezime']))
                                       print $_REQUEST['prezime'];
                                   ?>" />	
		<input type="text" name="opcina" id="opcina" class="input" value="Ne morate unositi!" />		
		<p>
		E-mail:
		</p> 
		<input type="text" name="email" id="email" class="input" value="<?php 
										if(isset($_REQUEST['email']))
                                       print $_REQUEST['email'];
                                   ?>"/>
								   <span><?php echo $errorEmail ?></span>
		<img id="errorEmail" class="Greska" src="Slike/error.jpg" alt="image">
		<p>
		<img id="Kod" src="Slike/Kod.jpg" alt="image">
		Unesite kod sa slike:
		</p> 
		<input type="text" name="kod" id="kodslike" class="input" value="<?php 
										if(isset($_REQUEST['kod']))
                                       print $_REQUEST['kod'];
                                   ?>" />
								   <span><?php echo $errorKod ?></span>
		<img id="errorKod" class="Greska" src="Slike/error.jpg" alt="image">
		<p>
		Ponovite kod:
		</p>
		<input type="text" name="kod1" id="kodslike1" class="input" value="<?php 
										if(isset($_REQUEST['kod1']))
                                       print $_REQUEST['kod1'];
                                   ?>"/>
								   <span><?php echo $errorKod1 ?></span>
		<img id="errorKod1" class="Greska" src="Slike/error.jpg" alt="image">
		<p>
		Poruka:
		</p> 
		<textarea name="poruka" class="input" rows="4" cols="50"><?php 
										if(isset($_REQUEST['poruka']))
                                       print $_REQUEST['poruka'];
                                   ?></textarea>
								   <span><?php echo $errorPoruka ?></span>
		<img id="errorPoruka" class="Greska" src="Slike/error.jpg" alt="image" />	
		<br>
		<br>
		<input type="submit" value="Posalji"/> <!--onclick="validirajFormu();"--> 
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

<?php

		  	if($dalje){
			echo "
             <script type=\"text/javascript\">
           var e = document.getElementById('formavalidiranje'); e.action='pripremazaslanje.php'; e.submit();
           </script>
           ";
          } 

?>

