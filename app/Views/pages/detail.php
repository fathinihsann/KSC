<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>
<section>
<br>
<br>
<br>
<br>
<br>
<div class="container-fluid">
    <div class="container mb-5">
        <div class="row">
            <div class="btn-back">
                <a class="nav-link btn btn-danger text-decoration-none"
                     <?php if ($active == "layanan") {
                            echo "active";
                        }; ?>
                     href="/article"><i class="lni lni-arrow-up"></i>Kembali
                </a>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col text-center">
                <img src=<?= $article['image'] ;?> class="img-fluid gambar" alt="thumbnail">
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="text-center">
                <h2><?= $article['title'] ;?></h2>
            </div>
        </div>
<hr>
        <div class="row justify-content-center mt-5">
            <div class="col text-left">
                <p><?= $article['content'] ;?></p>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col text-left">
            <p>Jangan lupa kunjungi instagram Akastra di <a href="https://www.instagram.com/akastra_toyota/" class="text-decoration-none" style="color: blue;">@akastra_toyota</a></p>  
            </div>
        </div>
<br>
<br>
<hr>
        <p class="float-right">TimeStamp</p>
    </div>
</div>
</section>
<?= $this->endSection(); ?>


