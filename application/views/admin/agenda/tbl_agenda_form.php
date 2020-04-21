<div class="content-wrapper">
  <section class="content-header">
    <h1><small>Form</small> Agenda
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Agenda</li>
    </ol>
  </section>
  <br>
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <form action="<?php echo $action; ?>" method="post">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Form <?= $button == "Create" ? "Tambah" : "Edit" ?> Data  Agenda</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">


              <div class="row">
                <div class="col-md-8 col-md-offset-2">

                 <div class="form-group">
                  <label for="agenda_nama">Nama Agenda <span class="text-danger">*</span>  <?php echo form_error('agenda_nama') ?></label>
                  <input type="text" class="form-control" name="agenda_nama" id="agenda_nama" placeholder="Agenda Nama" value="<?php echo $agenda_nama; ?>" />
                </div>
                <div class="form-group">
                  <label for="agenda_tanggal">Tanggal Agenda <span class="text-danger">*</span> <?php echo form_error('agenda_tanggal') ?></label>
                  <input type="date" class="form-control" name="agenda_tanggal" id="agenda_tanggal" placeholder="Agenda Tanggal" value="<?php echo $agenda_tanggal; ?>" />
                </div>
                <div class="form-group">
                  <label for="agenda_deskripsi">Deskripsi Agenda <span class="text-danger">*</span>  <?php echo form_error('agenda_deskripsi') ?></label>
                  <textarea class="form-control" rows="10" name="agenda_deskripsi" id="agenda_deskripsi" placeholder="Agenda Deskripsi"><?php echo $agenda_deskripsi; ?></textarea>
                </div>
              </div>
            </div>
            <input type="hidden" name="agenda_id" value="<?php echo $agenda_id; ?>" /> 
          </div>
          <!-- /.box-body -->
          <div class="box-footer text-center">
            <button type="submit" class="btn btn-primary"><?= $button == "Create" ? "Save" : "Update" ?></button> 
            <a href="<?php echo site_url('agenda') ?>" class="btn btn-default">Cancel</a>
            
          </div>
        </div>
      </form>
      <!-- /.box -->
    </div>
  </div>
</div>
</section>

