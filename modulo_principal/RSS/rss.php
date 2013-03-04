<?php

require('../modelo/conexion.php');
require('../modelo/bd_casas.php');

function newsEU(){

	$news = array();	

	$newsTitle = array();
	$newsLink = array();

	$xml=("https://news.google.es/news/feeds?pz=1&cf=all&ned=es&hl=es&q=Turismo+Rural&output=rss");

	$xmlDoc = new DOMDocument();
	$xmlDoc->load($xml);

	$x=$xmlDoc->getElementsByTagName('item');
	for ($i=0; $i<=19; $i++){
		$item_title=utf8_decode($x->item($i)->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue);
		$item_link=utf8_decode($x->item($i)->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue);

		$newsTitle[i]= $item_title;
		$newsLink[i] = $item_link;
	}
	
	$news[0]= $newsTitle;
	$news[1]= $newsLink;
	
	return $news;
}

function casasRSS(){

	$xml=("http://feeds.feedburner.com/desdeasturias/asturias/casas-rurales?format=xml");

	$xmlDoc = new DOMDocument();
	$xmlDoc->load($xml);

	$x=$xmlDoc->getElementsByTagName('item');
	for ($i=0; $i<=8; $i++){
		$item_title=$x->utf8_decode(item($i)->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue);
		$item_desc=$x->utf8_decode(item($i)->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue);
		
		//DESCRIPCION
		$inidesc = strpos($item_desc, "rutas, que hacer, que ver, playas, gastronomia, eventos, fiestas, museos asturias");
		$desc = substr($item_desc, $inidesc );
		
		//IMAGE
		$iniimg = strpos($item_desc, "http://desdeasturias.com/imagenes/")+34;
		$finimg = strpos($item_desc, ".jpg&amp");
		$posfin = $finimg - $iniimg;
		$nomimg = substr($item_desc, $iniimg, $posfin);
		$img = 'http://desdeasturias.com/imagenes/'.$nomimg.'.jpg';
	}
}

?>
