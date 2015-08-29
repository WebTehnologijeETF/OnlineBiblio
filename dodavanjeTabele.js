function dodajTabelu() {
var ucitano=new XMLHttpRequest();
ucitano.onreadystatechange=function(){
var prvidio = '<img src="';
var drugidio = '" alt="image">';

        if (ucitano.readyState == 4 && ucitano.status == 200)
        {   
            var podatak=JSON.parse(ucitano.responseText) ;
             
            var tabela1=document.getElementById("tabela") ;
            while(tabela1.rows.length > 9) {
                  tabela1.deleteRow(9);

          }

	for(var i=0; i<podatak.length; i++)
            {
                var red=tabela1.insertRow();     
                var prva = red.insertCell(0);
                var druga = red.insertCell(1);
                var treca = red.insertCell(2);
                var cetvrta = red.insertCell(3);
		var peta = red.insertCell(4)


               prva.innerHTML = podatak[i].id;
               druga.innerHTML = podatak[i].opis;
               treca.innerHTML = podatak[i].naziv;
               cetvrta.innerHTML = prvidio + podatak[i].slika + drugidio;
		peta.innerHTML = podatak[i].cijena;

            }
        }
    }
 
ucitano.open("GET", "http://zamger.etf.unsa.ba/wt/proizvodi.php?brindexa=16045", true);
ucitano.send();





}

function dodajProizvod()
{
var Naziv=document.getElementById("naziv").value;

var Opis=document.getElementById("opis").value;

var Slika=document.getElementById("slika").value;

var Cijena = document.getElementById("cijena").value 

if(Naziv=="" || Naziv==null)
{
alert("Unesite naziv knjige!");
return;
}

if(Opis=="" || Opis==null)
{
alert("Unesite zanr knjige!");
return;
}

if(Slika=="" || Slika==null)
{
alert("Unesite url slike knjige!");
return;
}

if(Cijena=="" || Cijena==null)
{
alert("Unesite cijenu knjige!");
return;
}

if(isNaN(Cijena)==true)
{
alert("Unesite brojeve kao cijenu!");
return;
}

var pro={naziv:Naziv, opis:Opis, slika:Slika, cijena:Cijena};

var x= new XMLHttpRequest();
    x.onreadystatechange = function(event) {
        if (x.readyState == 4 && x.status == 200)
        {
		event.preventDefault();
		alert("Uspjesno dodana knjiga!");
        }
    }
    x.open("POST", "http://zamger.etf.unsa.ba/wt/proizvodi.php?brindexa=16045", true);
    x.setRequestHeader("Content-type","application/x-www-form-urlencoded");
   x.send("akcija=dodavanje&proizvod=" + JSON.stringify(pro)); 

document.getElementById("naziv").value="";

document.getElementById("opis").value="";

document.getElementById("slika").value="";

document.getElementById("cijena").value="";

document.getElementById("id").value="";



}
function izmijeniProizvod()
{

var Id = document.getElementById("id").value;

var Naziv=document.getElementById("naziv").value;

var Opis=document.getElementById("opis").value;

var Slika=document.getElementById("slika").value;

var Cijena = document.getElementById("cijena").value 

if(Naziv=="" || Naziv==null)
{
alert("Unesite naziv knjige!");
return;
}

if(Opis=="" || Opis==null)
{
alert("Unesite zanr knjige!");
return;
}

if(Slika=="" || Slika==null)
{
alert("Unesite url slike knjige!");
return;
}

if(Cijena=="" || Cijena==null)
{
alert("Unesite cijenu knjige!");
return;
}

if(isNaN(Cijena)==true)
{
alert("Unesite brojeve kao cijenu!");
return;
}

var pro={id: Id, naziv:Naziv, opis:Opis, slika:Slika, cijena:Cijena};

var x= new XMLHttpRequest();
    x.onreadystatechange = function() {
        if (x.readyState == 4 && x.status == 200)
        {
		alert("Uspjesno izmijenjena knjiga!");
        }
    }
    x.open("POST", "http://zamger.etf.unsa.ba/wt/proizvodi.php?brindexa=16045", true);
    x.setRequestHeader("Content-type","application/x-www-form-urlencoded");
   x.send("akcija=promjena&proizvod=" + JSON.stringify(pro)); 


document.getElementById("naziv").value="";

document.getElementById("opis").value="";

document.getElementById("slika").value="";

document.getElementById("cijena").value="";

document.getElementById("id").value="";



}

function obrisiProizvod()
{


if(document.getElementById("id").value=="")
{
	alert("Niste unijeli ID!");
return;
}
var id = document.getElementById("id").value;

if(isNaN(id)==true)
{
alert("Neispravan ID!");
return;
}
  
  var podatak = {
        id: id
    }; 

var x= new XMLHttpRequest();
    x.onreadystatechange = function() {
        if (x.readyState == 4 && x.status == 200)
        {
		alert("Uspjesno obrisan proizvod!");
        }
    }


x.open("POST", "http://zamger.etf.unsa.ba/wt/proizvodi.php?brindexa=16045", true);
   x.setRequestHeader("Content-type","application/x-www-form-urlencoded");
   x.send("akcija=brisanje&proizvod=" + JSON.stringify(podatak)); 


document.getElementById("naziv").value="";

document.getElementById("opis").value="";

document.getElementById("slika").value="";

document.getElementById("cijena").value="";

document.getElementById("id").value="";

} 