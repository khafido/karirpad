	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="col-md-12">
					<br><br>
					<h1>
						Daftar Barang
						<br>
						<div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#modalBarang"><span class="fa fa-plus"></span> Tambah</a></div><br>
					</h1>
				</div>
				<table class="table table-striped" id="tblbarang">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Barang</th>
							<th>Kategori</th>
							<th>Harga</th>
							<th style="text-align: right;">Aksi</th>
						</tr>
					</thead>
					<tbody id="listbarang">
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<form id="saveBarang" method="post">
		<div class="modal fade" id="modalBarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Nama Barang <span class="text-danger">*</span></label>
							<div class="col-md-10">
								<input type="text" name="nama_barang" id="nama_barang" class="form-control" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Kategori <span class="text-danger">*</span></label>
							<div class="col-md-10">
								<select class="form-control" name="kategori" id="kategori">
									<option value="Retail">Retail</option>
									<option value="Wholesale">Wholesale</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Harga <span class="text-danger">*</span></label>
							<div class="col-md-10">
								<input type="number" name="harga" id="harga" class="form-control" min="1" required>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</div>
			</div>
		</div>
	</form>

	<form id="editForm" method="post">
		<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="editModalLabel">Ubah Barang</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Nama Barang <span class="text-danger">*</span></label>
							<div class="col-md-10">
								<input type="text" name="nama_barang" id="edit_nama_barang" class="form-control" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Kategori <span class="text-danger">*</span></label>
							<div class="col-md-10">
								<select class="form-control" name="kategori" id="edit_kategori">
									<option value="Retail">Retail</option>
									<option value="Wholesale">Wholesale</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Harga <span class="text-danger">*</span></label>
							<div class="col-md-10">
								<input type="number" name="harga" id="edit_harga" class="form-control" min="1" required>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<input type="hidden" name="updateId" id="updateId" class="form-control">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary">Ubah</button>
					</div>
				</div>
			</div>
		</div>
	</form>

	<form id="deleteForm" method="post">
		<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="deleteModalLabel">Delete Employee</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<strong>Anda yakin ingin menghapus data?</strong>
					</div>
					<div class="modal-footer">
						<input type="hidden" name="deleteId" id="deleteId" class="form-control">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary">Yakin</button>
					</div>
				</div>
			</div>
		</div>
	</form>
