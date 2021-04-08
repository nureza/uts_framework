<?php 
/**
 * 
 */
class Crud_model extends CI_Model{
	
	public function getAllKaryawan(){
		
		$query = $this->db->get('tb_karyawan');
		if ($query) {
			return $query->result();
		}
	}
		public function insertKaryawan($data){

		$query = $this->db->insert('tb_karyawan',$data);

		if($query){
			return true;
		} 
		else{
			return false;
		}
	}
	public function getSingleKaryawan($id){

		$this->db->where('id',$id);
		$query = $this->db->get('tb_karyawan');
		if($query){
			return $query->row();
		}
	}
	public function updateKaryawan($data,$id){
		$query = $this->db->update('tb_karyawan',$data);

		if($query){
			return true;
		}
		else{
			return false;
		}
	}

	public function deleteISi($id){
		$this->db->where('id', $id);
		$query = $this->db->delete('tb_karyawan');
		if($query){
			return true;
		}
		else{

			return false;
		}
	}
}

 ?>