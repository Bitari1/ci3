<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

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
        <a class="navbar-brand js-scroll-trigger" href="blog">HOME</a>
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
              <strong>Data Tables</strong>
            </h3><hr>
          </div>
    
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <table id="dt-ajax" class="table table-striped table-bordered text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Judul</th>
                             <th>Kategori</th>
                            <th>Tanggal</th>
                            <th>Penulis</th>
                         <!--    <th>Sumber</th> -->
                            <th>Gambar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $d) : ?>
                        <tr>
                            <td><?php echo $d->id ?></td>
                            <td><?php echo $d->judul ?></td>
                            <td><?php echo $d->kategori ?></td>
                            <td><?php echo $d->tanggal ?></td>
                            <td><?php echo $d->penulis ?></td>
                           <!--  <td><?php echo $d->sumber ?></td> -->
                            <td><?php echo $d->gambar ?></td>
                            <td>
                                <a href="<?php echo base_url('/blog/edit/') . $d->id ?>" class="btn btn-sm btn-outline-primary">Edit</a> 
                                <a href="<?php echo base_url('/blog/delete/') . $d->id ?>" class="btn btn-sm btn-outline-danger">Delete</a> 
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
	
</main>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css">
<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery-1.9.1.min.js"></script>
<script>
    //jQuery(document).ready(function(){

        // Contoh inisialisasi Datatable tanpa konfigurasi apapun
        // #dt-basic adalah id html dari tabel yang diinisialisasi
      //  $('#dt-basic').DataTable();
    //});
 jQuery(document).ready(function(){
 $('#dt-ajax').DataTable({
 "ajax": "<?php echo base_url() ?>datatables/get_json",
 "columns": [
 { "data": "post_id" },
 { "data": "date_created" },
 { "data": "post_title" },
 { "data": "cat_name" },
 { "data": "post_status" },

// Kolom Action
 {
 "data" : null,
 "render": function (data) {
 return '<a href="<?php echo base_url('blog/edit/') ?>'+
data.post_id + '" class="btn btn-sm btn-outline-primary">Edit</a> <a href="<?php echo
base_url('blog/delete/') ?>'+ data.post_id + '" class="btn btn-sm
btn-outline-danger">Delete</a>'
 }
 },
 ],
 });
 });
</script>
