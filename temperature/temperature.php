<?php include "../header.php";
?>

<div class=" view d-flex flex-wrap justify-content-between align-items-center .view">
    <form class=" col-md-5 mx-auto border border-primary p-3" enctype="multipart/form-data" action="temperatureRes.php"
          method="post">
        <h1 class="text-center mb-3"> Temperatūrų skaičiavimai</h1>
        <div class="mb-3">
            <label for="data" class="form-label">Įkelkite failą</label>
            <input type="file" onchange="enableSubmit()" name="data" value="1" class="form-control">
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" name="issiusti" disabled class="btn mx-auto btn-primary">
                Įkelti
            </button>
    </form>
</div>
<script>
    function enableSubmit() {
        let inputs = document.querySelectorAll("input[type='file']");
        let btn = document.querySelector('button[name="issiusti"]');
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
