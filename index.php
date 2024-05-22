<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist\css\bootstrap.css">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist\js\bootstrap.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="assets\logo.png" type="image/x-icon">
    <title>ESSKAY FOODS | Quality. Tradition. Excellence.</title>
</head>

<body>


    <?php
    include 'navbar.php'
        ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets\banner2.jpg" class="d-block w-100" alt="...">
                <div class="banner-caption">
                    <h1><span>Esskay</span> Foods: <br>Where Taste Meets <br>Tradition</h1>
                    <p>Experience the fusion of flavor and heritage at Esskay Foods, where every bite is a journey into
                        tradition.</p>
                    <a href="products.php" class="btn banner-btn">Shop Now<i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets\banner1.jpg" class="d-block w-100" alt="...">
                <div class="banner-caption">
                    <h1><span>Esskay</span> Foods: <br>Blending Flavor with <br>Heritage</h1>
                    <p>Experience a culinary journey where authentic flavors and rich heritage come together.</p>
                    <a href="products.php" class="btn banner-btn">Shop Now<i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets\banner3.jpg" class="d-block w-100" alt="...">
                <div class="banner-caption">
                    <h1><span>Esskay</span> Foods: <br>Tradition Infused with <br>Flavor</h1>
                    <p>Savor the taste of tradition in every bite with our expertly crafted recipes.</p>
                    <a href="products.php" class="btn banner-btn">Shop Now<i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- about us section -->

    <section class="aboutus">
    <div class="aboutus-container container-lg">
        <div class="aboutus-flex row">
            <div class="about-img col-md-6 d-flex justify-content-center align-items-center">
                <img src="assets/aboutus.png" alt="About Us Image" class="animate-image">
            </div>
            <div class="about-details col-md-6 animate-text">
                <div class="about-section-header">
                    <span>About Us</span>
                    <h6>ESSKAY FOODS: Delivering authentic South Indian flavors to your doorstep.</h6>
                    <p>
                        Welcome to ESSKAY FOODS, your one-stop destination for authentic South Indian delicacies delivered right to your doorstep. 
                        At ESSKAY FOODS, we are passionate about bringing you the finest quality products that capture the essence of traditional South Indian cuisine.
                        Our journey began with a simple vision: to share the rich flavors and culinary heritage of South India with food lovers everywhere.
                    </p>
                    <a href="about.php" class="btn about-us-btn">Read More<i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>