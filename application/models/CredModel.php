<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class CredModel extends CI_Model {
		public function InsertCredInfo($CredInfo){
			$data=array('cred_info'=>$CredInfo);
			return $this->db->insert('creds',$data);
		}

		public function GetAllCreds(){
			$query=$this->db->get('creds');
			return $query->result_array();
		}

		public function DeleteCredInfoById($CredId){
			$query=$this->db->delete('creds',array('cred_id'=>$CredId));
			return $this->db->query($query);
		}
	}
	
	/* End of file CredModel.php */
	/* Location: ./application/models/CredModel.php */	
?>