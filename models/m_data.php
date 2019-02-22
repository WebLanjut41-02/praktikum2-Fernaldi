<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class m_data extends CI_Model{

    public function file()
    {
        $this->db->from('paket');
        $query = $this->db->get();
        return $query->result();
    }
    public function inpaket($tgl,$sasaran,$penerima,$isi)
    {
        $data = array(
            'Tgl_datang'=>$tgl,
            'Sasaran'=>$sasaran,
            'Penerima'=>$penerima,
            'Isi_paket'=>$isi

            
        );
        $this->db->insert('paket',$data);
       
    }
    public function listpaket()
    {
        
        $this->db->from('paket');
        $query=$this->db->get();
        return $query->result();
        
    }
    public function inppeng($nama,$unit,$noktp)
    {
        $data = array(
            'Nama'=>$nama,
            'Unit'=>$unit,
            'No_Ktp'=>$noktp
            
            
        );
        $this->db->insert('penghuni',$data);
    }
    public function listpenghuni()
    {
        
        $this->db->from('penghuni');
        $query=$this->db->get();
        return $query->result();
        
    }
    public function cek()
    {
       $this->db->from('karyawan');
        $query = $this->db->get();
        return $query->result();
    }

    public function penghuni()
    {
        $this->db->from('penghuni');
        $query = $this->db->get();
        return $query->result();
    }

}

/* End of file Controllername.php */


?>