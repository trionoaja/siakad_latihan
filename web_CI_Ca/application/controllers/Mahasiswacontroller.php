<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Mahasiswacontroller extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Mahasiswamodel');
        $this->load->helper('url');
    }
function index(){
    $data['mahasiswa']= $this->Mahasiswamodel->tampil_data()->result();
    $this->load->view('header',$data);
    $this->load->view('Mahasiswaview', $data);
    $this->load->view('footer', $data);
}
function form_input(){

    $this->load->view('header');
    $this->load->view('Formmahasiswaview');
    $this->load->view('footer');
}
    public function insert(){

        $data= array(
            'nim'           => $this->input->post('nim'),
            'nama_lengkap'  => $this->input->post('nama_lengkap'),
            'nama_panggilan'=> $this->input->post('nama_panggilan'),
            'alamat'        => $this->input->post('alamat'),
            'email'         => $this->input->post('email'),
            'telp'          => $this->input->post('telp'),
        );
        $this->Mahasiswamodel->insert($data);

        redirect(base_url() . "../index.php/Mahasiswacontroller", 'refresh');
    }
    function delete($id){

     $where = array('nim' => $id);

        $this->Mahasiswamodel->delete_data($where,'mahasiswa');

        redirect(base_url() . "../index.php/Mahasiswacontroller", 'refresh');
    }

    function form_update($id){

        $where = array('nim'=> $id);
        $data['mahasiswa'] = $this->Mahasiswamodel->edit_data($where,'mahasiswa')->result();

        $this->load->view('header');
        $this->load->view('editmahasiswaview',$data);
        $this->load->view('footer');
    }
    public function update(){

        $data = array(
            'nim'           => $this->input->post('nim'),
            'nama_lengkap'  => $this->input->post('nama_lengkap'),
            'nama_panggilan'=> $this->input->post('nama_panggilan'),
            'alamat'        => $this->input->post('alamat'),
            'email'         => $this->input->post('email'),
            'telp'          => $this->input->post('telp'),
        );
        
        $where = array('nim' => $this->input->post('nim'));

        $this->Mahasiswamodel->update_data($where,$data,'mahasiswa');

        redirect(base_url() . "../index.php/Mahasiswacontroller", 'refresh');
    }
}