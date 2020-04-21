  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>


</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?= base_url('assets/adminlte/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url('assets/adminlte/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url('assets/adminlte/'); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url('assets/adminlte/'); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/adminlte/'); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/adminlte/'); ?>dist/js/demo.js"></script>
<!-- CK Editor -->
<script src="<?= base_url('assets/adminlte/'); ?>bower_components/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
  $("#gambar").change(function() {
    $('#image_preview').html("");
    var total_file = document.getElementById("gambar").files.length;
    for (var i = 0; i < total_file; i++) {
      $('#image_preview').append("<img width='120px' src='" + URL.createObjectURL(event.target.files[i]) + "'>");
    }
  });
</script>
<script>
  $(function () {

    var areas = Array('berita_isi', 'pengumuman_deskripsi', 'agenda_deskripsi');
    $.each(areas, function (i, area) {
      CKEDITOR.replace(area ,{
        filebrowserBrowseUrl : '<?= base_url("assets/adminlte/bower_components/"); ?>filemanager/dialog.php?type=2&editor=ckeditor&fldr= ?>',
        filebrowserUploadUrl : '<?= base_url("assets/adminlte/bower_components/"); ?>filemanager/dialog.php?type=2&editor=ckeditor&fldr= ?>',
        filebrowserImageBrowseUrl : '<?= base_url("assets/adminlte/bower_components/"); ?>filemanager/dialog.php?type=1&editor=ckeditor&fldr= ?>'
      })
    }
    );

  })
</script>
</body>

</html>