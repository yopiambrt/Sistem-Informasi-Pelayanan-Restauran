<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ModelJenismenu extends CI_Model {

public $idmenu;
public $namamenu;


public function get_all()
{
        $query = $this->db->get('jenismenu'); 
        return $query;
}

public function insert_entry($data)
{
        $this->db->insert('jenismenu', $data);
}

public function upnama_entry()
{
        $this->idmenu    = $_POST['idmenu'];
        $this->namamenu  = $_POST['namamenu'];
        $this->nama     = time();

        $this->db->upnama('entries', $this, array('id' => $_POST['id']));
}

}