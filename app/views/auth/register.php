<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/Logo Title Website.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                </ul>
            </div>
        </div>
    </nav>
    <!-- Section: Design Block -->
    <section class="">
        <!-- Jumbotron -->
        <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
            <div class="container">
                <div class="row gx-lg-5 align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h1 class="my-5 display-3 fw-bold ls-tight">
                            Daftarkan akun<br />
                            <span class="text-primary">Anda disini!</span>
                        </h1>
                    </div>

                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="<?= BASEURL ?>/auth/registerProcess" enctype="multipart/form-data">
                                    <div class="row mt-3">
                                        <div class="form-group col-12">
                                            <label for="name">Name</label>
                                            <input id="name" type="text" class="form-control" name="nama" autofocus>
                                        </div>
                                        <div class="form-group col-12 mt-3">
                                            <label for="email">Email</label>
                                            <input id="email" type="email" class="form-control" name="email">
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="form-group col-6">
                                            <label for="alamat">Alamat</label>
                                            <input id="alamat" type="text" class="form-control" name="alamat">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="no_telp">No Telepon</label>
                                            <input id="no_telp" type="text" class="form-control" name="no_telp">
                                        </div>
                                    </div>



                                    <div class="row mt-3">
                                        <div class="form-group col-6">
                                            <label for="password" class="d-block">Password</label>
                                            <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                                            <div id="pwindicator" class="pwindicator">
                                                <div class="bar"></div>
                                                <div class="label"></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="password2" class="d-block">Password Confirmation</label>
                                            <input id="password2" type="password" class="form-control" name="password-confirm">
                                        </div>
                                    </div>

                                    <!-- upload KTP and SIU -->
                                    <div class="row mt-3">
                                        <div class="form-group col-6">
                                            <label for="file_ktp" class="d-block">Upload KTP</label>
                                            <input id="file_ktp" type="file" class="form-control" name="file_ktp">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="file_siu" class="d-block">Upload SIU</label>
                                            <input id="file_siu" type="file" class="form-control" name="file_siu">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="form-group col-12">
                                            <label for="file_lainnya" class="d-block">Upload Berkas Lainnya</label>
                                            <input id="file_lainnya" type="file" class="form-control" name="file_lainnya">
                                        </div>
                                    </div>

                                    <div class="form-group mt-4">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Register
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->
    <section class="">
    </section>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
    <!-- JS Libraies -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php Flasher::flash(); ?>
</body>