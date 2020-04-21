<div class="content-wrapper">
  <section class="content-header">
    <h1><small>Form</small> Guru
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Guru</li>
    </ol>
  </section>
  <br>
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-warning">
          <form action="<?php echo $action; ?>" method="post">
            <div class="box-header with-border">
              <h3 class="box-title">Form  <?= $button == "Create" ? "Tambah" : "Edit" ?> Data Guru Baru</h3>
              <div class="pull-right">
                <a href="<?= site_url('guru') ?>" class="btn btn-warning"><i class="fa fa-undo"></i> Kembali</a>
              </div>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="guru_nama">Nama <?php echo form_error('guru_nama') ?></label>
                    <input type="text" class="form-control" name="guru_nama" id="guru_nama" placeholder="Guru Nama" value="<?php echo $guru_nama; ?>" autofocus />
                  </div>
                  <div class="form-group">
                    <label for="guru_nip">NIP <?php echo form_error('guru_nip') ?></label>
                    <input type="text" class="form-control" name="guru_nip" id="guru_nip" placeholder="Guru Nip" value="<?php echo $guru_nip; ?>" />
                  </div>
                  <div class="form-group">
                    <label for="guru_jenkel">Jenis kelamin<?php echo form_error('guru_jenkel') ?></label>
                    <select class="form-control" name="guru_jenkel" id="guru_jenkel">
                      <option value="">-- Pilih jenis kelamin --</option>
                      <option value="L">-- Laki-laki --</option>
                      <option value="P">-- Perempuan --</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="varchar">Guru mata pelajaran <?php echo form_error('guru_mapel') ?></label>
                    <input type="text" class="form-control" name="guru_mapel" id="guru_mapel" placeholder="Guru Mapel" value="<?php echo $guru_mapel; ?>" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="guru_tmp_lahir">Tempat lahir <?php echo form_error('guru_tmp_lahir') ?></label>
                    <input type="text" class="form-control" name="guru_tmp_lahir" id="guru_tmp_lahir" placeholder="Guru Tmp Lahir" value="<?php echo $guru_tmp_lahir; ?>" />
                  </div>
                  <div class="form-group">
                    <label for="guru_tgl_lahir">Tanggal lahir <?php echo form_error('guru_tgl_lahir') ?></label>
                    <input type="text" class="form-control" name="guru_tgl_lahir" id="guru_tgl_lahir" placeholder="Guru Tgl Lahir" value="<?php echo $guru_tgl_lahir; ?>" />
                  </div>
                  <div class="form-group">
                    <label for="guru_photo">Foto <?php echo form_error('guru_photo') ?></label>
                    <input type="file" class="form-control" name="guru_photo" id="gambar" />
                    <div id="image_preview" style="display: block"></div>
                  </div>
                  <input type="hidden" name="guru_id" value="<?php echo $guru_id; ?>" />

                </div>
              </div>


            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <button type="submit" class="btn btn-success"><?= $button == "Create" ? "Save" : "Update" ?></button>
            </div>
          </form>
        </div>
        <!-- /.box -->
      </div>
    </div>
  </section>