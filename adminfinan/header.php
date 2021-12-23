<!DOCTYPE html>
<html dir="ltr" lang="pt-br">
<head>
    <meta charset="utf-8">
    <title><?php echo $conf_titulo?></title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>



	<style>.art-content .art-postcontent-0 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
	.ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
	.ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }

	</style>
</head>
<body>

<div id="art-main">
	<header class="art-header">

		<div class="art-shapes">
			
		</div>

		<h1 class="art-headline">
			<a href="">Controle Financeiro</a>
		</h1>

	</header>

	<nav class="art-nav">
		<ul class="art-hmenu">
<?php
		if (!$logado){
?>
			<li>
				<a href="" class="active">Você não está logado.</a>
			</li>
<?php 
		}
		else{
?>
			<li>
				<a href="" class="active">Olá Juliano</a>
			</li>
			<li>
				<a href="" class="active">Logout</a>
			</li>
<?php 
		}
?>
		</ul> 
	</nav>