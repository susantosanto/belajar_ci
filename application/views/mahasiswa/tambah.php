<div class="container mt-4">
	<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Tambah Data Mahasiswa
				</div>
				<div class="card-body">
					<form action="" method="POST">
						<div class="form-group mb-3">
							<label for="nrp" class="form-label">NRP</label>
							<input type="text" name="nrp" class="form-control" id="nrp">
							<small class="form-text text-danger fst-italic"><?= form_error('nrp'); ?></small>
						</div>
						<div class="form-group mb-3">
							<label for="nama" class="form-label">Nama Mahasiswa</label>
							<input type="text" name="nama" class="form-control" id="nama">
							<small class="form-text text-danger fst-italic"><?= form_error('nama'); ?></small>
						</div>
						<div class="form-group mb-3">
							<label for="email" class="form-label">Email</label>
							<input type="text" name="email" class="form-control" id="email">
							<small class="form-text text-danger fst-italic"><?= form_error('email'); ?></small>
						</div>
						<div class="form-group mb-3">
							<label for="jurusan" class="form-label">Jurusan</label>
							<select class="form-select" name="jurusan" id="jurusan">
								<option value="Teknik Informatika">Teknik Informatika</option>
								<option value="Sistem Informasi">Sistem Informasi</option>
								<option value="Teknik Industri">Teknik Industri</option>
							</select>
						</div>
						<button type="submit" name="tambah" class="btn btn-primary mt-3">Tambah data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
