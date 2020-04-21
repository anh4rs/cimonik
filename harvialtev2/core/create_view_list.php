<?php 

$string = "<div class=\"content-wrapper\">
    <section class=\"content-header\">
      <h1> ".ucfirst(str_replace(array('tbl_','Tbl_'),"",$table_name))." List
        <small>Referensi</small>
      </h1>
      <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
        <li class=\"active\">".ucfirst(str_replace(array('tbl_','Tbl_'),"",$table_name))."</li>
      </ol>
    </section>
    <br>
    <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-xs-12\">
          <div class=\"box box-warning\">
            <div class=\"box-header\">
              <h3 class=\"box-title\">Daftar Data ".ucfirst(str_replace(array('tbl_','Tbl_'),"",$table_name))."</h3>
              <div class=\"box-tools\">
                <?php echo \$pagination ?>
              </div><br><br>
              <div class=\"row\" style=\"margin-bottom: 10px\">
                <div class=\"col-md-4\">
                  <?php echo anchor(site_url('".$c_url."/create'),'<i class=\"fa fa-plus\" aria-hidden=\"true\"></i> &nbsp; Tambah Data ".ucfirst(str_replace(array('tbl_','Tbl_'),"",$table_name))." Baru', 'class=\"btn btn-primary\"'); ?>
                </div>
                <div class=\"col-md-4 text-center\">
                  <div style=\"margin-top: 8px\" id=\"message\">
                    <?php echo \$this->session->userdata('message') <> '' ? \$this->session->userdata('message') : '' ?>
                  </div>
                </div>
                <div class=\"col-md-1 text-right\">
                </div>
                <div class=\"col-md-3 text-right\">
                  <form action=\"<?php echo site_url('".$c_url."/index'); ?>\" class=\"form-inline\" method=\"get\">
                    <div class=\"input-group\">
                      <input type=\"text\" class=\"form-control\" name=\"q\" value=\"<?php echo \$q; ?>\">
                      <span class=\"input-group-btn\">
                        <?php 
                        if (\$q <> '')
                        {
                          ?>
                          <a href=\"<?php echo site_url('".$c_url."'); ?>\" class=\"btn btn-default\">Reset</a>
                          <?php
                        }
                        ?>
                        <button class=\"btn btn-primary\" type=\"submit\">Search</button>
                      </span>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <!-- /.box-header -->
            <div class=\"box-body \">
              <table class=\"table table-striped table-hover\">
                <tbody><tr>
                  <th style=\"width: 60px\">#</th>";
foreach ($non_pk as $row) {
    $string .= "\n\t\t<th>" . label($row['column_name']) . "</th>";
}
$string .= "\n\t\t<th style=\"text-align:center\" width=\"200px\">Action</th>
            </tr>";
$string .= "<?php
            foreach ($" . $c_url . "_data as \$$c_url)
            {
                ?>
                <tr>";

$string .= "\n\t\t\t<td width=\"80px\"><?php echo ++\$start ?></td>";
foreach ($non_pk as $row) {
    $string .= "\n\t\t\t<td><?php echo $" . $c_url ."->". $row['column_name'] . " ?></td>";
}


$string .= "\n\t\t\t<td style=\"text-align:center\" width=\"200px\">"
        . "\n\t\t\t\t<?php "
        . "\n\t\t\t\techo anchor(site_url('".$c_url."/read/'.$".$c_url."->".$pk."),'<i class=\"fa fa-list\"></i> Read'); "
        . "\n\t\t\t\techo ' | '; "
        . "\n\t\t\t\techo anchor(site_url('".$c_url."/update/'.$".$c_url."->".$pk."),'<i class=\"fa fa-pencil-square-o\"></i> Edit'); "
        . "\n\t\t\t\techo ' | '; "
        . "\n\t\t\t\techo anchor(site_url('".$c_url."/delete/'.$".$c_url."->".$pk."),'<i class=\"fa fa-trash-o\"></i> Delete',array('onclick' => \"return confirm(\'Yakin untuk hapus data ini ?\')\"))"
        . "\n\t\t\t\t?>"
        . "\n\t\t\t</td>";

$string .=  "\n\t\t</tr>
                <?php
            }
            ?>
                   </tbody></table>
          </div>
          <!-- /.box-body -->
          <div class=\"box-footer clearfix\">
            <div class=\"col-md-6\">
              <a href=\"#\" class=\"btn btn-primary\">Total Record : <?php echo \$total_rows ?></a>";
if ($export_excel == '1') {
    $string .= "\n\t\t<?php echo anchor(site_url('".$c_url."/excel'), '<i class=\"fa fa-file-excel-o\" aria-hidden=\"true\"></i> Excel', 'class=\"btn btn-primary\"'); ?>";
}
if ($export_word == '1') {
    $string .= "\n\t\t<?php echo anchor(site_url('".$c_url."/word'), '<i class=\"fa fa-file-word-o\" aria-hidden=\"true\"></i> Word', 'class=\"btn btn-primary\"'); ?>";
}
if ($export_pdf == '1') {
    $string .= "\n\t\t<?php echo anchor(site_url('".$c_url."/pdf'), '<i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i> PDF', 'class=\"btn btn-primary\"'); ?>";
}
$string .= "\n\t </div>
            <div class=\"col-md-6 text-right\">
              <?php echo \$pagination ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>";



$hasil_view_list = createFile($string, $target."views/" . $c_url . "/" . $v_list_file);

?>