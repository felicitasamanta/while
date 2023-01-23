<?php
if (isset($_POST['number']) && is_numeric($_POST['number'])) {
    $number = $_POST['number'];

    $str = strval(abs($number));
    $length = $length = strlen($str);
    $evenCount = 0;
    $oddCount = 0;
    for ($i = 0; $i < $length; $i++) {
        if ($str[$i] % 2 == 0) {
            $evenCount++;
        } else {
            $oddCount++;
        }
    }
} else {
    $number = '';
    $evenCount = '';
    $oddCount = '';
}
?>
<?php include "../header.php" ?>
<div class=" view d-flex flex-wrap justify-content-between align-items-center .view">
    <form class=" col-md-5 mx-auto border border-primary p-3">
        <h1 class="text-center mb-3"> Atsakymas</h1>
        <div class="mb-3">
            <label for="number" class="form-label">Jūsų įvestas skaičius: <?= $number ?></label>
            <div>
                <p> Kai skaičius = <?= $number ?>, tai lyginių - <?= $evenCount ?> , nelyginių - <?= $oddCount ?> . </p>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="evenAndOdd.php" class="btn btn-primary">Skaičiuoti kitą skaitmenį</a></div>
    </form>
</div
</body>
</html>
