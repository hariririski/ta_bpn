<?php
class M_edit_warga_negara extends CI_Model{
    function get_user_all($id)
    {
        $query=$this->db->query("SELECT * from warga_negara where warga_negara.id_warga_negara='$id'");
        return $query->result();

    }
	function update($id)
    {
		$nama_warga_negara = $this->input->post('nama_warga_negara');
		$data = array(
                        'nama_warga_negara'=>$nama_warga_negara
                               
                    );
		$this->db->where('id_warga_negara',$id);
		$query=$this->db->update('warga_negara',$data); 
        
        return $query;

    }
	
}