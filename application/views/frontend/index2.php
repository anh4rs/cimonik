<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Top Navigation</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/') ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/') ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/') ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/') ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="<?= base_url('assets/adminlte/') ?>dist/css/skins/_all-skins.min.css">

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<style type="text/css">
  .judul_utama {
    font-weight: 700;
    font-style: normal;
    text-transform: uppercase;
    line-height: 0.9;
    font-size: 18px;
  }
  a:hover{
    color: #cc0000;
  }
  a{
    color: #444;
  }
  .small-post-image{
    margin-bottom: 10px;
  }
</style>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav layout-boxed">
  <div class="wrapper" style="display: flex;">

    <header class="main-header">
      <nav class="navbar navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" style="float: left !important;">
              <i class="fa fa-bars"></i>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">HOME <span class="sr-only">(current)</span></a></li>
              <li><a href="#">Guru</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                  <li class="divider"></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
              </div>
            </form>
          </div>

          <!-- /.navbar-custom-menu -->
        </div>
        <!-- /.container-fluid -->
      </nav>
    </header>
    <!-- Full Width Column -->
    

      <div class="kiri-utama border" style="flex-grow: 3;">
        Kiri
      </div>
      <aside>
        Sidebar
      </aside>
    

      <div class="container">
        <!-- Content Header (Page header) -->
        
        <div class="row"> 
          <div class="col-md-12">
            <div class="box box-solid">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(35).jpg">

                    <div class="carousel-caption">
                      First Slide
                    </div>
                  </div>
                  <div class="item active">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(31).jpg">

                    <div class="carousel-caption">
                      Second Slide
                    </div>
                  </div>
                  <div class="item">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg">

                    <div class="carousel-caption">
                      Third Slide
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>
              </div>


            </div>
          </div>
        </div>
        
        <section class="" style="display: flex; flex-grow: 1" >
        <div class="container " style="flex-grow: 3;">
          <div class="row">
            <h3>Category Style</h3>
          </div>
          <!-- Big - Kiri -->
          <div class="row" style="margin-top: 20px">
            <div  class="contohflex" style="display: flex; justify-content: space-around; flex-wrap: wrap;">
              <div class="kiriflex" style="    width: 240px; margin-bottom: 15px;">
                <div class="big-post-image">
                  <a href="#">
                    <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                    <h2 class="big-post-title" style="font-size: 20px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                    <div class="big-post-comment">
                      <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                    </div>
                  </a>
                </div>
              </div>                  
              <div class="kiriflex" style="    width: 240px; margin-bottom: 15px;">
                <div class="big-post-image">
                  <a href="#">
                    <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                    <h2 class="big-post-title" style="font-size: 20px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                    <div class="big-post-comment">
                      <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                    </div>
                  </a>
                </div>
              </div>   
              <div class="kiriflex" style="    width: 240px; margin-bottom: 15px;">
                <div class="big-post-image">
                  <a href="#">
                    <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                    <h2 class="big-post-title" style="font-size: 20px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                    <div class="big-post-comment">
                      <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                    </div>
                  </a>
                </div>
              </div>                      
              <div class="kiriflex" style="    width: 240px; margin-bottom: 15px;" >
                <div class="big-post-image">
                  <a href="#">
                    <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                    <h2 class="big-post-title" style="font-size: 20px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                    <div class="big-post-comment">
                      <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                    </div>
                  </a>
                </div>
              </div>   
              <div class="kiriflex" style="    width: 240px; margin-bottom: 15px;">
                <div class="big-post-image">
                  <a href="#">
                    <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                    <h2 class="big-post-title" style="font-size: 20px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                    <div class="big-post-comment">
                      <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                    </div>
                  </a>
                </div>
              </div>                  


            </div>
          </div>
          <!-- Kiri - Kiri -->
          <hr>
          <!-- Big - Kiri -->
          <div class="row" style="margin-top: 20px">
            <div  class="contohflex" style="display: flex; justify-content: space-between;">
              <div class="kiriflex" style="width: 49%;">
                <div class="big-post-image">
                  <a href="#">
                    <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                    <h2 class="big-post-title" style="font-size: 20px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                    <div class="big-post-comment">
                      <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                    </div>
                  </a>
                </div>
              </div>
              <div class="kananflex" style="width: 49%;">
                <a href="#">
                  <div class="small-post-image" style=" display: flex; justify-content: space-between; ">
                    <div class="post-img" style="width: 33%">
                      <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                    </div>
                    <div class="post-body" style="width: 65%">
                      <h2 class="big-post-title" style="margin-top:0 !important ;margin-bottom: 5px; font-size: 15px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                      <div class="big-post-comment">
                        <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                      </div>
                    </div>
                  </div>
                </a>
                <a href="#">
                  <div class="small-post-image" style=" display: flex; justify-content: space-between; ">
                    <div class="post-img" style="width: 33%">
                      <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                    </div>
                    <div class="post-body" style="width: 65%">
                      <h2 class="big-post-title" style="margin-top:0 !important ;margin-bottom: 5px; font-size: 15px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                      <div class="big-post-comment">
                        <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                      </div>
                    </div>
                  </div>
                </a>
                <a href="#">
                  <div class="small-post-image" style=" display: flex; justify-content: space-between; ">
                    <div class="post-img" style="width: 33%">
                      <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                    </div>
                    <div class="post-body" style="width: 65%">
                      <h2 class="big-post-title" style="margin-top:0 !important ;margin-bottom: 5px; font-size: 15px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                      <div class="big-post-comment">
                        <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                      </div>
                    </div>
                  </div>
                </a>
                <a href="#">
                  <div class="small-post-image" style=" display: flex; justify-content: space-between; ">
                    <div class="post-img" style="width: 33%">
                      <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                    </div>
                    <div class="post-body" style="width: 65%">
                      <h2 class="big-post-title" style="margin-top:0 !important ;margin-bottom: 5px; font-size: 15px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                      <div class="big-post-comment">
                        <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <!-- Kiri - Kiri -->
          <hr>
          <!-- Kiri - Kiri -->

          <div class="row" style="margin-top: 20px">
            <div  class="contohflex" style="display: flex; justify-content: space-between;">
              <div class="kiriflex" style="width: 49%;">
                <div class="big-post-image" style="margin-bottom: 10px;">
                  <a href="#">
                    <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                    <h2 class="big-post-title" style="font-size: 20px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                    <div class="big-post-comment">
                      <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                    </div>
                  </a>
                </div>
                <div class="kananflex" style="width: 100%;">
                  <a href="#">
                    <div class="small-post-image" style=" display: flex; justify-content: space-between; ">
                      <div class="post-img" style="width: 33%">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      </div>
                      <div class="post-body" style="width: 65%">
                        <h2 class="big-post-title" style="margin-top:0 !important ;margin-bottom: 5px; font-size: 15px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                        <div class="big-post-comment">
                          <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="small-post-image" style=" display: flex; justify-content: space-between; ">
                      <div class="post-img" style="width: 33%">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      </div>
                      <div class="post-body" style="width: 65%">
                        <h2 class="big-post-title" style="margin-top:0 !important ;margin-bottom: 5px; font-size: 15px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                        <div class="big-post-comment">
                          <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="small-post-image" style=" display: flex; justify-content: space-between; ">
                      <div class="post-img" style="width: 33%">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      </div>
                      <div class="post-body" style="width: 65%">
                        <h2 class="big-post-title" style="margin-top:0 !important ;margin-bottom: 5px; font-size: 15px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                        <div class="big-post-comment">
                          <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="small-post-image" style=" display: flex; justify-content: space-between; ">
                      <div class="post-img" style="width: 33%">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      </div>
                      <div class="post-body" style="width: 65%">
                        <h2 class="big-post-title" style="margin-top:0 !important ;margin-bottom: 5px; font-size: 15px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                        <div class="big-post-comment">
                          <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="kiriflex" style="width: 49%;">
                <div class="big-post-image" style="margin-bottom: 10px;">
                  <a href="#">
                    <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                    <h2 class="big-post-title" style="font-size: 20px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                    <div class="big-post-comment">
                      <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                    </div>
                  </a>
                </div>
                <div class="kananflex" style="width: 100%;">
                  <a href="#">
                    <div class="small-post-image" style=" display: flex; justify-content: space-between; ">
                      <div class="post-img" style="width: 33%">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      </div>
                      <div class="post-body" style="width: 65%">
                        <h2 class="big-post-title" style="margin-top:0 !important ;margin-bottom: 5px; font-size: 15px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                        <div class="big-post-comment">
                          <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="small-post-image" style=" display: flex; justify-content: space-between; ">
                      <div class="post-img" style="width: 33%">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      </div>
                      <div class="post-body" style="width: 65%">
                        <h2 class="big-post-title" style="margin-top:0 !important ;margin-bottom: 5px; font-size: 15px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                        <div class="big-post-comment">
                          <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="small-post-image" style=" display: flex; justify-content: space-between; ">
                      <div class="post-img" style="width: 33%">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      </div>
                      <div class="post-body" style="width: 65%">
                        <h2 class="big-post-title" style="margin-top:0 !important ;margin-bottom: 5px; font-size: 15px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                        <div class="big-post-comment">
                          <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="small-post-image" style=" display: flex; justify-content: space-between; ">
                      <div class="post-img" style="width: 33%">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      </div>
                      <div class="post-body" style="width: 65%">
                        <h2 class="big-post-title" style="margin-top:0 !important ;margin-bottom: 5px; font-size: 15px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                        <div class="big-post-comment">
                          <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>

          </div>              

          <!-- END Kiri - Kiri -->
          <hr>
          <!-- Kanan - Kiri -->
          <div class="row" style="margin-top: 20px">
            <div  class="contohflex" style="display: flex; justify-content: space-between;">
              <div class="kiriflex" style="width: 49%;">
                <div class="big-post-image" style="margin-bottom: 10px;">
                  <a href="#">
                    <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                    <h2 class="big-post-title" style="font-size: 20px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                    <div class="big-post-comment">
                      <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                    </div>
                  </a>
                </div>
                <div class="kananflex" style="width: 100%;">
                  <a href="#">
                    <div class="small-post-image" style=" display: flex; justify-content: space-between; flex-direction: row-reverse;">
                      <div class="post-img" style="width: 33%">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      </div>
                      <div class="post-body" style="width: 65%">
                        <h2 class="big-post-title" style="margin-top:0 !important ;margin-bottom: 5px; font-size: 15px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                        <div class="big-post-comment">
                          <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="small-post-image" style=" display: flex; justify-content: space-between; flex-direction: row-reverse;">
                      <div class="post-img" style="width: 33%">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      </div>
                      <div class="post-body" style="width: 65%">
                        <h2 class="big-post-title" style="margin-top:0 !important ;margin-bottom: 5px; font-size: 15px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                        <div class="big-post-comment">
                          <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="small-post-image" style=" display: flex; justify-content: space-between; flex-direction: row-reverse;">
                      <div class="post-img" style="width: 33%">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      </div>
                      <div class="post-body" style="width: 65%">
                        <h2 class="big-post-title" style="margin-top:0 !important ;margin-bottom: 5px; font-size: 15px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                        <div class="big-post-comment">
                          <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="small-post-image" style=" display: flex; justify-content: space-between; flex-direction: row-reverse;">
                      <div class="post-img" style="width: 33%">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      </div>
                      <div class="post-body" style="width: 65%">
                        <h2 class="big-post-title" style="margin-top:0 !important ;margin-bottom: 5px; font-size: 15px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                        <div class="big-post-comment">
                          <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="kiriflex" style="width: 49%;">
                <div class="big-post-image" style="margin-bottom: 10px;">
                  <a href="#">
                    <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                    <h2 class="big-post-title" style="font-size: 20px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                    <div class="big-post-comment">
                      <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                    </div>
                  </a>
                </div>
                <div class="kananflex" style="width: 100%;">
                  <a href="#">
                    <div class="small-post-image" style=" display: flex; justify-content: space-between; ">
                      <div class="post-img" style="width: 33%">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      </div>
                      <div class="post-body" style="width: 65%">
                        <h2 class="big-post-title" style="margin-top:0 !important ;margin-bottom: 5px; font-size: 15px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                        <div class="big-post-comment">
                          <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="small-post-image" style=" display: flex; justify-content: space-between; ">
                      <div class="post-img" style="width: 33%">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      </div>
                      <div class="post-body" style="width: 65%">
                        <h2 class="big-post-title" style="margin-top:0 !important ;margin-bottom: 5px; font-size: 15px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                        <div class="big-post-comment">
                          <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="small-post-image" style=" display: flex; justify-content: space-between; ">
                      <div class="post-img" style="width: 33%">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      </div>
                      <div class="post-body" style="width: 65%">
                        <h2 class="big-post-title" style="margin-top:0 !important ;margin-bottom: 5px; font-size: 15px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                        <div class="big-post-comment">
                          <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="small-post-image" style=" display: flex; justify-content: space-between; ">
                      <div class="post-img" style="width: 33%">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      </div>
                      <div class="post-body" style="width: 65%">
                        <h2 class="big-post-title" style="margin-top:0 !important ;margin-bottom: 5px; font-size: 15px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                        <div class="big-post-comment">
                          <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>

          </div>
          <!-- end Kanan - Kiri -->

          <hr>
          <!-- Kanan - kanan -->
          <div class="row" style="margin-top: 20px">
            <div  class="contohflex" style="display: flex; justify-content: space-between;">
              <div class="kiriflex" style="width: 49%;">
                <div class="big-post-image" style="margin-bottom: 10px;">
                  <a href="#">
                    <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                    <h2 class="big-post-title" style="font-size: 20px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                    <div class="big-post-comment">
                      <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                    </div>
                  </a>
                </div>
                <div class="kananflex" style="width: 100%;">
                  <a href="#">
                    <div class="small-post-image" style=" display: flex; justify-content: space-between; flex-direction: row-reverse;">
                      <div class="post-img" style="width: 33%">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      </div>
                      <div class="post-body" style="width: 65%">
                        <h2 class="big-post-title" style="margin-top:0 !important ;margin-bottom: 5px; font-size: 15px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                        <div class="big-post-comment">
                          <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="small-post-image" style=" display: flex; justify-content: space-between; flex-direction: row-reverse;">
                      <div class="post-img" style="width: 33%">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      </div>
                      <div class="post-body" style="width: 65%">
                        <h2 class="big-post-title" style="margin-top:0 !important ;margin-bottom: 5px; font-size: 15px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                        <div class="big-post-comment">
                          <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="small-post-image" style=" display: flex; justify-content: space-between; flex-direction: row-reverse;">
                      <div class="post-img" style="width: 33%">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      </div>
                      <div class="post-body" style="width: 65%">
                        <h2 class="big-post-title" style="margin-top:0 !important ;margin-bottom: 5px; font-size: 15px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                        <div class="big-post-comment">
                          <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="small-post-image" style=" display: flex; justify-content: space-between; flex-direction: row-reverse;">
                      <div class="post-img" style="width: 33%">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      </div>
                      <div class="post-body" style="width: 65%">
                        <h2 class="big-post-title" style="margin-top:0 !important ;margin-bottom: 5px; font-size: 15px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                        <div class="big-post-comment">
                          <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="kiriflex" style="width: 49%;">
                <div class="big-post-image" style="margin-bottom: 10px;">
                  <a href="#">
                    <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                    <h2 class="big-post-title" style="font-size: 20px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                    <div class="big-post-comment">
                      <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                    </div>
                  </a>
                </div>
                <div class="kananflex" style="width: 100%;">
                  <a href="#">
                    <div class="small-post-image" style=" display: flex; justify-content: space-between; flex-direction: row-reverse;">
                      <div class="post-img" style="width: 33%">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      </div>
                      <div class="post-body" style="width: 65%">
                        <h2 class="big-post-title" style="margin-top:0 !important ;margin-bottom: 5px; font-size: 15px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                        <div class="big-post-comment">
                          <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="small-post-image" style=" display: flex; justify-content: space-between; flex-direction: row-reverse;">
                      <div class="post-img" style="width: 33%">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      </div>
                      <div class="post-body" style="width: 65%">
                        <h2 class="big-post-title" style="margin-top:0 !important ;margin-bottom: 5px; font-size: 15px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                        <div class="big-post-comment">
                          <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="small-post-image" style=" display: flex; justify-content: space-between; flex-direction: row-reverse;">
                      <div class="post-img" style="width: 33%">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      </div>
                      <div class="post-body" style="width: 65%">
                        <h2 class="big-post-title" style="margin-top:0 !important ;margin-bottom: 5px; font-size: 15px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                        <div class="big-post-comment">
                          <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="small-post-image" style=" display: flex; justify-content: space-between; flex-direction: row-reverse;">
                      <div class="post-img" style="width: 33%">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      </div>
                      <div class="post-body" style="width: 65%">
                        <h2 class="big-post-title" style="margin-top:0 !important ;margin-bottom: 5px; font-size: 15px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                        <div class="big-post-comment">
                          <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>

          </div>
          <!-- end Kanan - Kiri -->
          <hr>
          <!-- Kanan - kolom2  ----- kanan -->
          <div class="row" style="margin-top: 20px">
            <div  class="contohflex" style="display: flex; justify-content: space-between;">
              <div class="kiriflex" style="width: 49%;">
                <div class="big-post-image" style="margin-bottom: 10px;">
                  <a href="#">
                    <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                    <h2 class="big-post-title" style="font-size: 20px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                    <div class="big-post-comment">
                      <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                    </div>
                  </a>
                </div>
                <div class="kananflex" style="width: 100%; display: flex; justify-content: space-between; flex-wrap: wrap;" >
                  <div class="big-post-image" style="width: 176px; margin-bottom: 10px;">
                    <a href="#">
                      <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      <h2 class="big-post-title" style="font-size: 20px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                      <div class="big-post-comment">
                        <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                      </div>
                    </a>
                  </div>
                  <div class="big-post-image" style="width: 176px; margin-bottom: 10px;">
                    <a href="#">
                      <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      <h2 class="big-post-title" style="font-size: 20px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                      <div class="big-post-comment">
                        <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                      </div>
                    </a>
                  </div><div class="big-post-image" style="width: 176px; margin-bottom: 10px;">
                    <a href="#">
                      <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      <h2 class="big-post-title" style="font-size: 20px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                      <div class="big-post-comment">
                        <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                      </div>
                    </a>
                  </div>
                  <div class="big-post-image" style="width: 176px; margin-bottom: 10px;">
                    <a href="#">
                      <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      <h2 class="big-post-title" style="font-size: 20px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                      <div class="big-post-comment">
                        <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                      </div>
                    </a>
                  </div>

                </div>
              </div>
              <div class="kiriflex" style="width: 49%;">
                <div class="big-post-image" style="margin-bottom: 10px;">
                  <a href="#">
                    <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                    <h2 class="big-post-title" style="font-size: 20px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                    <div class="big-post-comment">
                      <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                    </div>
                  </a>
                </div>
                <div class="kananflex" style="width: 100%;">
                  <a href="#">
                    <div class="small-post-image" style=" display: flex; justify-content: space-between; flex-direction: row-reverse;">
                      <div class="post-img" style="width: 33%">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      </div>
                      <div class="post-body" style="width: 65%">
                        <h2 class="big-post-title" style="margin-top:0 !important ;margin-bottom: 5px; font-size: 15px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                        <div class="big-post-comment">
                          <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="small-post-image" style=" display: flex; justify-content: space-between; flex-direction: row-reverse;">
                      <div class="post-img" style="width: 33%">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      </div>
                      <div class="post-body" style="width: 65%">
                        <h2 class="big-post-title" style="margin-top:0 !important ;margin-bottom: 5px; font-size: 15px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                        <div class="big-post-comment">
                          <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="small-post-image" style=" display: flex; justify-content: space-between; flex-direction: row-reverse;">
                      <div class="post-img" style="width: 33%">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      </div>
                      <div class="post-body" style="width: 65%">
                        <h2 class="big-post-title" style="margin-top:0 !important ;margin-bottom: 5px; font-size: 15px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                        <div class="big-post-comment">
                          <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="#">
                    <div class="small-post-image" style=" display: flex; justify-content: space-between; flex-direction: row-reverse;">
                      <div class="post-img" style="width: 33%">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      </div>
                      <div class="post-body" style="width: 65%">
                        <h2 class="big-post-title" style="margin-top:0 !important ;margin-bottom: 5px; font-size: 15px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                        <div class="big-post-comment">
                          <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>

          </div>
          <!-- end Kanan - kolom2  ----- kanan -->
          <hr>
          <!-- Kanan - kolom2  ----- kanan -->
          <div class="row" style="margin-top: 20px">
            <div  class="contohflex" style="display: flex; justify-content: space-between;">
              <div class="kiriflex" style="width: 49%;">
                <div class="big-post-image" style="margin-bottom: 10px;">
                  <a href="#">
                    <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                    <h2 class="big-post-title" style="font-size: 20px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                    <div class="big-post-comment">
                      <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                    </div>
                  </a>
                </div>
              </div>
              <div class="kiriflex" style="width: 49%; display: flex; justify-content: space-between; flex-wrap: wrap;" >
                  <div class="big-post-image" style="width: 176px; margin-bottom: 10px;">
                    <a href="#">
                      <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      <h2 class="big-post-title" style="font-size: 20px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                      <div class="big-post-comment">
                        <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                      </div>
                    </a>
                  </div>
                  <div class="big-post-image" style="width: 176px; margin-bottom: 10px;">
                    <a href="#">
                      <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      <h2 class="big-post-title" style="font-size: 20px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                      <div class="big-post-comment">
                        <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                      </div>
                    </a>
                  </div>
                  <div class="big-post-image" style="width: 176px; margin-bottom: 10px;">
                    <a href="#">
                      <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      <h2 class="big-post-title" style="font-size: 20px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                      <div class="big-post-comment">
                        <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                      </div>
                    </a>
                  </div>
                  <div class="big-post-image" style="width: 176px; margin-bottom: 10px;">
                    <a href="#">
                      <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" class="img-responsive">
                      <h2 class="big-post-title" style="font-size: 20px;font-weight: 600; margin-top: 10px;">Efisiensi, Kemendag Pangkas Perjalanan Dinas di Tengah Corona</h2>
                      <div class="big-post-comment">
                        <span class="kategori" style="color: #cc0000;">Ekonomi</span> • 5 menit yang lalu
                      </div>
                    </a>
                  </div>
              </div>
            </div>

          </div>
          <!-- end Kanan - kolom2  ----- kanan -->
        </div>
        </section>
        <aside style="flex-grow: 1;">
          sidebar
        </aside>


      </div>
      <!-- /.container -->

    

    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="container">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.4.18
        </div>
        <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
        reserved.
      </div>
      <!-- /.container -->
    </footer>
  </div>
  <!-- ./wrapper -->
</body>
<!-- jQuery 3 -->
<script src="<?= base_url('assets/adminlte/') ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url('assets/adminlte/') ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url('assets/adminlte/') ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url('assets/adminlte/') ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/adminlte/') ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/adminlte/') ?>dist/js/demo.js"></script>
</body>
</html>
