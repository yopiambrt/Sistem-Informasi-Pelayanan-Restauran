<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));   
                $this->load->library(array('form_validation','table'));
                $this->load->model(array('ModelMenu', 'ModelJenismenu')); 
                $this->load->database();


        }
        

        public function index()
        {
                $data['query']=$this->ModelMenu->tampil_data()->result();
                $this->load->view('v_tampil', $data);
                
        }
        // //localhost/cobaCI/index.php/menu/

        // function aksi(){
	// 	$this->form_validation->set_rules('email','Email','required');
        //         $this->form_validation->set_rules('konfir_email','Konfirmasi Email','required');
        //         $this->form_validation->set_rules('nama','Nama','required');
	// 	$this->form_validation->set_rules('tgl_pesan','tgl_pesan','required');
	// 	$this->form_validation->set_rules('menu','menu','required');
        //         $this->form_validation->set_rules('metode','metode','required');
        //         $this->form_validation->set_rules('keterangan','keterangan','required');

	// 	if($this->form_validation->run() != false){
	// 		// echo "Form validation oke";
        //                 $this->load->view('v_tampil');
	// 	}else{
	// 		$this->load->view('v_input');
	// 	}
	// }


        function aksi()
        {
                $this->form_validation->set_rules(
                        'email', 'Email','required',
                        array( 'required'      => 'Maaf anda belum mengisi email %s.') );

                $this->form_validation->set_rules(
                        'nama', 'Nama','required|min_length[5]|max_length[20]',
                        array( 'required'      => 'Maaf anda belum mengisi %s.') );

                $this->form_validation->set_rules('tgl_pesan', 'TanggalPesan', 'required');
                
                $this->form_validation->set_rules(
                        'menu', 'MenuMakanan','required',
                        array( 'required'      => 'Maaf anda belum mengisi  %s.') );

                $this->form_validation->set_rules(
                        'metode', 'Metode','required',
                        array( 'required'      => 'Maaf anda belum mengisi  %s.') );
                
                $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

                if ($this->form_validation->run() == FALSE)
                {     
                        $data['query']=$this->ModelJenismenu->get_all();
                        $this->load->view('v_input',$data);
                }
                else
                {
                        $data['email']=$_POST['email'];
                        $data['nama']=$_POST['nama'];
                        $data['tgl_pesan']=$_POST['tgl_pesan'];
                        $data['menu']=$_POST['menu'];
                        $data['metode']=$_POST['metode'];
                        $data['keterangan']=$_POST['keterangan'];
                        // $data['edit']=$_POST['edit'];
                        $this->ModelMenu->insert_entry($data);
                        $this->load->view('formsuccess',$data);
                }
        }
        function tambah(){
		$this->load->view('v_input');
	}
 
	function tambah_aksi(){
		$email = $this->input->post('email');
		$nama = $this->input->post('nama');
		$tgl_pesan = $this->input->post('tgl_pesan');
                $menu = $this->input->post('menu');
                $metode = $this->input->post('metode');
                $keterangan = $this->input->post('keterangan');
 
		$data = array(
			'email' => $email,
			'nama' => $nama,
			'tgl_pesan' => $tgl_pesan,
                        'menu' => $menu,
                        'metode' => $metode,
                        'keterangan' => $keterangan
			);
		$this->ModelMenu->input_data($data,'menu');
		redirect('menu/index');
	}
 
        function hapus($id){
		$where = array('id' => $id);
		$this->ModelMenu->hapus_data($where,'menu');
		redirect('menu/index');
	}

        function edit($id){
                $where = array('id' => $id);
                $data['menu'] = $this->ModelMenu->edit_data($where,'menu')->result();
                $this->load->view('v_edit',$data);
            }

        function update(){
                $id = $this->input->post('id');
                $email = $this->input->post('email');
                $nama = $this->input->post('nama');
                $tgl_pesan = $this->input->post('tgl_pesan');
                $menu = $this->input->post('menu');
                $metode = $this->input->post('metode');
                $keterangan = $this->input->post('keterangan');
        
                $data = array(
                'email' => $email,
                'nama' => $nama,
                'tgl_pesan' => $tgl_pesan,
                'menu' => $menu,
                'metode' => $metode,
                'keterangan' => $keterangan,
                );
        
                $where = array(
                'id' => $id
                );
        
                $this->ModelMenu->update_data($where,$data,'menu');
                redirect('menu/index');
        }

        public function _output($output)
        {
                echo $output;
                echo "M3119027 - Denise Gratia Aruan </br>";
                // $this->load->view(footer');
        }

        public function cetakIDview()
        {
          
                $this->load->view('menu/detailmenu');
        }



}

