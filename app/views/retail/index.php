<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-lg-5">
            <div class="logo">
                <img src="<?= BASEURL ?>/assets/Logo Title Website.jpg" alt />
            </div>
            <div class="logo-container">
                <ul>
                    <li>
                        <div class="logo-holder logo-6">
                            <a href="">
                                <h3>Nitip<span>Yuk</span></h3>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#!">
                            <i class="bi bi-house"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">
                            <i class="bi bi-file-person-fill"></i> About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-secondary" href="<?= BASEURL ?>/auth/logout">
                            <i class="bi bi-door-closed"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="py-5">
        <div class="container px-lg-5">
            <div class="p-4 p-lg-5 rounded-3 text-center">
                <div class="m-4 m-lg-5">
                    <h1 class="display-5 fw-bold">Selamat Datang, <?= $_SESSION['nama'] ?>!</h1>
                    <p class="fs-4">Kelola barang-barangmu disini.</p>
                </div>
            </div>
        </div>
    </header>
    <!-- Page Content-->
    <!-- Page Content-->
    <section class="pt-4">
        <div class="container px-lg-5">
            <!-- Page Features-->
            <div class="row gx-lg-5">
                <!-- Request Barang -->
                <div class="col-lg-4 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                                <i class="bi bi-truck"></i>
                            </div>
                            <h2 class="fs-4 fw-bold">Minta Barang</h2>
                            <p class="mb-2">Anda bisa meminta barang dari distributor.</p>
                            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                                    <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                </svg>
                                Minta
                            </button>
                            <!-- Modal Request Barang -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                Minta Barang
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="<?= BASEURL; ?>/requestBarang/tambah" method="POST">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="retailName">Tanggal Minta:</label>
                                                    <input type="date" class="form-control" name="tgl_minta" id="requestDate" placeholder="Masukkan Tanggal Retail" value="<?php echo date('Y-m-d'); ?>" required />
                                                    <div class="invalid-feedback">
                                                        Please fill out this field.
                                                    </div>
                                                </div>
                                                <!-- Tambahkan elemen-elemen berikut sesuai kebutuhan -->
                                                <div class="form-group">
                                                    <label for="namaBarang">Nama Barang:</label>
                                                    <!-- option barang -->
                                                    <select class="form-control" name="id_barang" id="namaBarang" required>
                                                        <option value="">Pilih Barang</option>
                                                        <?php foreach ($data['barang'] as $barang) : ?>
                                                            <option value="<?= $barang['id_barang']; ?>"><?= $barang['nama_barang']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please fill out this field.
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="ownerID">Jumlah Barang:</label>
                                                    <input type="text" class="form-control" name="jumlah_barang" id="jumlahBarang" placeholder="Masukkan jumlah barang@pcs/ltr" required />
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Tutup
                                                </button>
                                                <button type="submit" class="btn btn-success">
                                                    Minta
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- List Barang dari Distributor -->
                <div class="col-lg-4 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                                <i class="bi bi-clipboard"></i>
                            </div>
                            <h2 class="fs-4 fw-bold">Lihat Barang</h2>
                            <p class="mb-2">
                                Lihat barang-barang yang disediakan oleh distributormu.
                            </p>
                            <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalDist">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                    <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                                </svg>
                                Lihat
                            </button>
                            <!-- Modal Barang Distributor -->
                            <div class="modal fade" id="modalDist" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title fs-5" id="exampleModalLabel">
                                                List Barang
                                            </h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="table-responsive-xxl-4">
                                                <table id="barang" class="table table-striped table-sm">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">No</th>
                                                            <th scope="col">Nama Barang</th>
                                                            <th scope="col">Stok</th>
                                                            <th scope="col">Harga Satuan/Barang</th>
                                                            <th scope="col">Total Harga</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $i = 1; ?>
                                                        <?php foreach ($data['barang'] as $item) : ?>
                                                            <tr>
                                                                <th scope="row"><?= $i++ ?></th>
                                                                <td><?= $item['nama_barang'] ?></td>
                                                                <td><?= $item['stok'] ?> Pcs</td>
                                                                <td>Rp. <?= $item['harga_satuan'] ?></td>
                                                                <td>Rp. <?= $item['total_harga'] ?></td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Batas Akhir Modal Barang -->
                        </div>
                    </div>
                </div>
                <!-- Kontak Distributor -->
                <div class="col-lg-4 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                                <i class="bi bi-chat-dots"></i>
                            </div>
                            <h2 class="fs-4 fw-bold">Kontak Distributor</h2>
                            <p class="mb-2">Anda bisa menghubungi distributormu disini.</p>
                            <button class="btn btn-outline-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                                    <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                    <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                                </svg>
                                Hubungi
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Laporan Penjualan -->
                <div class="col-lg-4 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                                <i class="bi bi-pencil-square"></i>
                            </div>
                            <h2 class="fs-4 fw-bold">Laporan Penjualan</h2>
                            <p class="mb-2">Unggah laporan penjualanmu disini.</p>
                            <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#ModalLaporan">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                                Unggah
                            </button>
                            <!-- Modal Laporan Penjualan -->
                            <div class="modal fade" id="ModalLaporan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                Unggah Laporan
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="<?= BASEURL; ?>/laporanPenjualan/tambah" method="POST" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="file">Unggah Berkas:</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="file_laporan" class="custom-file-input" id="file" accept=".pdf,.doc,.docx" required />
                                                        <label class="custom-file-label" for="file">Pilih Berkas</label>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <span id="passwordHelpInline" class="form-text">
                                                        Gunakan Format Laporan Penjualan - [Tanggal Kirim]
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Tutup
                                                </button>
                                                <button type="submit" class="btn btn-success">
                                                    Unggah
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- History Barang -->
                <div class="col-lg-4 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                                <i class="bi bi-journal-bookmark"></i>
                            </div>
                            <h2 class="fs-4 fw-bold">Histori Barang</h2>
                            <p class="mb-2">
                                Lihat riwayat dari barang yang pernah kamu minta.
                            </p>
                            <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalHistory">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-bookmark" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M6 8V1h1v6.117L8.743 6.07a.5.5 0 0 1 .514 0L11 7.117V1h1v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8z" />
                                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                                </svg>
                                Riwayat
                            </button>
                            <!-- Modal History -->
                            <div class="modal fade" id="modalHistory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                Histori Barang
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="table-responsive">
                                                <table id="historyRetail" class="table table-striped table-sm">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">No</th>
                                                            <th scope="col">Nama Barang</th>
                                                            <th scope="col">Jumlah Barang@Harga</th>
                                                            <th scope="col">Tanggal Kirim</th>
                                                            <th scope="col">Tanggal Terima</th>
                                                            <th scope="col">Total Harga</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $i = 1; ?>
                                                        <?php foreach ($data['history_barang'] as $item) : ?>
                                                            <tr>
                                                                <th scope="row"><?= $i; ?></th>
                                                                <td><?= $item['nama_retail']; ?></td>
                                                                <td><?= $item['nama_barang']; ?></td>
                                                                <td><?= $item['jumlah_barang']; ?>@<?= $item['harga']; ?></td>
                                                                <td><?= $item['tgl_kirim']; ?></td>
                                                                <td><?= $item['tgl_terima'] ?? '-'; ?></td>
                                                                <td><?= $item['total_harga']; ?></td>
                                                            </tr>
                                                            <?php $i++; ?>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Penutup History -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            $("#barang").DataTable();
        });
        document.addEventListener("DOMContentLoaded", function() {
            $("#historyRetail").DataTable();
        });
    </script>