<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Retail</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Daftar Retail</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive table">
                        <table id="tableRetail" class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Retail</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">No Hp</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($data['retail'] as $key => $value) : ?>
                                    <tr>
                                        <th scope="row"><?= $key + 1; ?></th>
                                        <td><?= $value['nama_retail']; ?></td>
                                        <td><?= $value['alamat']; ?></td>
                                        <td><?= $value['no_telp']; ?></td>
                                        <td><?= $value['email']; ?></td>
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


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<!-- datatable -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css" />

<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#tableRetail').DataTable();
    });
</script>