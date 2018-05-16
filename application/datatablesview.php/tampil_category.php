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
    <nav>
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">HOME</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <!-- <a class="nav-link js-scroll-trigger" href="blog">About</a>-->
            </li>             
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            <!--  </li class="nav-item">
              <a class="nav-link" href="<?php// echo base_url().'category'; ?> ">Kategori</a>-->
            </li> 

          </ul>
        </div>
      </div>
    </nav>

    <header class=" text-center d-flex">
      <div class="container my-auto">
        <div class="row">
          
          <div class="col-lg-10 mx-auto">
            <h3 class="text-uppercase">
              <strong>Daftar Kategori</strong>
            </h3><hr>
          </div>

          <div class="col-lg-8 mx-auto">
            <center>
            <table class="table table-striped text-center">
              <th>
                <td>nama</td>
                <td>deskripsi</td>
                <td>aksi</td>
              </th>
              <tr>
                <?php foreach ($categories as $key): ?>
                <td><?php echo $key->id_cat?></td>
                <td><?php echo $key->cat_name ?></td>
                <td><?php echo $key->cat_description ?></td>
                <td>
                  <a href='Category/edit/<?php echo $key->id_cat ?>' class='btn btn-sm btn-info'>Update</a>
                  <a href='Category/delete/<?php echo $key->id_cat ?>' class='btn btn-sm btn-danger'>Hapus</a>
                </td>
              </tr>
              <?php endforeach?>
            </table>
            </center>

            <br>
            <a class="btn btn-primary js-scroll-trigger" href="<?php echo  base_url()?>category/create">Tambah</a>
          </div>

        </div>
      </div>
    </header>

<br>
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
    <script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url()?>assets/js/creative.min.js"></script>

  <!--   <script src="<?php //echo base_url('') ?>assets/datatables.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $('#example'.datatables());
      });
    </script> -->

  </body>

</html>