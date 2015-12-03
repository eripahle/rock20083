<!-- Start Header -->
	<header>Hai <a href="<?php echo base_url('profil') ?>" title="Update profil">
    <?php echo ucfirst($this->session->userdata('username')); ?>
    </a></header>
    <!-- Start Nav -->
    
    <nav>
    	<ul>
        	<li><a href="<?php echo base_url('dasbor') ?>">UPLOAD REKON</a></li>
            <li><a href="<?php echo base_url('Nomor_sakti') ?>">NOMOR SAKTI</a></li>
            <li><a href="<?php echo base_url('vas_csv') ?>">VAS CSV</a></li>
            <li><a href="<?php echo base_url('file_csv')?>">FILE CSV</a></li>
            <li><a href="<?php echo base_url('upload_release')?>">UPLOAD RELEASE</a></li>
            <li><a href="<?php echo base_url('validasi_release')?>">VALIDASI RELEASE</a></li>
            <li><a href="<?php echo base_url('login/logout') ?>" title="Logout">LOGOUT</a></li>
        </ul>
    </nav>
    <!-- Start Article -->
    <article>
      <h1><?php echo $title ?></h1>