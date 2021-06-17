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
                <h3>Laporan Kriteria</h3>
                <h4 style="float: right;">Cirebon, <?=date('d F Y') ?></h4>
            </div>
			    <table border="1" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead class=" text-primary">
                      <th>No</th>
                      <th>Nama</th>
                    </thead>
                    <tbody>
                      <?php $no=1; foreach($this->db->get('kriteria')->result() as $data) : ?>
                        <tr>
                          <td><?=$no++?></td>
                          <td><?=$data->nama_kriteria ?></td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                </table>
		</div>
	</div>
</body>
</html>