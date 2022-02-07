<?php
class Msiswa extends CI_Model{
	
	public function simpan($insert){
		
		$this->db->insert('m_siswa', $insert);

		return $this->db->affected_rows();

	}

	public function update($update,$id){  
		$this->db->where('id', $id);
		$this->db->update('m_siswa', $update);

		return $this->db->affected_rows();

	}
	
	public function ambilSemuaData(){
		$res = $this->db->get('m_siswa');

		return $res->result();
	}

	public function hapusData($id){
		$this->db->where('id', $id);
		$res = $this->db->delete('m_siswa');

		return $this->db->affected_rows();
	}

	public function ambilData($id){
		$this->db->where('id', $id);
		$res = $this->db->get('m_siswa');

		return $res->row();
	}

	public function cekUser($email,$password)
	{
		$q = "SELECT id,nama_lengkap FROM m_siswa WHERE email='".$email."' AND password='".$password."'";
		$res = $this->db->query($q);
		return $res->row();
	}
}
