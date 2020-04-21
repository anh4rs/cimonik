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
        <h2 style="margin-top:0px">Tbl_guru Read</h2>
        <table class="table">
	    <tr><td>Guru Nip</td><td><?php echo $guru_nip; ?></td></tr>
	    <tr><td>Guru Nama</td><td><?php echo $guru_nama; ?></td></tr>
	    <tr><td>Guru Jenkel</td><td><?php echo $guru_jenkel; ?></td></tr>
	    <tr><td>Guru Tmp Lahir</td><td><?php echo $guru_tmp_lahir; ?></td></tr>
	    <tr><td>Guru Tgl Lahir</td><td><?php echo $guru_tgl_lahir; ?></td></tr>
	    <tr><td>Guru Mapel</td><td><?php echo $guru_mapel; ?></td></tr>
	    <tr><td>Guru Photo</td><td><?php echo $guru_photo; ?></td></tr>
	    <tr><td>Guru Tgl Input</td><td><?php echo $guru_tgl_input; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('guru') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>