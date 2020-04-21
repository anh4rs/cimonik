<?php 


$string = "<div class=\"content-wrapper\">
    <section class=\"content-header\">
      <h1><small>Form</small> ".ucfirst(str_replace(array('tbl_','Tbl_'),"",$table_name))."
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
            <div class=\"box-header with-border\">
              <h3 class=\"box-title\">Form <?= \$button == \"Create\" ? \"Tambah\" : \"Edit\" ?> Data  ".ucfirst(str_replace(array('tbl_','Tbl_'),"",$table_name))."</h3>
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\">

                    <form action=\"<?php echo \$action; ?>\" method=\"post\">";
foreach ($non_pk as $row) {
    if ($row["data_type"] == 'text')
    {
    $string .= "\n\t    <div class=\"form-group\">
            <label for=\"".$row["column_name"]."\">".label($row["column_name"])." <?php echo form_error('".$row["column_name"]."') ?></label>
            <textarea class=\"form-control\" rows=\"3\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" placeholder=\"".label($row["column_name"])."\"><?php echo $".$row["column_name"]."; ?></textarea>
        </div>";
    } else
    {
    $string .= "\n\t    <div class=\"form-group\">
            <label for=\"".$row["column_name"]."\">".label($row["column_name"])." <?php echo form_error('".$row["column_name"]."') ?></label>
            <input type=\"text\" class=\"form-control\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\" placeholder=\"".label($row["column_name"])."\" value=\"<?php echo $".$row["column_name"]."; ?>\" />
        </div>";
    }
}
$string .= "\n\t    <input type=\"hidden\" name=\"".$pk."\" value=\"<?php echo $".$pk."; ?>\" /> ";
$string .= "\n\t    <button type=\"submit\" class=\"btn btn-primary\"><?php echo \$button ?></button> ";
$string .= "\n\t    <a href=\"<?php echo site_url('".$c_url."') ?>\" class=\"btn btn-default\">Cancel</a>";
$string .= "\n\t</form>
              

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        </div>
        </div>
        </section>

";

$hasil_view_form = createFile($string, $target."views/" . $c_url . "/" . $v_form_file);

?>