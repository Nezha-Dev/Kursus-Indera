<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mt-2 text-center">Detail Komik</h2>
                <div class="card text-white bg-dark mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/assets/img/<?= $komik['sampul']; ?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?= $komik['judul']; ?></h5>
                                <p class="card-text"><b>Penulis : </b><?= $komik['penulis']; ?></p>
                                <p class="card-text"><b>Penerbit : </b><?= $komik['penerbit']; ?></p>
                                <a class="btn btn-warning" href="#" role="button">Edit</a>
                                <a class="btn btn-danger" href="#" role="button">Delete</a>
                                <div class="pt-5 mx-auto">
                                <a class="btn btn-light" href="/komik" role="button">Kembali ke Daftar Komik</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>