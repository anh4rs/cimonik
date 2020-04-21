<div class="content-wrapper">
  <section class="content-header">
    <h1><small>Form</small> Pengumuman
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Pengumuman</li>
    </ol>
  </section>
  <br>
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box box-warning">
          <div class="box-header with-border">
            <h3 class="box-title">Form <?= $button == "Create" ? "Tambah" : "Edit" ?> Data Pengumuman</h3>
            <div class="pull-right">
              <a href="<?php echo site_url('pengumuman') ?>" class="btn btn-warning "><i class="fa fa-undo"></i> Kembali</a>
            </div>
          </div>
          <!-- /.box-header -->
          <form action="<?php echo $action; ?>" method="post">
            <div class="box-body">

              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="form-group">
                    <label for="pengumuman_judul">Judul Pengumuman <span class="text-danger">*</span> <?php echo form_error('pengumuman_judul') ?></label>
                    <input type="text" class="form-control" name="pengumuman_judul" id="pengumuman_judul" placeholder="Pengumuman Judul" value="<?php echo $pengumuman_judul; ?>" autofocus/>
                  </div>
                  <div class="form-group">
                    <label for="pengumuman_deskripsi">Deskripsi Pengumuman <span class="text-danger">*</span> <?php echo form_error('pengumuman_deskripsi') ?></label>
                    <textarea class="form-control" rows="3" name="pengumuman_deskripsi" id="pengumuman_deskripsi" placeholder="Pengumuman Deskripsi"><?php echo $pengumuman_deskripsi; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="pengumuman_tanggal">Tanggal Pengumuman <span class="text-danger">*</span> <?php echo form_error('pengumuman_tanggal') ?></label>
                    <input type="date" class="form-control" name="pengumuman_tanggal" id="pengumuman_tanggal" placeholder="Pengumuman Tanggal" value="<?php echo date('Y-m-d'); ?>" />
                  </div>
                  <input type="hidden" name="pengumuman_id" value="<?php echo $pengumuman_id; ?>" />

                </div>
              </div>
            </div>
            <div class="box-footer text-center">
              <button type="submit" class="btn btn-primary"><?= $button == 'Create' ? "Simpan" : "Update" ?></button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          </form>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>
  </div>
</section>