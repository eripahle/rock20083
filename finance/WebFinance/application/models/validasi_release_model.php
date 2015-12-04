<?php
class Validasi_release_model extends CI_Model {


    function remove_checked_release() {
        $action = $this->input->post('action');
        $delete = $this->input->post('msg');

        
        for ($i=0; $i < count($delete) ; $i++) {         
            $this->db->set('STATUS_RELEASE', '1', FALSE);
            $this->db->where('id_registrasi', $delete[$i]);
            $this->db->update('transaksi_registrasi');

            $this->db->set('STATUS', '1', FALSE);
            $this->db->where('id_registrasi', $delete[$i]);
            $this->db->update('users');
             
            $queryNosak = $this->db->select('No_sakti')
                ->get_where('transaksi_registrasi', array('id_registrasi' => $delete[$i] ))
                ->row();

            $vas = substr($queryNosak->No_sakti, 0, -4);
            $vas .='8118';

            $this->db->set('VAS', $vas, FALSE);
            $this->db->where('id_registrasi', $delete[$i]);
            $this->db->update('users');   
                
                
        }       
    }

}
?>