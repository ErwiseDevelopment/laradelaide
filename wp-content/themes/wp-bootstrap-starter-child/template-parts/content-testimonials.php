<section class="u-bg-folk-extra-light-gray py-5">

    <div class="container">

        <div class="row">

            <div class="col-12 py-5">

                <h2 class="c-title-pattern u-font-weight-semibold text-center u-color-folk-dark-blue mb-5 pb-5">
                    Depoimentos
                </h2>

                <div class="row justify-content-center">

                    <!-- loop -->
                    <?php for( $i = 0; $i < 3; $i++ ) { ?>
                        <div class="col-md-6 col-lg-4 mt-5 mt-lg-0 pt-5 pt-lg-0">

                            <div class="card h-100 rounded-0">
                                
                                <div class="card-img d-flex justify-content-center mt-n5 mb-4">
                                    <img
                                    class="img-fluid"
                                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/icon-quote.png"
                                    alt="Ícon quote">
                                </div>

                                <div class="card-body pb-5">
                                    
                                    <p class="u-font-size-13 md:u-font-size-15 xxl:u-font-size-18 u-font-weight-regular text-center u-color-folk-aluminium">
                                        Aqui no Lar Adelaide sou muito 
                                        feliz, gosto de participar das 
                                        atividades de Terapia Ocupacional, 
                                        sou muito bem tratado por todos. 
                                        A Drª Fernanda, fisioterapeuta, é 
                                        bem atenciosa durante os 
                                        exercícios. E a religiosidade das 
                                        Irmãs é muito importante para mim.” 
                                    </p>

                                    <h6 class="u-font-size-15 xxl:u-font-size-18 u-font-weight-bold text-center u-color-folk-gray">
                                        Hóspede
                                    </h6>

                                    <p class="u-font-size-13 xxl:u-font-size-16 u-font-weight-regular text-center u-color-folk-aluminium">
                                        do Lar Adelaide
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- end loop -->
                </div>
            </div>
        </div>
    </div>
</section>