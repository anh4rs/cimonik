<div class="content-wrapper">
  <section class="content-header">
    <h1><small>Form</small> Kategori
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Kategori</li>
    </ol>
  </section>
  <br>
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <form action="<?php echo $action; ?>" method="post">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Form <?= $button == "Create" ? "Tambah" : "Edit" ?> Data  Kategori</h3>
              <div class="pull-right"><a href="<?php echo site_url('kategori') ?>" class="btn btn-warning"><i class="fa fa-undo"></i> Kembali</a></div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="form-group">
                    <label for="kategori_nama"> Nama Kategori <span class="text-danger">*</span> <?php echo form_error('kategori_nama') ?></label>
                    <input type="text" class="form-control" name="kategori_nama" id="kategori_nama" placeholder="Kategori Nama" value="<?php echo $kategori_nama; ?>"  autofocus/>
                  </div>
                  <input type="hidden" name="kategori_id" value="<?php echo $kategori_id; ?>" /> 
                  
                </div>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <button type="submit" class="btn btn-success"><?= $button == "Create" ? "Save" : "Update" ?></button> 
            </div>
          </div>
          <!-- /.box -->
        </form>
      </div>
    </div>
  </div>
</section>

