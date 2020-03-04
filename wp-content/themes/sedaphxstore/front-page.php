<?php get_header(); ?>

<div id="main" style="background-image: url('<?= get_template_directory_uri() ?>/images/bg-1.jpg');">
    <div class="banner container position-relative">
        <div class="row">
            <div class="col-md-6">
                <div class="vertical-align">
                    <h1 class="mb-4">Jadikan Pelindung Smartphone <span class="tiny-font">mu</span> lebih menarik</h1>
                    <p class="mb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda aliquid, neque cumque et velit eos ratione numquam nihil animi sit aut saepe, voluptates iusto non natus corporis, recusandae eligendi tempore.
                    </p>
                    <button class="btn btn-outline-dark pl-3 pr-3">Order Now</button>
                </div>
            </div>
            <div class="col-md-2 offset-md-2">
                <img src="<?= get_template_directory_uri() ?>/images/product1.png" alt="" class="wow slideInRight img-responsive img" data-wow-delay=".2s">
            </div>
        </div>
        <a href="#features" class="position-absolute go-down horizontal-align bounce-animate"><i class="fas fa-chevron-down fa-2x"></i></a>
    </div>
</div>

<div id="features">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="<?= get_template_directory_uri() ?>/images/product1.png" alt="" class="wow pulse img" data-wow-delay=".2s">
            </div>
            <div class="col-md-8">
                <h1 class="mb-4">Design Semau<span class="tiny-font">mu</span></h1>
                <p class="mb-5">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque cum dolore a architecto cupiditate, alias beatae omnis, unde eius cumque est. Consequatur voluptas laudantium harum expedita amet mollitia. Voluptatibus, vitae.
                </p>
                <div class="row">
                    <div class="col-md-8">
                        <div class="wow slideInLeft"><i class="fas fa-shipping-fast fa-3x ml-5"></i></div>
                        <h4 class="mb-4">Proses Cepat Diantar Kerumah<span class="tiny-font">mu</span></h4>
                        <p class="mb-0">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque cum dolore a architecto cupiditate, alias beatae omnis, unde eius cumque est. Consequatur voluptas laudantium harum expedita amet mollitia. Voluptatibus, vitae.
                        </p>    
                    </div>
                    <div class="col-md-4">
                        <img src="<?= get_template_directory_uri() ?>/images/product1.png" alt="" class="wow pulse img" data-wow-delay=".2s">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="products">
    <div>
        <h1 class="text-center mb-4">Products</h1>
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item active"><a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-home" aria-selected="true">All</a></li>
            <li class="nav-item"><a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-couples" role="tab" aria-controls="pills-home" aria-selected="true">Couples</a></li>
            <li class="nav-item"><a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-cool" role="tab" aria-controls="pills-home" aria-selected="true">Cool</a></li>
            <li class="nav-item"><a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-others" role="tab" aria-controls="pills-home" aria-selected="true">Others</a></li>
        </ul>
        <div class="tab-content mt-5" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                    <div class="col-md-3">
                        <div class="box-item mb-3 wow slideInRight" data-wow-delay=".2s">
                            <div class="img-item text-center">
                                <img src="<?= get_template_directory_uri() ?>/images/product1.png" alt="">
                                <div class="description-item">
                                    Back Case Just Do It
                                </div>
                                <div class="price-item">
                                    Mulai Rp 10.000,-
                                </div>
                            </div>
                        </div>
                        <div class="box-item wow slideInLeft" data-wow-delay=".2s">
                            <div class="img-item text-center">
                                <img src="<?= get_template_directory_uri() ?>/images/product1.png" alt="">
                                <div class="description-item">
                                    Back Case Just Do It
                                </div>
                                <div class="price-item">
                                    Mulai Rp 10.000,-
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box-item centered wow slideInUp" data-wow-delay=".2s">
                            <div class="img-item text-center">
                                <img src="<?= get_template_directory_uri() ?>/images/product1.png" alt="">
                                <div class="description-item">
                                    Back Case Just Do It
                                </div>
                                <div class="price-item">
                                    Mulai Rp 10.000,-
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-item mb-3 wow slideInRight" data-wow-delay=".2s">
                            <div class="img-item text-center">
                                <img src="<?= get_template_directory_uri() ?>/images/product1.png" alt="">
                                <div class="description-item">
                                    Back Case Just Do It
                                </div>
                                <div class="price-item">
                                    Mulai Rp 10.000,-
                                </div>
                            </div>
                        </div>
                        <div class="box-item wow slideInLeft" data-wow-delay=".2s">
                            <div class="img-item text-center">
                                <img src="<?= get_template_directory_uri() ?>/images/product1.png" alt="">
                                <div class="description-item">
                                    Back Case Just Do It
                                </div>
                                <div class="price-item">
                                    Mulai Rp 10.000,-
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show" id="pills-couples" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row">
                    <div class="col-md-3">
                        <div class="box-item mb-3 wow slideInRight" data-wow-delay=".2s">
                            <div class="img-item text-center">
                                <img src="<?= get_template_directory_uri() ?>/images/product1.png" alt="">
                                <div class="description-item">
                                    Back Case Just Do It
                                </div>
                                <div class="price-item">
                                    Mulai Rp 10.000,-
                                </div>
                            </div>
                        </div>
                        <div class="box-item wow slideInLeft" data-wow-delay=".2s">
                            <div class="img-item text-center">
                                <img src="<?= get_template_directory_uri() ?>/images/product1.png" alt="">
                                <div class="description-item">
                                    Back Case Just Do It
                                </div>
                                <div class="price-item">
                                    Mulai Rp 10.000,-
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box-item centered wow slideInUp" data-wow-delay=".2s">
                            <div class="img-item text-center">
                                <img src="<?= get_template_directory_uri() ?>/images/product1.png" alt="">
                                <div class="description-item">
                                    Back Case Just Do It
                                </div>
                                <div class="price-item">
                                    Mulai Rp 10.000,-
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-item mb-3 wow slideInRight" data-wow-delay=".2s">
                            <div class="img-item text-center">
                                <img src="<?= get_template_directory_uri() ?>/images/product1.png" alt="">
                                <div class="description-item">
                                    Back Case Just Do It
                                </div>
                                <div class="price-item">
                                    Mulai Rp 10.000,-
                                </div>
                            </div>
                        </div>
                        <div class="box-item wow slideInLeft" data-wow-delay=".2s">
                            <div class="img-item text-center">
                                <img src="<?= get_template_directory_uri() ?>/images/product1.png" alt="">
                                <div class="description-item">
                                    Back Case Just Do It
                                </div>
                                <div class="price-item">
                                    Mulai Rp 10.000,-
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show" id="pills-cool" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row">
                    <div class="col-md-3">
                        <div class="box-item mb-3 wow slideInRight" data-wow-delay=".2s">
                            <div class="img-item text-center">
                                <img src="<?= get_template_directory_uri() ?>/images/product1.png" alt="">
                                <div class="description-item">
                                    Back Case Just Do It
                                </div>
                                <div class="price-item">
                                    Mulai Rp 10.000,-
                                </div>
                            </div>
                        </div>
                        <div class="box-item wow slideInLeft" data-wow-delay=".2s">
                            <div class="img-item text-center">
                                <img src="<?= get_template_directory_uri() ?>/images/product1.png" alt="">
                                <div class="description-item">
                                    Back Case Just Do It
                                </div>
                                <div class="price-item">
                                    Mulai Rp 10.000,-
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box-item centered wow slideInUp" data-wow-delay=".2s">
                            <div class="img-item text-center">
                                <img src="<?= get_template_directory_uri() ?>/images/product1.png" alt="">
                                <div class="description-item">
                                    Back Case Just Do It
                                </div>
                                <div class="price-item">
                                    Mulai Rp 10.000,-
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-item mb-3 wow slideInRight" data-wow-delay=".2s">
                            <div class="img-item text-center">
                                <img src="<?= get_template_directory_uri() ?>/images/product1.png" alt="">
                                <div class="description-item">
                                    Back Case Just Do It
                                </div>
                                <div class="price-item">
                                    Mulai Rp 10.000,-
                                </div>
                            </div>
                        </div>
                        <div class="box-item wow slideInLeft" data-wow-delay=".2s">
                            <div class="img-item text-center">
                                <img src="<?= get_template_directory_uri() ?>/images/product1.png" alt="">
                                <div class="description-item">
                                    Back Case Just Do It
                                </div>
                                <div class="price-item">
                                    Mulai Rp 10.000,-
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show" id="pills-others" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row">
                    <div class="col-md-3">
                        <div class="box-item mb-3 wow slideInRight" data-wow-delay=".2s">
                            <div class="img-item text-center">
                                <img src="<?= get_template_directory_uri() ?>/images/product1.png" alt="">
                                <div class="description-item">
                                    Back Case Just Do It
                                </div>
                                <div class="price-item">
                                    Mulai Rp 10.000,-
                                </div>
                            </div>
                        </div>
                        <div class="box-item wow slideInLeft" data-wow-delay=".2s">
                            <div class="img-item text-center">
                                <img src="<?= get_template_directory_uri() ?>/images/product1.png" alt="">
                                <div class="description-item">
                                    Back Case Just Do It
                                </div>
                                <div class="price-item">
                                    Mulai Rp 10.000,-
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box-item centered wow slideInUp" data-wow-delay=".2s">
                            <div class="img-item text-center">
                                <img src="<?= get_template_directory_uri() ?>/images/product1.png" alt="">
                                <div class="description-item">
                                    Back Case Just Do It
                                </div>
                                <div class="price-item">
                                    Mulai Rp 10.000,-
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-item mb-3 wow slideInRight" data-wow-delay=".2s">
                            <div class="img-item text-center">
                                <img src="<?= get_template_directory_uri() ?>/images/product1.png" alt="">
                                <div class="description-item">
                                    Back Case Just Do It
                                </div>
                                <div class="price-item">
                                    Mulai Rp 10.000,-
                                </div>
                            </div>
                        </div>
                        <div class="box-item wow slideInLeft" data-wow-delay=".2s">
                            <div class="img-item text-center">
                                <img src="<?= get_template_directory_uri() ?>/images/product1.png" alt="">
                                <div class="description-item">
                                    Back Case Just Do It
                                </div>
                                <div class="price-item">
                                    Mulai Rp 10.000,-
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="order" class="wow pulse" data-wow-delay=".2s">
    <div class="container">
        <div class="row">
            <div class="col-5">
                <h1>Pesan Sekarang Juga!</h1>
                <p>Dapatkan promo menarik</p>
            </div>
            <div class="col-7">
                <p class="mb-0">
                    Dapatkan penawaran menarik dengan menggunakan kode promo
                </p>
                <div class="kode-promo mt-2">BACKCASEMURAH</div> <br>
                <a href="https://api.whatsapp.com/send?phone=6282325441718&text=&source=&data=" target="_blank" class="btn mt-3 btn-outline-dark"><i class="fab fa-whatsapp"></i> <span class="ml-2">Order Now</span></a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>