<!DOCTYPE html>
<html>
<head>
	<title></title>
    <?php $this->load->view('layouts/head') ?> 
</head>
<body>
	<div class="container">
		<div class="wrapper">
            <h1>Tes</h1>
            <div class="row">
                <div class="d-fl"></div>
            <?php  
            for($i=0; $i<10; $i++){ ?>
                <div class="col-md-6">
                    <table border="1" width="100%">
                        <tr>
                            <td>Nama</td>
                            <td>Nama</td>
                        </tr>
                    </table>
                </div>
                <?php } ?>
            </div>
            
			    
		</div>
	</div>
</body>
</html>