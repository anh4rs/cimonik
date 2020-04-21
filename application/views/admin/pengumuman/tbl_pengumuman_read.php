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
        <h2 style="margin-top:0px">Tbl_pengumuman Read</h2>
        <table class="table">
	    <tr><td>Pengumuman Judul</td><td><?php echo $pengumuman_judul; ?></td></tr>
	    <tr><td>Pengumuman Deskripsi</td><td><?php echo $pengumuman_deskripsi; ?></td></tr>
	    <tr><td>Pengumuman Tanggal</td><td><?php echo $pengumuman_tanggal; ?></td></tr>
	    <tr><td>Pengumuman Author</td><td><?php echo $pengumuman_author; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pengumuman') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>