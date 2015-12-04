<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vas_csv extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

	// Index login
	public function index() {
		$data = array(	'title'	=> 'VAS CSV',
						'isi'	=> 'vas_csv_view');
		$this->load->library('csvreader'); 
		$this->load->view('layout/wrapper',$data);
	}

		function delete_multiple() {
			$this->load->model('vas_csv_model');
			$this->vas_csv_model->remove_checked_vas();
			redirect('Vas_csv');
		}
}