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
    <link rel="shortcut icon" href="<?php echo base_url("assets/image/logo.ico"); ?>">

    <!-- My css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/style/style.css"); ?>">

    <!-- My Font -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">

    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    

    <title>EVENT JAYA 2</title>
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

     <!-- Workingspace -->
     <div class="container">
        <div class="row event">
          <div class="col-lg-6">
            <?php $gambar = $event['gambar']; ?>
            <img src="<?php echo base_url("assets/image/$gambar"); ?>">
          </div>
          <!-- <div class="col-sm-5" > -->
            <h3><?php echo $event['judul']; ?>"</h3>
            <p class="p-event">Diselenggarakan oleh PT. Yakjin Jaya Indonesia 2</p>
          <!-- </div> -->
        </div>
      </div>
        <!-- akhir Workingspace -->

        <header class="header-about">
          <main class="main-body">
            <article class="card">
              <h2 class="h2-event">Hallo !!!</h2>
              <p class="p-event"><font size="+2"<?php echo $event['deskripsi']; ?></font></p>
          
              <h2 class="h2-event">Tandai Kalender Kamu</h2>
              <p class="p-event">
               <i class="fa fa-calendar-alt" aria-hidden="true"></i> <?= date('d F Y', strtotime($event['tanggal'])); ?> <br>
               <i class="fa fa-map-marker-alt" aria-hidden="true"> </i> <?php echo $event['lokasi']; ?>  
               </p><br>
            </article>
          </main>
        </header>

    <!-- Footer -->
    <div class="row footer">
      <div class="col text-center ">
        <div class="copyright text-center my-auto" style="font-weight: bold; font-size: 15px;  ">
       <span>Copyright &copy; Yakjin Clinic <?= date('Y'); ?></span>
        </div>
      </div>
    </div>
    <!-- akhir Footer -->

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