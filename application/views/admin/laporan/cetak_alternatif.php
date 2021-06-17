<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style>
    	.wrapper{
    		width: 100%;
    		margin: 0 auto;
    	}
    	th{background: #e9d5d5;}
    	h1,h2,h3,p{text-align: center;}
    	.footer{float: right;}
    </style>

</head>
<body onload="window.print()">
	<div class="container">
		<div class="wrapper">
			<h1>Tes</h1>
			<p>isi nama alamat</p>
			<hr>
			<div>
                <h3>Laporan Alternatif</h3>
                <h4 style="float: right;">Cirebon, <?=date('d F Y') ?></h4>
            </div>
			  <table border="1" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
              <thead>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Nilai</th>
            </thead>
            <tbody>
            <?php $no=1;  foreach($this->db->get('siswa')->result() as $a) : ?>
            <tr style="background-color: #8080805e">
                <td><?=$no++?></td>
                <td><strong><?=$a->nama_siswa ?></strong></td>
                <?php $data = $this->db->query("SELECT SUM(nilai) AS nilai FROM alternatif WHERE id_siswa = '$a->id'")->row()?>
                <td><strong>Total : <?=empty($data->nilai) ? '-' : $data->nilai ?></strong></td>
            </tr>
            <?php foreach ($this->db->query("SELECT siswa.nama_siswa,  kriteria.nama_kriteria,  alternatif.* FROM alternatif INNER JOIN siswa ON alternatif.id_siswa = siswa.id INNER JOIN kriteria ON alternatif.id_kriteria = kriteria.id WHERE id_siswa = '$a->id'")->result() as $data) { ?>
                <tr>
                    <td colspan="1"></td>
                    <td><?=$data->nama_kriteria ?></td>
                    <td><?=$data->nilai ?></td>
                </tr>
                <?php } ?>
            <?php endforeach; ?>
        </tbody>
            </table>
		</div>
	</div>
</body>
</html>