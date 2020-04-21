<div class="content-wrapper">
    <section class="content-header">
      <h1>Konfigurasi Web Portal
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pengaturan</li>
    </ol>
</section>
<br>
<section class="content">
  <div class="row">
    <div class="col-xs-12">

        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">Konfigurasi Default Web Portal</h3>
              <div class="pull-right">
                  <a href="<?= site_url() ?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i> Kembali</a>
              </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <form action="<?php echo $action; ?>" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama_sekolah">Nama Sekolah <?php echo form_error('nama_sekolah') ?></label>
                            <input type="text" class="form-control" name="nama_sekolah" id="nama_sekolah" placeholder="Nama Sekolah" value="<?php echo $nama_sekolah; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="npsn">NPSN <?php echo form_error('npsn') ?></label>
                            <input type="text" class="form-control" name="npsn" id="npsn" placeholder="Npsn" value="<?php echo $npsn; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat <?php echo form_error('alamat') ?></label>
                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="provinsi">Provinsi <?php echo form_error('provinsi') ?></label>
                            <input type="text" class="form-control" name="provinsi" id="provinsi" placeholder="Provinsi" value="<?php echo $provinsi; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="kabupaten">Kabupaten <?php echo form_error('kabupaten') ?></label>
                            <input type="text" class="form-control" name="kabupaten" id="kabupaten" placeholder="Kabupaten" value="<?php echo $kabupaten; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="kecamatan">Kecamatan <?php echo form_error('kecamatan') ?></label>
                            <input type="text" class="form-control" name="kecamatan" id="kecamatan" placeholder="Kecamatan" value="<?php echo $kecamatan; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="kodepos">Kodepos <?php echo form_error('kodepos') ?></label>
                            <input type="text" class="form-control" name="kodepos" id="kodepos" placeholder="Kodepos" value="<?php echo $kodepos; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon <?php echo form_error('telepon') ?></label>
                            <input type="text" class="form-control" name="telepon" id="telepon" placeholder="Telepon" value="<?php echo $telepon; ?>" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="koordinat">Koordinat <?php echo form_error('koordinat') ?></label>
                            <input type="text" class="form-control" name="koordinat" id="koordinat" placeholder="Koordinat" value="<?php echo $koordinat; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="apykeymap">Apykeymap <?php echo form_error('apykeymap') ?></label>
                            <input type="text" class="form-control" name="apykeymap" id="apykeymap" placeholder="Apykeymap" value="<?php echo $apykeymap; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="faks">Faks <?php echo form_error('faks') ?></label>
                            <input type="text" class="form-control" name="faks" id="faks" placeholder="Faks" value="<?php echo $faks; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="email">Email <?php echo form_error('email') ?></label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="facebook">Facebook <?php echo form_error('facebook') ?></label>
                            <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Facebook" value="<?php echo $facebook; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="youtube">Youtube <?php echo form_error('youtube') ?></label>
                            <input type="text" class="form-control" name="youtube" id="youtube" placeholder="Youtube" value="<?php echo $youtube; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="twitter">Twitter <?php echo form_error('twitter') ?></label>
                            <input type="text" class="form-control" name="twitter" id="twitter" placeholder="Twitter" value="<?php echo $twitter; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="googleplus">Google+ <?php echo form_error('googleplus') ?></label>
                            <input type="text" class="form-control" name="googleplus" id="googleplus" placeholder="Google+" value="<?php echo $googleplus; ?>" />
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                    </div>
                </div>    
            </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer text-center">
            <button type="submit" class="btn btn-primary"><?php echo $button == "Create" ? "Save" : "Update" ?></button> 
        </div>
    </div>
    <!-- /.box -->
</div>
</div>
</div>
</section>

