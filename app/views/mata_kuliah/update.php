<?php
require $_SERVER['D_ROOT'] . "/app/controllers/mata_kuliah/update_GET.php";
$current_data = get_current_data();
?>

<div class="container-md mx-auto p-4">
    <h1 class="h5 text-center"><strong>Update Mata Kuliah</strong></h1>
    <form action="<?= $_SERVER['D_PATH'] . "/mata_kuliah/controllers/update.php" ?>" method="POST" class="mt-5">
        <input type="hidden" name="id" value="<?= $current_data['id'] ?>">
        <div class="mb-4">
            <label for="exampleFormControlInput1" class="form-label">Mata Kuliah <span class="text-danger">*</span></label>
            <input value="<?= $current_data['mata_kuliah'] ?>" required type="text" class="form-control" id="exampleFormControlInput1" name="mata_kuliah">
        </div>
        <div class="mb-4">
            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi <span class="text-danger">*</span></label>
            <textarea required class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"><?= $current_data['deskripsi'] ?></textarea>
        </div>
        <div class="d-flex justify-content-end">
            <a tabindex="-1" href="<?= $_SERVER['D_PATH'] . '/' ?>" class="btn btn-dark px-5 d-block me-2">Back</a>
            <button type="submit" class="btn btn-primary px-5 d-block">Save</button>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', _ => {
        const param = new URLSearchParams(location.search);
        console.log(param.get('id'))
        if (param.get('status')) {
            swal(param.get('status')?.toUpperCase(), param.get('message') ?? param.get('status')?.toUpperCase(), param.get('status'))
                .then(_ => window.history.pushState({}, '', location.pathname))
        }
    })
</script>