<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php echo form_open( 'category/create', array('class' => 'needs-validation', 'novalidate' => '') ); ?>

<div class="form-group">
 <label for="cat_name">Nama Kategori</label>
  <!-- <input type="text" class="form-control" name="cat_name" value="<?php //echo set_value('cat_name') ?>" required> -->
   <!-- <div class="invalid-feedback"></div> --> 
   
   <input type="text" name="cat_name" value="<?php echo set_value('cat_name'); ?>">
</div>

<div class="form-group">
  <label for="text">Deskripsi</label>
  <!--  <input type="text" class="form-control" name="cat_description" value="<?php //echo set_value('cat_description') ?>" required>
   <div class="invalid-feedback"></div> --> 
    <input type="text" name="cat_description" value="<?php echo set_value('cat_description'); ?>">
</div>
<td colspan="3"><input type="submit" name="simpan" value="simpan"></td>
<!-- <button type="submit" class="btn btn-primary">Simpan</button> -->
</form>
</body>
</html>