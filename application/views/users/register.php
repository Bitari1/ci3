<?php echo form_open('user/register', array('class' => 'needs-validation', 'novalidate' => '')); ?>
<br>
<br>
<br>
	<div class="container" style=" background: orange;">
	 <div class="form-group">
		 <label>Nama Lengkap</label>
		 <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
	 </div>

	 <div class="form-group">
		 <label>Kodepos</label>
		 <input type="text" class="form-control" name="kodepos" placeholder="Kodepos">
	 </div>
	
	 <div class="form-group">
		 <label>Email</label>
	 	<input type="text" class="form-control" name="email" placeholder="Email">
	 </div>

	 <div class="form-group">
		 <label>Username</label>
		 <input type="text" class="form-control" name="username" placeholder="Username">
	 </div>

	 <div class="form-group">
		 <label>Password</label>
		 <input type="text" class="form-control" name="password" placeholder="Password">
	 </div>

	<div class="form-group">
		 <label for="">Pilih Paket Membership</label>
		 <div class="form-check">
		 <input class="form-check-input" type="radio" name="membership"
			id="goldmember" value="2" checked>
		 <label class="form-check-label" for="goldmember">Gold</label>
		 </div>

		 <div class="form-check">
		 <input class="form-check-input" type="radio" name="membership"
			id="silvermember" value="3">
		 <label class="form-check-label" for="silvermember">Silver</label>
		 </div>
	</div>


	 <button type="submit" class="btn btn-primary btn-block">Daftar</button>
	 	</div>

<?php echo form_close(); ?>