<?php
class Vas_csv_model extends CI_Model {


	function remove_checked_vas() {
		$action = $this->input->post('action');
        $nama_file_csv = $this->input->post('nama_file_csv');
		$delete = $this->input->post('msg');
        $fp2 = fopen('./uploads/'. $nama_file_csv .'.csv','w+');
        date_default_timezone_set('Asia/Jakarta');
        $date = date('m/d/Y h:i:s A', time());
        $dataexcel1 = array
        (
            array($date,$nama_file_csv),
            array("P",count($delete))
        );
        for ($i=0; $i < 2 ; $i++) { 
            fputcsv($fp2, $dataexcel1[$i]);
        }
        for ($i=0; $i < count($delete) ; $i++) {         
            $query = $this->db->query('SELECT no_sakti, nama_lengkap FROM transaksi_registrasi WHERE id_registrasi='.$delete[$i].'');
            $this->db->query('UPDATE transaksi_registrasi SET VALIDASI_UPLOAD = 2 WHERE id_registrasi = '.$delete[$i].'');
            $array10 = array(substr($query->row()->no_sakti, 0, -4),$query->row()->nama_lengkap,"8118","C","C","CREATE");
            fputcsv($fp2, $array10);
                
        }			
        fclose($fp2);
            
	}

}
?>