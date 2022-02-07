<?php
class Mmatapelajaran extends CI_Model{
	
	public function simpan($insert){
		
		$this->db->insert('m_matapelajaran', $insert);

		return $this->db->affected_rows();

	}

	public function update($update,$id){  
		$this->db->where('id', $id);
		$this->db->update('m_matapelajaran', $update);

		return $this->db->affected_rows();

	}
	
	public function ambilSemuaData(){
		$res = $this->db->get('m_matapelajaran');

		return $res->result();
	}

	public function hapusData($id){
		$this->db->where('id', $id);
		$res = $this->db->delete('m_matapelajaran');

		return $this->db->affected_rows();
	}

	public function ambilData($id){
		$this->db->where('id', $id);
		$res = $this->db->get('m_matapelajaran');

		return $res->row();
	}

	public function cekUser($email,$password)
	{
		$q = "SELECT id,nama_lengkap FROM m_matapelajaran WHERE email='".$email."' AND password='".$password."'";
		$res = $this->db->query($q);
		return $res->row();
	}
}
