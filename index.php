<?php
	include_once 'dom.php';
	$dsa=file_get_html("home.php");
	@$uim = $_COOKIE['ui_mode'];
	if ($uim==null) $uim='light';
	$dark = [
		'm'=>null,
		't'=>'Dark'
	];
	$light = [
		'm'=>0,
		't'=>'Light'
	];
	@$dsa->find(".dark",0)->disabled= ${$uim}['m'];
	@$dsa->find("button", 0)->innertext=${$uim}['t'];
	//echo $_COOKIE['ui_mode'];
	echo $dsa;