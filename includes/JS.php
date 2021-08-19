<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate.js"></script>
<script type="text/javascript" src="assets/packages/bootstrap/libraries/popper.js"></script>
<script type="text/javascript" src="assets/packages/bootstrap/bootstrap.js"></script>
<script type="text/javascript" src="assets/packages/o2system-ui/o2system-ui.js"></script>
<script type="text/javascript" src="assets/packages/owl-carousel/owl-carousel.js"></script>
<script type="text/javascript" src="assets/packages/cloudzoom/cloudzoom.js"></script>
<script type="text/javascript" src="assets/packages/thumbelina/thumbelina.js"></script>
<script type="text/javascript" src="assets/packages/bootstrap-touchspin/bootstrap-touchspin.js"></script>
<script type="text/javascript" src="assets/js/theme.js"></script>
<!-- sweet alert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<!-- sweet alert 2-->
<?php

if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
?>
    <script>
        Swal.fire({

            text: "<?php echo $_SESSION['status'] ?>",
            icon: "<?php echo $_SESSION['status_code'] ?>",
            confirmButtonText: 'Ok'
        })
    </script>
<?php
    unset($_SESSION['status']);
}
?>
</body>

</html>