<div class="py-5 py-lg-5 my-2 my-lg-5 bg-dark">
    <div class="container">
        <div class="row mx-0 mx-lg-5 g-4 g-lg-5">
            <div class="col-12 ">
                <div class="d-lg-flex justify-content-between align-items-center">
                    <div class="d-flex flex-column justify-content-center h-100 gap-2 col-lg-6  ">
                        <!-- <div class="text-white font-400 fs-6 text-uppercase font-space-grotesk">Contact Now</div> -->
                        <div class="font-700 text-light font-size-2xl -ls-0.5px lh-base">Get In Touch</div>
                        <div>
                            <p class="m-0 p-0  line-height-21px font-400 text-light opacity-0.7">
                                Feel free to get in touch with us. We are always open to discussing new projects, creative ideas or opportunities to be part of your visions.
                            </p>

                        </div>


                    </div>
                    <div>
                        <?php require_once __DIR__ . '/../admin/app/config/config.php';
                        $cbase = getAppInfo();
                        ?>
                        <a href="<?= $cbase["BASE"] ?>/contact.php" style="text-decoration:none">
                            <button class="btn contact-btn text-white" style="white-space:nowrap;background: linear-gradient(90deg, #076baa, #0099bd);" > CONTACT US</button>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>