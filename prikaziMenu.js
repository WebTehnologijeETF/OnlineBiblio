var item = document.getElementById('padajuci');
var item2= document.getElementById('padajucipodmenu');

item.style.visibility = 'hidden';
item2.style.visibility = 'hidden';

var prikaziMenu = function () {
    item.style.visibility = 'visible';
}

var sakrijMenu = function (){
    item.style.visibility = 'hidden';
}

var prikaziPodMenu = function() {
item.style.visibility='visible';
item2.style.visibility='visible';
}

var sakrijPodMenu = function() {
item2.style.visibility='hidden';
}


