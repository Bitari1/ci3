<!DOCTYPE html>
<html>
<head>
  <title>Bitarong</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

  <div class="container my-auto">
    <div class="row">
      <div class="col-lg-7 mx-auto">

        <h3 class="text-uppercase text-center">
          <strong>Tambah Artikel</strong>
        </h3><hr>

        <?php echo validation_errors(); ?>
        <?php echo form_open_multipart( 'blog/tambah', array('class' => 'needs-validation', 'novalidate' => '') ); ?>
            <table class="table table-striped text-center">
              <tr>
                  <select name="kategori" class="form-control" required=>
                  <option value="">Pilih Kategori</option>
                  <?php foreach($categories as $Category): ?>
                    <option value="<?php echo $Category->id_cat; ?>"><?php echo $Category->cat_name; ?></option>
                  <?php endforeach; ?>

                  </select><!-- 
                  <div class="invalid feedback">Pilih Dulu kategorinya</div>
                  <input type="text" name="input_kategori" value="<?php //echo set_value('input_kategori'); ?>"></td> -->
              </tr>
              <tr>
                <td>Judul</td>
                <td>:</td>
                <td><input type="text" class="form-control" name="input_judul" value="<?php echo set_value('input_judul'); ?>"></td>
              </tr>
              <tr>
                <td>Konten</td>
                <td>:</td>
                <td><input type="text" class="form-control" name="input_konten" value="<?php echo set_value('input_konten'); ?>"></td>
              </tr>
              <tr>
                <td>Tanggal </td>
                <td>:</td>
                <td><input type="date" class="form-control" name="input_tanggal" value="<?php echo set_value('input_tanggal'); ?>"></td>
              </tr>
              <tr>
                <td>Penulis </td>
                <td>:</td>
                <td><input type="text" class="form-control" name="input_penulis" value="<?php echo set_value('input_penulis'); ?>"></td>
              </tr>
              <tr>
                <td>Sumber </td>
                <td>:</td>
                <td><input type="text" class="form-control"  name="input_sumber" value="<?php echo set_value('input_sumber'); ?>"></td>
              </tr>
              <tr>
                <td>Gambar</td>
                <td>:</td>
                <td><input type="file" name="input_gambar"></td>
              </tr>
              <tr>
                <td colspan="3"><input type="submit" name="simpan" value="simpan"></td>
              </tr>
            </table>
          </div>

        </div>
      </div>

</body>
</html>