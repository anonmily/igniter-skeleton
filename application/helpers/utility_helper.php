<?php

function asset_url(){
   return base_url();
}

function cleanhtml($html){
	/*
	$dom = new DOMDocument();
	$dom->loadHTML($html);
	$script = $dom->getElementsByTagName('script');
	$remove = array();
	foreach($script as $item)
	{
	  $remove[] = $item;
	}
	foreach ($remove as $item)
	{
	  $item->parentNode->removeChild($item); 
	}
	$html = $dom->saveHTML();
	*/
	return html_escape($html);
}

?>