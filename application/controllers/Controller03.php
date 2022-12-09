<?php 
    class Controller03 extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model("model03");
        }
        
        public function index(){
            $data['data'] = $this->model03->getAll();
            $this->load->view('remidi/v_tampilremidi', $data);
        }

        public function tambah(){
            $this->load->view('remidi/v_tambahremidi');
        }

        public function simpanTambah(){
            $id_03 = $this->input->post('txt_id_03');
            $nama_aset = $this->input->post('txt_nama_aset');
            $jenis_aset = $this->input->post('txt_jenis_aset');
            $kondisi = $this->input->post('txt_kondisi');
            $jumlah = $this->input->post('txt_jumlah');

            $data_input = [
                'id_03' => $id_03,
                'nama_aset' => $nama_aset,
                'jenis_aset' => $jenis_aset,
                'kondisi' => $kondisi,
                'jumlah' => $jumlah,
            ];

            $simpan = $this->model03->add($data_input);
            redirect('Controller03/index');
        }
    }
?>