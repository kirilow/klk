<!DOCTYPE html>
<html lang="en">
    <head>
		<title><?=$page_title . ' | '.DOMAIN_NAME;?></title>
		
		<!-- Favicons-->
		<link rel="apple-touch-icon" href="/pub/images/favicon/apple-touch-icon.png" sizes="180x180">
		<link rel="icon" href="/pub/images/favicon/favicon-32x32.png" sizes="32x32" type="image/png">
		<link rel="icon" href="/pub/images/favicon/favicon-16x16.png" sizes="16x16" type="image/png">
		<link rel="manifest" href="/pub/images/favicon/manifest.json">
		<link rel="mask-icon" href="/pub/images/favicon/safari-pinned-tab.svg" color="#563d7c">
		<link rel="icon" href="/pub/images/favicon/favicon.ico">
		<meta name="theme-color" content="#563d7c">
		
		
		
		
		<noscript id="deferred-styles" >
			<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
			<link type="text/css" rel="stylesheet" href="/pub/css/main.css"  media="screen"/>
		</noscript >
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<script>
			var loadDeferredStyles = function() {
			  var addStylesNode = document.getElementById("deferred-styles");
			  var replacement = document.createElement("div");
			  replacement.innerHTML = addStylesNode.textContent;
			  document.body.appendChild(replacement)
			  addStylesNode.parentElement.removeChild(addStylesNode);
			};
			var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
				window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
			if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
			else window.addEventListener('load', loadDeferredStyles);
		</script>
    </head>

    <body>
		<main>
			<div id="my_navbar" class="navbar-fixed">
				<nav  class="nav-extended" role="navigation">
					<?php
						require_once 'first_row_header.php';
						require_once 'second_row_header.php';
					?>
				</nav>
			</div>
			
			<?php
				$page_container = 'page_container';
				if( !in_array($page, Common::PAGE_WITHOUT_LEFT_MENU) ){
					require_once 'left_menu.php';
				}else{
					$page_container = 'container';
				}
			?>
			<div class="row <?= $page_container ;?>">
				<div class="col m12 page_content">

