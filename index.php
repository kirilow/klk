<?php
	ini_set("zlib.output_compression", 0);
	
//	if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')){
//		ob_start("ob_gzhandler");
//	}else{
//		ob_start();
//	}
	
	require_once 'config.php';
	
	require_once 'router.php';
	
	require_once 'htmls/header/header.php';
	require_once 'htmls/'.$page.'.php';
	require_once 'htmls/footer/footer.php';
