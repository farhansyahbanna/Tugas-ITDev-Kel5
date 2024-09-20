<?php
    require_once VIEWS . "partials/header.php";
    require_once VIEWS . "partials/navbar.php";
?>

    <section>
        <div class="container">
            <div class="row">
                <!-- text -->
                <div class="col-md-6">
                    <div class="tagline">
                        Where Every Product is a Statement of Your Individuality and Confidence.
                    </div>
                    <div class="button">
                        <a href="<?=BASEURL?>views/products/index.php" class="btn btn-primary">Get Product</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="<?=BASEURL?>/public/img/handsome-bearded-guy-posing-against-white-wall.jpg" alt="Product" width="560px" height="450px" style="border-radius: 30px;">
                </div>
            </div>
        </div>
    </section>
    <!-- setup section -->
    <section class="setup">
        <div class="container">
            <div class="text-header text-center">
                <h3>Get started quickly without the hassle</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="items text-center">
                <div class="row">
                    <div class="col-md-4">
                        <div class="icons">
                            <img src="<?=BASEURL?>/public/svg/icon-park--clothes-crew-neck.svg" alt="Icon1">
                        </div>
                        <div class="desc">
                            <h5>Find Your Product</h5>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore mollitia quidem aliquid voluptatibus aliquam error quis molestias, eos distincti.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icons">
                            <img src="<?=BASEURL?>/public/svg/solar--hand-money-linear (1).svg" alt="Icon2">
                        </div>
                        <div class="desc">
                            <h5>Buy & Chekout</h5>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore mollitia quidem aliquid voluptatibus aliquam error quis molestias, eos distincti.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icons">
                            <img src="<?=BASEURL?>/public/svg/iconoir--spark (2).svg" alt="Icon3">
                        </div>
                        <div class="desc">
                            <h5>Enjoy Your Product</h5>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore mollitia quidem aliquid voluptatibus aliquam error quis molestias, eos distincti.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- information section -->
    <section class="information">
        <div class="container">
            <div class="row info-1">
                <!-- Text -->
                <div class="col-md-6">
                    <div class="text-informaton">
                        <h5>Get More Product for Your Life</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex reiciendis et nostrum quo beatae ab sint</p>
                    </div>
                </div>
                <!-- Image -->
                <div class="col-md-6">
                    <img src="<?=BASEURL?>/public/img/still-life-with-classic-shirts-hanger.jpg" alt="Clothes" class="w-100" style="border-radius: 30px;">
                </div>
            </div>
            <div class="row info-2">
                <!-- Image -->
                <div class="col-md-6">
                    <img src="<?=BASEURL?>/public/img/still-life-with-classic-shirts-hanger (1).jpg" alt="Clothes" class="w-100" style="border-radius: 30px;">
                </div>
                <!-- Text -->
                <div class="col-md-6">
                    <div class="text-informaton">
                        <h5>Low Budget High Quality</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex reiciendis et nostrum quo beatae ab sint</p>
                    </div>
                </div>
                
            </div>
        </div>
    sc
    </section>

    <?php
    require_once VIEWS . "partials/footer.php";
    ?>
