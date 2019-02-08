<?php 
	class home extends My_Controller{
		public function index(){
			$data=array('title'=>'Home');
			$this->load->view('common/header',['data'=>$data]);
			$this->load->view('common/nav');
			$this->load->view('index');
			$this->load->view('common/footer');
		}
	}
?>