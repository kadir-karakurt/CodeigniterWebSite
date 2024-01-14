<!-- Header Start -->
<div class="container-fluid header bg-primary p-0 mb-5">
    <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
        <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
            <h1 class="display-4 text-white mb-5">Sağlık Olmak Tüm Mutluluğun Kökenidir</h1>
            <div class="row g-4">
                <div class="col-sm-4">
                    <div class="border-start border-light ps-4">
                        <h2 class="text-white mb-1" data-toggle="counter-up">123</h2>
                        <p class="text-light mb-0">Uzman Doktorlar</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="border-start border-light ps-4">
                        <h2 class="text-white mb-1" data-toggle="counter-up">1234</h2>
                        <p class="text-light mb-0">Tıbbi Malzemeler</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="border-start border-light ps-4">
                        <h2 class="text-white mb-1" data-toggle="counter-up">12345</h2>
                        <p class="text-light mb-0">Toplam Hasta Sayısı</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="owl-carousel header-carousel">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="<?= base_url() ?>assets/img/carousel-1.jpg" alt="">
                    <div class="owl-carousel-text">
                        <h1 class="display-1 text-white mb-0">Kardiyoloji</h1>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="<?= base_url() ?>assets/img/carousel-2.jpg" alt="">
                    <div class="owl-carousel-text">
                        <h1 class="display-1 text-white mb-0">Nöroloji</h1>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="<?= base_url() ?>assets/img/carousel-3.jpg" alt="">
                    <div class="owl-carousel-text">
                        <h1 class="display-1 text-white mb-0">Genel Cerrahi</h1>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Header End -->


<!-- Team Start -->
<?php
$displayedItems = array(); // Görüntülenen öğeleri izlemek için bir dizi oluşturuyoruz

if (isset($kayitlar) && count($kayitlar) > 0) {
    echo '<div class="container-xxl py-5">'; // Büyük bir container başlatıyoruz
    echo '<div class="container">'; // İç container başlatıyoruz
    echo '<div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">';
    echo ' <p class="d-inline-block border rounded-pill py-1 px-4">Doktorlar</p>'; // Başlık ekliyoruz
    echo '<h1>Tecrübeli Doktorlarımız</h1>'; // Başlık ekliyoruz
    echo '</div>'; // Başlık divini kapatıyoruz
    echo '<div class="row g-4">'; // Bir satır başlatıyoruz

    foreach ($kayitlar as $item) {
        // Şu anki öğenin daha önce gösterilip gösterilmediğini kontrol ediyoruz
        if (!in_array($item['baslik'], $displayedItems)) {
            $displayedItems[] = $item['baslik']; // Gösterilen öğeyi diziye ekliyoruz

            echo '<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">'; // Grid kolonu başlatıyoruz
            echo '<div class="team-item position-relative rounded overflow-hidden">'; // Doktor kartı başlatıyoruz
            echo '<div class="overflow-hidden">'; // Resim bölümünü başlatıyoruz
            echo '<img class="img-fluid" src="'.base_url("uploads/").$item['resim'].'" alt="">'; // Doktor resmi ekliyoruz
            echo '</div>'; // Resim bölümünü kapatıyoruz
            echo '<div class="team-text bg-light text-center p-4">'; // Doktor metin bölümünü başlatıyoruz
            echo '<h5>'.$item['baslik'].'</h5>'; // Doktorun adını ekliyoruz
            echo '<p class="text-primary">'.word_limiter($item['icerik'], 1).'</p>'; // Doktor hakkında kısa bir açıklama ekliyoruz
            echo '<div class="team-social text-center">'; //Detay butonunun bölümünü başlatıyoruz
            echo '<a href="'.base_url('incele/'.$item['url']).'" class="btn btn-primary">Detay</a>';
            echo '</div>'; // Detay butonunun bölümünü kapatıyoruz
            echo '</div>'; // Doktor metin bölümünü kapatıyoruz

            echo '</div>'; // Doktor kartını kapatıyoruz
            echo '</div>'; // Grid kolonunu kapatıyoruz
        }
    }
    echo '</div>'; // Satır divini kapatıyoruz
    echo '</div>'; // Container divini kapatıyoruz
    echo '</div>'; // Büyük container divini kapatıyoruz
}
?>


