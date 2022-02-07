<?php
class Muser extends CI_Model{
	
	public function simpan($insert){
		
		$this->db->insert('m_users', $insert);

		return $this->db->affected_rows();

	}

	public function update($update,$id){  
		$this->db->where('id', $id);
		$this->db->update('m_users', $update);

		return $this->db->affected_rows();

	}
	
	public function ambilSemuaData(){
		$res = $this->db->get('m_users');

		return $res->result();
	}

	public function hapusData($id){
		$this->db->where('id', $id);
		$res = $this->db->delete('m_users');

		return $this->db->affected_rows();
	}

	public function ambilData($id){
		$this->db->where('id', $id);
		$res = $this->db->get('m_users');

		return $res->row();
	}

	public function cekUser($email,$password)
	{
		$q = "SELECT id,nama_lengkap,level FROM m_users WHERE email='".$email."' AND password='".$password."'";
		$res = $this->db->query($q);
		return $res->row();
	}

	public function getUser($id){
		$q = "SELECT * FROM m_users WHERE id='".$id."'";
		$res = $this->db->query($q);
		return $res->row();
	}	
}


