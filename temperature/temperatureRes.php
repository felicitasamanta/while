<?php
$a = [];
$counter = 0;
$sum = 0;
if (isset($_FILES['data'])) {
    $to = 'C:/xampp/htdocs/php/while/uploads/' . $_FILES['data']['name'];
    move_uploaded_file($_FILES['data']['tmp_name'], $to);
    $file = fopen($to, 'r');
    while ($row = fgets($file)) {
        $a[] = "$row";
        $counter++;
    }
    fclose($file);
}
foreach ($a as &$value) {
    $sum += $value;
} ?>
<?php include "../header.php" ?>
<div class=" view d-flex flex-wrap justify-content-between align-items-center .view">
    <form class=" col-md-5 mx-auto border border-primary p-3" enctype="multipart/form-data" action="temperature.php"
          method="post">
        <h1 class="text-center mb-3"> Temperatūros</h1>
        <div>
            <p>Visos temperatūros - <?php foreach ($a as &$value) {
                    echo $value . "°\n";
                } ?></p>
            <p> Minimaliausia temperatūra: <?php echo min($a) . "°"; ?> </p>
            <p> Didžiausia temperatūra: <?php echo max($a) . "°"; ?> </p>
            <p> Vidutinė temperatūra: <?php echo round($sum / $counter, 1) . "°" ?> </p>
        </div>
        <a href="temperature.php" class="btn mx-auto btn-primary">Kelti naują failą</a>
    </form>
</div>
</body>
</html>
