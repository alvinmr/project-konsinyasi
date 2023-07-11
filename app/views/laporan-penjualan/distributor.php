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
                                <?php $no = 1; ?>
                                <?php foreach ($data['retail'] as $barang) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $barang['nama_retail']; ?></td>
                                        <td>
                                            <a target="_blank" href="<?= BASEURL ?>/laporan_penjualan/<?= $barang['laporan_penjualan']; ?>" class="btn btn-primary">Lihat Laporan</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- datatable -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css" />

<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#tableReqBarang').DataTable();
    });
</script>