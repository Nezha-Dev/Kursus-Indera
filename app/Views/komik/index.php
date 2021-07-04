<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center mt-2">Daftar Komik</h1>
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Cover</th>
                            <th scope="col">Title</th>
                            <th scope="col">Info</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i =1; ?>
                    <?php foreach ($komik as $k): ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/assets/img/<?= $k['sampul']; ?>" alt="" width="80"></td>
                            <td><?= $k['judul']; ?></td>
                            <td><a href="/komik/<?=  $k['slug']; ?>" class="btn btn-light">Detail</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>