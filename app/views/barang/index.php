<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Barang</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Daftar Barang</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive table">
                        <table id="tableBarang" class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Harga Satuan</th>
                                    <th>Stok</th>
                                    <th>Total Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($data['barang'] as $barang) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $barang['nama_barang']; ?></td>
                                        <td><?= $barang['harga_satuan']; ?></td>
                                        <td><?= $barang['stok']; ?></td>
                                        <td><?= $barang['total_harga']; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-warning btn-edit" data-toggle="modal" data-target="#editBarangModal" data-id="<?= $barang['id_barang']; ?>" data-nama_barang="<?= $barang['nama_barang']; ?>" data-harga_satuan="<?= $barang['harga_satuan']; ?>" data-stok="<?= $barang['stok']; ?>" data-total_harga="<?= $barang['total_harga']; ?>">
                                                Edit
                                            </button>

                                            <a href="<?= BASEURL ?>/barang/hapus/<?= $barang['id_barang']; ?>" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahBarangModal">
                            Tambah Barang
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Tambah Barang Modal -->
<div class="modal fade" id="tambahBarangModal" tabindex="-1" role="dialog" aria-labelledby="tambahBarangModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahBarangModalLabel">Tambah Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= BASEURL; ?>/barang/tambah" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="namaBarang">Nama Barang:</label>
                        <input type="text" class="form-control" name="nama_barang" id="namaBarang" placeholder="Masukkan Nama Barang" required />
                        <div class="invalid-feedback">
                            Please fill out this field.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="stokBarang">Stok Barang:</label>
                        <input type="number" class="form-control" name="stok" id="stokBarang" placeholder="Stok Barang" required />
                        <div class="invalid-feedback">
                            Please fill out this field.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="namabarangProdusen">Harga Satuan:</label>
                        <input type="text" class="form-control" name="harga_satuan" id="namabarangProdusen" placeholder="Nama Barang dari Produsen" required />
                        <div class="invalid-feedback">
                            Please fill out this field.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="totalHarga">Total Harga:</label>
                        <input type="number" class="form-control" name="total_harga" id="totalHarga" placeholder="Total Harga" required />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Barang Modal -->
<div class="modal fade" id="editBarangModal" tabindex="-1" role="dialog" aria-labelledby="editBarangModalLabel<?= $barang['id_barang']; ?>" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editBarangModalLabel">Edit Barang - </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="POST" id="editBarangForm">
                <div class="modal-body">
                    <input type="hidden" name="id" id="edit_id_barang">
                    <div class="form-group">
                        <label for="namaBarang">Nama Barang:</label>
                        <input type="text" class="form-control" name="nama_barang" id="edit_nama_barang" placeholder="Masukkan Nama Barang" required />
                        <div class="invalid-feedback">
                            Please fill out this field.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="stokBarang">Stok Barang:</label>
                        <input type="number" class="form-control" name="stok" id="edit_stok_barang" placeholder="Stok Barang" required />
                        <div class="invalid-feedback">
                            Please fill out this field.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="namabarangProdusen">Harga Satuan:</label>
                        <input type="text" class="form-control" name="harga_satuan" id="edit_harga_satuan" placeholder="Nama Barang dari Produsen" required />
                        <div class="invalid-feedback">
                            Please fill out this field.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="totalHarga">Total Harga:</label>
                        <input type="number" class="form-control" name="total_harga" id="edit_total_harga" placeholder="Total Harga" required />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- datatable -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css" />

<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#tableBarang').DataTable();

        $('.btn-edit').on('click', function() {

            $('#editBarangModalLabel').html('Edit Barang - ' + $(this).data('nama_barang'));
            $('#edit_id_barang').val($(this).data('id'));
            $('#edit_nama_barang').val($(this).data('nama_barang'));
            $('#edit_harga_satuan').val($(this).data('harga_satuan'));
            $('#edit_stok_barang').val($(this).data('stok'));
            $('#edit_total_harga').val($(this).data('total_harga'));

            // Set the form action URL with the appropriate item ID
            $('#editBarangForm').attr('action', '<?= BASEURL; ?>/barang/update/' + $('#edit_id_barang').val());
        });

    });
</script>