<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validasi_release extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

	// Index login
	public function index() {
		$data = array(	'title'	=> 'VALIDASI RELEASE',
						'isi'	=> 'validasi_release_view');
		$this->load->library('csvreader'); 
		$this->load->view('layout/wrapper',$data);
	}

		function delete_multiple() {
			$this->load->model('validasi_release_model');
			$this->validasi_release_model->remove_checked_release();
			redirect('Validasi_release');
		}
}