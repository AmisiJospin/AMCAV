$(document).ready(function(){ 
	//$('#onglets').css('display', 'block');
	
	$('.onglet_2005').css('display', 'none');	//on cache les elements des onglets
	
	var $btnRadio = $('#lien_js input[type="radio"]'),
		$btn_ch = $('#lien_js input[type="radio"]:checked'),
		$onglets = $('#onglets tr'),
		$liens = $('#lien'),
		$liens_js = $('#lien_js'),
		$identifiant = '';
		
	$onglets.css('display', 'none');	//on cache tout le tableau des onglets
	$btnRadio.css('display', 'none');	//on cache les bouttons Radio
	
	$liens.css('display', 'none');	//on cache les liens qui fonctionnent sans JavaScript
	$liens_js.css('display', 'block');	//on montre les liens prevus pour le JavaScript
	
	//Affichage de l'onglet 2005
	$valeur = $btn_ch.val(); //alert('#onglets .onglet_'+$valeur);
	$('#onglets .onglet_'+$valeur).css('display', 'block');

	//fonction pour montrer les onglets au clic des bouttons radio via leurs Labels
	$btnRadio.click(function(){	
		$('#lien_js li').removeClass('panneau');	//on prend soin d'effacer les proprietes CSS des bouttons d'onglet
		$('input[name="lien"]').removeClass('rad');	//on prend soin de vider la reference pour selection des parent onglet (voir plus bas avec JavaScript Traditionnel)
		
		$('[class*="onglet_"]').css('display', 'none');	//on cache l'onglet courant avant clic.
		
		$valeur = $($btnRadio+'[name="lien"]:checked').val();	
		$($btnRadio+'[name="lien"]:checked').addClass('rad');
		
		var rad = document.getElementsByClassName('rad'),
			label = rad[0].parentNode,
			li = label.parentNode;	//la ligne li selectionnee pour lui donner la class 'panneau'
		
		li.className='panneau';
		
		$('#onglets .onglet_'+$valeur).css('display', 'block');	//on affiche l'onglet selectionnE
		
		//reinitialisation des variables pour eviter la confusion des parents
		rad="";
		label="";
		li="";
	});
});