<!-- Appointment Start -->
<div class="container-xxl py-5">
    <div class="container">

        <!--Login start-->
        <div class="row g-5">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <h2 class="mb-4">Hoşgeldin <?=$isim?></h2>
                <div class="bg-light rounded h-100 d-flex align-items-baseline p-5">
                    <form action="<?= base_url('login') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="row g-3">

                            <div class="col-12 col-sm-12">
                                <a class="nav-link active" style="font-size: 25px; font-weight: bold;" href="<?=base_url('kayit_ekle')?>">Kayıt
                                    Ekle</a>

                            </div>
                            <div class="col-12 col-sm-12">
                                <a class="nav-link active" style="font-size: 25px; font-weight: bold;" href="<?=base_url('kayit_listele')?>">Kayıt
                                    Listele</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.5s">