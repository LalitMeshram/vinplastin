<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	 public function __construct()
        {
                parent::__construct();
                // load url helper
				$this->load->helper('url');
        }

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function homePage(){
		$this->load->view('UI/header');
		$this->load->view('UI/home/header');
		$this->load->view('UI/home/home');
		$this->load->view('UI/footer');
	}

	public function aboutPage(){
		$this->load->view('UI/header');
		$this->load->view('UI/about/header');
		$this->load->view('UI/about/about');
		$this->load->view('UI/footer');
	}

	public function servicePage(){
		$this->load->view('UI/header');
		$this->load->view('UI/service/header');
		$this->load->view('UI/service/service');
		$this->load->view('UI/footer');
	}

	public function historyPage(){
		$this->load->view('UI/header');
		$this->load->view('UI/history/header');
		$this->load->view('UI/history/history');
		$this->load->view('UI/footer');
	}

	public function workPage(){
		$this->load->view('UI/header');
		$this->load->view('UI/work/header');
		$this->load->view('UI/work/work');
		$this->load->view('UI/footer');
	}

	public function contactPage(){
		$this->load->view('UI/header');
		$this->load->view('UI/contact/header');
		$this->load->view('UI/contact/contact');
		$this->load->view('UI/footer');
	}

}
