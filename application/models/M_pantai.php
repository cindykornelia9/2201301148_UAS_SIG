<?php
class M_pantai extends CI_Model
{
    public function tambah($data)
    {
        $this->db->insert('pantai',$data);
    }

    public function getdata()
    {
        return $this->db->get('pantai');
    }
    public function getdataid($id)
    {
        $this->db->where('id_pantai',$id);
        return $this->db->get('pantai');
    }
    public function edit($data,$id_pantai)
    {
        $this->db->where('id_pantai',$id_pantai);
        $this->db->update('pantai',$data);

    }
    public function hapus($id)
    {
        $this->db->where('id_pantai',$id);
         $this->db->delete('pantai');
    }
    
}
?>