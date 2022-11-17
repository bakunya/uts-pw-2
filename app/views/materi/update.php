<?php
require $_SERVER['D_ROOT'] . "/app/controllers/materi/update_GET.php";
$data = update_GET();
?>

<div class="container-md mx-auto p-4">
    <h1 class="h5 text-center"><strong>Ubah Materi <?= $data['mata_kuliah'] ?></strong></h1>
    <form action="<?= $_SERVER['D_PATH'] . "/materi/controllers/update.php" ?>" method="POST" class="mt-5">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <input type="hidden" name="id_mata_kuliah" value="<?= $data['id_mata_kuliah'] ?>">
        <div class="mb-4">
            <label for="exampleFormControlInput1" class="form-label">Pertemuan Ke <span class="text-danger">*</span></label>
            <input required type="text" class="form-control" id="exampleFormControlInput1" name="pertemuan" value="<?= $data['pertemuan'] ?>">
        </div>
        <div class="mb-4">
            <label for="exampleFormControlInput2" class="form-label">Judul <span class="text-danger">*</span></label>
            <input required type="text" class="form-control" id="exampleFormControlInput2" name="judul" value="<?= $data['judul'] ?>">
        </div>
        <div class="mb-4">
            <label for="exampleFormControlTextarea1" class="form-label">Konten <span class="text-danger">*</span></label>
            <textarea required class="form-control" id="exampleFormControlTextarea1" rows="8" name="konten"><?= $data['konten'] ?></textarea>
        </div>
        <div class="d-flex justify-content-end">
            <a tabindex="-1" href="<?= $_SERVER['D_PATH'] . '/materi?id_mata_kuliah=' . $data['id_mata_kuliah'] ?>" class="btn btn-dark px-5 d-block me-2">Back</a>
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