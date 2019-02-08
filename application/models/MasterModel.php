<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class MasterModel extends CI_Model {
		public function fetchMasterLoginInfo($uname,$pass){
			$where=array('uname'=>$uname,'pass'=>$pass);
			$this->db->select('id');
			$query=$this->db->get_where('master',$where);
			return $query->result_array();
		}
	}
	
	/* End of file MasterModel.php */
	/* Location: ./application/models/MasterModel.php */
?>