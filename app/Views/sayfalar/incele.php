<!-- Appointment Start -->
<div>
    <div class="container-xxl py-3">
        <div class="container">

            <!-- Login start -->
            <div class="row g-5">

                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.5s">
                    <h1 class="mb-4"><?=esc($veri['baslik'])?></h1>

                    <form>
                        <!-- Form elementi burada başlıyor -->

                        <div class="bg-light rounded h-100 d-flex align-items-center p-5">

                            <div class="col-12 col-sm-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="<?=base_url('uploads/'.esc($veri['resim']))?>" class="img-fluid"
                                            alt="Resim">
                                    </div>
                                    <div class="col-md-6">
                                        <p><?=esc($veri['icerik'])?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form><!-- Form elementi burada kapanıyor -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->