<?php
	if(isset($_GET['oldal'])) {
	
		switch($_GET['oldal']) {
			case 'home' : $tartalom="home.html"; break;
			case 'gallery' : $tartalom="gallery.html"; break;
			case 'table' : $tartalom="table.html"; break;
			case 'ima' : $tartalom="ima.html"; break;
			case 'jezus' : $tartalom="jezus.html"; break;
			case 'szentek' : $tartalom="szentek.html"; break;
			default	: $tartalom="index.html"; break;
		}
	} else {
		$tartalom="home.html";
	}
	include("index.html");
	
?>