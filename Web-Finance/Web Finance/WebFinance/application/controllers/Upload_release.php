<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_release extends CI_Controller {
    var $data;
	
	public function __construct()
    {
        parent::__construct();
        
    }

	// Index login
	public function index() {
		$data = array(	'title'	=> 'UPLOAD RELEASE',
						'isi'	=> 'upload_release_view');
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
            $fp = fopen('./data/nosak.csv', 'a+');
            foreach($data_upload_csv as $item):
                $nosak = substr($item[3], 0, -4);
                $this->db->query('UPDATE transaksi_registrasi SET STATUS_REKONSILIASI = 3 WHERE SUBSTRING(no_sakti,1, 12) = '.$nosak.''); 
                echo $nosak;               
            endforeach;

            fclose($fp);
            unlink('./uploads/'. $upload_data['file_name'] .'');
            redirect('upload_release');
        }
    }
	// Fungsi lain
	
}