<!DOCTYPE html>
<head>
	<meta name="description" content="AMCAV | Association des Mamans Chrétiennes pour l'Assistance Aux Vulnérables" />
	<meta name="keywords" content="Genre, Agropastorale, Protection et Droits Humains, Formation et Information" />
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/amcav.css" />
	<link rel="stylesheet" href="css/polices.css" />
	<link rel="stylesheet" href="css/details.css" />
	<link rel="shortcut icon" href="image/amcav_logo.jpg" />

	<title>AMCAV| Contacts</title>

<?php include('template/ie_compatibilite.html');?>
</head>

<body>
<div id="page">

<?php include('template/head.php');?>

<section>
	<div class="erreur">
				<?php include('verification.php');?>
			</div>
<div class="content">
			
	<div class="banner"><h1>Contacts</h1></div>
		<div class="adress">
			<div class="grid_5">
				<div class="head">Adresse:</div>
					<address>
						R.D.Congo, Sud-Kivu <br>Uvira, Q.Kimanga <br>Av.Des Pionniers, No.3
					</address>
			</div>

			<div class="grid_5">	  
				<div class="head">Téléphone:</div>
					(+243) 99 41 900 83  <br>(+243) 81 31 833 74 <br>(+243) 85 33 484 43
			</div>
    
			<div class="grid_5">
				<div class="head">E-mail:</div>
					<div class="mail">
						<a href="mailto:amcavong_femmes@yahoo.fr">amcavong_femmes@yahoo.fr</a><br/>
						<a href="mailto:ntumbabernadette@yahoo.fr">ntumbabernadette@yahoo.fr</a>
					</div>
			</div>
			
		</div>
			<div style='clear:both'></div>
		<div class="contac">
					
			<form action="" id="contact-form" method="POST">
               <fieldset>
                    <label class="name">Nom:
                      <input type="text" name="name" placeholder="Name:" value="" data-constraints="@Required @JustLetters" />
                      <span class="empty-message"></span>
                      <span class="error-message"></span>
                    </label>
                   
                    <label class="email">E-mail:
                      <input type="text" name="email" placeholder="E-mail:" value="" data-constraints="@Required @Email" />
                      <span class="empty-message"></span>
                      <span class="error-message"></span>
                    </label>
					
                    <label class="phone">Téléphone:
                      <input type="text" name="phone" placeholder="Phone:" value="" data-constraints="@Required @JustNumbers" />
                      <span class="empty-message"></span>
                      <span class="error-message"></span>
                    </label>
                   <br/>
				   
                    <label class="message">Message:
                      <textarea name="message" placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                      <span class="empty-message"></span>
                      <span class="error-message"></span>
                    </label>
                    
                    <div>
                      <input class="btn" type="submit" name="bouton" value='Send e-mail'/>
                    </div>
                  </fieldset> 
						<div class="modal-body" style="display:none;">
                          Votre message a été envoyé!!!!!                        
						      
						</div>
                   <!--<p>
						<?php include('visiteurs.php');?>
				</p>-->
	
			</form>
            </div>
   </div>
   
   </section>
  </div>
<?php include('jScripts.php');?>
<footer>
<div id="contact">
Contactez-nous via: 
			<a href="#" class="normaltip"><img src="image/icon1.gif" title="Facebook"></a>
			<a href="#" class="normaltip"><img src="image/icon2.gif" title="Twitter"></a>
			<a href="#" class="normaltip"><img src="image/icon3.gif" title="Linkedin"></a>      
</div>

<hr/>
<p>		  
	&copy; Copyright 2016 <a href=http://"www.amcav.site88.net">Amcav</a> Tous droits réservés<br/>
	Designed by <a href="mailto:amissi.hassan@facebook.com">Jospin Amissi</a>
</p>
	
</footer>
  
  </body>
  </html>