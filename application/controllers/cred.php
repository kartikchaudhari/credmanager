<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Cred extends My_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('CredModel');
	}
	public function list(){
		if ($this->session->userdata('uid')) {
			$data=array('title' =>'Credentials');
			$creds=array('creds' => $this->CredModel->GetAllCreds());
			$this->load->view('common/header',['data'=>$data]);
			$this->load->view('common/nav');
			$this->load->view('list',['data'=>$creds]);
			$this->load->view('common/footer');
		}
		else{
			$this->session->set_flashdata('msg', '<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Be Hold !!</strong> Session Expired, Plese  re-login below.
			</div>');
			redirect(base_url('master/login'));
		}


	}

	public function add_cred_action(){
		$cred_data=array(
							'site_name'=>trim($this->input->post('url')),
							'uname'=>trim($this->input->post('uname')),
							'pass'=>trim($this->input->post('pass'))
						);
		$result=$this->CredModel->InsertCredInfo(json_encode($cred_data));
		if ($result) {
			$this->session->set_flashdata('msg', '<div class="alert alert-success"><strong>Credential Information added Successfully.</strong></div>');
			redirect(base_url('master/dashboard'));
		}

	}


	public function RemoveCredInfo(){
		$CredId=$this->input->post('CredId');
		if($this->CredModel->DeleteCredInfoById($CredId)){
			echo "Deleted";
		}
	}

}

/* End of file cred.php */
/* Location: ./application/controllers/cred.php */
?>