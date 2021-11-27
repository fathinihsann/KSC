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
            <hr>
        </div>
        <!--SEARCH BAR-->
        <br>
        <div class="row justify-content-left">
            <div class="col-lg-6 col-sm-12 mt-2 mb-2">
                <form class="d-flex search-bar" action="">
                    <input class="form-control me-2 search" type="search" placeholder="Cari Artikel ..." name="keyword">
                    <button class="ml-3 btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
        <!--ARTICLE-->
        <br>
        <div class="row text-justify">
            <div class="col-lg-10 col-sm-12">
            <a>
            <div class="card">
                <h3 class="mt-3">Ganti Ban Anda apabila Terdapat Salah Satu Kondisi Berikut</h3>
                <img src="https://asset.indosport.com/article/image/q/80/334992/manchester_city_vs_paris_saint_germain_liga_champions-169.jpg?w=750&h=423" alt="" class="img fake-img mt-3" height="200px">
                <br>
                <p></p>
                <p>
                    <span style="font-size:18px">
                        Selain buat menopang bodi
                    </span>
                </p>
            </div>
        </a>
            </div>
        </div>
        
        
    </div>
</section>
<?= $this->endSection(); ?>