<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Usercontroller extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Usermodel');
        $this->load->helper('url');
    }
function index(){
    $data['user']= $this->Usermodel->tampil_data()->result();
    $this->load->view('header',$data);
    $this->load->view('Userview', $data);
    $this->load->view('footer', $data);
}
function form_input(){

    $this->load->view('header');
    $this->load->view('Formuserview');
    $this->load->view('footer');
}
    public function insert(){

        $data= array(
            'username'      => $this->input->post('username'),
            'password'      => md5($this->input->post('password')),
            'level'         => $this->input->post('level'),
            'nama_lengkap'  => $this->input->post('nama_lengkap'),
            'foto'         => $_FILES["gambar"]["tmp_name"],
            
        );
        $this->Mahasiswamodel->insert($data);

        redirect(base_url() . "../index.php/Mahasiswacontroller", 'refresh');
    }
    function delete($id){

     $where = array('nim' => $id);

        $this->Mahasiswamodel->delete_data($where,'user');

        redirect(base_url() . "../index.php/Mahasiswacontroller", 'refresh');
    }

    function form_update($id){

        $where = array('nim'=> $id);
        $data['user'] = $this->Mahasiswamodel->edit_data($where,'user')->result();

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