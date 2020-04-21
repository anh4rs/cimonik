<div class="content-wrapper">
    <section class="content-header">
      <h1><small>Form</small> Berita
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Berita</li>
    </ol>
</section>
<br>
<section class="content">
  <div class="row">
    <div class="col-xs-12">

        <form action="<?php echo $action; ?>" method="post">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Form <?= $button == "Create" ? "Tambah" : "Edit" ?> Data  Berita</h3>
                    <div class="pull-right">
                        <a href="<?php echo site_url('berita') ?>" class="btn btn-warning"><i class="fa fa-undo"></i> Kembali</a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                 <div class="form-group">
                    <label for="berita_judul">Judul Berita <span class="text-danger">*</span> <?php echo form_error('berita_judul') ?></label>
                    <input type="text" class="form-control" name="berita_judul" id="berita_judul" placeholder="Berita Judul" value="<?php echo $berita_judul; ?>" autofocus/>
                </div>
                <div class="form-group">
                    <label for="berita_isi">Isi Berita <span class="text-danger">*</span> <?php echo form_error('berita_isi') ?></label>
                    <textarea class="form-control" rows="3" name="berita_isi" id="berita_isi" placeholder="Berita Isi"><?php echo $berita_isi; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="berita_tanggal">Tanggal Berita <span class="text-danger">*</span> <?php echo form_error('berita_tanggal') ?></label>
                    <input type="date" class="form-control" name="berita_tanggal" id="berita_tanggal" placeholder="Berita Tanggal" value="<?= date('Y-m-d') ?>" />
                    <!--                 <input type="time" class="form-control" name="berita_tanggal" id="berita_tanggal" placeholder="Berita Tanggal" value="<?=  time() ?>" /> -->
                </div>
                <div class="form-group">
                    <label for="int">Kategori Berita <span class="text-danger">*</span> <?php echo form_error('berita_kategori_id') ?></label>
                    <select class="form-control" name="berita_kategori_id"> 
                        <option value="">-- Pilih Kategori Berita-- </option>
                        <?php
                        foreach ($kategoris as $kategori) {
                            ?>
                            <option value="<?= $kategori->kategori_id ?>" <?= $kategori->kategori_id == $berita_kategori_id ? 'selected' : '' ?>><?= $kategori->kategori_nama; ?></option>
                            <?php
                        }
                        ?>
                    </select>            
                </div>
                <div class="form-group">
                    <label for="varchar">Gambar Berita <span class="text-danger">*</span> <?php echo form_error('berita_gambar') ?></label>
                    <input type="file" class="form-control" name="berita_gambar" id="gambar" />
                    <div id="image_preview" style="display: block"></div>
                </div>

                <input type="hidden" name="berita_id" value="<?php echo $berita_id; ?>" /> 
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
                <button type="submit" class="btn btn-primary"><?= $button == "Create" ? "Save" : "Update" ?></button> 
            </div>
        </div>
        <!-- /.box -->
    </form>
</div>
</div>
</div>
</section>

