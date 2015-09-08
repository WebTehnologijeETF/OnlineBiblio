function validirajFormu(){

var ajax = new XMLHttpRequest();
	
var imeslika = document.getElementById('errorIme');
var emailslika = document.getElementById('errorEmail');
var kodslika = document.getElementById('errorKod');
var kodslika1 = document.getElementById('errorKod1');
var porukaslika = document.getElementById('errorPoruka');
var Ime = document.getElementById('ime');
var Prezime = document.getElementById('prezime');
var Email = document.getElementById('email');
var kodSlike = document.getElementById('kodslike');
var kodSlike1 = document.getElementById('kodslike1');
var Poruka = document.getElementById('poruka');
var tempime = Ime.value;
var tempprezime = Prezime.value;
var tempemail = Email.value;
var tempporuka = Poruka.value;
var tempkod = kodSlike.value;
var tempkod1 = kodSlike1.value;

	var validna=1;
	
    ajax.onreadystatechange = function ()
    {
        if (ajax.readyState == 4 && ajax.status == 200)
        {
			
            var json = ajax.responseText;
            var objekat = JSON.parse(json);
            if (objekat.errorIme)
            {
                imeslika.style.visibility = 'visible';
				Ime.style.borderColor = "red"; 
				validna=0;
            } else 
			{
				imeslika.style.visibility = 'hidden';
				Ime.style.borderColor = "transparent";				
			}
            if (objekat.errorEmail)
            {
                emailslika.style.visibility = 'visible';
				Email.style.borderColor = "red"; 
				validna=0;
            } else {
				
				emailslika.style.visibility = 'hidden';
				Email.style.borderColor = "transparent"; 
				
			}
            if (objekat.errorKod)
            {
                kodslika.style.visibility = 'visible';
				kodSlike.style.borderColor = "red"; 
				validna=0;
            } else {
				kodslika.style.visibility = 'hidden';
				kodslike.style.borderColor = "transparent"; 
				}
            if (objekat.errorKod1)
            {
                kodslika1.style.visibility = 'visible';
				kodSlike1.style.borderColor = "red"; 
				validna=0;
            } else {
				kodslika1.style.visibility = 'hidden';
				kodslike1.style.borderColor = "transparent"; 
			}
			if(!validna)
			{
				return;
			}
			else
			{
				validirajFormu1(tempime, tempprezime,tempemail,tempporuka);
			}
        }
        
    }
	ajax.open("GET", "validacijaKontaktForme.php?ime=" + tempime + "&prezime=" + tempprezime + "&email=" + tempemail + "&kod=" + tempkod + "&kod1=" + tempkod1 + "&poruka=" + tempporuka, true);
    //ajax.open("POST", "testni.php",true);
	ajax.send();
}

	function validirajFormu1(tempime, tempprezime,tempemail,tempporuka){
		loadPage('pripremazaslanje.html');
		
		alert("Podaci spremni za slanje!");
	
		document.getElementById('tempime').value=tempime;
		document.getElementById('tempprezime').value=tempprezime;
		document.getElementById('tempemail').value=tempemail;
		document.getElementById('tempporuka').innerHTML=tempporuka;
		document.getElementById('Ime').innerHTML=tempime;
		document.getElementById('Prezime').innerHTML=tempprezime;
		document.getElementById('Email').innerHTML=tempemail;
		document.getElementById('Poruka').innerHTML=tempporuka;
		document.getElementById('imeSlanje').value=tempime;
		document.getElementById('prezimeSlanje').value=tempprezime;
		document.getElementById('emailSlanje').value=tempemail;
		document.getElementById('porukaSlanje').value=tempporuka;
	
	}