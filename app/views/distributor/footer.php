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
<!-- JS Libraies -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php Flasher::flash(); ?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<style>
    .select2-dropdown {
        z-index: 99999;
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        $("#historyDistributor").DataTable();
        $("#daftarBarang").DataTable();
        $("#Verifikasi").DataTable();
        $("#logBarang").DataTable();
        $("#tableLaporan").DataTable();
    });

    $(document).ready(function() {
        $(".select-barang").select2({
            theme: "bootstrap-5",
            placeholder: "Pilih Barang",
        });
        $('.select-barang').on('change', function(e) {
            var selectedBarang = $(this).select2('data'); // Mendapatkan barang yang dipilih
            var placeholder = $('#placeholderJumlahBarang'); // Mengambil elemen placeholder

            // Menghapus semua elemen input jumlah barang yang ada di placeholder
            placeholder.empty();

            // Menambahkan input jumlah barang sesuai dengan barang yang dipilih
            if (selectedBarang !== null) {
                selectedBarang.forEach(function(barang) {
                    barang = barang.text;
                    var html = '<div class="form-group"><label for="jumlahBarang' + barang + '">Jumlah Barang ' + barang + ':</label><input type="number" class="form-control" name="jumlah_barang[]" id="jumlahBarang' + barang + '" placeholder="Jumlah Barang ' + barang + '" required=""></div>';
                    placeholder.append(html);
                });
            }
        });
    });
</script>
</body>

</html>