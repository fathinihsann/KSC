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
                <form class="d-flex search-bar" action="" method="POST">
                    <input class="form-control me-2 search" type="text" placeholder="Cari Artikel ..." name="keyword">
                    <button class="ml-3 btn btn-outline-success" type="submit" name="submit">Search</button>
                </form>
            </div>
        </div>
        <!--ARTICLE-->
        <br>
        <div class="row text-justify">
            <div class="leftcolumn">
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
                <div class="card-body">
                    <form action="/article/<?= $a['id'];?>" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger mt-3 float-right">Hapus</button>
                    </form>
                </div>
            </div>
            <?php endforeach; ?>
                </a>
            </div>
            </div>
            <div class="rightcolumn">
                <div class="card">
                    <h3>Popular Post</h3>
                    <a>
                        <img src="https://asset.indosport.com/article/image/q/80/334992/manchester_city_vs_paris_saint_germain_liga_champions-169.jpg?w=750&h=423" alt="" class="popluar mt-3 img-fluid">
                        <p class="text-center mt-2">
                            Ganti B
                        </p>
                    </a>
                    <br>
                    <hr>
                    <h3>Follow Us</h3>
                    <a href="https://www.facebook.com/AkastraToyota/" target="_blank">
                        <p class="mt-1">
                        <i class="Ini Ini-facebook"></i>Akastra Toyota
                        </p>
                    </a>
                    <a href="https://www.instagram.com/akastra_toyota/" target="_blank">
                        <p class="mt-1">
                        <i class="Ini Ini-instagram"></i>Akastra Toyota
                        </p>
                    </a>
                </div>

            </div>
        </div>
        <div class="col d-flex justify-content-center mt-3 mb-4">
        <div class="col d-flex justify-content-center mt-3 mb-4">
            <?= $pager->links('article', 'pagination'); ?>
        </div>  
            </div>    
        <br>
        <br>
        <div class="row">
            <div class="col">
                <h2>Tambahkan Artikel</h2>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <form class="mb-5" action="/pages/save" method="POST" enctype="multipart/form-data">
                                <!-- <input type="hidden" name="" value=""> -->
                                <div class="form-group mt-3">
                                    <label for="title" class="font-weight-bold" style="color: black;">Judul Artikel</label>
                                    <input type="text" class="form-control" placeholder="Ketikkan Judul ..." id="title" name="title" required>
                                </div>
                                <label class="mt-2 font-weight-bold" style="color: black;">Deskripsi</label>
                                <div class="form-input">
                                    <textarea id="content" name="content"></textarea>
                                        <script>
                                            CKEDITOR.replace( 'content' );
                                        </script>
                                </div>
                                <div class="custom-file mt-3">
                                    <input type="file" class="custom-file-input" name="image" id="image" onchange="imagePreview(this);" role="">
                                    <label class="custom-file-label" for="validatedCustomFile">Choose File ...</label>
                                    <!-- <div class="invalid-feedback">Example Invalid custom file feedback</div> -->
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 mt-3">
                                        <img src="https://pertaniansehat.com/v01/wp-content/uploads/2015/08/default-placeholder.png" id="image-preview" class="img-thumbnail img-preview" alt="your image">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-4 submit-btn">Submit</button>
                            </form>
                            <script>
                                    function imagePreview(input) {
                                        if (input.files && input.files[0]) {
                                            var reader = new FileReader();

                                            reader.onload = function (e) {
                                                $('#image-preview')
                                                    .attr('src', e.target.result);
                                            };

                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    };
                                </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>