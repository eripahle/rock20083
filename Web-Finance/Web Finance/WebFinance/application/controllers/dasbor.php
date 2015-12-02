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
            $data_upload_csv2 = $this->csvreader->parse_file('./data/nosak.csv');
            $fp = fopen('./data/nosak.csv', 'a+');
            foreach($data_upload_csv as $item):
                $sama = 0;

                $queryVAD = $this->db->select('VAD')
                ->get_where('transaksi_registrasi', array('VAD' => $item[2] ))
                ->row();
                $queryCORP = $this->db->select('corp')
                ->get_where('transaksi_registrasi', array('VAD' => $item[2] ))
                ->row();
                $queryID_regis = $this->db->select('id_registrasi')
                ->get_where('transaksi_registrasi', array('VAD' => $item[2] ))
                ->row();
                $queryNama = $this->db->select('Nama_lengkap')
                ->get_where('transaksi_registrasi', array('id_registrasi' => $queryID_regis->id_registrasi ))
                ->row();
                $queryNosak = $this->db->select('No_sakti')
                ->get_where('transaksi_registrasi', array('id_registrasi' => $queryID_regis->id_registrasi ))
                ->row();


                $array10 = array($queryVAD->VAD, $queryVAD->VAD, $queryNama->Nama_lengkap,$queryCORP->corp,$queryNosak->No_sakti);
            
                 echo "<br>";

                    foreach($data_upload_csv2 as $item2):
                         if($item2[0]==$array10[0])
                         {
                            $sama = 1;
                         }

                    endforeach;
                    if($sama==0)
                    {
                        fputcsv($fp, $array10);
                    }

                    
            endforeach;
            fclose($fp);
            unlink('./uploads/'. $upload_data['file_name'] .'');
            redirect('dasbor');
        }
    }
	// Fungsi lain
	
}