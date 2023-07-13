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
                    <p class="fs-4">Kelola bisnis-bisnismu disini.</p>
                </div>
            </div>
        </div>
    </header>
    <!-- Page Content-->
    <section class="pt-4">
        <div class="container px-lg-5">
            <!-- Page Features-->
            <div class="row gx-lg-6">
                <!-- Input Barang -->
                <div class="col-lg-4 col-xxl-4 mb-5">
                    <div class="card bg-white border-0 h-80">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                                <i class="bi bi-box-seam"></i>
                            </div>
                            <h2 class="fs-4 fw-bold">Input Barang</h2>
                            <p class="mb-2">Input barang yang telah kamu terima ke daftar barangmu.</p>
                            <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalBarang">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
                                    <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
                                </svg>
                                Input
                            </button>
                            <!-- Modal Barang -->
                            <div class="modal fade" id="modalBarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                Input Barang
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="<?= BASEURL ?>/barang/tambah" method="POST">
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
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDaftarBarang">
                                                    Daftar Barang
                                                </button>
                                                <button type="submit" class="btn btn-success">
                                                    Input
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Modal Input Barang -->
                        </div>
                    </div>
                </div>
                <!-- Catatan Log Produsen -->
                <div class="col-lg-4 col-xxl-4 mb-5">
                    <div class="card bg-white border-0 h-80">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                                <i class="bi bi-pencil-square"></i>
                            </div>
                            <h2 class="fs-4 fw-bold">Log Produsen</h2>
                            <p class="mb-2">
                                Catat PO yang anda lakukan dari produsen disini.
                            </p>
                            <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalProdusen">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                                Catat
                            </button>
                            <!-- Modal Log Produsen -->
                            <div class="modal fade" id="modalProdusen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                Pencatatan Log Barang dari Produsen
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalLogProdusen">
                                                    Daftar Log
                                                </button>
                                                <button type="submit" class="btn btn-success">Catat</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Kontak Retail -->
                <div class="col-lg-4 col-xxl-4 mb-5">
                    <div class="card bg-white border-0 h-80">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                                <i class="bi bi-chat-dots"></i>
                            </div>
                            <h2 class="fs-4 fw-bold">Kontak Retail</h2>
                            <p class="mb-2">
                                Anda bisa menghubungi retailmu yang terdaftar disini.
                            </p>
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
                    <div class="card bg-white border-0 h-80">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                                <i class="bi bi-pencil-square"></i>
                            </div>
                            <h2 class="fs-4 fw-bold">Laporan Penjualan</h2>
                            <p class="mb-2">
                                Lihat laporan penjualanmu dari retailmu disini.
                            </p>
                            <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#ModalLaporan">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                                Lihat
                            </button>
                        </div>
                    </div>
                </div>
                <!-- History Barang -->
                <div class="col-lg-4 col-xxl-4 mb-5">
                    <div class="card bg-white border-0 h-80">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                                <i class="bi bi-journal-bookmark"></i>
                            </div>
                            <h2 class="fs-4 fw-bold">Histori Barang</h2>
                            <p class="mb-2">
                                Lihat riwayat dari barang yang pernah kamu kirim.
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
                                                <table id="historyDistributor" class="table table-striped table-sm">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">No</th>
                                                            <th scope="col">Nama Retail</th>
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
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Penutup History -->
                        </div>
                    </div>
                </div>
                <!-- Verifikasi Retail -->
                <div class="col-lg-4 col-xxl-4 mb-5">
                    <div class="card bg-white border-0 h-80">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                                <i class="bi bi-patch-check"></i>
                            </div>
                            <h2 class="fs-4 fw-bold">Verifikasi Retail</h2>
                            <p class="mb-2">
                                Lihat berkas validasi dari retailmu yang terdaftar disini.
                            </p>
                            <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalVerifikasi">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                    <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z" />
                                </svg>
                                Lihat
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="modalVerifikasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                Verifikasi
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body verifikasi">
                                            <table id="Verifikasi" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No</th>
                                                        <th scope="col">Nama Retail</th>
                                                        <th scope="col">Berkas Persyaratan</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1; ?>
                                                    <?php foreach ($data['retail'] as $item) : ?>
                                                        <tr>
                                                            <td><?= $no++; ?></td>
                                                            <td><?= $item['nama_retail']; ?></td>
                                                            <td>
                                                                <!-- button ktp -->
                                                                <a target="_blank" href="<?= BASEURL ?>/ktp/<?= $item['ktp']; ?>" class="btn btn-primary">KTP</a>
                                                                <!-- button siu -->
                                                                <a target="_blank" href="<?= BASEURL ?>/siu/<?= $item['siu']; ?>" class="btn btn-primary">SIU</a>
                                                                <!-- button berkas lainnya -->
                                                                <a target="_blank" href="<?= BASEURL ?>/berkas_lainnya/<?= $item['berkas_lainnya']; ?>" class="btn btn-primary">Lainnya</a>
                                                            </td>
                                                            <td>
                                                                <?php if ($item['is_verified'] == 0) : ?>
                                                                    <span class="badge badge-warning">Belum Diterima</span>
                                                                <?php elseif ($item['is_verified'] == 1) : ?>
                                                                    <span class="badge badge-success">Sudah Diterima</span>
                                                                <?php else : ?>
                                                                    <span class="badge badge-danger">Ditolak</span>
                                                                <?php endif; ?>
                                                            </td>
                                                            <td>
                                                                <a href="<?= BASEURL ?>/verifikasiRetail/terima/<?= $item['id_retail']; ?>" class="btn btn-success <?= $item['is_verified'] == 1 ? 'disabled' : '' ?>">Terima</a>
                                                                <a href="<?= BASEURL ?>/verifikasiRetail/tolak/<?= $item['id_retail']; ?>" class="btn btn-danger <?= $item['is_verified'] == 1 ? 'disabled' : '' ?>">Tolak</a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Penutup Modal Verifiaksi -->
                        </div>
                    </div>
                </div>
                <!-- List Request -->
                <div class="col-lg-4 col-xxl-4 mb-5">
                    <div class="card bg-white border-0 h-80">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                                <i class="bi bi-box-seam"></i>
                            </div>
                            <h2 class="fs-4 fw-bold">List Request Barang</h2>
                            <p class="mb-2">Lihat list barang yang di request retailmu disini.</p>
                            <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalRequest">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
                                    <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
                                </svg>
                                Input
                            </button>
                            <!-- List Request -->
                            <div class="modal fade" id="modalRequest" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                List Request Barang
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="table-responsive">
                                                <table id="historyDistributor" class="table table-striped table-sm">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">No</th>
                                                            <th scope="col">Nama Retail</th>
                                                            <th scope="col">Nama Barang</th>
                                                            <th scope="col">Jumlah Barang@Harga</th>
                                                            <th scope="col">Total Harga</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no = 1; ?>
                                                        <?php foreach ($data['req_barang'] as $item) : ?>
                                                            <tr>
                                                                <td><?= $no++; ?></td>
                                                                <td><?= $item['nama_retail']; ?></td>
                                                                <td><?= $item['nama_barang']; ?></td>
                                                                <td><?= $item['jumlah_barang']; ?>/Rp. <?= $item['harga']; ?></td>
                                                                <td>Rp. <?= $item['total_harga']; ?></td>
                                                                <td>
                                                                    <?php if ($item['is_accepted'] == 0) : ?>
                                                                        <span class="badge badge-warning">Belum Diterima</span>
                                                                    <?php elseif ($item['is_accepted'] == 1) : ?>
                                                                        <span class="badge badge-success">Sudah Diterima</span>
                                                                    <?php else : ?>
                                                                        <span class="badge badge-danger">Ditolak</span>
                                                                    <?php endif; ?>
                                                                </td>
                                                                <td>
                                                                    <a href="<?= BASEURL ?>/requestBarang/terima/<?= $item['id_req_barang']; ?>" class="btn btn-success <?= $item['is_accepted'] == 1 ? 'disabled' : '' ?>">Terima</a>
                                                                    <a href="<?= BASEURL ?>/requestBarang/tolak/<?= $item['id_req_barang']; ?>" class="btn btn-danger <?= $item['is_accepted'] == 1 ? 'disabled' : '' ?>">Tolak</a>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir module list request -->
                        </div>
                    </div>
                </div>
                <!-- List Retail -->
                <div class="col-lg-4 col-xxl-4 mb-5">
                    <div class="card bg-white border-0 h-80">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                                <i class="bi bi-journal-bookmark"></i>
                            </div>
                            <h2 class="fs-4 fw-bold">List Nama Retail</h2>
                            <p class="mb-2">
                                Lihat daftar retail yang telah kamu setujui.
                            </p>
                            <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalListRetail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-bookmark" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M6 8V1h1v6.117L8.743 6.07a.5.5 0 0 1 .514 0L11 7.117V1h1v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8z" />
                                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                                </svg>
                                Riwayat
                            </button>
                            <!-- List Retail -->
                            <div class="modal fade" id="modalListRetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                List Nama Retail
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="table-responsive">
                                                <table id="historyDistributor" class="table table-striped table-sm">
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
                            </div>
                            <!-- Penutup List Nama Retail -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xxl-4 mb-5">
                    <div class="card border-0 h-80">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                                <i class="bi bi-box-seam"></i>
                            </div>
                            <h2 class="fs-4 fw-bold">Kirim Barang</h2>
                            <p class="mb-2">Kirim barang yang telah kamu setujui ke retailmu.</p>
                            <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalKirimBarang">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
                                    <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"></path>
                                </svg>
                                Input
                            </button>
                            <!-- Modal Kirim Barang -->
                            <div class="modal fade" id="modalKirimBarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                Daftar Barang dikirim
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="<?= BASEURL ?>/barang/kirim" method="POST">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="namaRetail">Nama Retail:</label>
                                                    <select class="form-select" name="id_retail" aria-label="Default select example" required>
                                                        <option selected>Pilih Retail</option>
                                                        <?php foreach ($data['retail'] as $key => $value) : ?>
                                                            <option value="<?= $value['id_retail']; ?>"><?= $value['nama_retail']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <!-- looping barang -->
                                                    <label for="namaBarang">Nama Barang:</label>
                                                    <select class="form-select select-barang" name="id_barang[]" aria-label="Default select example" multiple>
                                                        <!-- <option selected>Pilih Barang</option> -->
                                                        <?php foreach ($data['barang'] as $key => $value) : ?>
                                                            <option value="<?= $value['id_barang']; ?>"><?= $value['nama_barang']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <!-- Tambahkan placeholder untuk jumlah barang dengan id yang unik -->
                                                <div id="placeholderJumlahBarang"></div>

                                                <div class="form-group">
                                                    <label for="requestDate">Tanggal Kirim:</label>
                                                    <input type="date" class="form-control" name="tgl_kirim" id="requestDate" placeholder="Masukkan Tanggal Retail" value="2023-07-12" required="">
                                                </div>
                                                <!-- status kirim -->
                                                <div class="form-group">
                                                    <!-- looping barang -->
                                                    <label for="status">Status:</label>
                                                    <select class="form-select select2" name="status" aria-label="Default select example">
                                                        <option value="0">Belum Dikirim</option>
                                                        <option value="1">Sudah Dikirim</option>
                                                    </select>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDaftarKirimBarang">
                                                        Daftar Barang
                                                    </button>
                                                    <button type="submit" class="btn btn-success">
                                                        Input
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Akhir Modal Kirim Barang -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal Daftar Barang -->
    <div class="modal fade" id="modalDaftarBarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Daftar Barang
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive-xxl-4">
                        <table id="daftarBarang" class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Harga Satuan/Barang</th>
                                    <th scope="col">Total Harga</th>
                                    <th scope="col">Aksi</th>
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
                                        <td>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#modalEditBarang<?= $item['id_barang'] ?>" class="btn btn-outline-success">Ubah</button>
                                            <a href="<?= BASEURL ?>/barang/hapus/<?= $item['id_barang']; ?>" class="btn btn-outline-danger">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalBarang">
                        Kembali
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Modal Daftar Barang -->

    <!-- Modal Daftar Kirim Barang -->
    <div class="modal fade" id="modalDaftarKirimBarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Daftar Kirim Barang
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table id="historyDistributor" class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Retail</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Jumlah Barang@Harga</th>
                                    <th scope="col">Tanggal Kirim</th>
                                    <th scope="col">Total Harga</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($data['transaksi'] as $item) : ?>
                                    <tr>
                                        <th scope="row"><?= $no++; ?></th>
                                        <td><?= $item['nama_retail'] ?></td>
                                        <td>
                                            <!-- concat nama barang from transaksi_detail -->
                                            <?php $namaBarang = array(); ?>
                                            <?php foreach ($item['transaksi_detail'] as $detail) : ?>
                                                <?php if ($detail['id_transaksi'] == $item['id_transaksi']) : ?>
                                                    <?php $namaBarang[] = $detail['nama_barang']; ?>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                            <?= implode(', ', $namaBarang); ?>
                                        </td>
                                        <td>
                                            <!-- concat jumlah barang from transaksi_detail -->
                                            <?php $jumlahBarang = array(); ?>
                                            <?php foreach ($item['transaksi_detail'] as $detail) : ?>
                                                <?php if ($detail['id_transaksi'] == $item['id_transaksi']) : ?>
                                                    <?php $jumlahBarang[] = $detail['jumlah_barang'] . '@' . $detail['harga_satuan']; ?>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                            <?= implode(', ', $jumlahBarang); ?>
                                        </td>

                                        <td><?= $item['tgl_kirim'] ?></td>
                                        <td>Rp. <?= $item['total_harga'] ?></td>
                                        <td>
                                            <?php if ($item['status'] == 0) : ?>
                                                <span class="badge bg-danger">Belum Dikirim</span>
                                            <?php else : ?>
                                                <span class="badge bg-success">Sudah Dikirim</span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Modal Daftar Kirim Barang -->

    <!-- Modal Barang -->
    <?php $i = 1; ?>
    <?php foreach ($data['barang'] as $item) : ?>
        <div class="modal fade" id="modalEditBarang<?= $item['id_barang'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                            Ubah Barang <?= $item['nama_barang'] ?>
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?= BASEURL ?>/barang/update/<?= $item['id_barang'] ?>" method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="namaBarang">Nama Barang:</label>
                                <input type="text" class="form-control" value="<?= $item['nama_barang'] ?>" name="nama_barang" id="namaBarang" placeholder="Masukkan Nama Barang" required />
                                <div class="invalid-feedback">
                                    Please fill out this field.
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="stokBarang">Stok Barang:</label>
                                <input type="number" class="form-control" value="<?= $item['stok'] ?>" name="stok" id="stokBarang" placeholder="Stok Barang" required />
                                <div class="invalid-feedback">
                                    Please fill out this field.
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="namabarangProdusen">Harga Satuan:</label>
                                <input type="text" class="form-control" value="<?= $item['harga_satuan'] ?>" name="harga_satuan" id="namabarangProdusen" placeholder="Nama Barang dari Produsen" required />
                                <div class="invalid-feedback">
                                    Please fill out this field.
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="totalHarga">Total Harga:</label>
                                <input type="number" class="form-control" value="<?= $item['total_harga'] ?>" name="total_harga" id="totalHarga" placeholder="Total Harga" required />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDaftarBarang">
                                Daftar Barang
                            </button>
                            <button type="submit" class="btn btn-success">
                                Ubah
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Akhir Modal Ubah Barang -->
    <?php endforeach; ?>

    <!-- Modal Log Produsen -->
    <div class="modal fade" id="modalLogProdusen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Log Barang</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive-xxl">
                        <table id="logBarang" class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Produsen</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Harga Satuan</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Kontak</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($data['log_produsen'] as $log_produsen) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $log_produsen['nama_produsen']; ?></td>
                                        <td><?= $log_produsen['alamat']; ?></td>
                                        <td><?= $log_produsen['nama_barang']; ?></td>
                                        <td><?= $log_produsen['barang_diminta']; ?></td>
                                        <td><?= $log_produsen['harga_satuan']; ?></td>
                                        <td><?= $log_produsen['total_harga']; ?></td>
                                        <td>
                                            <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalKontak<?= $log_produsen['id_produsen'] ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                                </svg>
                                            </button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#editLogProdusenModal<?= $log_produsen['id_produsen'] ?>">
                                                Edit
                                            </button>

                                            <a href="<?= BASEURL ?>/logProdusen/hapus/<?= $log_produsen['id_produsen']; ?>" class="btn btn-outline-danger">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalProdusen">
                        Kembali
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Modal Log Produsen -->
    <?php $no = 1; ?>
    <?php foreach ($data['log_produsen'] as $log_produsen) : ?>
        <!-- Modal Kontak -->
        <div class="modal fade" id="modalKontak<?= $log_produsen['id_produsen'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Kontak</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?= $log_produsen['no_telp'] ?>
                                <span class="badge bg-primary rounded-pill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                    </svg>
                                </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?= $log_produsen['email'] ?>
                                <span class="badge bg-primary rounded-pill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-at" viewBox="0 0 16 16">
                                        <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z" />
                                    </svg>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalLogProdusen">
                            Kembali
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- AKhir Modal Kontak -->

        <!-- Modal Ubah Log Produsen -->
        <div class="modal fade" id="editLogProdusenModal<?= $log_produsen['id_produsen'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                            Ubah Pencatatan Log Barang dari Produsen
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?= BASEURL; ?>/logProdusen/update/<?= $log_produsen['id_produsen'] ?>" method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="namaProdusen">Nama Produsen:</label>
                                <input type="text" class="form-control" value="<?= $log_produsen['nama_produsen'] ?>" name="nama_produsen" id="namaProdusen" placeholder="Masukkan Nama Produsen" required />
                                <div class="invalid-feedback">
                                    Please fill out this field.
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamatProdusen">Alamat Produsen:</label>
                                <input type="text" class="form-control" value="<?= $log_produsen['alamat'] ?>" name="alamat" id="alamatProdusen" placeholder="Alamat Produsen" required />
                                <div class="invalid-feedback">
                                    Please fill out this field.
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="hargSatuan">Nama Barang:</label>
                                <input type="text" class="form-control" value="<?= $log_produsen['nama_barang'] ?>" name="nama_barang" id="hargSatuan" placeholder="Harga Satuan Barang" required />
                                <div class="invalid-feedback">
                                    Please fill out this field.
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jumlahBarangProdusen">Jumlah Barang:</label>
                                <input type="number" class="form-control" value="<?= $log_produsen['barang_diminta'] ?>" name="barang_diminta" id="totalHarga" placeholder="Jumlah Barang dari Produsen" required />
                            </div>
                            <div class="form-group">
                                <label for="hargaSatuanProdusen">Harga Satuan Barang:</label>
                                <input type="number" class="form-control" value="<?= $log_produsen['harga_satuan'] ?>" name="harga_satuan" id="hargaSatuanProdusen" placeholder="Harga Satuan dari Produsen" required />
                            </div>
                            <div class="form-group">
                                <label for="hargaTotalProdusen">Harga Total Barang:</label>
                                <input type="number" class="form-control" value="<?= $log_produsen['total_harga'] ?>" name="total_harga" id="hargaTotalProdusen" placeholder="Harga Total dari Produsen" required />
                            </div>
                            <div class="form-group">
                                <label for="emailProdusen">Email Produsen:</label>
                                <input type="email" class="form-control" value="<?= $log_produsen['email'] ?>" name="email" id="emailProdusen" placeholder="Masukkan Email Produsen" />
                            </div>
                            <div class="form-group">
                                <label for="numberProdusen">No Telepon Produsen:</label>
                                <input type="text" class="form-control" value="<?= $log_produsen['no_telp'] ?>" name="no_telp" id="numberProdusen" placeholder="Masukkan No Telepon Produsen" required />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalLogProdusen">
                                Daftar Log
                            </button>
                            <button type="submit" class="btn btn-success">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Akhir Modal Ubah Log Produsen -->
    <?php endforeach; ?>

    <!-- Modal Laporan -->
    <div class="modal fade" id="ModalLaporan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Laporan Penjualan Retail
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped" id="tableLaporan">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Retail</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($data['retail'] as $item) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $item['nama_retail']; ?></td>
                                    <td>
                                        <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalLaporanIsi<?= $item['id_retail']; ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                                                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"></path>
                                                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"></path>
                                            </svg>
                                            Daftar Laporan
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Modal Laporan -->

    <?php $no = 1; ?>
    <?php foreach ($data['retail'] as $item) : ?>
        <!-- Modal Isi Laporan-->
        <div class="modal fade" id="modalLaporanIsi<?= $item['id_retail']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                            Daftar Laporan
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-striped" id="tableLaporanIsi">
                            <thead>
                                <tr>
                                    <th>Nama File</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- check if not found -->
                                <?php if (empty($item['laporan_retail'])) : ?>
                                    <tr>
                                        <td colspan="2" class="text-center">
                                            <h1 class="fs-6">Tidak ada laporan</h1>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                                <?php foreach ($item['laporan_retail'] as $laporan) : ?>
                                    <tr>
                                        <td><?= $laporan['laporan_penjualan'] ?></td>
                                        <td>
                                            <a target="_blank" href="<?= BASEURL ?>/laporan_penjualan/<?= $laporan['laporan_penjualan'] ?>" class="btn btn-outline-success">
                                                Lihat
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#ModalLaporan">
                            Kembali
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Modal Isi Laporan -->
    <?php endforeach; ?>