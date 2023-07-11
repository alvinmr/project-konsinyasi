<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title> <?= $data['judul'] ?> &mdash; NitipYuk</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/css/components.css">

    <!-- Jquery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
</head>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    <div class="login-brand">
                        <img src="<?= BASEURL ?>/assets/img/logo.png" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Register</h4>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="<?= BASEURL ?>/auth/registerProcess" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="name">Name</label>
                                        <input id="name" type="text" class="form-control" name="nama" autofocus>
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="alamat">Alamat</label>
                                        <input id="alamat" type="text" class="form-control" name="alamat">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="no_telp">No Telepon</label>
                                        <input id="no_telp" type="text" class="form-control" name="no_telp">
                                    </div>
                                </div>



                                <div class="row">
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
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="file_ktp" class="d-block">Upload KTP</label>
                                        <input id="file_ktp" type="file" class="form-control" name="file_ktp">
                                        
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="file_siu" class="d-block">Upload SIU</label>
                                        <input id="file_siu" type="file" class="form-control" name="file_siu">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        Register
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="mt-5 text-muted text-center">
                        Sudah punya akun? <a href="<?= BASEURL ?>/auth/login">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- General JS Scripts -->
<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="<?= BASEURL ?>/assets/js/stisla.js"></script>


<!-- JS Libraies -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php Flasher::flash(); ?>

<!-- Template JS File -->
<script src="<?= BASEURL ?>/assets/js/scripts.js"></script>
<script src="<?= BASEURL ?>/assets/js/custom.js"></script>

<!-- Page Specific JS File -->
</body>

</html>