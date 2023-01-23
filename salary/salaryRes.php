<?php
$salary = $_POST['salary'];
$raise = $_POST['raise'];
$month = 0;
$salaryAndRaise = $salary + ($raise * $month);
if ($salary <= 0 || $raise <= 0) {
    echo "<script>alert('Alga arba algos kėlimas negali būti neigiamas');</script>";
} else {
    while (($salaryAndRaise / $salary) < 2) {
        $month++;
        $salaryAndRaise = $salary + ($raise * $month);
    }
}
?>
<?php include "../header.php" ?>

<div class=" view d-flex flex-wrap justify-content-between align-items-center .view">
    <form class=" col-md-5 mx-auto border border-primary p-3">
        <h1 class="text-center mb-3"> Algos skaičiavimas</h1>
        <div class="mb-3">
            <label for="salary" class="form-label">Pradinis atlyginimas (EUR)</label>
            <input type="number" name="salary" disabled class="form-control" placeholder="<?= $salary ?>">
        </div>
        <div class="mb-3">
            <label for="b" class="form-label">Žadamas algos kėlimas (EUR)</label>
            <input type="number" name="b" disabled class="form-control" placeholder="<?= $raise ?>">
        </div>
        <div>
            <p>Jei pradinė alga - <?= $salary ?> EUR, o žadama kelti kas <?= $raise ?> kiekvieną mėn., tai
                po <?= $month ?> mėn. atlyginimas bus daugiau nei dvigubai didesnis. </p>
        </div>
        <a href="salary.php" class="btn mx-auto btn-primary">Skaičiuoti kitą algą</a>
    </form>
</div>
</body>
</html>
