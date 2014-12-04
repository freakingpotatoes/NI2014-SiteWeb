<?php 
session_start();
?>

!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Insert title here</title>
</head>
<frameset>
    <frame>
    <frame>
    <noframes>
    <body>
    <p>This page uses frames. The current browser you are using does not support frames.</p>
    <?php
    	// inclusion du corps de la page
        switch (isset($_POST[$i])){
    	case 'accueil':
    		include 'accueil.php';
    	break;
    	
    	case 'contact':
    		include 'contact.php';
    	break;
    	
    	case 'galerie':
    		include 'Galerie.php';
    	break;
    	
    	case 'geolocalisation':
   		 	include 'Geolocalisation.php';
    	break;
    	
    	case 'news':
    		include 'news.php';
    	break;
    	
    	case 'temoignage':
    		include 'temoignages.php';
    	break;
    	
    	case 'trombinoscope':
    		include 'trombinoscope.php';
    	break;
    	
    	default:
    		include 'accueil.php';
    	break;
    	
    }
    
	?>
    </body>
    </noframes>
</frameset>
</html>