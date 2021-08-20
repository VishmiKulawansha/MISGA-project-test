<?php
include_once '../includes/dbcon.php';
// fruit count
$sql2 = "SELECT (itemType) FROM items WHERE itemType='Fruits' ";
$result2 = mysqli_query($conn, $sql2);
$fruitsCount = mysqli_num_rows($result2);

// Leaves count
$sql3 = "SELECT (itemType) FROM items WHERE itemType='Leaves' ";
$result3 = mysqli_query($conn, $sql3);
$leavesCount = mysqli_num_rows($result3);

// Vegetables count
$sql4 = "SELECT (itemType) FROM items WHERE itemType='Vegetables' ";
$result4 = mysqli_query($conn, $sql4);
$vegCount = mysqli_num_rows($result4);

?>

<script type="text/javascript">
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Pie Chart Example
    var ctx = document.getElementById("myPieChart");
    var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Fruits", "Leaves", "Vegetables"],
            datasets: [{
                <?php echo 'data: [' . $fruitsCount . ',' . $leavesCount . ',' . $vegCount . ']' ?>,
                backgroundColor: ['#3D9727', '#f6c23e', '#36b9cc'],
                hoverBackgroundColor: ['#19732c', '#c1982f', '#2c9faf'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
    });
</script>