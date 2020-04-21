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

<div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Form <?= $button == "Create" ? "Tambah" : "Edit" ?> Data  Agenda</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                    <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="agenda_nama">Agenda Nama <?php echo form_error('agenda_nama') ?></label>
            <input type="text" class="form-control" name="agenda_nama" id="agenda_nama" placeholder="Agenda Nama" value="<?php echo $agenda_nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="agenda_tanggal">Agenda Tanggal <?php echo form_error('agenda_tanggal') ?></label>
            <input type="text" class="form-control" name="agenda_tanggal" id="agenda_tanggal" placeholder="Agenda Tanggal" value="<?php echo $agenda_tanggal; ?>" />
        </div>
	    <div class="form-group">
            <label for="agenda_deskripsi">Agenda Deskripsi <?php echo form_error('agenda_deskripsi') ?></label>
            <textarea class="form-control" rows="3" name="agenda_deskripsi" id="agenda_deskripsi" placeholder="Agenda Deskripsi"><?php echo $agenda_deskripsi; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="agenda_author">Agenda Author <?php echo form_error('agenda_author') ?></label>
            <input type="text" class="form-control" name="agenda_author" id="agenda_author" placeholder="Agenda Author" value="<?php echo $agenda_author; ?>" />
        </div>
	    <input type="hidden" name="agenda_id" value="<?php echo $agenda_id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('agenda') ?>" class="btn btn-default">Cancel</a>
	</form>
              

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        </div>
        </div>
        </section>

