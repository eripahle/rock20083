<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {
    var $data;
	
	public function __construct()
    {
        parent::__construct();
        
    }

	// Index login
	public function index() {
		$data = array(	'title'	=> 'UPLOAD REKON',
						'isi'	=> 'dasbor_view');
		$this->load->view('layout/wrapper',$data);
	}
	function upload()
    {
        //set preferences
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size']    = '10000';

        //load upload class library
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('filename'))
        {
            // case - failure
            $data = array(	'title'	=> 'UPLOAD REKON',
						'isi'	=> 'dasbor_view');
            $data['success_msg'] = '<div class="alert alert-success text-center">Error, only CSV file is allowed</div>';

            $this->load->view('layout/wrapper',$data);
        }
        else
        {
            // case - success
   			$upload_data = $this->upload->data();
        	$this->load->library('csvreader');
        	$data_upload_csv = $this->csvreader->parse_file('./uploads/'. $upload_data['file_name'] .'');
            foreach($data_upload_csv as $item):
                $sama = 0;
                $queryVAD = $this->db->select('VALIDASI_UPLOAD')
                ->get_where('transaksi_registrasi', array('VAD' => $item[2] ))
                ->row();
                if(isset($queryVAD) AND $queryVAD->VALIDASI_UPLOAD==0)
                {
                    $this->db->set('VAD_REKON',  $item[2], FALSE);
                    $this->db->where('VAD', $item[2]);
                    $this->db->update('transaksi_registrasi');

                    $this->db->set('VALIDASI_UPLOAD',  1, FALSE);
                    $this->db->where('VAD', $item[2]);
                    $this->db->update('transaksi_registrasi');

                }
                

                    
            endforeach;
            unlink('./uploads/'. $upload_data['file_name'] .'');
            redirect('dasbor');
        }
    }
	// Fungsi lain
	
}