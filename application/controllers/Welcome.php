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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('template');
	}
	public function gallery()
	{
		$this->load->view('gallery');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function event()
	{
		$this->load->view('event');
	}
	public function notifications()
	{
		$this->load->view('notifications');
	}
	public function page_lockscreen()
	{
		$this->load->view('page-lockscreen');
	}
	public function page_login()
	{
		$this->load->view('page-login');
	}
	public function page_profile()
	{
		$this->load->view('page-profile');
	}
	public function panels()
	{
		$this->load->view('panels');
	}
	public function tables()
	{
		$this->load->view('tables');
	}
	public function typography()
	{
		$this->load->view('typography');
	}
	public function data_diri()
	{
		$this->load->view('data_diri');
	}
}
