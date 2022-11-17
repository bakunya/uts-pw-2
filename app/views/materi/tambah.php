<?php
require $_SERVER['D_ROOT'] . "/app/controllers/materi/tambah_GET.php";
$mata_kuliah = tambah_GET();
?>

<div class="container-md mx-auto p-4">
    <h1 class="h5 text-center"><strong>Tambah Materi <?= $mata_kuliah['mata_kuliah'] ?></strong></h1>
    <form action="<?= $_SERVER['D_PATH'] . "/materi/controllers/tambah.php" ?>" method="POST" class="mt-5">
        <input type="hidden" name="id_mata_kuliah" value="<?= $mata_kuliah['id'] ?>">
        <div class="mb-4">
            <label for="exampleFormControlInput1" class="form-label">Pertemuan Ke <span class="text-danger">*</span></label>
            <input required type="text" class="form-control" id="exampleFormControlInput1" name="pertemuan">
        </div>
        <div class="mb-4">
            <label for="exampleFormControlInput2" class="form-label">Judul <span class="text-danger">*</span></label>
            <input required type="text" class="form-control" id="exampleFormControlInput2" name="judul">
        </div>
        <div class="mb-4">
            <label for="exampleFormControlTextarea1" class="form-label">Konten <span class="text-danger">*</span></label>
            <textarea required class="form-control" id="exampleFormControlTextarea1" rows="8" name="konten"></textarea>
        </div>
        <div class="d-flex justify-content-end">
            <a tabindex="-1" href="<?= $_SERVER['D_PATH'] . '/materi?id_mata_kuliah=' . $mata_kuliah['id'] ?>" class="btn btn-dark px-5 d-block me-2">Back</a>
            <button type="submit" class="btn btn-primary px-5 d-block">Save</button>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', _ => {
        const param = new URLSearchParams(location.search);
        if (param.get('status')) {
            swal(param.get('status')?.toUpperCase(), param.get('message') ?? param.get('status')?.toUpperCase(), param.get('status'))
                .then(_ => {
                    param.delete('status')
                    param.delete('message')
                    window.history.pushState({}, '', `${location.pathname}?${param.toString()}`)
                })
        }
    })
</script>