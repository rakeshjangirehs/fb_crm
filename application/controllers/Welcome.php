<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;
use FacebookAds\Object\AdAccount;
use FacebookAds\Object\Campaign;
use FacebookAds\Object\Fields\CampaignFields;

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();

		$this->app_id					=	$this->config->item('app_id');
		$this->app_secret 				=	$this->config->item('app_secret');
		$this->access_token	=	$this->config->item('app_system_access_token');
	}

	public function index()
	{		
		// $this->load->view('welcome_message');

		Api::init($this->app_id, $this->app_secret, $this->access_token);

	}
}
