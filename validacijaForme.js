function validirajFormu(){

var imeslika = document.getElementById('errorIme');
var emailslika = document.getElementById('errorEmail');
var kodslika = document.getElementById('errorKod');
var kodslika1 = document.getElementById('errorKod1')
var porukaslika = document.getElementById('errorPoruka');
var Ime = document.getElementById('ime');
var Email = document.getElementById('email');
var kodSlike = document.getElementById('kodslike');
var kodSlike1 = document.getElementById('kodslike1');
var upomoc=0;

if(Ime.value=="" || Ime.value==null){

imeslika.style.visibility = 'visible';
Ime.style.borderColor = "red";
alert("Niste unijeli vase ime!");
return;

}
else {

imeslika.style.visibility = 'hidden';
Ime.style.borderColor = "transparent";
}

if(Email.value=="" || Email.value==null){

emailslika.style.visibility = 'visible';
Email.style.borderColor = "red";
if(Ime.value != ""){
alert("Niste unijeli vas email!");
return;
}

}
else {

emailslika.style.visibility = 'hidden';
Email.style.borderColor = "transparent";

}

var patt = new RegExp(".+(@).+(\.).+(\..+)?");

if(Email.value != ""){
var provjera = Email.value;
var res = patt.test(provjera);
if(res == false){
emailslika.style.visibility = 'visible';
Email.style.borderColor = "red";

if(Ime.value != ""){

alert("Niste unijeli ispravnu email adresu!");
return;
}

}
else {

emailslika.style.visibility = 'hidden';
Email.style.borderColor = "transparent";

}
}

if(kodSlike.value=="" || kodSlike1.value==""){

kodslika.style.visibility = 'visible';
kodSlike.style.borderColor = "red";

kodslika1.style.visibility = 'visible';
kodSlike1.style.borderColor = "red";
if(Ime.value != ""){
if(Email.value!="")
{
alert("Niste unijeli kod!");
return;
}
}


}
else{
kodslika.style.visibility = 'hidden';
kodSlike.style.borderColor = "transparent";

kodslika1.style.visibility = 'hidden';
kodSlike1.style.borderColor = "transparent";
}



if(kodSlike.value!="" && kodSlike1.value!="")
{

if(kodSlike.value == "aZ09AN11")
{
if(kodSlike.value == kodSlike1.value)
{
kodslika.style.visibility = 'hidden';
kodSlike.style.borderColor = "transparent";

kodslika1.style.visibility = 'hidden';
kodSlike1.style.borderColor = "transparent";

upomoc=1;

}
else
{
kodslika.style.visibility = 'visible';
kodSlike.style.borderColor = "red";

kodslika1.style.visibility = 'visible';
kodSlike1.style.borderColor = "red";

if(Ime.value != ""){
if(Email.value!="")
{
alert("Kodovi vam se ne poklapaju!");
return;
}
}
}

}
else
{
kodslika.style.visibility = 'visible';
kodSlike.style.borderColor = "red";

kodslika1.style.visibility = 'visible';
kodSlike1.style.borderColor = "red";

if(Ime.value != ""){
if(Email.value!="")
{
alert("Niste unijeli tacno kod sa slike!");
return;
}
}
}
}

if(upomoc==1){
var Opcina = document.getElementById('opcina').value;

var Mjesto = document.getElementById('mjesto').value;


var pomocniServis = "http://zamger.etf.unsa.ba/wt/mjesto_opcina.php?opcina=" + Opcina + "&mjesto=" + Mjesto;


if (Mjesto.length == 0 || Mjesto==null) {
  
      alert("Niste unijeli vase mjesto!");
    }
    
else if (Opcina.length == 0 || Opcina==null) {
        
	alert("Niste unijeli vasu opcinu!");  
    }   
else
{
   

var x = new XMLHttpRequest();

x.onreadystatechange = function () {
        
if (x.readyState == 4 && x.status == 200) {
            
	var o = JSON.parse(x.responseText);

	if (o.hasOwnProperty('greska')) {                
                
	alert(o.greska);
            
		}
        
		}
        
if (x.readyState == 4 && x.status == 404)
 
alert("Error 404!");  
}
   
 	x.open("GET", pomocniServis, true);
    
	x.send();   
} 

}

}
