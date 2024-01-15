<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <!-- Footer içeriği için padding (iç boşluk) ayarlanmış container -->
        <div class="row g-5">
            <!-- Sütunlar arasında 5 birim boşluk olan bir satır -->
            <div class="col-lg-3 col-md-6">
                <!-- İlk sütun: Adres ve iletişim bilgileri -->
                <h5 class="text-light mb-4">Address</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>10900 Gönen, Balıkesir, Türkiye</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+090 012 345 6789</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social rounded-circle" href=""><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social rounded-circle" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social rounded-circle" href=""><i
                            class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social rounded-circle" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Servisler</h5>
                <p class="btn btn-link"><?=anchor(base_url('ozellikler'),'Kardiyoloji');?></p>
                <a class="btn btn-link" href="">Göğüs Hastalıkları</a>
                <a class="btn btn-link" href="">Nöroloji</a>
                <a class="btn btn-link" href="">Ortopedi</a>
                <a class="btn btn-link" href="">Genel Cerrahi</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Hızlı Bağlantılar</h5>
                <p class="btn btn-link"><?=anchor(base_url('about'),'Hakkımızda');?></p>
                <p class="btn btn-link"><?=anchor(base_url('iletisim'),'İletişim');?></p>
                <p class="btn btn-link"><?=anchor(base_url('ozellikler'),'Hizmetlerimiz');?></p>
                <p class="btn btn-link">Şartlar ve Koşullar</p>
                <p class="btn btn-link">Destek</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Haber Bülteni</h5>
                <p>Klinik, son teknoloji tıbbi olanaklarla donatılmış, uzman kadrosuyla kişiye özel sağlık çözümleri
                    sunuyor. Hasta odaklı yaklaşımı ve kaliteli hizmet anlayışıyla sağlıkta güvenilir bir adres.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Email Adresiniz">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Kayıt
                        Olun
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Klinik</a>, Tüm Hakları Saklıdır.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>assets/lib/wow/wow.min.js"></script>
<script src="<?=base_url()?>assets/lib/easing/easing.min.js"></script>
<script src="<?=base_url()?>assets/lib/waypoints/waypoints.min.js"></script>
<script src="<?=base_url()?>assets/lib/counterup/counterup.min.js"></script>
<script src="<?=base_url()?>assets/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?=base_url()?>assets/lib/tempusdominus/js/moment.min.js"></script>
<script src="<?=base_url()?>assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="<?=base_url()?>assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="<?=base_url()?>assets/js/main.js"></script>
</body>

</html>