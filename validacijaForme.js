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

if(Ime.value=="" || Ime.value==null){

imeslika.style.visibility = 'visible';
Ime.style.borderColor = "red";
alert("Niste unijeli vase ime!");

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
}
}
}
}



}
