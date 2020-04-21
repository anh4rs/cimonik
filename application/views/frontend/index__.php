<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap');
  </style>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/bs/css/bootstrap.min.css') ?>">
  <style type="text/css">
    body{
      font-family: 'Roboto', sans-serif;

    }
    h3{
      font-size: 17px !important;
    }
    span.lainnya {
    font-weight: 300;
    font-size: 13px;
    }
    a:hover {
      color: #0056b3;
      text-decoration: none !important; 
    }
    section#slider {
      width: 100%;
      height: 350px;
      overflow: hidden;
    }
    section#slider .carousel {
      position: relative;
      height: 350px;
    }
    .carousel-control-next, .carousel-control-prev{
      height: 100%;
    }


    .card-body {
      border-top: solid 5px;
      border-radius: 5px;
      border-bottom: solid 5px;
    }

    /*konten*/
    div.content {
      width: 70%;

    }
    aside {
      width: 28%;

    }

    h2.berita-title{

      font-size: 19px;
      border-left: solid 6px;
      padding: 3px 9px;
      
    }
    #berita .berital, #berita .beritar, #pengumuman .pengumumanl, #pengumuman .pengumumanr {
      width: 49%;
    }

    .beritar a, .pengumumanr a {
      width: 48%;
    }

    .berital h2, .pengumumanl h2 {
      font-size: 18px;
      font-weight: 500;
      margin-top: 10px;
    }

    .beritar h2, .pengumumanr h2 {
      font-size: 15px;
      font-weight: normal;
      margin-top: 10px;
    }

    #pengm_prestasi{
      width: 100%;
    }
    #pengm_prestasi .pengumuman, #pengm_prestasi .prestasi {
      width: 4%;
    }
  </style>
  <title>Hello, world!</title>
