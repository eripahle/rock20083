<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="<?php echo base_url(''); ?>assets/jquery/jquery-1.5.2.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("input[name='checkAll']").click(function() {
				var checked = $(this).attr("checked");
				$("#myTable tr td input:checkbox").attr("checked", checked);
			});
		});
	</script>
</head>
<body>
	<h4 align = "center">Validasi Nomor Sakti Soniq yang Mendaftar SC</h4>

	<form action="<?php echo base_url('Nomor_sakti/delete_multiple'); ?>" method="post">
		<table border="0"  id="myTable" cellspacing="0" >
			<thead>
				<tr>
					<th width = '150' style="text-align:center";>VAD Signup</th>
					<th width = '150' style="text-align:center";>VAD Rekon</th>
					<th width = '150' style="text-align:center";>Nama Lengkap</th>
					<th width = '150' style="text-align:center";>Corps</th>
					<th width = '150' style="text-align:center";>Nosak Lama</th>
					<th width = '150' style="text-align:center";>Nosak Baru</th>
					<th style="text-align:center";>Validasi<br><input type="checkbox" id="checkAll" name="checkAll"></th>
				</tr>
			</thead>
			<tbody>
				<?php
				$query = $this->db->query('SELECT VAD,VAD_rekon, nama_lengkap,corp,no_sakti FROM transaksi_registrasi WHERE VALIDASI_UPLOAD= "1" AND Status_rekonsiliasi = 0 AND STATUS_RELEASE = 0' );
				if (count($query)>0) {
					
					foreach($query->result_array() as $row):
		                ?>
		               	<tr>
						<td width = '150' style="text-align:center";><?php  echo "".$row['VAD'].""; ?></td>
						<td width = '150' style="text-align:center";><?php  echo "".$row['VAD_rekon'].""; ?></td>
						<td width = '150' style="text-align:center";><?php  echo "".$row['nama_lengkap'].""; ?></td>
						<td width = '150' style="text-align:center";><?php  echo "".$row['corp'].""; ?></td>
						<td width = '150' style="text-align:center";><?php  if(isset($row['no_sakti'])) echo"".$row['no_sakti']."";?></td>
						<td width = '150' style="text-align:center";><input type="text" name="nosak_baru[]"  placeholder="Nosak Baru" /></td>
						<td style="text-align:center";><input type="checkbox" name="msg[]" value="<?php  echo "".$row['VAD'].""; ?>"></td>
						</tr>
						<?php						
					endforeach;
				}
				else {
					echo "<tr><td colspan=7 >DATA KOSONG!!</td></tr>";
				}
				?>
			</tbody>
		</table>
		<p align='center'><input type="submit" name="submit" value="Validasi Nosak">
	</form>



</body>
</html>
