<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswamodel extends CI_Model{

    public $table='mahasiswa';
    public $id ='nim';

    function __construct()
    {
        parent::__construct();
    }
    Function insert($data)
    {
        $this->db->insert($this->table, $data);
    }
    function tampil_data()
    {
        return $this->db->get('mahasiswa');
    }

    function delete_data($where,$table){

        $this->db->where($where);
        $this->db->delete($table);
    }

    function edit_data($where,$table){

        return $this->db->get_where($table,$where);
    }

    function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
}