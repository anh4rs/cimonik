  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url('assets/adminlte/'); ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= ucwords($this->session->userdata('user_name')); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

      </li>
      <li class="header">REFERENSI MASTER</li>

      <li <?= $this->router->fetch_class() == 'slider' ? 'class="active"' : ''  ?>><a href="<?= site_url('slider'); ?>"><i class="fa fa-gears"></i> <span>Slider</span></a></li>
      <li <?= $this->router->fetch_class() == 'agenda' ? 'class="active"' : ''  ?>><a href="<?= site_url('agenda'); ?>"><i class="fa fa-gears"></i> <span>Agenda</span></a></li>
      <li <?= $this->router->fetch_class() == 'kategori' ? 'class="active"' : ''  ?>><a href="<?= site_url('kategori'); ?>"><i class="fa fa-gears"></i> <span>Kategori</span></a></li>
      <li <?= $this->router->fetch_class() == 'pengumuman' ? 'class="active"' : ''  ?>><a href="<?= site_url('pengumuman'); ?>"><i class="fa fa-gears"></i> <span>Pengumuman</span></a></li>
      <li <?= $this->router->fetch_class() == 'berita' ? 'class="active"' : ''  ?>><a href="<?= site_url('berita'); ?>"><i class="fa fa-gears"></i> <span>Berita</span></a></li>
      <li <?= $this->router->fetch_class() == 'guru' ? 'class="active"' : ''  ?>><a href="<?= site_url('guru'); ?>"><i class="fa fa-gears"></i> <span>Guru</span></a></li>
      <li class="header">SETTING</li>
      <li <?= $this->router->fetch_class() == 'pengaturan' ? 'class="active"' : ''  ?>><a href="<?= site_url('pengaturan/update'); ?>"><i class="fa fa-gears"></i> <span>Pengaturan Web Portal</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

  <!-- =============================================== -->