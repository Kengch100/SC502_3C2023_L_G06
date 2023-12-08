<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SPA Center - Beauty & Spa HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="./assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="./assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="./assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>
    <!-- Customized Bootstrap Stylesheet -->
    <link href="./assets/css/style.css" rel="stylesheet">
    <link href="./assets/css/carrito.css" rel="stylesheet">

</head>

<body>
    <!-- Topbar Start -->
<?php include 'header.php'?>
    <!-- Navbar End -->

    <div id="carrito-icon" onclick="mostrarCarrito()">
        <div class="fas fa-shopping-cart"></div>
        <i id="carrito-contador">0</i>
    </div>

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid bg-jumbotron" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h3 class="text-white display-3 mb-4">Productos y Servicios</h3>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Inicio</a></p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Service Start -->
    <div class="container-fluid px-0 py-5 my-5">
        <div class="row mx-0 justify-content-center text-center">
            <div class="col-lg-6">
                <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Servicios</h6>
                <h1>Productos y servicios</h1>
            </div>
        </div>
        <div class="owl-carousel service-carousel" id="productos">
        <div class="service-item position-relative">
                <img class="img-fluid" src="./assets/img/corte1.jpg" alt="">
                <div class="service-text text-center producto" data-nombre="Corte de cabello" data-precio="20.00">
                    <h4 class="text-white font-weight-medium px-3">Corte de cabello</h4>
                    <p class="text-white px-3 mb-3">Elitr labore sit dolor erat est lorem diam sea ipsum diam dolor duo sit ipsum</p>
                    <div class="w-100 bg-white text-center p-4">
                        <button class="btn btn-primary" href="">Agendar</button>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="./assets/img/service-1.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Tratamiento Facial</h4>
                    <p class="text-white px-3 mb-3">Elitr labore sit dolor erat est lorem diam sea ipsum diam dolor duo sit ipsum</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary"  >Agendar</a>
                    </div>
                </div>
            </div>

            <div class="service-item position-relative">
                <img class="img-fluid" src="./assets/img/producto1.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Productos para el cabello</h4>
                    <i>2000</i>
                    <p class="text-white px-3 mb-3">Elitr labore sit dolor erat est lorem diam sea ipsum diam dolor duo sit ipsum</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" onclick="agregarAlCarrito('Productos para el cabello', 20.00)">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="service-item position-relative">
                <img class="img-fluid" src="./assets/img/producto2.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Skin Care</h4>
                    <i>3000</i>
                    <p class="text-white px-3 mb-3">Elitr labore sit dolor erat est lorem diam sea ipsum diam dolor duo sit ipsum</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" onclick="agregarAlCarrito('Skin Care', 30.00)">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="./assets/img/producto3.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Minoxidil para Hombre</h4>
                    <i>3000</i>
                    <p class="text-white px-3 mb-3">Elitr labore sit dolor erat est lorem diam sea ipsum diam dolor duo sit ipsum</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" onclick="agregarAlCarrito('Minoxidil para Hombre', 30.00)">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Testimonial Start -->
    <!-- Testimonial End -->


    <!-- Footer Start -->
<?php include 'footer.php'?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/lib/easing/easing.min.js"></script>
    <script src="./assets/lib/waypoints/waypoints.min.js"></script>
    <script src="./assets/lib/counterup/counterup.min.js"></script>
    <script src="./assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="./assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="./assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="./assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="./assets/mail/jqBootstrapValidation.min.js"></script>
    <script src="./assets/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/citas.js"></script>
</body>

</html>