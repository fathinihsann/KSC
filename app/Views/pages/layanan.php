<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>
<section>
<br>
<br>
<br>
<br>
<br>
<section id="services" class="feature-area">
    <div class="container">
    <?php if(session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
        <div class="row">
            <div class="col text-center">
                <h1 class="title title-section mb-2 font-weight-bold" style="font-size: 48px;">GENERAL REPAIR</h1>
            </div>
        </div>
        <div class="row">
        <?php foreach($generalrepair as $g) : ?>
            <div class="col-lg-6 col-sm-12 mt-4">
                <div class="card text-white servis">
                    <a class="text-decoration-none" type="button" data-toggle="modal" data-target="#exampleModal">
                        <img class="icon-servis ml-4 mt-4 mb-3" src="<?= $g['image']; ?>" alt="">
                        <div class="card-body">
                            <h4 class="card-title"><?= $g['name']; ?></h4>
                            <p class="card-text mb-3"><?= $g['description']; ?></p>
                        </div>
                    </a>
                </div>
            </div>
            <?php endforeach ?>
            <?php foreach($generalrepair as $g) : ?>
                <div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?= $g['name']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe width="465" height="300" src="<?= $g['ytb']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
            <?php endforeach ?>
    </div>
</section>

<br>
<br>
<hr>
<br>
<br>

<section id="services" class="feature-area">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 class="title title-section mb-2 font-weight-bold" style="font-size: 48px;">BODY & PAINT</h1>
            </div>
        </div>
        <div class="row">
        <?php foreach($bodypaint as $b) : ?>
            <div class="col-lg-6 col-sm-12 mt-4">
                <div class="card text-white servis">
                    <a class="text-decoration-none" href="">
                        <img class="icon-servis ml-4 mt-4 mb-3" src="<?= $b['image']; ?>" alt="">
                        <div class="card-body">
                            <h4 class="card-title"><?= $b['name']; ?></h4>
                            <p class="card-text mb-3"><?= $b['description']; ?></p>
                        </div>
                    </a>
                </div>
            </div>
            <?php endforeach ?>
    </div>
</section>

<br>
<br>

<section>
    <div class="container-fluid call">
        <div class="row">
            <div class="col d-flex justify-content-center text-center">
                <h2 class="font-weight-normal call-text mt-2">Ada yang bisa kami bantu?</h2>
                <br>
            </div>
        </div>
        <div class="row">
        <div class="col d-flex justify-content-center text-center">
                <p class="call-text mt-2">
                Customers Services siap melayani anda
                <br>
                <br>
                setiap hari Senin - Jumat
                <br>
                Pukul 08.00 - 16.00 WIB
                <br>
                <br>
                Hari Sabtu
                <br>
                Pukul 08.00 - 14.00 WIB
                <br>
                <br>
                Hari Minggu dan Tanggal Merah tutup
                <br>
                <br>
                </p>
            </div>
        </div>
        <div class="row">
        <div class="col d-flex justify-content-center text-center">
            <h4 class="font-weight-bold call-text">Call Center: (021) 534 717</h4>
        </div>
        </div>
    </div>
</section>

<br>
<br>

<section id="contact" class="contact-area">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10">
            <div class="section-title text-center pb-30">
                <h3 class="title">Contact Service</h3>
                <br>
                <p class="text">
                    Akastra Toyota Buka Setiap Hari Senin - Sabtu
                    <br>
                    Hari minggu dan tanggal merah
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="contact-wrapper form-style-two pt-115">
                <h4 class="contact-title pb-10">
                    <br>
                    <br>
                    <br>
                    <i class="lni lni-envelope"></i>
                    Tinggalkan <span>Pesan.</span>
                    <br>
                    <br>
                </h4>
                <form action="/pages/savePesan" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-input mt-25">
                                <label for="">Name</label>
                                <div class="input-items default">
                                    <input type="text" name="name" id="name" placeholder="Name">
                                    <i class="lni lni-user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-input mt-25">
                                <label for="">Email</label>
                                <div class="input-items default">
                                    <input type="text" name="email" id="email" placeholder="Email">
                                    <i class="lni lni-user"></i>
                                </div>
                            </div>
                            <input type="hidden" name="active" value="Layanan">
                        </div>
                        <div class="col-md-12">
                            <div class="form-input mt-25">
                                <label for="">Message</label>
                                <div class="input-items default">
                                    <textarea name="message" id="message" placeholder="Message"></textarea>
                                    <i class="lni lni-pencil-art"></i>
                                </div>
                            </div>
                        </div>
                        <p class="form-message"></p>
                        <div class="col-md-12">
                            <div class="form-input light-rounded-buttons mt-30">
                                <button type="submit" class="main-btn light-rounded-two">Send Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>

</section>
<?= $this->endSection(); ?>