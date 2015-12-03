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
	<h4 align = "center">Upload Data VAS</h4>

	<form action="<?php echo base_url('Vas_csv/delete_multiple'); ?>" method="post">
		<table border="0"  id="myTable" cellspacing="0" width = '1024'>
			<thead>
				<tr>
					<th width = '50' style="text-align:center"; style="bottom:20";>No</th>
					<th width = '150' style="text-align:center";>Nosak</th>
					<th width = '150' style="text-align:center";>VAS</th>
					<th width = '150' style="text-align:center";>Nama Lengkap</th>
					<th width = '150' style="text-align:center";>Keterangan</th>
					<th style="text-align:center";>Upload<br><input type="checkbox" id="checkAll" name="checkAll"></th>
				</tr>
			</thead>
			<tbody>

				<?php
				$a='<script type="text/javascript"> var d = new Date()
	            document.write(d.getMonth() + 1)
	            document.write("/")
	            document.write(d.getDate())
	            document.write("/")
	            document.write(d.getFullYear())
	            document.write(" ")
	            document.write(d.getHours())
	            document.write(":")
	            document.write(d.getMinutes() + 1)
	            document.write(":")
	            document.write(d.getSeconds())

            </script>';
            


				$query = $this->db->query('SELECT id_registrasi, no_sakti, nama_lengkap,status_rekonsiliasi FROM transaksi_registrasi WHERE status_rekonsiliasi="1" AND status_release = "0" AND VALIDASI_UPLOAD = "1"');
        		
				if (count($query)>0) {
					
					foreach($query->result_array() as $row):
						$vas = substr($row['no_sakti'], 0, -4);

						?>
						<tr>
							<td width = '50' style="text-align:center";><?php  echo "".$row['id_registrasi'].""; ?></td>
							<td width = '150' style="text-align:center";><?php  echo "".$row['no_sakti'].""; ?></td>
							<td width = '150' style="text-align:center";><?php  echo "".$vas.""; ?></td>
							<td width = '250' style="text-align:center";><?php  echo "".$row['nama_lengkap'].""; ?></td>
							<td width = '150' style="text-align:center";><?php  echo "CREATE"; ?></td>
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
		<br>
		<table border="0"  id="myTable" cellspacing="0" width = '320' align = "center">
			<thead>
				<tr>
					<td style= "vertical-align: middle";  width = '120' style="text-align:center";>Nama File CSV</td>
					<td width = '300' style="text-align:center"; style="bottom:20";><input size="4" type="text" name="nama_file_csv"  placeholder="Nama file CSV" /></td>
				</tr>
			</thead>
		</table>
		
		<p align = "center"><input type="submit" name="submit"></p>
		
	</form>



</body>
</html>