<div class="container mt-3">

	<div class="row">
		<div class="col-lg-6">
			<?= Flasher::flash(); ?>
		</div>
	</div>

	<div class="row mb-3">
		<div class="col-lg-6">
			<button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
				Tambah Data Mahasiswa
			</button>
		</div>
	</div>

	<div class="row mb-3">
		<div class="col-lg-6">
			<form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="cari mahasiswa.." autocomplete="off" name="keyword" id="keyword">
					<button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
				</div>
			</form>
		</div>
	</div>

	<div class="row">
		<div class="col-6">
		<!-- Button trigger modal -->
			<h3>Daftar Mahasiswa</h3>

			<ul class="list-group">
				<?php foreach($data['mhs'] as $mhs) : ?>
					<li class="list-group-item">
						<?= $mhs['nama']; ?>
						<a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('<?= $mhs['nama']; ?> akan dihapus?')">hapus</a>
						<a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">ubah</a>
						<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right ml-1">detail</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
		  
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
		  
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
			<input type="hidden" name="id" id="id">
			<div class="form-label">
				<label for="nama" class="form-label">Nama</label>
				<input type="text" class="form-control" id="nama" name="nama">
			</div>

			<div class="form-label">
				<label for="nim" class="form-label">Nim</label>
				<input type="number" class="form-control" id="nim" name="nim">
			</div>
		
			<div class="form-label">
				<label for="email" class="form-label">Email</label>
				<input type="email" class="form-control" id="email" name="email">
			</div>
				
			<div class="form-group">
				<label for="jurusan">Jurusan</label>
				<select class="form-select" id="jurusan" name="jurusan">
				<option value="Teknik Informatika">Teknik Informatika</option>
				<option value="Teknik Elektro">Teknik Elektro</option>
				<option value="Teknik Industri">Teknik Industri</option>
				<option value="Akutansi">Akutansi</option>
				<option value="Manejemen">Manejemen</option>
				<option value="Sastra Inggris">Sastra Inggris</option>
				<option value="Sistem Informasi">Sistem Informasi</option>
				</select>
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Tambah Data</button>
			</div>
		</form>
	  </div>
    </div>
  </div>
</div>