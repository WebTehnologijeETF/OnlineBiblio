function refresuj()
{
	setInterval(dodajNovosti, 10000);
}
			
function dodajNovosti(){
	
	
	var ajax = new XMLHttpRequest();
	
	 ajax.onreadystatechange = function ()
    {
        if (ajax.readyState == 4 && ajax.status == 200)
        {
			
            var json = ajax.responseText;
            var objekat = JSON.parse(json);
			var lijevidiv = "";
			var i;
			var brojac=true;

			for(i=0; i<objekat.novosti.length ;i++ ) 
				{
					if(brojac==false)
					{
						brojac=true;
						continue;
					}
					
					
					var id = objekat.novosti[i].id;
							
							var opsirnije="";
					 		var opisNovosti = objekat.novosti[i].tekst;
					 		var detaljanOpisNovosti = objekat.novosti[i].opsirno;
							var bool = true;
							
							if(detaljanOpisNovosti == null){
					 		bool = false;
							}
							var vrijeme = objekat.novosti[i].vrijeme2;
					 		var dateTime = timeConverter(vrijeme);
					 		var autorNovosti = objekat.novosti[i].autor;
					 		var naslovNovosti = objekat.novosti[i].naslov;
					 		var slikaNovosti = objekat.novosti[i].slika;
					
							if(bool == true)
					 		{
								opsirnije = "<a onclick=\"loadPage('detaljanprikaz.php?dateTime="+ dateTime + "&autor=" + autorNovosti + "&naslov="+ naslovNovosti + "&opis=" + opisNovosti + "&detOpis=" + detaljanOpisNovosti + "&slika=" + slikaNovosti + "');\" >Opsirnije...</a>";		
					 		}
							
							lijevidiv = lijevidiv +  "<div class = \"Ponuda\"><h1> "
							+ naslovNovosti + "<span>(by " + autorNovosti + ")</span></h1>" + 
					 		"<img src = \"" + slikaNovosti + "\" alt=\"Smiley face\">" + 
								"<div class=\"ukratko\">" + 
								"<p>" + opisNovosti + "</p>" + 
								"<h3>15 KM</h3>" + 
								"<div class=\"kupi\"><a href=\"#\">Kupi</a></div>" +
								"<div class=\"detaljnije\">" + opsirnije + "</div>" + 
								"</div> " + 
								"<div><p id=\"datumObjave\">Datum objave: " + dateTime + "</p></div>" + 
								 "<div>-------------------------------------------------------------</div>" ;
								
								
							var ajax1 = new XMLHttpRequest();
	
							ajax1.onreadystatechange = function ()
								{
							if (ajax1.readyState == 4 && ajax1.status == 200)
							{
								
							
							var json1 = ajax1.responseText;
							var objekat1 = JSON.parse(json1);
							var k;
							var brojKomentara=0;
							var broj=0;

							for(k = 0; k<objekat1.komentari.length; k++)
							{
								broj = objekat1.komentari[k].novost;
								if(id == broj)
								{
									brojKomentara++;
								}
							}
							lijevidiv = lijevidiv + "<div id=\"paragraf\" onclick=\"prikaziKomentar('komentari" + id + "');\">Broj komentara: " + brojKomentara + "</div>";
							lijevidiv= lijevidiv + "<div id=\"komentari" + id + "\" class=\"komentari\">";
							var j=0;
							var sadasnjiDatum="";
							for(j=0; j<objekat1.komentari.length; j++){
							var vrijemedole = objekat1.komentari[j].vrijeme2;
							sadasnjiDatum = timeConverter(vrijemedole);
							
							lijevidiv = lijevidiv + "<div>-------------------------------------------------------------</div>" + 
							"<div id=\"komentar" + objekat1.komentari[j].id + "\" class=\"komentar\">" + 
							"<div>Datum objave: </div>" + sadasnjiDatum + "<br><br> <div id=\"autor\" class=\"autor\">Autor: " + 
							objekat1.komentari[j].autor + "</div><br> <div id=\"mail" + objekat1.komentari[j].id +
							"\" class=\"mail\">Email: </div>"  + objekat1.komentari[j].email + "<br><br>" +
							"<div>Komentar:</div>" + objekat1.komentari[j].tekst + "</div>";
							  }
							  
							  
							  
								}
								
								
								}
									ajax1.open("GET", "ucitavanjeKomentara.php", true);
									ajax1.send();
								
								
								
								lijevidiv = lijevidiv  +
								"<div>-------------------------------------------------------------</div>" +
								 "<form id=\"formaKomentara\" method=\"post\">" + 
								"<p>Dodajte vaš komentar:</p>" + 
								"<input id = \"id\" name =\"id\" value = \""+ id + "\" type = \"hidden\">" + 
								"<p>Ime:</p>" +
								"<input type=\"text\" name=\"autor\" id=\"autor" + id + "\" class=\"input\" placeholder=\"Unesite ime ovdje...\"/>" + 
								"<p>Email:</p>" +    
								"<input type=\"text\" name=\"email\" id=\"email" + id + "\" class=\"input\" placeholder=\"Unesite email ovdje...\"/>" + 
								"<p>Komentar:</p>" + 
								"<textarea name=\"poruka\" id=\"poruka" + id + "\" class=\"input\" rows=\"3\" cols=\"30\" placeholder=\"Unesite tekst ovdje...\"></textarea>" +
								
								"<button type=\"submit\">Komentiraj</button>" +
								"<button type=\"reset\">Ponisti</button>" + 
								  " </form>" + "</div>";
							
								
								brojac=false;
					
					}
					document.getElementById('Novosti_lijevo').innerHTML= lijevidiv;
		}
        
    }
	ajax.open("GET", "ucitavanjeNovosti.php", true);
	ajax.send();
	
}



function timeConverter(UNIX_timestamp){
  var a = new Date(UNIX_timestamp * 1000);
  var months = ['01','02','03','04','05','06','07','08','09','10','11','12'];
  var year = a.getFullYear();
  var month = months[a.getMonth()];
  var date = a.getDate();
  var hour = a.getHours();
  var min = a.getMinutes();
  var sec = a.getSeconds();
  
  if(date==1 || date == 2 || date==3 || date==4 || date==5 || date==6 || date==7 || date==8 || date==9){
	  date="0"+date;
  }
  
  
  var time = date + '.' + month + '.' + year + '. ' + hour + ':' + min + ':' + sec ;
  return time;
}


