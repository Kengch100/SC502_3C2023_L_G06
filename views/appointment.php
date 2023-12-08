<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Salon de Belleza</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="Free HTML Templates" name="keywords" />
  <meta content="Free HTML Templates" name="description" />

  <!-- Favicon -->
  <link href=".../img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="../css/style.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>
</head>

<body>
  <!-- Topbar Start -->
  <?php include 'header.php'; ?>
  <!-- Navbar End -->

  <!-- Header Start -->
  <div class="jumbotron jumbotron-fluid bg-jumbotron" style="margin-bottom: 90px">
    <div class="container text-center py-5">
      <h3 class="text-white display-3 mb-4">Citas</h3>
      <div class="d-inline-flex align-items-center text-white">
      </div>
    </div>
  </div>
  <!-- Header End -->

  <!-- Appointment Start -->
  <div class="container-fluid py-5">
    <div class="container py-5">
      <div class="row mx-0 justify-content-center text-center">
        <div class="col-lg-6">
          <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">
            Agendar
          </h6>
          <h1 class="mb-5">Realizar cita</h1>
        </div>
      </div>
      <div class="row justify-content-center bg-appointment mx-0">
        <div class="col-lg-6 py-5">
          <div class="p-5 my-5" style="background: rgba(33, 30, 28, 0.7)">
            
            <form id="formularioCita">
              <div class="form-row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" id="nombre" name="nombre" class="form-control bg-transparent p-4"
                      placeholder="Your Name" required="required" />
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="email" id="correo" name="correo" class="form-control bg-transparent p-4"
                      placeholder="Your Email" required="required" />
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" id="telefono" name="telefono" class="form-control bg-transparent p-4"
                      placeholder="telefono" required="required" />
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <div class="date" id="date" data-target-input="nearest">
                      <input type="date" id="fecha" name="fecha"
                        class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Select Date"
                        data-target="#date" data-toggle="datetimepicker" />
                    </div>
                  </div>
                </div>


                <div class="col-sm-6">
                  <div class="time" id="timeInicio" data-target-input="nearest">
                    <input type="time" name="horaInicio" id="horaInicio" class="form-control bg-transparent p-4 timepicker-input"
                      placeholder="Select Time" data-target="#timeInicio" data-toggle="timepicker" />
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="time" id="timeFin" data-target-input="nearest" style="padding-bottom: 10px;">
                    <input type="time" name="horaFin" id="horaFin"
                      class="form-control bg-transparent p-4 timepicker-input" placeholder="Select Time"
                      data-target="#timeFin" data-toggle="timepicker" />
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <select class="custom-select bg-transparent px-4" id="servicio" name="servicio"
                      style="height: 47px">
                      <option value="Corte">Corte</option>
                      <option value="Planchado">Planchado</option>
                      <option value="Uñas">Uñas</option>
                      <option value="Tratamiento de cara">Tratamiento de cara</option>
                    </select>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <select class="custom-select bg-transparent px-4" id="id_estilista" name="id_estilista"
                      style="height: 47px">
                    </select>
                  </div>
                </div>

                <div class="col-sm-6" style="left: 25%;">
                  <button class="btn btn-primary btn-block" type="submit" style="height: 47px ">
                    Agendar
                  </button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Appointment End -->

  <!-- Open Hours Start -->
  <div class="container-fluid py-5">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-6" style="min-height: 500px">
          <div class="position-relative h-100">
            <img class="position-absolute w-100 h-100" src="../img/opening.jpg" style="object-fit: cover" />
          </div>
        </div>
        <div class="col-lg-6 pt-5 pb-lg-5">
          <div class="hours-text bg-light p-4 p-lg-5 my-lg-5">
            <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">
              Horarios
            </h6>
            <h1 class="mb-4">Mejor Tratamiento de cara</h1>
            <p>
              Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam
              dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr
              stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat
              sed diam duo
            </p>
            <ul class="list-inline">
              <li class="h6 py-1">
                <i class="far fa-circle text-primary mr-3"></i>Lun – Vie :
                9:00 AM - 6:00 PM
              </li>
              <li class="h6 py-1">
                <i class="far fa-circle text-primary mr-3"></i>Sábados : 9:00
                AM - 6:00 PM
              </li>
              <li class="h6 py-1">
                <i class="far fa-circle text-primary mr-3"></i>Domingos : Cerrado
              </li>
            </ul>
            <a href="../views/appointment.html" class="btn btn-primary mt-2">Agenda</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Open Hours End -->

  <!-- Footer Start -->
  <?php include 'footer.php'?>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/tempusdominus/js/moment.min.js"></script>
  <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

  <!-- Contact Javascript File -->
  <script src="../mail/jqBootstrapValidation.min.js"></script>
  <script src="../mail/contact.js"></script>


  <!--  -->
  <script src="../js/main.js"></script>
  <script src="../js/citas.js"></script>

</body>

</html>