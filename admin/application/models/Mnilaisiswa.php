<?php
class Mnilaisiswa extends CI_Model{
	
	public function simpan($insert){
		
		$this->db->insert('m_nilaisiswa', $insert);

		return $this->db->affected_rows();

	}

	public function update($update,$id){  
		$this->db->where('id', $id);
		$this->db->update('m_nilaisiswa', $update);

		return $this->db->affected_rows();

	}
	
	public function ambilSemuaData(){
		$q = "SELECT s.nama_siswa, p.mata_pelajaran, n.* FROM m_nilaisiswa n ";
		$q.= "LEFT JOIN m_siswa s ON s.id = n.siswa_id ";
		$q.= "LEFT JOIN m_matapelajaran p ON p.id = n.matapelajaran_id ";
		
		$res = $this->db->query($q);

		return $res->result();
	}

	public function hapusData($id){
		$this->db->where('id', $id);
		$res = $this->db->delete('m_nilaisiswa');

		return $this->db->affected_rows();
	}

	public function ambilData($id){
		$this->db->where('id', $id);
		$res = $this->db->get('m_nilaisiswa');

		return $res->row();
	}

}
