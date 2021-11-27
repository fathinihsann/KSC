<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>
<br><br><br>
<section>
    <form action="">
        <div class="container menu-car">
            <div class="row justify-content-center menu-content">
                <div class="col-lg-4 col-sm-12 text-center">
                    <select name="" id="" class="form-control">
                        <option value="">Pilih Merk</option>
                    </select>
                </div>
                <div class="col-lg-4 col-sm-12 text-center">
                    <select name="" id="" class="form-control">
                        <option value="">Pilih Model</option>
                    </select>
                </div>
                <div class="col-lg-4 col-sm-12 text-center">
                    <button class="submit-btn">Submit</button>
                </div>
            </div>
        </div>
    </form>
</section>
<?= $this->endSection(); ?>