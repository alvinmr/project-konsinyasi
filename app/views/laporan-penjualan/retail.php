<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Laporan Penjualan</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Daftar Laporan Penjualan</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive table">
                        <table id="tableReqBarang" class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Retail</th>
                                    <th>Laporan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><?= $data['retail']['nama_retail']; ?></td>
                                    <td>
                                        <a target="_blank" href="<?= BASEURL ?>/laporan_penjualan/<?= $data['retail']['laporan_penjualan']; ?>" class="btn btn-primary <?= $barang['verified_at'] == 1 ? 'disabled' : '' ?>">Lihat Laporan</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahLaporanModal">
                            Update Laporan Penjualan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Update Barang Modal -->
<div class="modal fade" id="tambahLaporanModal" tabindex="-1" role="dialog" aria-labelledby="tambahLaporanModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahLaporanModalLabel">Update Laporan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= BASEURL; ?>/laporanPenjualan/tambah" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="file_laporan">File Laporan:</label>
                        <input type="file" class="form-control" accept=".pdf" name="file_laporan" id="file_laporan" placeholder="Masukkan File Laporan" required />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Barang Modal -->
<!-- <div class="modal fade" id="editBarangModal" tabindex="-1" role="dialog" aria-labelledby="editBarangModalLabel<?= $barang['id_barang']; ?>" aria-hidden="true">
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
</div> -->

<!-- datatable -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css" />

<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#tableReqBarang').DataTable();

        // $('.btn-edit').on('click', function() {

        //     $('#editBarangModalLabel').html('Edit Barang - ' + $(this).data('nama_barang'));
        //     $('#edit_id_barang').val($(this).data('id'));
        //     $('#edit_nama_barang').val($(this).data('nama_barang'));
        //     $('#edit_harga_satuan').val($(this).data('harga_satuan'));
        //     $('#edit_stok_barang').val($(this).data('stok'));
        //     $('#edit_total_harga').val($(this).data('total_harga'));

        //     // Set the form action URL with the appropriate item ID
        //     $('#editBarangForm').attr('action', '<?= BASEURL; ?>/barang/update/' + $('#edit_id_barang').val());
        // });

    });
</script>