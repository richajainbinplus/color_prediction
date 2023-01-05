<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	    $data['page_name']="home";
		$this->load->view('index' ,$data);
	}
	public function login()
	{
	    $data['page_name']="home";
		$this->load->view('login', $data);
	}
	public function forgot_password()
	{
	    $data['page_name']="forgot_password";
		$this->load->view('forgot_password', $data);
	}
	public function change_password()
	{
	    $data['page_name']="change_password";
		$this->load->view('change_password', $data);
	}
	public function sign_up()
	{
	    $data['page_name']="sign_up";
		$this->load->view('sign_up', $data);
	}
	public function notification()
	{
	     $data['page_name']='notification';
	     $data['heading']="Notification";
		$this->load->view('notification' , $data);
	}
	public function dashboard()
	{
	    $data['page_name']="home";
		$this->load->view('dashboard' ,$data);
	}
		public function index_parity(){
		$data['page_name']="home";
		$this->load->view('index_parity',$data);
	}
	public function balance_record()
	{
	     $data['page_name']='balance_record';
	     $data['heading']="Apply to Balance Record";
		$this->load->view('balance_record' , $data);
	}
	public function fund_history()
	{
	     $data['page_name']='fund_history';
	     $data['heading']="Fund Transfer History";
		$this->load->view('fund_history' , $data);
	}
	public function fast_record()
	{
	     $data['page_name']='fast_record';
	     $data['heading']="Fast Parity Records";
		$this->load->view('fast_record' , $data);
	}
	public function parity_record()
	{
	     $data['page_name']='parity_record';
	     $data['heading']="Parity Records";
		$this->load->view('parity_record' , $data);
	}
	public function enquiry()
	{
	     $data['page_name']='enquiry';
	     $data['heading']="Enquiry";
		$this->load->view('enquiry' , $data);
	}
	public function fund_transfer()
	{
	     $data['page_name']='fund_transfer';
	     $data['heading']="Fund Transfer";
		$this->load->view('fund_transfer' , $data);
	}
	public function apply_balance()
	{
	     $data['page_name']='apply_balance';
	     $data['heading']="Apply Balance";
		$this->load->view('apply_balance' , $data);
	}
	public function withdrawal()
	{
	     $data['page_name']='withdrawal';
	     $data['heading']="Withdrawal";
		$this->load->view('withdrawal' , $data);
	}
	public function recharge()
	{
	     $data['page_name']='recharge';
	     $data['heading']="Recharge";
		$this->load->view('recharge' , $data);
	}
	public function modal()
	{
	     $data['page_name']='modal';
	     $data['heading']="modal";
		$this->load->view('modal' , $data);
	}

	
}
