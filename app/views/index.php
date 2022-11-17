<?php
require $_SERVER['D_ROOT'] . "/app/models/mata_kuliah/get_all.php";
$data = get_all();
?>

<div class="container-fluid p-4 mx-auto">
    <?php if (!count($data)) : ?>
        <a href="<?= $_SERVER['D_PATH'] . "/mata_kuliah/tambah.php" ?>" class="btn btn-success">Buat Mata Kuliah</a>
        <p class="text-center mt-4"><strong>Data Tidak Ada.</strong></p>
    <?php else : ?>
        <h1 class="h5 text-center"><strong>Daftar Mata Kuliah</strong></h1>
        <a href="<?= $_SERVER['D_PATH'] . "/mata_kuliah/tambah.php" ?>" class="btn mt-4 btn-success">Buat Mata Kuliah</a>
        <table class="table table-striped mt-4 align-middle">
            <thead>
                <tr>
                    <th class="p-3">No.</th>
                    <th class="p-3">Mata Kuliah</th>
                    <th class="p-3">Deskripsi</th>
                    <th class="p-3">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($data as $key => $value) : ?>
                    <tr>
                        <td class="p-3"><?= $i ?></td>
                        <td class="p-3"><?= $value[1] ?></td>
                        <td class="p-3"><?= $value[2] ?></td>
                        <td class="p-3">
                            <div class="d-flex">
                                <a href="<?= $_SERVER['D_PATH'] . '/materi?id_mata_kuliah=' . $value[0] ?>" class="btn btn-dark"><small>Materi</small></a>
                                <a href="<?= $_SERVER['D_PATH'] . '/mata_kuliah/update.php?id=' . $value[0] ?>" class="btn mx-2 btn-primary"><small>Update</small></a>
                                <a href="<?= $_SERVER['D_PATH'] . '/mata_kuliah/controllers/delete.php?id=' . $value[0] ?>" class="btn-delete btn btn-danger"><small>Delete</small></a>
                            </div>
                        </td>
                    </tr>
                    <?php $i += 1 ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>

<script>
    document.addEventListener('DOMContentLoaded', _ => {
        const param = new URLSearchParams(location.search);
        if (param.get('status')) {
            swal(param.get('status')?.toUpperCase(), param.get('message') ?? param.get('status')?.toUpperCase(), param.get('status'))
                .then(_ => window.history.pushState({}, '', location.pathname))
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