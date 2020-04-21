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
        <h2 style="margin-top:0px">Tbl_berita Read</h2>
        <table class="table">
	    <tr><td>Berita Judul</td><td><?php echo $berita_judul; ?></td></tr>
	    <tr><td>Berita Isi</td><td><?php echo $berita_isi; ?></td></tr>
	    <tr><td>Berita Tanggal</td><td><?php echo $berita_tanggal; ?></td></tr>
	    <tr><td>Berita Kategori Id</td><td><?php echo $berita_kategori_id; ?></td></tr>
	    <tr><td>Berita Gambar</td><td><?php echo $berita_gambar; ?></td></tr>
	    <tr><td>Berita Pengguna Id</td><td><?php echo $berita_pengguna_id; ?></td></tr>
	    <tr><td>Berita Slug</td><td><?php echo $berita_slug; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('berita') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>