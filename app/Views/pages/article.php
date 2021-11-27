<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>
<section>
    <div class="container">
        <br>
        <!-- HEADER -->
        <div class="row-header">
            <div class="col">
                <h1 class="article-title">Akastra Daily</h1>
                <p class="article-subtitle">Temukan Tips dan Trik Merawat Kendaraan disin</p>
            </div>
        </div>
        <!--SEARCH BAR-->
        <div class="row justify-content-left">
            <div class="col-lg-6 col-sm-12 mt-2 mb-2">
                <form class="d-flex search-bar" action="">
                    <input class="form-control me-2 search" type="search" placeholder="Cari Artikel ..." name="keyword">
                    <button class="ml-3 btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
        <!--ARTICLE-->
        <div>
            <div class="card">
                <p>hello</p>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>