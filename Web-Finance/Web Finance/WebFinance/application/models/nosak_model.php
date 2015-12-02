<?php
class Nosak_model extends CI_Model {


    function remove_checked_nosak() {
        $action = $this->input->post('action');
        $nosak_baru = $this->input->post('nosak_baru');
        $delete = $this->input->post('msg');
        $fp = fopen('./data/nosak.csv', 'r+');
        $fp2 = fopen('./data/nosak_temp.csv','w+');
        
        while (($data = fgetcsv($fp, 1000, ",")) !== FALSE) {
            $sama = 0;
            for ($i=0; $i < count($delete) ; $i++) {         
                if($delete[$i]==$data[0])
                {
                   $sama = 1;
                }

            }
            if($sama ==0)
            {
                fputcsv($fp2, $data);
            }        
        }
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

        for ($i=0; $i < count($delete) ; $i++) {         
            $this->db->set('STATUS_REKONSILIASI', '1', FALSE);
            $this->db->where('VAD', $delete[$i]);
            $this->db->update('transaksi_registrasi');

            $queryID_regis = $this->db->select('id_registrasi')
                ->get_where('transaksi_registrasi', array('VAD' => $delete[$i] ))
                ->row();
            $this->db->set('nomer_sakti', $nosak[$i], FALSE);
            $this->db->where('id_registrasi='.$queryID_regis->id_registrasi.''  );
            $this->db->update('USER'); 

            $this->db->set('no_sakti', $nosak[$i], FALSE);
            $this->db->where('VAD', $delete[$i]);
            $this->db->update('transaksi_registrasi');

            $this->db->set('VAD_REKON',  $delete[$i], FALSE);
            $this->db->where('VAD', $delete[$i]);
            $this->db->update('transaksi_registrasi');
                
                
                
        }       
        fputcsv($fp2, "12345678910111213");    
        fclose($fp);
        fclose($fp2);
        unlink('./data/nosak.csv');
        rename('./data/nosak_temp.csv', './data/nosak.csv');

    }

}
?>