	<div id="myprofile">
		<div class="head-title">
			Informasi Pribadi
		</div>
		<?php
		$attr = array(
			"enctype" => "multipart/form-data",
			"class"	  => "form-input",
			"id" 	  => "update-profile"
		);
		echo form_open('myprofile/update', $attr);
		?>
		<div class="info">
			<label>Nama Lengkap</label>
			<input type="text" name="nama_lengkap" />
		</div> 
		<div class="info">
			<label>Email</label>
			<input type="text" name="email" />
		</div>
		<div class="info">
			<label>Phone</label>
			<input type="text" name="phone" />
		</div>
		<div class="info">
			<label>Gambar</label>
			<input type="file" name="gambar" />
		</div>
		<div class="info">
			<button type="submit">Update</button>
		</div>
		<?php
		echo form_close();
		?>
	</div>
	<div id="myprofile">
		<div class="head-title mt-10">
			Ubah Password
		</div>
		<?php
		$attr = array(
			"class"	  => "form-input",
		);
		echo form_open('myprofile/ubahpassword', $attr);
		?>
		<div class="info">
			<label>Password Lama</label>
			<input type="text" name="nama_lengkap" />
		</div>
		<div class="info">
			<label>Password Baru</label>
			<input type="text" name="email" />
		</div>
		<div class="info">
			<label>Konfirmasi Password Baru</label>
			<input type="text" name="phone" />
		</div>
		<div class="info">
			<button type="submit">Ubah Password</button>
		</div>
		<?php
		echo form_close();
		?>
	</div>
