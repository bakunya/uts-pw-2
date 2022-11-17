<?php
require $_SERVER['D_ROOT'] . "/app/controllers/materi/detail.php";
$data = get_detail();
?>

<div class="container-fluid p-4 mx-auto">
    <a href="<?= $_SERVER['D_PATH'] . '/materi/update.php?id=' . $data['id'] . '&id_mata_kuliah=' . $data['id_mata_kuliah'] ?>" class="btn me-2 btn-primary"><small>Update</small></a>
    <a href="<?= $_SERVER['D_PATH'] . '/materi/controllers/delete.php?id=' . $data['id'] . '&id_mata_kuliah=' . $data['id_mata_kuliah'] ?>" class="btn-delete btn btn-danger"><small>Delete</small></a>
    <h1 class="mt-5 text-center"><?= $data['judul'] ?></h1>
    <h2 class="mt-2 text-center h6"><?= $data['pertemuan'] ?> - <?= $data['mata_kuliah'] ?></h2>
    <p class="mt-5" style="white-space: pre-wrap;">
        <?= $data['konten'] ?>
    </p>
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

        document.querySelectorAll('.btn-delete').forEach(itm => {
            itm.addEventListener('click', e => {
                e.preventDefault()
                swal({
                    title: "Yakin?",
                    text: "Setelah dihapus, data tidak bisa dikembalikan.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        window.location.replace(itm.href)
                    } else {
                        swal("Penghapusan dibatalkan!");
                    }
                });
            })
        })
    })
</script>