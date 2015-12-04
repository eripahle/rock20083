<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File_csv extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

	// Index login
	public function index() {
		$data = array(	'title'	=> 'FILE CSV',
						'isi'	=> 'file_csv_view');
		$this->load->library('csvreader'); 
		$this->load->view('layout/wrapper',$data);
	}
}