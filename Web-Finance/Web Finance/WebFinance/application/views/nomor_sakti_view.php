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
				
        		$data_upload_csv = $this->csvreader->parse_file('./data/nosak.csv');
				if (count($data_upload_csv)>0) {
					
					foreach($data_upload_csv as $item):
		                $queryRekon = $this->db->select('status_rekonsiliasi')
		                ->get_where('transaksi_registrasi', array('VAD' => $item[0] ))
		                ->row();
		                if($queryRekon->status_rekonsiliasi==0)
		                {
		                	?>
		                	<tr>
							<td width = '150' style="text-align:center";><?php  echo "".$item[0].""; ?></td>
							<td width = '150' style="text-align:center";><?php  echo "".$item[1].""; ?></td>
							<td width = '150' style="text-align:center";><?php  echo "".$item[2].""; ?></td>
							<td width = '150' style="text-align:center";><?php  echo "".$item[3].""; ?></td>
							<td width = '150' style="text-align:center";><?php  if(isset($item[4])) echo $item[4]; ?></td>
							<td width = '150' style="text-align:center";><input type="text" name="nosak_baru[]"  placeholder="Nosak Baru" /></td>
							<td style="text-align:center";><input type="checkbox" name="msg[]" value="<?php  echo "".$item[0].""; ?>"></td>
						</tr>
						<?php
		                }



						
						
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