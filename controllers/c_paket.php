<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class c_paket extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        
       //$this->load->helper('url');
        //$this->load->library('session');
        $this->load->model('m_data');
        
    }
    

    public function index()
    {
        
        $this->load->view('login');
        
    }
    public function log()
    {
        
        $data = $this->input->post('nama');

        $cek = $this->m_data->cek();
        foreach ($cek as $c) {
            if($c->Nama == $data){
            $this->session->set_userdata('file',$data);
            
            redirect('c_paket/halu','refresh');
            
                // $this->load->view('halaman');        
               
                
            }
        }
        // $this->load->view('halaman');
        
        
    }
    public function halu()
    {
        $this->load->view('halaman');
        
    }
    public function paket()
    {
        $data['data_penghuni'] = $this->m_data->penghuni();
        $this->load->view('inpaket',$data);
        
    }
    public function inppaket()
    {
        $data['isi'] = $this->m_data->listpenghuni();
        $this->load->view('inpaket',$data);
        
    }
    public function input()
    {
        $isi = $this->input->post('paket');
        $sasaran = $this->input->post('sasaran');
        $tgl = date('d-m-y');
        $penerima = $this->session->file;

        $this->m_data->inpaket($tgl,$sasaran,$penerima,$isi);

    }
    public function listpaket()
    {
        $data['isi']=$this->m_data->listpaket();
     $this->load->view('listpaket',$data);
        
    }
    public function inppenghuni()
    {
        $this->load->view('inppeng');
    }
    public function inputpeng()
    {
        $nama = $this->input->post('nama');
        $unit = $this->input->post('unit');
        $noktp = $this->input->post('noktp');

        $this->m_data->inppeng($nama,$unit,$noktp);

    }
    public function listpeng()
    {
        $data['isi']=$this->m_data->listpenghuni();
        $this->load->view('listpenghuni',$data);
        // redirect('halaman');
    }
    
    

}

/* End of file Controllername.php */


?>