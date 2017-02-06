<?php
class M_edit_tipe_pekerjaan extends CI_Model{
    function get_user_all($id)
    {
        $query=$this->db->query("SELECT * from tipe_pekerjaan where tipe_pekerjaan.id_tipe_pekerjaan='$id'");
        return $query->result();

    }
	function update($id)
    {
		$nama_pekerjaan = $this->input->post('nama_pekerjaan');
                    $data = array(
                        'nama_tipe_pekerjaan'=>$nama_pekerjaan
                               
                    );
		$this->db->where('id_tipe_pekerjaan',$id);
		echo $query=$this->db->update('tipe_pekerjaan',$data); 
        
        return $query;

    }
	
}