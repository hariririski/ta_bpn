<?php
class M_edit_desa extends CI_Model{
    function get_user_all($id)
    {
        $query=$this->db->query("SELECT * from desa inner join kecamatan on kecamatan.id_kecamatan=desa.id_kecamatan where desa.id_desa='$id'");
        return $query->result();

    }
	function update($id)
    {$nama_kecamatan = $this->input->post('nama_kecamatan');
                    $nama_desa = $this->input->post('nama_desa');
                    $data = array(
                        'id_kecamatan'=>$nama_kecamatan,
                        'nama_desa'=>$nama_desa
                               
                    );
		$this->db->where('id_desa',$id);
		echo $query=$this->db->update('desa',$data); 
        
        return $query;

    }
	
}