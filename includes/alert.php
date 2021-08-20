
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