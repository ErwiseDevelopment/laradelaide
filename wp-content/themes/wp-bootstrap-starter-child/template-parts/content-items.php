<section class="l-items pt-5">

    <div class="container">

        <div class="row">

            <div class="col-12 pb-5">

                <div class="row">

                    <!-- loop -->
                    <?php for( $i = 0; $i < 6; $i++ ) { ?>
                        <div class="col-6 col-md-4 col-lg-2">

                            <div class="card border-0">

                                <div class="card-img d-flex justify-content-center align-items-center">
                                    <img
                                    class="img-fluid"
                                    src="<?php echo get_home_url( null, '/wp-content/uploads/2022/07/circle.png' ) ?>"
                                    alt="Atendimento médico">
                                </div>

                                <div class="card-body px-0">
                                    <h6 class="u-font-size-15 xxl:u-font-size-18 u-font-weight-semibold text-center u-color-folk-gray">
                                        Atendimento
                                        médico
                                    </h6>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- end loop -->
                </div>
            </div>

            <div class="col-12">
                <hr>
            </div>
        </div>
    </div>      
</section>