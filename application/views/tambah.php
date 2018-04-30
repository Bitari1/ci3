<div class="container">

<?php echo validation_errors(); ?>

<?php
        echo form_open('blog/tambah', array('enctype'=>'multipart/form-data')); 
       ?>
      <table>
        <tr>
          <td>Judul</td>
          <td>:</td>
          <td><input type="text" name="input_judul" value="<?php echo set_value('input_judul'); ?>"></td>
        </tr>
        <tr>
          <td>Konten</td>
          <td>:</td>
          <td><input type="text" name="input_konten" value="<?php echo set_value('input_konten'); ?>"></td>
        </tr>
        <tr>
          <td>Tanggal </td>
          <td>:</td>
          <td><input type="text" name="input_tanggal" value="<?php echo set_value('input_tanggal'); ?>"></td>
        </tr>

        <tr>
          <label>Category </label>
            <select name="id" class="form-control" required=>
            <option value="">Pilih Kategori</option>
            <?php foreach($Category as $Category): ?>
              <option value="<?php echo $Category->id; ?>"><?php echo $Category->cat_name; ?></option>
            <?php endforeach; ?>

            </select><!-- 
            <div class="invalid feedback">Pilih Dulu kategorinya</div>
            <input type="text" name="input_kategori" value="<?php echo set_value('input_kategori'); ?>"></td> -->
        </tr>
        <tr>
          <td>Penulis </td>
          <td>:</td>
          <td><input type="text" name="input_penulis" value="<?php echo set_value('input_penulis'); ?>"></td>
        </tr>
        <tr>
          <td>Sumber </td>
          <td>:</td>
          <td><input type="text" name="input_sumber" value="<?php echo set_value('input_sumber'); ?>"></td>
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