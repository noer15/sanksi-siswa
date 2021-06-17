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
                <h3>Laporan Sanksi</h3>
                <h4 style="float: right;">Cirebon, <?=date('d F Y') ?></h4>
            </div>
			    <table border="1" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Jenis Pelanggaran</th>
                      <th>Sanksi Ringan</th>
                      <th>Sanksi Sedang</th>
                      <th>Sanksi Berat</th>
                      <th>Persentasi Bobot</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Keterlambatan</td>
                      <td>5</td>
                      <td>15</td>
                      <td>30</td>
                      <td>5%</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Kehadiran</td>
                      <td>10</td>
                      <td>20</td>
                      <td>50</td>
                      <td>5%</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Merokok</td>
                      <td>30</td>
                      <td>50</td>
                      <td>70</td>
                      <td>10%</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Perkelahian</td>
                      <td>30</td>
                      <td>45</td>
                      <td>75</td>
                      <td>20%</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Membawa Senjata</td>
                      <td>75</td>
                      <td>90</td>
                      <td>200</td>
                      <td>30%</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Obat terlarang / Miras</td>
                      <td>75</td>
                      <td>90</td>
                      <td>150</td>
                      <td>30%</td>
                    </tr>
                  </tbody>
                </table>
		</div>
	</div>
</body>
</html>