<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donasi extends CI_Controller {

	public function index()
	{
		$data['email01'] = "";
		$data['email02'] = "";
	
		$data['pass01'] = "";
		$data['pass02'] = "";
	
		$data['cpass01'] = "";
		$data['cpass02'] = "";

		$data['fname01'] = "";
		$data['fname02'] = "";
	
		$data['lname01'] = "";
		$data['lname02'] = "";
	
		$data['phone01'] = "";
		$data['phone02'] = "";

		$data['address01'] = "";
		$data['address02'] = "";
		
		$data['contains']='donasi';

		$data['beranda']='';
		$data['donasi']='active';
		$data['daftarkan']='';

		$data['notification']='';

		$this->load->view('home',$data);
	}

	// post
	public function send_donasi()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('pass', 'Password', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('cpass', 'Password Confirmation', 'trim|required|matches[pass]');

		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required|xss_clean');
		$this->form_validation->set_rules('address', 'Address', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE)
		{
			if ( form_error('email') == "" ) {
				$data['email01'] = "has-success";
				$data['email02'] = "glyphicon-ok";
			} else {
				$data['email01'] = "has-error";
				$data['email02'] = "glyphicon-remove";
			}
			if ( form_error('pass') == "" ) {
				$data['pass01'] = "has-success";
				$data['pass02'] = "glyphicon-ok";
			} else {
				$data['pass01'] = "has-error";
				$data['pass02'] = "glyphicon-remove";
			}
			if ( form_error('cpass') == "" ) {
				$data['cpass01'] = "has-success";
				$data['cpass02'] = "glyphicon-ok";
			} else {
				$data['cpass01'] = "has-error";
				$data['cpass02'] = "glyphicon-remove";
			}

			if ( form_error('fname') == "" ) {
				$data['fname01'] = "has-success";
				$data['fname02'] = "glyphicon-ok";
			} else {
				$data['fname01'] = "has-error";
				$data['fname02'] = "glyphicon-remove";
			}
			if ( form_error('lname') == "" ) {
				$data['lname01'] = "has-success";
				$data['lname02'] = "glyphicon-ok";
			} else {
				$data['lname01'] = "has-error";
				$data['lname02'] = "glyphicon-remove";
			}
			if ( form_error('phone') == "" ) {
				$data['phone01'] = "has-success";
				$data['phone02'] = "glyphicon-ok";
			} else {
				$data['phone01'] = "has-error";
				$data['phone02'] = "glyphicon-remove";
			}
			if ( form_error('address') == "" ) {
				$data['address01'] = "has-success";
				$data['address02'] = "glyphicon-ok";
			} else {
				$data['address01'] = "has-error";
				$data['address02'] = "glyphicon-remove";
			}

			$data['contains']='donasi';

			$data['beranda']='';
			$data['donasi']='active';
			$data['daftarkan']='';

			$data['notification']='';

			$this->load->view('home', $data);
		}
		else
		{
			$email = $this->input->post('email');
			$pass = $this->input->post('pass');
			$cpass = $this->input->post('cpass');

			$twitter = $this->input->post('twitter');
			$facebook = $this->input->post('facebook');
			$gplus = $this->input->post('gplus');

			$fname = $this->input->post('fname');
			$lname = $this->input->post('lname');
			$phone = $this->input->post('phone');
			$address = $this->input->post('address');

		

			$data_to_submit = array (
				'email' => $email,
				'password' => md5($pass),

				'twitter'=> $twitter,
				'facebook'=> $facebook,
				'gplus' => $gplus,

				'fname'=> $fname,
				'lname'=> $lname,
				'phone' => $phone,
				'address' => $address
			);

			$this->load->model('User','',TRUE);
			$this->User->create_new($data_to_submit);

			$data['contains']='front';
			$data['beranda']='active';
			$data['donasi']='';
			$data['daftarkan']='';

			$data['notification']='Selamat Akun Anda Telah Terdaftar';

			$this->load->view('home',$data);
		}
		
	}
}
