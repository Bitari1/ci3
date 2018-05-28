
    <?php $this->load->view('template/header'); ?>

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

        <?php foreach ($artikel as $key) {?>
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

              <a href='<?php echo base_url()?>blog/edit/<?php echo $key->id?>' class='btn btn-sm btn-info'> Update</a>
              <a href='<?php echo base_url()?>blog/delete/<?php echo $key->id;?>' class='btn btn-sm btn-danger'>Delete</a>
            </p>
          </div>
        </div>
        <br> <br> <br>
        <?php }?>

      </div>
    </section>


<?php
 // $links ini berasal dari fungsi pagination
 // Jika $links ada (data melebihi jumlah max per page), maka tampilkan
 if (isset($links)) {
 echo $links;
 }
 ?>

 </main>

    <div class="container">
      
      <table>
        <!-- <tr>
          <td>Judul</td>
          <td>:</td>
          <td><input type="text" name="input_judul" value="<?php //echo set_value('input_judul'); ?>"></td>
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
          <br><center>
          <a href="<?php echo base_url()?>blog/tambah" class="btn btn-sm btn-danger"> Tambah Artikel</a><br><br>
          <a href="<?php echo base_url()?>category" class="btn btn-sm btn-danger"> Kategori</a>
        </tr>
      </table>
    </div><br><br>

    <div>
</div>

<!--     <?php// echo form_open( 'category/create', array('class' => 'needs-validation', 'novalidate' =>
'') ); ?>
<div class="form-group">
 <label for="cat_name">Nama Kategori</label>
 <input type="text" class="form-control" name="cat_name" value="<?php //echo
//set_value('cat_name') ?>" required>
 <div class="invalid-feedback">Isi judul dulu gan</div>
</div>
<div class="form-group">
 <label for="text">Deskripsi</label>
 <input type="text" class="form-control" name="cat_description" value="<?php //echo
//set_value('cat_description') ?>" required>
 <div class="invalid-feedback">Isi deskripsinya dulu gan</div>
</div>
<button id="submitBtn" type="submit" class="btn btn-primary">Simpan</button> -->

<?php $this->load->view('template/footer'); ?>
