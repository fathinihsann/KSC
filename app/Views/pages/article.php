<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>
<section>
    <div class="container">
        <br>
        <!-- HEADER -->
        <div class="row-header">
            <?php if(session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>

            <div class="col">
                <h1 class="article-title">Akastra Daily</h1>
                <p class="article-subtitle">Temukan Tips dan Trik Merawat Kendaraan disini</p>
            </div>
            <hr>
        </div>
        <!--SEARCH BAR-->
        <br>
        <div class="row justify-content-left">
            <div class="col-lg-6 col-sm-12 mt-2 mb-2">
                <form class="d-flex search-bar" action="" method="GET">
                    <input class="form-control me-2 search" type="search" placeholder="Cari Artikel ..." name="keyword">
                    <button class="ml-3 btn btn-outline-success" type="submit" name="submit">Search</button>
                </form>
            </div>
        </div>
        <!--ARTICLE-->
        <br>
        <div class="row text-justify">
            <div class="col-lg-10 col-sm-12">
            <?php foreach ($article as $a) : ?>
            <a class="text-decoration-none" href="/article/<?= $a['title']; ?>">
            <div class="card">
                <h3 class="mt-3"><?= $a['title']; ?></h3>
                <img src=<?= $a['image']; ?> alt="" class="img fake-img mt-3" height="200px">
                <br>
                <!-- <p></p> -->
                <p>
                    <span style="font-size:18px">
                        <?= $a['content']; ?>
                    </span>
                </p>
            </div>
            <?php endforeach; ?>
                </a>
            </div>
            <div class="right">
                <div class="card">
                    <h3>Popular Post</h3>
                    <a>
                        <img src="https://asset.indosport.com/article/image/q/80/334992/manchester_city_vs_paris_saint_germain_liga_champions-169.jpg?w=750&h=423" alt="" class="popluar mt-3 img-fluid">
                        <p class="text-center mt-2">
                            Ganti Ban
                        </p>
                    </a>
                    <br>
                    <hr>
                    <h3>Follow Us</h3>
                    <a class="text-decoration-none" href="https://www.facebook.com/AkastraToyota/" target="_blank">
                        <p class="mt-1">
                        <i class="Ini Ini-facebook"></i>Akastra Toyota
                        </p>
                    </a>
                    <a class="text-decoration-none" href="https://www.instagram.com/akastra_toyota/" target="_blank">
                        <p class="mt-1">
                        <i class="Ini Ini-instagram"></i>Akastra Toyota
                        </p>
                    </a>
                </div>

            </div>
        </div>
        <div class="col d-flex justify-content-center mt-3 mb-4">
            <?= $pager->links('article', 'pagination'); ?>
        </div>    
    </div>
</section>
<?= $this->endSection(); ?>