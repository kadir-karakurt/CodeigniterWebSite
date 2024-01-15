<!-- Appointment Start -->
<div class="container-xxl py-5">
    <div class="container">

        <!--Login start-->
        <div class="row g-5">

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <h1 class="mb-4">Giriş Yap</h1>

                <div class="bg-light rounded h-100 d-flex align-items-center p-5">

                    <form action="<?= base_url('login') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="row g-3">
                            <?= validation_list_errors() ?>
                            <?php
                            if (isset($uyari)) {
                                echo '<div class="alert alert-danger" role="alert">';
                                echo $uyari;
                                echo '</div>';
                            }
                            ?>
                            <div class="col-12 col-sm-12">
                                <label class="mb-4" for="kulad"
                                    style="font-size: 25px; color: black; font-weight: bold;">Kullanıcı Adı</label>
                                <input type="text" class="form-control border-0" id="kulad" name="kulad"
                                    placeholder="Kullanıcı Adı" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-12">
                                <label class="mb-4" for="sifre"
                                    style="font-size: 25px; color: black; font-weight: bold;">Şifre</label>
                                <input type="password" class="form-control border-0" id="sifre" name="sifre"
                                    placeholder="Şifre" style="height: 55px;">
                            </div>

                            <div class="col-12 col-sm-12">
                                <label class="mb-4" for="email"
                                    style="font-size: 25px; color: black; font-weight: bold;">Email Adresi </label>
                                <input type="email" class="form-control border-0" id="email" name="email"
                                    placeholder="Email Adresiniz" style="height: 55px;">
                            </div>


                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" name="gonder">Giriş Yap
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!--Login end-->

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <form action="<?= base_url('kullanici_kayit') ?>" method="post">
                    <?= csrf_field() ?>
                    <h1 class="mb-4">Kayıt Ol</h1>
                    <div class="bg-light rounded h-100 d-flex align-items-center p-5">
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-12">
                                    <label class="mb-4" for="kulad2"
                                        style="font-size: 25px; color: black; font-weight: bold;">Kullanıcı Adı</label>
                                    <input type="text" class="form-control border-0" id="kulad2" name="kulad2"
                                        placeholder="Kullanıcı Adı" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-12">
                                    <label class="mb-4" for="sifre2"
                                        style="font-size: 25px; color: black; font-weight: bold;">Şifre</label>
                                    <input type="password" class="form-control border-0" id="sifre2" name="sifre2"
                                        placeholder="Şifre" style="height: 55px;">
                                </div>

                                <div class="col-12 col-sm-12">
                                    <label class="mb-4" for="email2"
                                        style="font-size: 25px; color: black; font-weight: bold;">Email Adresi </label>
                                    <input type="email" class="form-control border-0" id="email2" name="email2"
                                        placeholder="Email Adresiniz" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Kayıt Ol</button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->