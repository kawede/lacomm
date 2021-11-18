<?php

$url='';
if(isset($_GET['url']))
{
	$url=explode('/', $_GET['url']);
}

if($url== '')
{
	require 'box_pages/home.php';
}


else
{
	require 'box_pages/404.php';
}
