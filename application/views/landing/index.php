<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- My Logo Web -->
    <link rel="shortcut icon" href="assets/image/logo.ico">

    <!-- My css -->
    <link rel="stylesheet" type="text/css" href="assets/style/style.css">

    <!-- My Font -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
    

    <title>KLINIK JAYA 2</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url('landing')?>"><img src="<?php echo base_url("assets/image/logo.png"); ?>" height="25 px"> Yakjin Clinic<h1>Changing for the Better - Be F.I.T.</h1></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
          <a class="nav-link active" aria-current="page" href="<?= base_url('landing')?>">Home</a>
          <a class="nav-link" href="<?= base_url('landing/artikel')?>">Artikel</a>
          <a class="nav-link" href="<?= base_url('landing/event')?>">Event</a>
          <a class="nav-link" href="http://www.yakjin.com/">Yakjin</a>
          <a class="btn btn-danger tombol" href="<?= base_url('auth')?>">Masuk</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container-home">
        <h1 class="display-4">Keep <span>Healty </span>and Stay <span>Safe </span> Everyone<span>!!!</span><br><span>PT.Yakjin Jaya Indonesia 2</span></h1>
        </div>
        <!-- <a href="" class="btn btn-danger tombol">Our Work</a> -->
      </div>
    </div>
    <!-- akhir Jumbotron -->

    <!-- Container -->
    <div class="container-fluid">
    
    <!-- Info Panel -->
      <div class="container px-5 info-panel">
        <div class="row gx-5 justify-content-center">
          <div class="col">
            <div class="p-3">
              <img src="assets/image/home/nurse.jpg" alt="Nurse" height="80px">
              <h4>Nurse</h4>
              <p>Mrs. Rikrik Trisno Sugiarti A.Md. Per.</p></div>
          </div>
          <div class="col">
            <a href="<?= base_url('auth')?>">
            <div class="p-3"><img src="assets/image/home/list.jpg" class="utama" alt="List" height="80px">
              <h4 class="utama">Check Up</h4>
              <p>For You </p></div>
            </div>
          <div class="col">
            <a href="http://www.yakjin.com/">
            <div class="p-3"><img src="assets/image/home/gedung.png" alt="Gedung" height="80px"></a>
              <h4>About</h4>
              <p>PT.Yakjin Jaya Indonesia 2</p></div>
            </div>
          </div>
        </div>
        <!-- akhir Panel -->

        <!-- Workingspace -->
        <div class="row workingspace justify-content-center">
          <div class="col-lg-8">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <?php foreach ($list_artikel as $index => $artikel) { ?>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $index; ?>" class="active" aria-current="true" aria-label="Slide 1"></button>
                <?php } ?>
              </div>
              <div class="carousel-inner">
                <?php foreach ($list_artikel as $index => $artikel) {
                    $active = "";
                    if($index == 0){
                      $active = "active";  
                    }
                    $gambar = $artikel['gambar'];
                    if ($gambar != NULL) {
                      // code...
                    
                ?>
                     
                  <div class="carousel-item <?php echo $active; ?>">
                    <a href="<?= base_url('landing/artikel')?>">
                    <img src='<?php echo "assets/image/$gambar"; ?>' height="650px" class="d-block w-100 rounded-rectangle" alt="<?php echo $artikel['judul']; ?>">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                      <?php 
                        $maxLength = 50;
                        $plain_text = strip_tags($artikel['deskripsi']);
                        if (strlen($plain_text) > $maxLength) {
                          $simple_desc = substr($plain_text, 0, $maxLength) . "...";
                        } else {
                          $simple_desc = $plain_text;
                        }
                      ?> 
                      <h5><?php echo $artikel['judul']; ?></h5>
                      <p><?php echo $simple_desc; ?></p>
                    </div>
                  </div>
                <?php } }?>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
        <!-- akhir Workingspace -->

        <!-- Testimonial -->
        <section class="testimonial">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <h5>"Saya sampaikan terus pada masyarakat biar mereka mengerti. Jangan sampai ada uang dipakai untuk beli rokok dan tidak dipakai untuk menambah gizi anaknya."</h5>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-6 justify-content-center d-flex">
              <figure class="figure">
                <center><img src="assets/image/home/reisa.jpg" class="figure-img img-fluid rounded-circle" alt="Testi 1"></center>
              </figure>
              <figure class="figure">
                <center><img src="assets/image/home/hilman.JPG" class="figure-img img-fluid rounded-circle utama" alt="Testi 2"></center>
                <figcaption class="figure-caption">
                  <h5>Hilman Hilmawan</h5>
                  <p>Developer</p>
                </figcaption>
              </figure>
              <figure class="figure">
                <center><img src="assets/image/home/uli.jpg" class="figure-img img-fluid rounded-circle" alt="Testi 3"></center>
              </figure>
            </div>
          </div>
        </section>
        <!-- akhir Testimonial -->
        <!-- Footer -->
    <div class="row footer">
      <div class="col text-center ">
        <div class="copyright text-center my-auto" style="font-weight: bold; font-size: 15px;  ">
       <span>Copyright &copy; Yakjin Clinic <?= date('Y'); ?></span>
        </div>
      </div>
    </div>
        <!-- akhir Footer -->
    </div>
    <!-- akhir Container -->
    
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>