<?php
require $_SERVER['D_ROOT'] . "/app/controllers/materi/index.php";
$data = get_all_data();
$mata_kuliah = get_mata_kuliah();
?>

<div class="container-fluid p-4 mx-auto">
    <?php if (!count($data)) : ?>
        <a href="<?= $_SERVER['D_PATH'] . "/materi/tambah.php?id_mata_kuliah=" . $_GET['id_mata_kuliah'] ?>" class="btn mt-4 btn-success">Buat Materi</a>
        <a href="<?= $_SERVER['D_PATH'] . "/" ?>" class="btn mt-4 btn-dark ms-2">Daftar Mata Kuliah</a>
        <p class="text-center mt-4"><strong>Data Tidak Ada.</strong></p>
    <?php else : ?>
        <h1 class="h5 text-center"><strong>Daftar Materi <?= $mata_kuliah['mata_kuliah'] ?></strong></h1>
        <a href="<?= $_SERVER['D_PATH'] . "/materi/tambah.php?id_mata_kuliah=" . $_GET['id_mata_kuliah'] ?>" class="btn mt-4 btn-success">Buat Materi</a>
        <a href="<?= $_SERVER['D_PATH'] . "/" ?>" class="btn mt-4 btn-dark ms-2">Daftar Mata Kuliah</a>
        <table class="table table-striped mt-4 align-middle">
            <thead>
                <tr>
                    <th class="p-3">No.</th>
                    <th class="p-3">Pertemuan Ke</th>
                    <th class="p-3">Judul</th>
                    <th class="p-3">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($data as $key => $value) : ?>
                    <tr>
                        <td class="p-3"><?= $i ?></td>
                        <td class="p-3"><?= $value[2] ?></td>
                        <td class="p-3"><?= $value[3] ?></td>
                        <td class="p-3">
                            <div class="d-flex">
                                <a href="<?= $_SERVER['D_PATH'] . '/materi/detail.php?id=' . $value[0] . '&id_mata_kuliah=' . $_GET['id_mata_kuliah'] ?>" class="btn btn-dark"><small>Detail</small></a>
                                <a href="<?= $_SERVER['D_PATH'] . '/materi/update.php?id=' . $value[0] . '&id_mata_kuliah=' . $_GET['id_mata_kuliah'] ?>" class="btn mx-2 btn-primary"><small>Update</small></a>
                                <a href="<?= $_SERVER['D_PATH'] . '/materi/controllers/delete.php?id=' . $value[0] . '&id_mata_kuliah=' . $_GET['id_mata_kuliah'] ?>" class="btn-delete btn btn-danger"><small>Delete</small></a>
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