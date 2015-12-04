<?php
class Nosak_model extends CI_Model {


    function remove_checked_nosak() {
        $action = $this->input->post('action');
        $nosak_baru = $this->input->post('nosak_baru');
        $delete = $this->input->post('msg');

        $nosak = array();
        $j= 0;
        foreach($nosak_baru as $item)
        {
            if($item!=NULL)
            {
                $nosak[$j] = $item;
                $j++;

            }
        }
        $msg = 0;
        for ($i=0; $i < count($delete) ; $i++) {         
            
            if(isset($nosak[$i]))
            {
                $this->db->set('STATUS_REKONSILIASI', '1', FALSE);
                $this->db->where('VAD', $delete[$i]);
                $this->db->update('transaksi_registrasi');

                $queryID_regis = $this->db->select('id_registrasi')
                ->get_where('transaksi_registrasi', array('VAD' => $delete[$i] ))
                ->row();

                $this->db->set('nomer_sakti', $nosak[$i], FALSE);
                $this->db->where('id_registrasi='.$queryID_regis->id_registrasi.''  );
                $this->db->update('users'); 

                $this->db->set('no_sakti', $nosak[$i], FALSE);
                $this->db->where('VAD', $delete[$i]);
                $this->db->update('transaksi_registrasi');
                   
            }
            else
            {
                if($msg==0)
                {
                    $message = "Nomor Sakti Baru tidak boleh kosong!";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    $msg++;
                }
                    
              
            }
                     
                
        }        
    }

}
?>