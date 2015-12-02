<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nomor_sakti extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

	// Index login
	public function index() {
		$data = array(	'title'	=> 'NOMOR SAKTI',
						'isi'	=> 'nomor_sakti_view');
		$this->load->library('csvreader'); 
		$this->load->view('layout/wrapper',$data);
	}

		function delete_multiple() {
			$this->load->model('nosak_model');
			$this->nosak_model->remove_checked_nosak();
			redirect('nomor_sakti');
		}
}