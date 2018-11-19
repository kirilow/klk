<?php
	/**
	 * page
	 */
	if (!isset($_GET['p'])) {
		$p = '';
	} else {
		$p = strtolower(rtrim($_GET['p'], '/'));
	}

	/**
	 * action
	 */
	if (!isset($_GET['action'])) {
		$action = '';
	} else {
		$action = strtolower(rtrim($_GET['action'], '/'));
	}

	/**
	 * param
	 */
	if (!isset($_GET['param'])) {
		$param = '';
	} else {
		$param = strtolower(rtrim($_GET['param'], '/'));
		$parameters = explode('/', $param);
	}

	if (isset($_GET['redirectto']) && filter_var($_GET['redirectto'], FILTER_VALIDATE_URL)) {
		$_SESSION['redirectto'] = $_GET['redirectto'];
	}
	$U = FALSE;
	if (isset($_SESSION['user_id'])) {
		$U = new User($_SESSION['user_id']);
		$U->user_id = $_SESSION['user_id'];
		$U->get_user();
	}


	switch ($p) {

		case 'new_tabs':
			$page = 'new_tabs';
			$page_title = 'new tabs';
			$footer_js[] = $page . '.js';
			break;
		
		case 'test-table':
			$page = 'test-table';
			$page_title = 'test-table';
			$footer_js[] = $page . '.js';
			break;
		
		case 'listing':
			$page = 'listing';
			$page_title = 'listing';
			$footer_js[] = $page . '.js';
			break;
		
		case 'login_page':
			$page_title = 'Login page';
			$page = 'login_page';
			break;
		
		case 'google_login':
			$page_title = 'google login';
			$page = 'google_login';
			break;
		
		case 'facebook_login':
			$page = 'facebook_login';
			break;
		
		case 'fb-callback':
			$page = 'fb-callback';
			break;
		
		default:
			$page = 'home';
			$page_title = 'This is the best test server';
			$footer_js[] = $page . '.js';

			break;
	}
	