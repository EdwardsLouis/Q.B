<?php
    $servidor="localhost";
    $usuario="id15474894_qb";
    $clave="Z1e7f8|TB==J^99<";
    $baseDeDatos="id15474894_qbb";

    $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

    if(!$enlace){
        echo"Error en la conexion con el servidor";
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> Quick Booking </title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="/">Quick Booking</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Platillos</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Conocenos</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading"> ¡ Bienvenido a nuestro sistema !</div>
                <div class="masthead-heading text-uppercase">Quick Booking</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Ver mas</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Servicios</h2>
                    <h3 class="section-subheading text-muted">Ofrecemos mostrar los platillos y cocteles que esten en tu restaurante, ademas de ayudarte con un sistema de reservaciones en tiempo real.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-stop fa-stack-2x text-primary"></i>
                            <i class="fas fa-utensils fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Platillos</h4>
                        <p class="text-muted">Contamos con una muestra de los platillos que estes ofreciendo en tu restaurante, mostrandoles una descripcion de lo que tiene cada platillo. </p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-stop fa-stack-2x text-primary"></i>
                            <i class="fas fa-user-clock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Reservaciones</h4>
                        <p class="text-muted">Te ofrecemos un sistema de reservaciones para que tu restaurante obtenga mas clientes, por medio de un sitio web en el que puedas reservar una mesa en la fecha y hora que tu elijas.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-stop fa-stack-2x text-primary"></i>
                            <i class="fas fa-cocktail fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Cocteles</h4>
                        <p class="text-muted">Ofrecemos servicios de muestra de la gran variedad de contecteles que tengas en tu restaurante con una breve descripcion de cada uno.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Plantillos</h2>
                    <h3 class="section-subheading text-muted">Algunos ejemplos de muestras de como se mostrarian sus platillos o cocteles.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/01-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Enchiladas</div>
                                <div class="portfolio-caption-subheading text-muted">Descripcion</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/02-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Fajitas</div>
                                <div class="portfolio-caption-subheading text-muted">Descripcion</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/03-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Burritos</div>
                                <div class="portfolio-caption-subheading text-muted">Descripcion</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/04-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Pozole</div>
                                <div class="portfolio-caption-subheading text-muted">Descripcion</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/05-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Tacos de asada y de adobada</div>
                                <div class="portfolio-caption-subheading text-muted">Descripcion</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/06-thumbnail.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Huarache</div>
                                <div class="portfolio-caption-subheading text-muted">Descripcion</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Conocenos</h2>
                    <h3 class="section-subheading text-muted">Quienes somos...</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2016-2017</h4>
                                <h4 class="subheading">Iniciamos con una idea</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Hablamos de hacer un programa en el que se puedan hacer una reservacion de una mesa en el restaurante
                                favorito de la persona.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2018</h4>
                                <h4 class="subheading">Empezamos a planificar</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Como seria el marketing para nuestro servicio y como nos dariamos a conocer en el estado en el que estamos. </p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2019</h4>
                                <h4 class="subheading">Iniciamos</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Establecimos un administracion de como serian los roles dentro de nuestro proyecto y empezamos con nuestro proyecto y al dia de hoy seguimos trabajando en ello. </p></div>
                        </div>
                    </li>

                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Te ayudamos
                                <br />
                                a mejorar
                                <br />
                                tu negocio!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contactanos</h2>
                    <h3 class="section-subheading text-muted">Envianos un mensaje para saber mas de nuestros servicios.</h3>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate" method="POST">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" name ="name" type="text" placeholder="Nombre *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="email" type="email" placeholder="Correo *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" name ="phone" type="tel" placeholder="Telefono *" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" name ="message" placeholder="Mensaje *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">ENVIAR</button>
                    </div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left"> QUICK BOOKING 2020</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Platillo #1</h2>
                                    <p class="item-intro text-muted">Platillos mexicanos</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/01-full.jpg" alt="" />
                                    <p>La enchilada es el matrimonio básico entre la tortilla de maíz, el chile y el queso y a partir de allí, cualquier cosa es bienvenida a la unión como relleno o guarnición.</p>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Platillo #2</h2>
                                    <p class="item-intro text-muted">Platillo mexicano.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/02-full.jpg" alt="" />
                                    <p>Las sabrosas fajitas de carne asada pasaron a hacerse también con pollo y otras carnes y se comen salseadas sobre una tortilla de maíz o de trigo.</p>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Platillo #3</h2>
                                    <p class="item-intro text-muted">Descripcion.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/03-full.jpg" alt="" />
                                    <p>El burrito la tortilla es de harina de trigo y va enrollada en una especie de cilindro, que va relleno de carne asada picada y frijoles fritos. Se puede sustituir la carne, pero los frijoles no pueden faltar, este es uno de los principales nombres de comidas típicas de México.</p>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Platillo #4</h2>
                                    <p class="item-intro text-muted">Descripcion</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/04-full.jpg" alt="" />
                                    <p>El pozole es el caldo nacional mexicano y cada cocinera familiar tiene su secreto con el que pretende distinguirlo de cualquier otro del vecindario.
                                        El ingrediente más representativo del pozole es el grano de maíz tierno de la variedad cacahuazintle, 
                                        que es nativa de México y tiene una apariencia blanca, dando al platillo la denominación complementaria de pozole blanco, que es el más popular.</p>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Platillo #5</h2>
                                    <p class="item-intro text-muted">Descripcion.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/05-full.jpg" alt="" />
                                    <p>¿Qué sería de los mexicanos sin los tacos? La popular tortilla de maíz admite el relleno que sea, desde cualquier tipo de carne o pescado, 
                                        hasta todas las clases de quesos y granos y unas cuantas variedades de vegetales, siendo infaltable el chile.</p>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Platillo #6</h2>
                                    <p class="item-intro text-muted">Descripcion.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/06-full.jpg" alt="" />
                                    <p>La sandalia llamada huarache fue creada por los tarascos y confeccionada con algodón hasta que los conquistadores trajeron el cuero bovino.
                                        A semejanza del calzado nació su tocaya, la gruesa tortilla de maíz que por su forma recuerda a la sandalia indígena. 
                                        El huarache lleva una variada cubierta, que puede incluir  frijoles, queso, carnes y vegetales.</p>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

<?php
if(ssss($_POST['registrarse'])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone =$_POST["phone"];
    $message=$_POST["message"];
    

    $insertarDatos = "INSERT INTO qb VALUES(
                                                                                                '$name',
                                                                                                '$email',
                                                                                                '$phone',
                                                                                                '$message')";
    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

    if(!$ejecutarInsertar){
        echo"Error En la linea de sql";
    }
}
?>
