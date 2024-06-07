<body>
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
            <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="container py-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Bizimle İletişime Geçin</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        <ol class="breadcrumb text-uppercase mb-0">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Anasayfa</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Sayfalar</a></li>
                            <li class="breadcrumb-item text-primary active" aria-current="page"
                                href="<?=base_url('iletisim')?>">İletisim</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Contact Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-4">
                            <div class="h-100 bg-light rounded d-flex align-items-center p-5">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                                    style="width: 55px; height: 55px;">
                                    <i class="fa fa-map-marker-alt text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">Adres</p>
                                    <h5 class="mb-0">34744 Kadıköy, İstanbul, Türkiye</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="h-100 bg-light rounded d-flex align-items-center p-5">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                                    style="width: 55px; height: 55px;">
                                    <i class="fa fa-phone-alt text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">Şimdi Bizi Arayın</p>
                                    <h5 class="mb-0">+90 012 345 6789</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="h-100 bg-light rounded d-flex align-items-center p-5">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                                    style="width: 55px; height: 55px;">
                                    <i class="fa fa-envelope-open text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">Bize Mail Gönderin</p>
                                    <h5 class="mb-0">info@example.com</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="bg-light rounded p-5">
                                <p class="d-inline-block border rounded-pill py-1 px-4">Bizimle İletişime Geçin</p>
                                <h1 class="mb-4">Have Any Query? Please Contact Us!</h1>
                                <p class="mb-4">The contact form is currently inactive. Get a functional and working
                                    contact
                                    form
                                    with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code
                                    and
                                    you're
                                    done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                                <form>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="name"
                                                    placeholder="Your Name">
                                                <label for="name">Your Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="email"
                                                    placeholder="Your Email">
                                                <label for="email">Your Email</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="subject"
                                                    placeholder="Subject">
                                                <label for="subject">Subject</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Leave a message here"
                                                    id="message" style="height: 100px"></textarea>
                                                <label for="message">Mesaj</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit">Mesaj
                                                Gönder</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="h-100" style="min-height: 400px;">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48192.2595167296!2d29.021853571809945!3d40.98112566648365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac790b17ba89d%3A0xd2d24ea0437a7ee2!2zS2FkxLFrw7Z5L8Swc3RhbmJ1bA!5e0!3m2!1str!2str!4v1717694466769!5m2!1str!2str"
                                        width="600" height="680" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact End -->

</body>