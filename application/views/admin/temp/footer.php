<footer class="footer">
    <div class="container-fluid d-flex justify-content-between">
        <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Developed with love by web
            developer
            SMK MUDA Pekanbaru</span>
    </div>
</footer>


<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<?= $this->session->flashdata('login_message') ?>
<script src="<?= base_url('assets/'); ?>vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?= base_url('assets/'); ?>vendors/chart.js/Chart.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/jquery.cookie.js" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?= base_url('assets/'); ?>js/off-canvas.js"></script>
<script src="<?= base_url('assets/'); ?>js/hoverable-collapse.js"></script>
<script src="<?= base_url('assets/'); ?>js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="<?= base_url('assets/'); ?>js/dashboard.js"></script>
<script src="<?= base_url('assets/'); ?>js/my.js"></script>
<script src="<?= base_url('assets/'); ?>js/todolist.js"></script>
<!-- End custom js for this page -->
</body>

</html>