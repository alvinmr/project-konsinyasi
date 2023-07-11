<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Log Produsen</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Daftar Log Produsen</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive table">
                        <table id="tableLogProdusen" class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Produsen</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Harga Satuan</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">No Telepon</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <!-- check if not found -->
                                <?php foreach ($data['log_produsen'] as $log_produsen) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $log_produsen['nama_produsen']; ?></td>
                                        <td><?= $log_produsen['alamat']; ?></td>
                                        <td><?= $log_produsen['nama_barang']; ?></td>
                                        <td><?= $log_produsen['barang_diminta']; ?></td>
                                        <td><?= $log_produsen['harga_satuan']; ?></td>
                                        <td><?= $log_produsen['total_harga']; ?></td>
                                        <td><?= $log_produsen['no_telp']; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-warning btn-edit" data-toggle="modal" data-target="#editLogProdusenModal" data-id="<?= $log_produsen['id_produsen']; ?>" data-nama_produsen="<?= $log_produsen['nama_produsen']; ?>" data-alamat="<?= $log_produsen['alamat']; ?>" data-email="<?= $log_produsen['email']; ?>" data-no_telp="<?= $log_produsen['no_telp']; ?>" data-nama_barang="<?= $log_produsen['nama_barang']; ?>" data-barang_diminta="<?= $log_produsen['barang_diminta']; ?>" data-harga_satuan="<?= $log_produsen['harga_satuan']; ?>" data-total_harga="<?= $log_produsen['total_harga']; ?>">
                                                Edit
                                            </button>

                                            <a href="<?= BASEURL ?>/logProdusen/hapus/<?= $log_produsen['id_produsen']; ?>" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahLogProdusenModal">
                            Tambah Log Produsen
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Tambah LogProdusen Modal -->
<div class="modal fade" id="tambahLogProdusenModal" tabindex="-1" role="dialog" aria-labelledby="tambahLogProdusenModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahLogProdusenModalLabel">Tambah Log Produsen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= BASEURL; ?>/logProdusen/tambah" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="namaProdusen">Nama Produsen:</label>
                        <input type="text" class="form-control" name="nama_produsen" id="namaProdusen" placeholder="Masukkan Nama Produsen" required />
                        <div class="invalid-feedback">
                            Please fill out this field.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamatProdusen">Alamat Produsen:</label>
                        <input type="text" class="form-control" name="alamat" id="alamatProdusen" placeholder="Alamat Produsen" required />
                        <div class="invalid-feedback">
                            Please fill out this field.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="hargSatuan">Nama Barang:</label>
                        <input type="text" class="form-control" name="nama_barang" id="hargSatuan" placeholder="Harga Satuan Barang" required />
                        <div class="invalid-feedback">
                            Please fill out this field.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jumlahBarangProdusen">Jumlah Barang:</label>
                        <input type="number" class="form-control" name="barang_diminta" id="totalHarga" placeholder="Jumlah Barang dari Produsen" required />
                    </div>
                    <div class="form-group">
                        <label for="hargaSatuanProdusen">Harga Satuan Barang:</label>
                        <input type="number" class="form-control" name="harga_satuan" id="hargaSatuanProdusen" placeholder="Harga Satuan dari Produsen" required />
                    </div>
                    <div class="form-group">
                        <label for="hargaTotalProdusen">Harga Total Barang:</label>
                        <input type="number" class="form-control" name="total_harga" id="hargaTotalProdusen" placeholder="Harga Total dari Produsen" required />
                    </div>
                    <div class="form-group">
                        <label for="emailProdusen">Email Produsen:</label>
                        <input type="email" class="form-control" name="email" id="emailProdusen" placeholder="Masukkan Email Produsen" />
                    </div>
                    <div class="form-group">
                        <label for="numberProdusen">No Telepon Produsen:</label>
                        <input type="text" class="form-control" name="no_telp" id="numberProdusen" placeholder="Masukkan No Telepon Produsen" required />
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
<div class="modal fade" id="editLogProdusenModal" tabindex="-1" role="dialog" aria-labelledby="editLogProdusenModalLabel<?= $barang['id_barang']; ?>" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editLogProdusenModalLabel">Edit Log Produsen - </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="POST" id="editLogProdusenForm">
                <div class="modal-body">
                    <input type="hidden" name="id_produsen" id="edit_id_produsen" />
                    <div class="form-group">
                        <label for="namaProdusen">Nama Produsen:</label>
                        <input type="text" class="form-control" name="nama_produsen" id="edit_nama_produsen" placeholder="Masukkan Nama Produsen" required />
                        <div class="invalid-feedback">
                            Please fill out this field.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamatProdusen">Alamat Produsen:</label>
                        <input type="text" class="form-control" name="alamat" id="edit_alamat" placeholder="Alamat Produsen" required />
                        <div class="invalid-feedback">
                            Please fill out this field.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="hargSatuan">Nama Barang:</label>
                        <input type="text" class="form-control" name="nama_barang" id="edit_nama_barang" placeholder="Harga Satuan Barang" required />
                        <div class="invalid-feedback">
                            Please fill out this field.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jumlahBarangProdusen">Jumlah Barang:</label>
                        <input type="number" class="form-control" name="barang_diminta" id="edit_barang_diminta" placeholder="Jumlah Barang dari Produsen" required />
                    </div>
                    <div class="form-group">
                        <label for="hargaSatuanProdusen">Harga Satuan Barang:</label>
                        <input type="number" class="form-control" name="harga_satuan" id="edit_harga_satuan" placeholder="Harga Satuan dari Produsen" required />
                    </div>
                    <div class="form-group">
                        <label for="hargaTotalProdusen">Harga Total Barang:</label>
                        <input type="number" class="form-control" name="total_harga" id="edit_total_harga" placeholder="Harga Total dari Produsen" required />
                    </div>
                    <div class="form-group">
                        <label for="emailProdusen">Email Produsen:</label>
                        <input type="email" class="form-control" name="email" id="edit_email" placeholder="Masukkan Email Produsen" />
                    </div>
                    <div class="form-group">
                        <label for="numberProdusen">No Telepon Produsen:</label>
                        <input type="text" class="form-control" name="no_telp" id="edit_no_telp" placeholder="Masukkan No Telepon Produsen" required />
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
        $('#tableLogProdusen').DataTable();

        $('.btn-edit').on('click', function() {

            $('#editLogProdusenModalLabel').html('Edit Log Produsen - ' + $(this).data('nama_barang'));
            $('#edit_id_produsen').val($(this).data('id'));
            $('#edit_nama_produsen').val($(this).data('nama_produsen'));
            $('#edit_alamat').val($(this).data('alamat'));
            $('#edit_nama_barang').val($(this).data('nama_barang'));
            $('#edit_barang_diminta').val($(this).data('barang_diminta'));
            $('#edit_harga_satuan').val($(this).data('harga_satuan'));
            $('#edit_total_harga').val($(this).data('total_harga'));
            $('#edit_email').val($(this).data('email'));
            $('#edit_no_telp').val($(this).data('no_telp'));


            // Set the form action URL with the appropriate item ID
            $('#editLogProdusenForm').attr('action', '<?= BASEURL; ?>/logProdusen/update/' + $('#edit_id_produsen').val());
        });

    });
</script>