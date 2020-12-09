<?php include_once('inc/header.php') ?>

<body>
    <?php include_once('inc/nav.php'); ?>

    <?php if ($uri == '/'): ?>
    <div id="slides" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/public/img/background.jpg" alt="Niebo">
                <div class="carousel-caption">
                    <h1 class="display-2">Tutorial CMS</h1>
                    <h3>Layout dla ćwiczenia CMS</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/public/img/background2.jpg" alt="Las">
                <div class="carousel-caption">
                    <h1 class="display-2">Lorem ipsum dolor</h1>
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/public/img/background3.jpg" alt="Burza">
                <div class="carousel-caption">
                    <h1 class="display-2">Lorem ipsum dolor</h1>
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit</h3>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php include_once('inc/content.php'); ?>
    <footer>
        <div class="container-fluid py-5 bg-dark text-light">
            <div class="row text-center">
                <div class="col-md-6">
                    <p>Tutorial CMS</p>
                    <hr class="light">
                    <p>+48 000-000-000</p>
                    <p>email@mojemail.com</p>
                    <p>Nazwa ulicy</p>
                    <p>Kod-pocztowy, miasto, województwo</p>
                </div>
                <div class="col-md-6">
                    <hr class="light">
                    <p>Godziny pracy</p>
                    <hr class="light">
                    <p>Pon-Pt: 8:00 - 16:00</p>
                    <p>Sob: 10:00 - 14:00</p>
                </div>
                <div class="col-12">
                    <hr class="light-last">
                    <h3>&copy; tutorialcms.pl</h3>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>