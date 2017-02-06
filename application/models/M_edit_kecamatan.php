<?php
class M_edit_kecamatan extends CI_Model{
    function get_user_all($id)
    {
        $query=$this->db->query("SELECT * from kecamatan where kecamatan.id_kecamatan='$id'");
        return $query->result();

    }
	function update($id)
    {
		$nama_kecamatan = $this->input->post('nama_kecamatan');
                    $data = array(
                        'nama_kecamatan'=>$nama_kecamatan
                               
                    );
		$this->db->where('id_kecamatan',$id);
		echo $query=$this->db->update('kecamatan',$data); 
        
        return $query;

    }
	
}