<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Tbl_pengaturan Read</h2>
        <table class="table">
	    <tr><td>Nama Sekolah</td><td><?php echo $nama_sekolah; ?></td></tr>
	    <tr><td>Npsn</td><td><?php echo $npsn; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
	    <tr><td>Provinsi</td><td><?php echo $provinsi; ?></td></tr>
	    <tr><td>Kabupaten</td><td><?php echo $kabupaten; ?></td></tr>
	    <tr><td>Kecamatan</td><td><?php echo $kecamatan; ?></td></tr>
	    <tr><td>Koordinat</td><td><?php echo $koordinat; ?></td></tr>
	    <tr><td>Apykeymap</td><td><?php echo $apykeymap; ?></td></tr>
	    <tr><td>Kodepos</td><td><?php echo $kodepos; ?></td></tr>
	    <tr><td>Telepon</td><td><?php echo $telepon; ?></td></tr>
	    <tr><td>Faks</td><td><?php echo $faks; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>Facebook</td><td><?php echo $facebook; ?></td></tr>
	    <tr><td>Youtube</td><td><?php echo $youtube; ?></td></tr>
	    <tr><td>Twitter</td><td><?php echo $twitter; ?></td></tr>
	    <tr><td>Google+</td><td><?php echo $google+; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pengaturan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>