
		<?php 
		$pesan = $this->session->flashdata('pesan');
		if ( $pesan ){
			echo "<div class='pesan'>".$pesan."</div>";
		}
		?>
		<a href="<?php echo site_url('user/tambah')?>">Tambah User</a>
		<table>
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($users as $u){ ?>
				<tr> 
					<td><?php echo $u->id ?></td>
					<td><?php echo $u->nama_lengkap ?></td>
					<td><?php echo $u->email ?></td>
					<td><?php echo $u->phone ?></td>
					<td>
						<a href="<?php echo site_url('user/edit/'.$u->id)?>">Edit</a> | 
						<a href="<?php echo site_url('user/hapus/'.$u->id)?>">Hapus</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
    