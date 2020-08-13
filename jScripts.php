<script src="js/jquery-1.7.2.js"></script>
<script>
$(document).ready(function(){ 
var $carrousel = $('#slider'), // on cible le bloc du carrousel
	$img = $('#slider img'), // on cible les images contenuesdans le carrousel 
	indexImg = $img.length - 1, // on définit l'index du dernierélément
	i = 0, // on initialise un compteur
	$currentImg = $img.eq(i); // enfin, on cible l'image courante,qui possède l'index i (0 pour l'instant)
	$currentImg.css('display', 'block');
		
	function slideImg()
	{
		setTimeout(function()
		{ // on utilise une fonction anonyme
			if(i < indexImg){ // si le compteur est inférieur au dernier index
				i++; // on l'incrémente
			}
			else{ // sinon, on le remet à 0 (première image)
				i = 0;
			}
			$img.css({
				'display': 'none',
				'width': '978px',
				'height': '420px',
				'marginLeft': '-978px'
			});
			$currentImg = $img.eq(i);
			$currentImg.slideDown().css('marginLeft', '0px');
			// $currentImg.css({'display':'block','margin':'0px'});
			slideImg(); // on oublie pas de relancer la fonction à la fin
		}, 6000); // on définit l'intervalle à 7000 millisecondes (7s)
	}
slideImg(); // enfin, on lance la fonction une première fois
})
</script>


<script src="js/jquery-1.7.2.js"></script>
<script>
$(document).ready(function(){ 

var $carrousel = $('#news'), // on cible le bloc du carrousel
	$img = $('#news img'), // on cible les images contenuesdans le carrousel 
	indexImg = $img.length - 1, // on définit l'index du dernierélément
	i = 0, // on initialise un compteur
	$currentImg = $img.eq(i); // enfin, on cible l'image courante,qui possède l'index i (0 pour l'instant)
	$currentImg.css('display', 'block');
	
	function slideImg()
	{
		setTimeout(function()
		{ // on utilise une fonction anonyme
			if(i < indexImg){ // si le compteur est inférieur au dernier index
				i++; // on l'incrémente
			}
			else{ // sinon, on le remet à 0 (première image)
				i = 0;
			}
			$img.css('display', 'none');
			$currentImg = $img.eq(i);
			$currentImg.css('display', 'block');
			slideImg(); // on oublie pas de relancer la fonction à la fin
		}, 5000); // on définit l'intervalle à 7000 millisecondes (7s)
	}
slideImg(); // enfin, on lance la fonction une première fois

/************ MENU **********/

var $deroul = $('.deroul'),
	$prnt = $('.pushPrnt');
	
$prnt.hover(function() {
	$deroul.css('display', 'none');
	$deroul.slideDown('800', 'swing');
		},
function(){$deroul.hide();});

/********* NAVIGATEUR ***********/
/*$(window).bind('scroll', function() {
	var navHeight = $( window ).height() - 300;
	if ($(window).scrollTop() > navHeight) {
		$('<div />', {
			id : "newNav", // identifiant de l'élément
			css : { // style css de l'élément
				width : $( window ).width()
			}
			// etc...
		});
		$('#newNav').html('<?php include('menu.php');?>');
		$('#newNav').appendTo('body');
		$('#newNav').addClass('fixed');
	}
	else {
		//$('nav').removeClass('fixed');
	}
});*/
}); 
</script>


