<?php 

class Auth extends Controller {
    public function login()
    {
        if(isset($_SESSION['email']) && isset($_SESSION['password'])){
            header('Location: ' . BASEURL . '/home');
            exit;
        }

        $data['judul'] = 'Login';
        $this->view('auth/login', $data);
    }

    public function register()
    {
        if(isset($_SESSION['email']) && isset($_SESSION['password'])){
            header('Location: ' . BASEURL . '/home');
            exit;
        }

        $data['judul'] = 'Register';
        $this->view('auth/register', $data);
    }

    // proses login
    public function loginProcess()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if($email == "distributor@email.com"){ // email distributor
            if($password != "123"){ // password distributor
                Flasher::setFlash('Gagal', 'Password Distributor Salah', 'error');
                header('Location: ' . BASEURL . '/auth/login');
                exit;
            }
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            $_SESSION['role'] = 'distributor';
            $_SESSION['nama'] = 'Distributor';
            Flasher::setFlash('Berhasil', 'Berhasil Login Distributor', 'success');
            header('Location: ' . BASEURL . '/distributor');
            exit;
        }else {
            $retail = $this->model('Retail_model')->findByEmail($email);
            if($retail){
                if($retail['password'] == $password){
                    if($retail['is_verified'] != 1 ){
                        Flasher::setFlash('Gagal', 'Akun Belum Diverifikasi', 'error');
                        header('Location: ' . BASEURL . '/auth/login');
                        exit;
                    }
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    $_SESSION['role'] = 'retail';
                    $_SESSION['nama'] = $retail['nama_retail'];
                    $_SESSION['id'] = $retail['id_retail'];
                    Flasher::setFlash('Berhasil', 'Berhasil Login Retail', 'success');
                    header('Location: ' . BASEURL . '/retail');
                    exit;
                }else {
                    Flasher::setFlash('Gagal', 'Password Salah', 'error');
                    header('Location: ' . BASEURL . '/auth/login');
                    exit;
                }
            }else {
                Flasher::setFlash('Gagal', 'Email Tidak Terdaftar', 'error');
                header('Location: ' . BASEURL . '/auth/login');
                exit;
            }
        }
    }

    // proses register
    public function registerProcess()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $no_telp = $_POST['no_telp'];
        

        // cek email sudah terdaftar atau belum
        $retail = $this->model('Retail_model')->findByEmail($email);
        if($retail){
            Flasher::setFlash('Gagal', 'Email Sudah Terdaftar', 'error');
            header('Location: ' . BASEURL . '/auth/register');
            exit;
        }

        // cek file ktp
        $ekstensiKtp = ['jpg', 'jpeg', 'png'];
        $namaFileKtp = $_FILES['file_ktp']['name'];
        $ekstensiFileKtp = explode('.', $namaFileKtp);
        $ekstensiFileKtp = strtolower(end($ekstensiFileKtp));
        if(!in_array($ekstensiFileKtp, $ekstensiKtp)){
            Flasher::setFlash('Gagal', 'Ekstensi File KTP Tidak Diperbolehkan', 'error');
            header('Location: ' . BASEURL . '/auth/register');
            exit;
        }

        // cek file siu
        $ekstensiSiu = ['jpg', 'jpeg', 'png'];
        $namaFileSiu = $_FILES['file_siu']['name'];
        $ekstensiFileSiu = explode('.', $namaFileSiu);
        $ekstensiFileSiu = strtolower(end($ekstensiFileSiu));
        if(!in_array($ekstensiFileSiu, $ekstensiSiu)){
            Flasher::setFlash('Gagal', 'Ekstensi File SIU Tidak Diperbolehkan', 'error');
            header('Location: ' . BASEURL . '/auth/register');
            exit;
        }

        // upload file ktp
        $namaFileKtpBaru = uniqid();
        $namaFileKtpBaru .= '.';
        $namaFileKtpBaru .= $ekstensiFileKtp;
        move_uploaded_file($_FILES['file_ktp']['tmp_name'], 'ktp/' . $namaFileKtpBaru);

        // upload file siu
        $namaFileSiuBaru = uniqid();
        $namaFileSiuBaru .= '.';
        $namaFileSiuBaru .= $ekstensiFileSiu;
        move_uploaded_file($_FILES['file_siu']['tmp_name'], 'siu/' . $namaFileSiuBaru);

        $data = [
            'email' => $email,
            'password' => $password,
            'nama_retail' => $nama,
            'alamat' => $alamat,
            'no_telp' => $no_telp,
            'ktp' => $namaFileKtpBaru,
            'siu' => $namaFileSiuBaru,
        ];
        $this->model('Retail_model')->create($data);
        Flasher::setFlash('Berhasil', 'Berhasil Register', 'success');
        header('Location: ' . BASEURL . '/auth/login');
        exit;
    }

    // proses logout
    public function logout()
    {
        session_destroy();
        Flasher::setFlash('Berhasil', 'Berhasil Logout', 'success');
        header('Location: ' . BASEURL . '/auth/login');
    }
}