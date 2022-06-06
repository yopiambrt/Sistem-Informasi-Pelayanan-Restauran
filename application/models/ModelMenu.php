<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ModelMenu extends CI_Model {

public $email;
public $nama;
public $tgl_pesan;
public $menu;
public $metode;
public $keterangan;

public function insert_entry($data)
{
        $this->db->insert('menu', $data);
}

public function get_all()
{
        $query = $this->db->get('menu'); 
        return $query;
}

public function get_all2()
{
        $this->db->select('*');
        $this->db->from('menu');
        $this->db->join('jenismenu', 'menu.menu = jenismenu.idmenu');
        $this->db->order_by('email ASC');
        $query = $this->db->get();
        return $query;
}
function tampil_Data(){
        $this->db->select('*');
        $this->db->from('menu');
        $this->db->join('jenismenu', 'menu.menu = jenismenu.idmenu');
        $this->db->order_by('email ASC');
        $query = $this->db->get();
        return $query;
    }

function input_data($data,$table){
        $this->db->insert($table,$data);
}

function hapus_data($where,$table){
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
// public function upnama_entry()
// {
//         $this->email    = $_POST['email'];
//         $this->nama     = time();
//         $this->tgl_pesan  = $_POST['tgl_pesan'];

//         $this->db->upnama('entries', $this, array('id' => $_POST['id']));
// }

}