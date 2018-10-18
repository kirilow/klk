<?php
	$fb = new Facebook\Facebook([
		'app_id' => '559560361154866', // Replace {app-id} with your app id
		'app_secret' => 'fe0c0867b37614d017d72a753b63470e',
		'default_graph_version' => 'v2.2',
	]);
	
	
	if( empty( $accessToken ) ){
		$ttt = $fb->getRedirectLoginHelper()->getLoginUrl("http://testserver-dev.com/facebook_login");
		echo '<a href="'.$ttt.'">Log in with Facebook</a>';
	}
	$accessToken = $fb->getRedirectLoginHelper()->getAccessToken();
	
	if( $accessToken ){
		try {
			$responceUser = $fb->get('/me?fields=id,name,email',$accessToken);
			$responceImage = $fb->get('/me/picture?redirect=false&width=250&height=250',$accessToken);
			$fb_user = $responceUser->getGraphUser();
			$fb_image = $responceImage->getGraphUser();
//			echo " <pre>";
//			print_r( $fb_user );
//			echo " </pre>";
//			echo " <pre>";
//			print_r( $fb_image );
//			echo " </pre>";
//			die("123456789: ");
		} catch (Facebook\Exceptions\FacebookResponseException $e) {
			// When Graph returns an error
			echo 'Graph returned an error: ' . $e->getMessage();
			exit;
		} catch (Facebook\Exceptions\FacebookSDKException $e) {
			// When validation fails or other local issues
			echo 'Facebook SDK returned an error: ' . $e->getMessage();
			exit;
		}
	}
	

//	$helper = $fb->getRedirectLoginHelper();
//	$permissions = ['email']; // Optional permissions
//	$loginUrl = $helper->getLoginUrl('http://testserver-dev.com/facebook_login', $permissions);
//
//	echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
	exit();
	
	
	echo " <pre>";
	print_r( $helper );
	echo " </pre>";
	die("12345678asdfasdf9: ");