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
	<h4 align = "center">Data VAS Release</h4>

	<form action="<?php echo base_url('Validasi_release/delete_multiple'); ?>" method="post">
		<table border="0"  id="myTable" cellspacing="0" >
			<thead>
				<tr>
					<th width = '150' style="text-align:center";>VAD</th>
					<th width = '150' style="text-align:center";>VAD Rekon</th>
					<th width = '150' style="text-align:center";>Nosak</th>
					<th width = '150' style="text-align:center";>Nama Lengkap</th>
					<th width = '150' style="text-align:center";>VAS</th>
					<th width = '150' style="text-align:center";>Keterangan</th>
					<th style="text-align:center";>Validasi<br><input type="checkbox" id="checkAll" name="checkAll"></th>
				</tr>
			</thead>
			<tbody>
				<?php
				
        		$query = $this->db->query('SELECT id_registrasi,VAD,VAD_rekon, no_sakti, nama_lengkap FROM transaksi_registrasi WHERE VALIDASI_UPLOAD = "3" AND STATUS_RELEASE = "0" AND STATUS_REKONSILIASI = "1" ');
        		
				if (count($query)>0) {
					
					foreach($query->result_array() as $row):
						$vas = substr($row['no_sakti'], 0, -4);
						$vas .='8118';

						?>
						<tr>
							<td width = '50' style="text-align:center";><?php  echo "".$row['VAD'].""; ?></td>
							<td width = '150' style="text-align:center";><?php  echo "".$row['VAD_rekon'].""; ?></td>
							<td width = '150' style="text-align:center";><?php  echo "".$row['no_sakti']; ?></td>
							<td width = '250' style="text-align:center";><?php  echo "".$row['nama_lengkap'].""; ?></td>
							<td width = '250' style="text-align:center";><?php  echo "".$vas.""; ?></td>
							<td width = '150' style="text-align:center";><?php  echo "UPLOAD"; ?></td>
							<td style="text-align:center";><input type="checkbox" name="msg[]" value="<?php  echo "".$row['id_registrasi'].""; ?>"></td>
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
		<p align='center'><input type="submit" name="submit" value="Release VAS">
	</form>



</body>
</html>