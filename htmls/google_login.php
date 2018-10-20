<?php
	require_once(BASE_PATH_ABS."vendor".SEPARATOR."autoload.php");
	
	$gClient = new Google_Client();
	$gClient->setClientId(GOOGLE_CLIENT_ID);
	$gClient->setClientSecret(GOOGLE_CLIENT_SICRET);
	$gClient->setApplicationName("Autotrent");
	$gClient->setRedirectUri(SERVER_WORK_DIRECTORY."google-login");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
	
	
	if(isset($_GET['code'])) {
	
        $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
        
        $oAuth = new Google_Service_Oauth2($gClient);

        $data = $oAuth->userinfo_v2_me->get();

        echo '<pre>';
        print_r($data);
        echo '</pre>';

	}

	$loginURL = $gClient->createAuthUrl();
?>

	<input  type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Вход с помощью Google">
		

	
