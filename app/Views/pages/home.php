<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>



<!--====== SLIDER PART START ======-->
<section>
    <div class="container=fluid mt-4">
        <div class="row">
            <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <!-- IMAGES SLIDER -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/images/slide1.jpg" class="d-block w-100 img-fluid" alt="Carousel">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/slide2.jpg" class="d-block w-100 img-fluid" alt="Carousel">
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== SLIDER PART ENDS ======-->


<link rel="stylesheet" href="/css/services.css">

<div class="container">
    <div class="row mt-3 mb-4 justify-content-center">
        <div class="col-12 mt-3 text-center">
            <h3>Our Services</h3>
        </div>
        <div class="col-6 mt-4 text-center">
            <div class="services">
                <div class="text-head">
                    <img src="/images/gr-icon.png" alt="images" class="menu-img">
                </div>
                <div class="text-body ml-4">
                    <h4 class="text-left">General Repair</h4>
                    <p class="card-text">
                        KSC Motor akan membantu anda dalam merawat kendaraan anda secara berkala.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-6 mt-4 text-center">
            <div class="services">
                <div class="text-head">
                    <img src="/images/bp-icon.png" alt="images" class="menu-img">
                </div>
                <div class="text-body ml-4">
                    <h4 class="text-left">Body Paint</h4>
                    <p class="card-text">
                        KSC Motor akan membantu anda tampil lebih percaya diri dengan kendaraan kesayangan anda.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-6 mt-4 text-center">
            <a href="" class="services-btn">
                <div class="services">
                    <div class="text-head">
                        <img src="/images/booking-icon.png" alt="images" class="menu-img">
                    </div>
                    <div class="text-body ml-4">
                        <h4 class="text-left">Booking Services</h4>
                        <p class="card-text">
                            Booking service menjadi lebih mudah di KSC Motor.
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 mt-4 text-center">
            <div class="services">
                <div class="text-head">
                    <img src="/images/part-icon.png" alt="images" class="menu-img">
                </div>
                <div class="text-body ml-4">
                    <h4 class="text-left">Spare Part</h4>
                    <p class="card-text">
                        KSC Motor Menyediakan spare part lengkap sesuai kebutuhan anda.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>



<?= $this->include('templates/features'); ?>


<!-- Details 1 -->
<div id="details" class="basic-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="text-container">
                    <h2>General Repair</h2>
                    <p>KSC Motor Telah Bekerja Sama dengan beberapa perusahaan untuk memastikan kendaraan - kendaraan nya nyaman dan aman di gunakan</p>
                    <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox">Booking General Repair</a>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-7">
                <div class="image-container">
                    <img class="img-fluid" src="/template-styling/images/details-1.jpg" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-2 -->
<!-- end of details 1 -->


<!-- Details 2 -->
<div class="basic-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="image-container">
                    <img class="img-fluid" src="/template-styling/images/details-2.jpg" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
            <div class="col-lg-5">
                <div class="text-container">
                    <h2>Body Paint Services</h2>
                    <p>KSC Motor akan membantu anda dalam merawat body kendaraan anda sehingga lebih mewah</p>
                    <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox">Booking Body Paint</a>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-3 -->
<!-- end of details 2 -->


<!-- Statistics -->
<div class="counter">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <!-- Counter -->
                <div id="counter">
                    <div class="cell">
                        <div class="counter-value number-count" data-count="995">1</div>
                        <p class="counter-info">Happy Users</p>
                    </div>
                    <div class="cell">
                        <div class="counter-value number-count" data-count="999">1</div>
                        <p class="counter-info">Issues Solved</p>
                    </div>
                    <div class="cell">
                        <div class="counter-value number-count" data-count="50">1</div>
                        <p class="counter-info">Company Partner</p>
                    </div>
                    <div class="cell">
                        <div class="counter-value number-count" data-count="177">1</div>
                        <p class="counter-info">Good Reviews</p>
                    </div>
                </div>
                <!-- end of counter -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of counter -->
<!-- end of statistics -->


<!-- Pricing -->
<div id="pricing" class="cards-2">
    <div class="decoration-bg"></div>
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12">
                <h2 class="h2-heading">Tips & Berita</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">

                <!-- Card-->
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <img src="https://i.picsum.photos/id/619/200/200.jpg?hmac=kS8OI8cYlvghz5FZaiYdIx96pUPQ30oF6bIsAg3AOZ4" alt="">
                        </div>
                        <p>This basic package covers the marketing needs of small startups</p>
                        <div class="button-wrapper">
                            <a class="btn-solid-reg page-scroll" href="#download">Baca</a>
                        </div>
                    </div>
                </div> <!-- end of card -->
                <!-- end of card -->

                <!-- Card-->
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <img src="https://i.picsum.photos/id/158/200/200.jpg?hmac=8rukQaKQTs6njn3-TO5g1J8hhSqM3Ria1Q9nzz8DZSI" alt="">
                        </div>
                        <p>This basic package covers the marketing needs of small startups</p>
                        <div class="button-wrapper">
                            <a class="btn-solid-reg page-scroll" href="#download">Baca</a>
                        </div>
                    </div>
                </div> <!-- end of card -->
                <!-- end of card -->

                <!-- Card-->
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <img src="https://i.picsum.photos/id/1075/200/200.jpg?hmac=a9PcCsXBonPZ7LCLyWX6dHM1XGbcojML0qhnq-Ee4a4" alt="">
                        </div>
                        <p>This basic package covers the marketing needs of small startups</p>
                        <div class="button-wrapper">
                            <a class="btn-solid-reg page-scroll" href="#download">Baca</a>
                        </div>
                    </div>
                </div> <!-- end of card -->
                <!-- end of card -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-2 -->
<!-- end of pricing -->
<?= $this->endSection(); ?>