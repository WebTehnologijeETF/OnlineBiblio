function prikaziKomentar(parametar){
var komentari= document.getElementById(parametar);	
	
	if(komentari.style.visibility == 'visible'){
	komentari.style.visibility = 'hidden';
	komentari.style.position = 'absolute';
	}
	else
	{
	komentari.style.visibility = 'visible';
	komentari.style.position = 'initial';

	}
	
}