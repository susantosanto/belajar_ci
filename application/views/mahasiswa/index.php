<div class="container mt-5">
	<div class="row">
		<div class="col-md-6">
			<a href="<?= base_url() ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-6">
			<form action="" method="POST">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Cari Data Mahasiswa.." name="keyword">
					<button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
				</div>
			</form>
		</div>
	</div>
	<div class="row mt-4">
		<div class="col-md-6">
			<?php if ($this->session->flashdata('flash')) : ?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Sukses</strong> <?= $this->session->flashdata('flash'); ?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			<?php endif; ?>
			<h3>Daftar Mahasiswa</h3>
			<?php if (empty($mahasiswa)) : ?>
				<div class="alert alert-danger" role="alert">
					Data Mahasiswa Tidak Ditemukan !!
				</div>
			<?php endif; ?>
			<ul class="list-group mt-4">
				<?php foreach ($mahasiswa as $mhs) : ?>
					<li class="list-group-item">
						<?= $mhs['nama']; ?>
						<a href="<?php base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge bg-danger float-end" onclick="return confirm('Yakin');">Hapus</a>
						<a href="<?php base_url(); ?>mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge bg-success float-end">Ubah</a>
						<a href="<?php base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary float-end">Detail</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>

</div>
