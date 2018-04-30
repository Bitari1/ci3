<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">HOME</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="blog">About</a>
            </li>            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
<!--             </li class="nav-item">
              <a class="nav-link" href="<?php echo base_url().'category'; ?> ">Kategori</a>
            </li> -->

          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Pariwisata Kota Malang</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">Apa lagi yang menarik dari Malang? Agar tak mengenal Malang hanya dari sejuk dan apelnya, berikut ini rangkuman tempat wisata di Malang yang sayang sekali jika dilewatkan:</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">

        <?php foreach ($artikel as $key): ?>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white"><?php echo $key->judul ?></h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">
              <img src="img/<?php echo $key->gambar;?>" alt="Image" width="200">
                  <br>
              Diupload tanggal : <?php echo $key->tanggal ?><br>
              <a  href="blog/detail/<?php echo $key->id ?>">
                  <font color="white">Read View...</font>
              </a>
              &nbsp &nbsp &nbsp &nbsp

              <a href='blog/edit/<?php echo $key->id?>' class='btn btn-sm btn-info'> Update</a>
              <a href='blog/delete/<?php echo $key->id;?>' class='btn btn-sm btn-danger'>Delete</a>
            </p>
          </div>
        </div>
        <br> <br> <br>
        <?php endforeach ?>

      </div>
    </section>

    <div class="container">
      
      <table>
        <!-- <tr>
          <td>Judul</td>
          <td>:</td>
          <td><input type="text" name="input_judul" value="<?php echo set_value('input_judul'); ?>"></td>
        </tr>
        <tr>
          <td>Content</td>
          <td>:</td>
          <td><input type="text" name="input_content" value=""></td>
        </tr>
        <tr>
          <td>Tanggal </td>
          <td>:</td>
          <td><input type="text" name="input_tanggal" value=""></td>
        </tr>
        <tr>
          <td>Gambar</td>
          <td>:</td>
          <td><input type="file" name="input_gambar"></td>
        </tr>
        <tr> -->
          <br>
          <li><a href="blog/tambah" class="btn btn-sm btn-danger"> Tambah Artikel</a></li>
        </tr>
      </table>
    </div><br><br>

    <div>
  <a href='category' class='btn btn-sm btn-danger'>Kategori</a>
</div>

<!--     <?php echo form_open( 'category/create', array('class' => 'needs-validation', 'novalidate' =>
'') ); ?>
<div class="form-group">
 <label for="cat_name">Nama Kategori</label>
 <input type="text" class="form-control" name="cat_name" value="<?php echo
set_value('cat_name') ?>" required>
 <div class="invalid-feedback">Isi judul dulu gan</div>
</div>
<div class="form-group">
 <label for="text">Deskripsi</label>
 <input type="text" class="form-control" name="cat_description" value="<?php echo
set_value('cat_description') ?>" required>
 <div class="invalid-feedback">Isi deskripsinya dulu gan</div>
</div>
<button id="submitBtn" type="submit" class="btn btn-primary">Simpan</button> -->


  
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">
            <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>085-74-631-3661</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">Bitari.rahmalani@gmail.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="assets/js/creative.min.js"></script>

  </body>

</html>
