<?php include "../header.php";
?>
<div class=" view d-flex flex-wrap justify-content-between align-items-center .view">
    <form class=" col-md-5 mx-auto border border-primary p-3" action="salaryRes.php" method="post">
        <h1 class="text-center mb-3"> Algos skaičiavimas</h1>
        <div class="mb-3">
            <label for="salary" class="form-label">Pradinis atlyginimas (EUR)</label>
            <input type="number" name="salary" class="form-control" id="a" onkeyup="enableSubmit()">
        </div>
        <div class="mb-3">
            <label for="raisse" class="form-label">Žadamas algos kėlimas (EUR)</label>
            <input type="number" name="raise" class="form-control" id="b" onkeyup="enableSubmit()">
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" disabled class="btn mx-auto btn-primary">Skaičiuoti</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
<script>
    function enableSubmit() {
        let inputs = document.querySelectorAll("input");
        let btn = document.querySelector('button[type="submit"]');
        let isValid = true;
        for (let i = 0; i < inputs.length; i++) {
            let changedInput = inputs[i];
            if (changedInput.value.trim() === "" || changedInput.value === null) {
                isValid = false;
                break;
            }
        }
        btn.disabled = !isValid;
    }
</script>

</body>
</html>
