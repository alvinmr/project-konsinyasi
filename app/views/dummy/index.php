<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>NitipYuk!</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/Logo Title Website.png" />
    <!-- Bootstrap icons-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <!-- link CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css"
    />

    <!-- link JS -->
    <script defer src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script
      defer
      src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"
    ></script>
    <script
      defer
      src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"
    ></script>

    <!-- CSS Tambahan -->
    <style>
      .modal-body {
        text-align: left;
      }
      .btn btn-warning {
        margin-right: 100px;
      }
    </style>
  </head>
  <body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container px-lg-5">
        <div class="logo">
          <img src="assets/Logo Title Website.jpg" alt />
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
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
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
  			<a class="btn btn-outline-secondary" href="Login.html">
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
        <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
          <div class="m-4 m-lg-5">
            <h1 class="display-5 fw-bold">Selamat Datang, Distributor!</h1>
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
            <div class="card bg-light border-0 h-80">
              <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                <div
                  class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"
                >
                  <i class="bi bi-box-seam"></i>
                </div>
                <h2 class="fs-4 fw-bold">Input Barang</h2>
                <p class="mb-2">Input barang yang telah kamu terima ke daftar barangmu.</p>
                <button
                  class="btn btn-outline-success"
                  data-bs-toggle="modal"
                  data-bs-target="#modalBarang"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-box-seam"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"
                    />
                  </svg>
                  Input
                </button>
                <!-- Modal Barang -->
                <div
                  class="modal fade"
                  id="modalBarang"
                  tabindex="-1"
                  aria-labelledby="exampleModalLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                          Input Barang
                        </h1>
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <label for="namaBarang">Nama Barang:</label>
                          <input
                            type="text"
                            class="form-control"
                            id="namaBarang"
                            placeholder="Masukkan Nama Barang"
                            required
                          />
                          <div class="invalid-feedback">
                            Please fill out this field.
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="stokBarang">Stok Barang:</label>
                          <input
                            type="number"
                            class="form-control"
                            id="stokBarang"
                            placeholder="Stok Barang"
                            required
                          />
                          <div class="invalid-feedback">
                            Please fill out this field.
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="namabarangProdusen">Harga Satuan:</label>
                          <input
                            type="text"
                            class="form-control"
                            id="namabarangProdusen"
                            placeholder="Nama Barang dari Produsen"
                            required
                          />
                          <div class="invalid-feedback">
                            Please fill out this field.
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="totalHarga">Total Harga:</label>
                          <input
                            type="number"
                            class="form-control"
                            id="totalHarga"
                            placeholder="Total Harga"
                            required
                          />
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button
                          type="button"
                          class="btn btn-secondary"
                          data-bs-dismiss="modal"
                        >
                          Close
                        </button>
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#modalDaftarBarang"
                        >
                          Daftar Barang
                        </button>
                        <button type="submit" class="btn btn-success">
                          Input
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Akhir Modal Input Barang -->
              </div>
            </div>
          </div>
          <!-- Catatan Log Produsen -->
          <div class="col-lg-4 col-xxl-4 mb-5">
            <div class="card bg-light border-0 h-100">
              <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                <div
                  class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"
                >
                  <i class="bi bi-pencil-square"></i>
                </div>
                <h2 class="fs-4 fw-bold">Log Produsen</h2>
                <p class="mb-2">
                  Catat PO yang anda lakukan dari produsen disini.
                </p>
                <button
                  class="btn btn-outline-success"
                  data-bs-toggle="modal"
                  data-bs-target="#modalProdusen"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-pencil-square"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"
                    />
                    <path
                      fill-rule="evenodd"
                      d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"
                    />
                  </svg>
                  Catat
                </button>
                <!-- Modal Log Produsen -->
                <div
                  class="modal fade"
                  id="modalProdusen"
                  tabindex="-1"
                  aria-labelledby="exampleModalLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                          Pencatatan Log Barang dari Produsen
                        </h1>
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <label for="namaProdusen">Nama Produsen:</label>
                          <input
                            type="text"
                            class="form-control"
                            id="namaProdusen"
                            placeholder="Masukkan Nama Produsen"
                            required
                          />
                          <div class="invalid-feedback">
                            Please fill out this field.
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="alamatProdusen">Alamat Produsen:</label>
                          <input
                            type="text"
                            class="form-control"
                            id="alamatProdusen"
                            placeholder="Alamat Produsen"
                            required
                          />
                          <div class="invalid-feedback">
                            Please fill out this field.
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="hargSatuan">Nama Barang:</label>
                          <input
                            type="text"
                            class="form-control"
                            id="hargSatuan"
                            placeholder="Harga Satuan Barang"
                            required
                          />
                          <div class="invalid-feedback">
                            Please fill out this field.
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="jumlahBarangProdusen"
                            >Jumlah Barang:</label
                          >
                          <input
                            type="number"
                            class="form-control"
                            id="totalHarga"
                            placeholder="Jumlah Barang dari Produsen"
                            required
                          />
                        </div>
                        <div class="form-group">
                          <label for="hargaSatuanProdusen"
                            >Harga Satuan Barang:</label
                          >
                          <input
                            type="number"
                            class="form-control"
                            id="hargaSatuanProdusen"
                            placeholder="Harga Satuan dari Produsen"
                            required
                          />
                        </div>
                        <div class="form-group">
                          <label for="hargaTotalProdusen"
                            >Harga Total Barang:</label
                          >
                          <input
                            type="number"
                            class="form-control"
                            id="hargaTotalProdusen"
                            placeholder="Harga Total dari Produsen"
                            required
                          />
                        </div>
                        <div class="form-group">
                          <label for="emailProdusen">Email Produsen:</label>
                          <input
                            type="email"
                            class="form-control"
                            id="emailProdusen"
                            placeholder="Masukkan Email Produsen"
                          />
                        </div>
                        <div class="form-group">
                          <label for="numberProdusen"
                            >No Telepon Produsen:</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            id="numberProdusen"
                            placeholder="Masukkan No Telepon Produsen"
                            required
                          />
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button
                          type="button"
                          class="btn btn-secondary"
                          data-bs-dismiss="modal"
                        >
                          Close
                        </button>
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#modalLogProdusen"
                        >
                          Daftar Log
                        </button>
                        <button type="button" class="btn btn-success">
                          Catat
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Kontak Retail -->
          <div class="col-lg-4 col-xxl-4 mb-5">
            <div class="card bg-light border-0 h-100">
              <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                <div
                  class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"
                >
                  <i class="bi bi-chat-dots"></i>
                </div>
                <h2 class="fs-4 fw-bold">Kontak Retail</h2>
                <p class="mb-2">
                  Anda bisa menghubungi retailmu yang terdaftar disini.
                </p>
                <button class="btn btn-outline-success">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-chat-dots"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"
                    />
                    <path
                      d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z"
                    />
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
                <div
                  class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"
                >
                  <i class="bi bi-pencil-square"></i>
                </div>
                <h2 class="fs-4 fw-bold">Laporan Penjualan</h2>
                <p class="mb-2">
                  Lihat laporan penjualanmu dari retailmu disini.
                </p>
                <button
                  class="btn btn-outline-success"
                  data-bs-toggle="modal"
                  data-bs-target="#ModalLaporan"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-pencil-square"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"
                    />
                    <path
                      fill-rule="evenodd"
                      d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"
                    />
                  </svg>
                  Lihat
                </button>
              </div>
            </div>
          </div>
          <!-- History Barang -->
          <div class="col-lg-4 col-xxl-4 mb-5">
            <div class="card bg-light border-0 h-100">
              <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                <div
                  class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"
                >
                  <i class="bi bi-journal-bookmark"></i>
                </div>
                <h2 class="fs-4 fw-bold">Histori Barang</h2>
                <p class="mb-2">
                  Lihat riwayat dari barang yang pernah kamu kirim.
                </p>
                <button
                  class="btn btn-outline-success"
                  data-bs-toggle="modal"
                  data-bs-target="#modalHistory"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-journal-bookmark"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M6 8V1h1v6.117L8.743 6.07a.5.5 0 0 1 .514 0L11 7.117V1h1v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8z"
                    />
                    <path
                      d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"
                    />
                    <path
                      d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"
                    />
                  </svg>
                  Riwayat
                </button>
                <!-- Modal History -->
                <div
                  class="modal fade"
                  id="modalHistory"
                  tabindex="-1"
                  aria-labelledby="exampleModalLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                          Histori Barang
                        </h1>
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <div class="table-responsive">
                          <table
                            id="historyDistributor"
                            class="table table-striped table-sm"
                          >
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
                              <tr>
                                <th scope="row">1</th>
                                <td>dulur</td>
                                <td>Susu Bear Brand</td>
                                <td>3/Rp.10.000,00</td>
                                <td>23/06/2023</td>
                                <td>25/06/2023</td>
                                <td>Rp.30.000,00</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>haykal</td>
                                <td>Indomie Goreng</td>
                                <td>5/Rp.3.000,00</td>
                                <td>30/06/2023</td>
                                <td>3/07/2023</td>
                                <td>Rp.15.000,00</td>
                              </tr>
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
            <div class="card bg-light border-0 h-100">
              <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                <div
                  class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"
                >
                  <i class="bi bi-patch-check"></i>
                </div>
                <h2 class="fs-4 fw-bold">Verifikasi Retail</h2>
                <p class="mb-2">
                  Lihat berkas validasi dari retailmu yang terdaftar disini.
                </p>
                <button
                  class="btn btn-outline-success"
                  data-bs-toggle="modal"
                  data-bs-target="#modalVerifikasi"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-patch-check"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"
                    />
                    <path
                      d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"
                    />
                  </svg>
                  Lihat
                </button>
                <!-- Modal -->
                <div
                  class="modal fade"
                  id="modalVerifikasi"
                  tabindex="-1"
                  aria-labelledby="exampleModalLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                          Verifikasi
                        </h1>
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body verifikasi">
                        <table id="Verifikasi" class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Nama Retail</th>
                              <th scope="col">Berkas Persyaratan</th>
                              <th scope="col">Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Harian Retail</td>
                              <td>
                                <button type="button" class="btn btn-primary">
                                  Lihat Berkas
                                </button>
                              </td>
                              <td>
                                <button
                                  type="button"
                                  class="btn btn-outline-success"
                                >
                                  Setuju
                                </button>
                                <button
                                  type="button"
                                  class="btn btn-outline-danger"
                                >
                                  Tolak
                                </button>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="modal-footer">
                        <button
                          type="button"
                          class="btn btn-secondary"
                          data-bs-dismiss="modal"
                        >
                          Close
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Penutup Modal Verifiaksi -->
              </div>
            </div>
		<!-- List Request -->
          </div>
          <!-- List Request -->
			<div class="col-lg-4 col-xxl-4 mb-5">
            <div class="card bg-light border-0 h-100">
              <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                <div
                  class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"
                >
                  <i class="bi bi-box-seam"></i>
                </div>
                <h2 class="fs-4 fw-bold">List Request Barang</h2>
                <p class="mb-2">Lihat list barang yang di request retailmu disini.</p>
                <button
                  class="btn btn-outline-success"
                  data-bs-toggle="modal"
                  data-bs-target="#modalRequest"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-box-seam"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"
                    />
                  </svg>
                  Input
                </button>
                <!-- List Request -->
                <div
                class="modal fade"
                id="modalRequest"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
              >
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">
                        List Request Barang
                      </h1>
                      <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                      ></button>
                    </div>
                    <div class="modal-body">
                      <div class="table-responsive">
                        <table
                          id="historyDistributor"
                          class="table table-striped table-sm"
                        >
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Nama Retail</th>
                              <th scope="col">Nama Barang</th>
                              <th scope="col">Jumlah Barang@Harga</th>
                              <th scope="col">Total Harga</th>
                              <th scope="col">Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>dulur</td>
                              <td>Susu Bear Brand</td>
                              <td>3/Rp.10.000,00</td>
                              <td>Rp.30.000,00</td>
                              <td>
                                <button type="button" class="btn btn-success">Terima</button>
                                <button type="button" class="btn btn-danger">Tolak</button>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>haykal</td>
                              <td>Indomie Goreng</td>
                              <td>5/Rp.3.000,00</td>
                              <td>Rp.15.000,00</td>
                              <td>
                                <button type="button" class="btn btn-success">Terima</button>
                                <button type="button" class="btn btn-danger">Tolak</button>
                              </td>
                            </tr>
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
            <div class="card bg-light border-0 h-100">
              <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                <div
                  class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"
                >
                  <i class="bi bi-journal-bookmark"></i>
                </div>
                <h2 class="fs-4 fw-bold">List Nama Retail</h2>
                <p class="mb-2">
                  Lihat daftar retail yang telah kamu setujui.
                </p>
                <button
                  class="btn btn-outline-success"
                  data-bs-toggle="modal"
                  data-bs-target="#modalListRetail"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-journal-bookmark"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M6 8V1h1v6.117L8.743 6.07a.5.5 0 0 1 .514 0L11 7.117V1h1v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8z"
                    />
                    <path
                      d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"
                    />
                    <path
                      d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"
                    />
                  </svg>
                  Riwayat
                </button>
                <!-- List Retail -->
                <div
                  class="modal fade"
                  id="modalListRetail"
                  tabindex="-1"
                  aria-labelledby="exampleModalLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                          List Nama Retail
                        </h1>
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="modal-body">
                        <div class="table-responsive">
                          <table
                            id="historyDistributor"
                            class="table table-striped table-sm"
                          >
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
                              <tr>
                                <th scope="row">1</th>
                                <td>dulur</td>
                                <td>Jl.IntiSari</td>
                                <td>08123456789</td>
                                <td>dulur@gmail.com</td>
                              </tr>
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
        </div>
      </div>
    </section>
    <!-- Modal Daftar Barang -->
    <div
      class="modal fade"
      id="modalDaftarBarang"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">
              Daftar Barang
            </h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
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
                  <tr>
                    <th scope="row">1</th>
                    <td>Kecap Bango</td>
                    <td>75 Pcs</td>
                    <td>Rp.5.000,00</td>
                    <td>Rp.375.000,00</td>
                    <td>
                      <a href="#" class="btn btn-outline-success">Ubah</a>
                      <a href="#" class="btn btn-outline-danger">Hapus</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-toggle="modal"
              data-bs-target="#modalBarang"
            >
              Kembali
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Modal Daftar Barang -->
    <!-- Modal Log Produsen -->
    <div
      class="modal fade"
      id="modalLogProdusen"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Log Barang</h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="table-responsive-xxl">
              <table id="logBarang" class="table table-striped">
                <thead>
                  <tr>
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
                  <tr>
                    <td>PT. Harian Jaya</td>
                    <td>Jl. Pasir Putih</td>
                    <td>Kecap Bango</td>
                    <td>75 Pcs</td>
                    <td>Rp.5.000,00</td>
                    <td>Rp.375.000,00</td>
                    <td>
                      <button
                        class="btn btn-outline-secondary"
                        data-bs-toggle="modal"
                        data-bs-target="#modalKontak"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="16"
                          height="16"
                          fill="currentColor"
                          class="bi bi-telephone"
                          viewBox="0 0 16 16"
                        >
                          <path
                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"
                          />
                        </svg>
                      </button>
                    </td>
                    <td>
                      <a href="#" class="btn btn-outline-success">Ubah</a>
                      <a href="#" class="btn btn-outline-danger">Hapus</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-toggle="modal"
              data-bs-target="#modalProdusen"
            >
              Kembali
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Modal Log Produsen -->
    <!-- Modal Kontak -->
    <div
      class="modal fade"
      id="modalKontak"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Kontak</h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <ul class="list-group">
              <li
                class="list-group-item d-flex justify-content-between align-items-center"
              >
                08123456789
                <span class="badge bg-primary rounded-pill">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-telephone"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"
                    />
                  </svg>
                </span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center"
              >
                contoh@contoh.com
                <span class="badge bg-primary rounded-pill">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-at"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"
                    />
                  </svg>
                </span>
              </li>
            </ul>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-toggle="modal"
              data-bs-target="#modalLogProdusen"
            >
              Kembali
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- AKhir Modal Kontak -->
    <!-- Modal Laporan -->
    <div
      class="modal fade"
      id="ModalLaporan"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">
              Laporan Penjualan Retail
            </h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
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
                <tr>
                  <td>1</td>
                  <td>Kedai Harian Jaya</td>
                  <td>
                    <button
                      class="btn btn-outline-success"
                      data-bs-toggle="modal"
                      data-bs-target="#modalLaporanIsi"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-clipboard"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"
                        />
                        <path
                          d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"
                        />
                      </svg>
                      Daftar Laporan
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Modal Laporan -->
    <!-- Modal Isi Laporan-->
    <div
      class="modal fade"
      id="modalLaporanIsi"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">
              Daftar Laporan
            </h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
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
                <tr>
                  <td>Laporan Penjualan - 21/12/2023</td>
                  <td>
                    <button
                      class="btn btn-outline-success"
                      data-bs-toggle="modal"
                      data-bs-target="#modalLaporanIsiDetail"
                    >
                      Lihat
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-toggle="modal"
              data-bs-target="#ModalLaporan"
            >
              Kembali
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; NitipYuk!</p>
      </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        $("#historyDistributor").DataTable();
        $("#daftarBarang").DataTable();
        $("#Verifikasi").DataTable();
        $("#logBarang").DataTable();
        $("#tableLaporan").DataTable();
      });
    </script>
  </body>
</html>
