<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	class Master extends My_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('MasterModel');
		}

		public function login(){
			$data=array('title' =>'Master Login');
			$this->load->view('common/header',['data'=>$data]);
			$this->load->view('common/nav');
			$this->load->view('login');
			$this->load->view('common/footer');
		}

		public function login_action(){
			$user=$this->input->post('user_name');
			$pass=md5($this->input->post('passwd'));
			$UserInfo=$this->MasterModel->fetchMasterLoginInfo($user,$pass);
			if(count($UserInfo)>0){
				$this->session->set_userdata('uid',$UserInfo[0]['id']);
				redirect(base_url('master/dashboard'));
			}else{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		            <strong>Stop !</strong> Invalid Credentials
	                </div>');
				redirect(base_url('master/login'));
			}
		}

		public function logout(){
			$this->session->sess_destroy();
			return redirect('home');
		}	



		public function dashboard(){
			$data=array('title' =>'Dashboard');
			$this->load->view('common/header',['data'=>$data]);
			$this->load->view('common/nav');
			$this->load->view('dashboard');
			$this->load->view('common/footer');
			
		}
	}
?>