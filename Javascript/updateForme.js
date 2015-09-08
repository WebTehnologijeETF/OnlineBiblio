function validirajFormu(){
	
	var ajax = new XMLHttpRequest();
	
var imeslika = document.getElementById('errorIme');
var emailslika = document.getElementById('errorEmail');
var Ime = document.getElementById('tempime');
var Prezime = document.getElementById('tempprezime');
var Email = document.getElementById('tempemail');
var Poruka = document.getElementById('tempporuka');
var tempime = Ime.value;
var tempprezime = Prezime.value;
var tempemail = Email.value;
var tempporuka = Poruka.value;
var tempkod = "aZ09AN11";
var tempkod1 = "aZ09AN11";

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
			if(!validna)
			{
				return;
			}
			else
			{			
						
			validirajFormu1(tempime, tempprezime, tempemail, tempporuka);
				
			}
        }
        
    }
	ajax.open("GET", "validacijaKontaktForme.php?ime=" + tempime + "&prezime=" + tempprezime + "&email=" + tempemail + "&kod=" + tempkod + "&kod1=" + tempkod1 + "&poruka=" + tempporuka, true);
	ajax.send();
	
	
}

function validirajFormu1(tempime, tempprezime,tempemail,tempporuka){
		
		alert("Uspjesno updateovana forma!");
	
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