<div class="content-wrapper">
    <section class="content-header">
      <h1><small>Form</small> Slider
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Slider</li>
      </ol>
    </section>
    <br>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

<div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Form <?= $button == "Create" ? "Tambah" : "Edit" ?> Data  Slider</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                    <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="slider_gambar">Slider Gambar <?php echo form_error('slider_gambar') ?></label>
            <input type="text" class="form-control" name="slider_gambar" id="slider_gambar" placeholder="Slider Gambar" value="<?php echo $slider_gambar; ?>" />
        </div>
	    <div class="form-group">
            <label for="slider_judul">Slider Judul <?php echo form_error('slider_judul') ?></label>
            <input type="text" class="form-control" name="slider_judul" id="slider_judul" placeholder="Slider Judul" value="<?php echo $slider_judul; ?>" />
        </div>
	    <input type="hidden" name="slider_id" value="<?php echo $slider_id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('slider') ?>" class="btn btn-default">Cancel</a>
	</form>
              

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        </div>
        </div>
        </section>

