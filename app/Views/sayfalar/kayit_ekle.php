<div class="col-lg-8 wow fadeInUp" >
    <h1 class="mb-3">Kayıt Ekleme</h1>

    <div class="bg-light rounded h-100 d-flex align-items-center p-5">

        <form action="<?= base_url('kayit_ekle') ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>

            <div class="row g-3">
                <?= validation_list_errors() ?>
                <div class="col-12 col-sm-12">
                    <label class="mb-4" for="baslik"
                           style="font-size: 25px; color: black; font-weight: bold;">Başlık</label>
                    <input type="text" class="form-control border-0" id="baslik" name="baslik"
                           placeholder="Kullanıcı Adı" style="height: 55px;">
                </div>
                <div class="col-12 col-sm-12">
                    <label class="mb-4" for="icerik"
                           style="font-size: 25px; color: black; font-weight: bold;">İçerik</label>
                    <textarea cols="10" class="form-control border-0" id="icerik" name="icerik"
                              placeholder="İçerik" style="height: 55px;"></textarea>
                </div>
                <div class="col-12 col-sm-12">
                    <label class="mb-4" for="resim"
                           style="font-size: 25px; color: black; font-weight: bold;">Resim</label>
                    <input type="file" class="form-control border-0" id="resim" name="resim"
                           placeholder="Resim" style="height: 55px;">
                </div>
                <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" type="submit" name="gonder">Kayıt Ekle
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
