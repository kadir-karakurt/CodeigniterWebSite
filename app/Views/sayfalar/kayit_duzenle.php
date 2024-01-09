<div class="col-lg-8 wow fadeInUp">

    <!-- Kayıt Düzenleme başlığı -->
    <h1 class="mb-3">Kayıt Düzenleme</h1>
    <div class="bg-light rounded h-100 d-flex align-items-center p-5">

        <!-- Kayıt düzenleme formu -->
        <form action="<?= base_url('kayit_duzenle') ?>" method="post">
            <?= csrf_field() ?>
            <div class="row g-3">

                <!-- Validasyon hata listesi -->
                <?= validation_list_errors() ?>

                <div class="col-12 col-sm-12">

                    <!-- Başlık giriş alanı -->
                    <label class="mb-4" for="baslik"
                        style="font-size: 25px; color: black; font-weight: bold;">Başlık</label>
                    <input type="text" class="form-control border-0" id="baslik" name="baslik"
                        value="<?= esc($veri['baslik']) ?>" style="height: 55px;">

                </div>
                <div class="col-12 col-sm-12">

                    <!-- İçerik giriş alanı -->
                    <label class="mb-4" for="icerik" style="color: black; font-weight: bold;">İçerik</label>
                    <textarea cols="10" class="form-control" id="icerik" name="icerik"
                        style="height: 55px;"><?= esc($veri['icerik']) ?></textarea>

                </div>
                <div class="col-12">

                    <!-- Güncelleme butonu -->
                    <button class="btn btn-primary w-100 py-3" type="submit" name="gonder">Güncelle</button>

                </div>
            </div>
        </form>
    </div>
</div>