</head>
<body style="background: #e3e3e3">
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown link
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <section id="slider" class="mt-3">
    <div class="container">
      <div id="slide" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#slide" data-slide-to="0" class="active"></li>
          <li data-target="#slide" data-slide-to="1"></li>
          <li data-target="#slide" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://cdn.dribbble.com/users/992274/screenshots/6412657/school_3_kit8-net.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://cdn.dribbble.com/users/788099/screenshots/5618421/art_school_kit8-net.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://cdn.dribbble.com/users/788099/screenshots/5281976/school_bus_kit8-net.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#slide" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slide" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
  <div class="container  d-flex justify-content-between">
    <div class="content">
      <section id="berita" class="shadow-md">
        <div class="card mt-3" style="">
          <div class="card-body" style="padding: 0.5rem;">
            <h3 class="card-title">BERITA <span class="float-right lainnya">Lainnya</span></h3>
            <div class="row ml-1 mr-1 berita d-flex justify-content-between mt-3">

              <div class="berital">
                <a href="">
                  <img src="http://psmk.kemdikbud.go.id/anggraini.php/article-thumb/1/4624.jpg" class="img-fluid">
                  <h2>
                    Siswa SMK Jurusan Tata Busana di Lamongan Produksi APD
                  </h2>
                </a>
              </div>        
              <div class="beritar d-flex justify-content-between flex-wrap">
                <a href="" >
                  <img src="http://psmk.kemdikbud.go.id/anggraini.php/article-thumb/1/4624.jpg" class="img-fluid">
                  <h2>
                    Siswa SMK Jurusan Tata Busana di Lamongan Produksi APD
                  </h2>
                </a>          
                <a href="">
                  <img src="http://psmk.kemdikbud.go.id/anggraini.php/article-thumb/1/4624.jpg" class="img-fluid">
                  <h2>
                    Siswa SMK Jurusan Tata Busana di Lamongan Produksi APD
                  </h2>
                </a>            
                <a href="" >
                  <img src="http://psmk.kemdikbud.go.id/anggraini.php/article-thumb/1/4624.jpg" class="img-fluid">
                  <h2>
                    Siswa SMK Jurusan Tata Busana di Lamongan Produksi APD
                  </h2>
                </a>          
                <a href="">
                  <img src="http://psmk.kemdikbud.go.id/anggraini.php/article-thumb/1/4624.jpg" class="img-fluid">
                  <h2>
                    Siswa SMK Jurusan Tata Busana di Lamongan Produksi APD
                  </h2>
                </a>
              </div>
            </div> 
          </div>
        </div>
      </section>   
      <section id="pengumuman">
        <div class="card mt-3 shadow-sm" style="">
          <div class="card-body" style="padding: 0.5rem;">
            <h3 class="card-title">PENGUMUMAN <span class="float-right lainnya">Lainnya</span></h3>
            <div class="row ml-1 mr-1 berita d-flex justify-content-between mt-3">

              <div class="pengumumanl">
                <a href="">
                  <img src="http://psmk.kemdikbud.go.id/anggraini.php/article-thumb/1/4624.jpg" class="img-fluid">
                  <h2>
                    Siswa SMK Jurusan Tata Busana di Lamongan Produksi APD
                  </h2>
                </a>
              </div>        
              <div class="pengumumanr d-flex justify-content-between flex-wrap">
                <a href="" >
                  <img src="http://psmk.kemdikbud.go.id/anggraini.php/article-thumb/1/4624.jpg" class="img-fluid">
                  <h2>
                    Siswa SMK Jurusan Tata Busana di Lamongan Produksi APD
                  </h2>
                </a>          
                <a href="">
                  <img src="http://psmk.kemdikbud.go.id/anggraini.php/article-thumb/1/4624.jpg" class="img-fluid">
                  <h2>
                    Siswa SMK Jurusan Tata Busana di Lamongan Produksi APD
                  </h2>
                </a>            
                <a href="" >
                  <img src="http://psmk.kemdikbud.go.id/anggraini.php/article-thumb/1/4624.jpg" class="img-fluid">
                  <h2>
                    Siswa SMK Jurusan Tata Busana di Lamongan Produksi APD
                  </h2>
                </a>          
                <a href="">
                  <img src="http://psmk.kemdikbud.go.id/anggraini.php/article-thumb/1/4624.jpg" class="img-fluid">
                  <h2>
                    Siswa SMK Jurusan Tata Busana di Lamongan Produksi APD
                  </h2>
                </a>
              </div>
            </div> 
          </div>
        </div>
      </section>      

      <section id="galery">

      </section>
    </div>
    <aside class=" ">
      <section id="kepsek">
        <div class="card mt-3 shadow-sm" style="">
          <div class="card-body" style="padding: 0.5rem;">
            <h3 class="card-title">KEPALA SEKOLAH</h3>
            <div class="row ml-1 mr-1 berita d-flex justify-content-between mt-3">
              <img src="http://psmk.kemdikbud.go.id/anggraini.php/article-thumb/1/4624.jpg" class="img-fluid">
              <h2>
                Harianto
              </h2>
            </a>

          </div> 
        </div>
      </div>
    </section>       
    <section id="guru">
      <div class="card mt-3 shadow-sm" style="">
        <div class="card-body" style="padding: 0.5rem;">
          <h3 class="card-title">Data Guru</h3>
          <div id="slideg" class="carousel slideg" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#slideg" data-slide-to="0" class="active"></li>
              <li data-target="#slideg" data-slide-to="1"></li>
              <li data-target="#slideg" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://cdn.dribbble.com/users/992274/screenshots/6412657/school_3_kit8-net.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://cdn.dribbble.com/users/788099/screenshots/5618421/art_school_kit8-net.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://cdn.dribbble.com/users/788099/screenshots/5281976/school_bus_kit8-net.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#slideg" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#slideg" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </section>    
  </aside>
</div>

<script src="<?= base_url('assets/bs/js/jquery-3.4.1.min.js') ?>"></script>
<script src="<?= base_url('assets/bs/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>