<!-- Team End -->


<!-- Appointment Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="d-inline-block border rounded-pill py-1 px-4">Appointment</p>
                <h1 class="mb-4">Doktorumuzla görüşmek için randevu alın</h1>
                <p class="mb-4">Klinigimizden çevrimiçi randevu alabilir veya web sitemizden üzerinden randevu talebi
                    oluşturabilirsiniz.</p>
                <div class="bg-light rounded d-flex align-items-center p-5 mb-4">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                        style="width: 55px; height: 55px;">
                        <i class="fa fa-phone-alt text-primary"></i>
                    </div>
                    <div class="ms-4">
                        <p class="mb-2">Bizi Şimdi Ara</p>
                        <h5 class="mb-0">+90 123 456 7890</h5>
                    </div>
                </div>
                <div class="bg-light rounded d-flex align-items-center p-5">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                        style="width: 55px; height: 55px;">
                        <i class="fa fa-envelope-open text-primary"></i>
                    </div>
                    <div class="ms-4">
                        <p class="mb-2">Bizi Şimdi Ara</p>
                        <h5 class="mb-0">clinical@outlook.com</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="bg-light rounded h-100 d-flex align-items-center p-5">
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Adınız"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control border-0" placeholder="Email Adresiniz"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Cep Telefonunuz"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <select class="form-select border-0" style="height: 55px;">
                                    <option selected>Doktor Seçiniz</option>
                                    <option value="1">Doktor 1</option>
                                    <option value="2">Doktor 2</option>
                                    <option value="3">Doktor 3</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="date" id="date" data-target-input="nearest">
                                    <input type="text" class="form-control border-0 datetimepicker-input"
                                        placeholder="Tarih Seçiniz" data-target="#date" data-toggle="datetimepicker"
                                        style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="time" id="time" data-target-input="nearest">
                                    <input type="text" class="form-control border-0 datetimepicker-input"
                                        placeholder="Tarih Seçiniz" data-target="#time" data-toggle="datetimepicker"
                                        style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0" rows="5"
                                    placeholder="Probleminizi Açıklayın"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Randevu Alınız</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded-pill py-1 px-4">Referans</p>
            <h1>Hastalarımız Ne Diyor?</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                    src="<?= base_url() ?>assets/img/testimonial-1.jpg" style="width: 100px; height: 100px;">
                <div class="testimonial-text rounded text-center p-4">
                    <p>Kliniğin profesyonelliği ve hastalara olan yaklaşımı beni etkiledi. Doktorlar, tedavi sürecinde
                        adım adım beni bilgilendirdiler ve her zaman sorularıma açık cevaplar verdiler. Kliniğin
                        hijyenik ortamı ve modern ekipmanları güven vericiydi. Burada aldığım hizmetten çok memnun
                        kaldım, teşekkür ederim</p>
                    <h5 class="mb-1">Hasta Adı</h5>
                    <span class="fst-italic">Meslek</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                    src="<?= base_url() ?>assets/img/testimonial-2.jpg" style="width: 100px; height: 100px;">
                <div class="testimonial-text rounded text-center p-4">
                    <p>Kliniğin sağladığı hizmetten son derece memnun kaldım. Doktorlar çok ilgili ve profesyonel,
                        benimle özenle ilgilendiler. Tedavi sürecim boyunca her adımda beni bilgilendirdiler ve
                        rahatlatıcı bir atmosfer sağladılar.</p>
                    <h5 class="mb-1">Hasta Adı</h5>
                    <span class="fst-italic">Meslek</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                    src="<?= base_url() ?>assets/img/testimonial-3.jpg" style="width: 100px; height: 100px;">
                <div class="testimonial-text rounded text-center p-4">
                    <p>Hastalarla olan empati ve samimiyetiyle doktorlar gerçekten öne çıkıyor. Kliniğin sunduğu hizmet
                        kalitesi harika, randevu süreci oldukça kolay ve hızlıydı. Burada kendimi güvende hissettim ve
                        her sorumla ilgilendiler.</p>
                    <h5 class="mb-1">Hasta Adı</h5>
                    <span class="fst-italic">Meslek</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->