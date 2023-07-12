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
<script>
    document.addEventListener("DOMContentLoaded", function() {
        $("#historyDistributor").DataTable();
        $("#daftarBarang").DataTable();
        $("#Verifikasi").DataTable();
        $("#logBarang").DataTable();
        $("#tableLaporan").DataTable();
    });
</script>
</body>

</html>