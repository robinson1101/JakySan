<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>JakySan</title>
    <link rel="icon" href="img/IconoJakySan.png">
    <link rel="stylesheet" href="css/style.css">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top bg-dark navbar-dark">
        <div class="container-fluid">
            <img src="img/IconoJakySan.png" style="height: 70px;">
            <a class="navbar-brand" href="#">JakySan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contactanos</a>
                    </li>
                    <!-- 
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>-->
                </ul>
            </div>
                    <!--codigo para crear en contador de visitas-->
            <div class="float-right">
                <?php
                    $archivo= "archivo.txt";
                    $contador= intval(trim(file_get_contents($archivo)));

                    $file= fopen($archivo, "w");
                    fwrite($file,$contador+1 . PHP_EOL);

                    $file= fopen($archivo, "r");
                    echo '<div style="position:center;botton:5px;z-index:9;background: #273746;text-align:center;
                    padding:4px 5px;color: white; font-size: 14px;border-radius: 20px">' .fgets($file). '<span style="color:red;
                    font-family: Quicksand,sans-serif;font-size: 12px;text-align:center;">Visitantes</span>' . '</div>';
                    fclose($file);
                ?>
            </div>
        </div>
    </nav><br><br><br>
    <div class="container"> 
        <div class="row animate__animated animate__fadeInDown">
            <h1 class="display-3">Arepas <span>JakySan</span></h1>
            <p class="text-justify" style="color: white;" ;>
                En Jakysan, sabemos que las arepas son más que una simple comida, son un símbolo de identidad y
                tradición. Estamos comprometidos en mantener viva esa tradición, brindando a nuestros clientes una
                experiencia culinaria única y auténtica.
                Pero no solo nos enorgullece ofrecer las mejores arepas, también nos preocupamos por brindarte un
                servicio excepcional. Nuestro personal amable y atento está siempre dispuesto a asesorarte y
                recomendarte las mejores combinaciones de ingredientes para que tu experiencia en JakySan sea
                inolvidable.
                <!-- <p>
               /* <a class="btn btn-primary btn-lg" href="" role="button">Learn more</a>*/
            </p> -->

        </div>
        
        <div class="row text-left animate__animated animate__zoomIn" >
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mb-3">
                <div class="card text-white shadow bg-dark">
                    <div class="card-body">
                        <img src="img/img6.jpg" alt="" class="card-img-top">
                        <h5 class="card-title" style="text-align: center;text-decoration: underline;">Arepa de queso
                        </h5>
                        <p class="card-text">Arepa hecha de maiz organico rellena con queso doble crema.</p>
                        <p class="precio">Precio: <strong><span> $5.000</span></strong> </p>
                        <a style="text-align: right;"
                            href="https://api.whatsapp.com/send?phone=573138121128&text=Hola%20,%20quisiera%20mas%20informacion%20sobre%20(Arepa%20de%20queso),%20gracias."
                            class="btb btn-info" target="_blank"><img src="img/whatsapp.svg" style="width: 26px;">
                            Chatea con nosotros </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mb-3" data-aos="zoom-in-down">
                <div class="card text-white shadow bg-dark">
                    <div class="card-body">
                        <img src="img/img7.jpg" alt="" class="card-img-top">
                        <h5 class="card-title" style="text-align: center;text-decoration: underline;">Arepa de carne
                        </h5>
                        <p class="card-text">Arepa hecha de maiz organico rellena con carne, queso y huevos de codorniz.
                        </p>
                        <p class="precio">Precio: <strong><span> $7.000</span></strong> </p>
                        <a style="text-align: center;"
                            href="https://api.whatsapp.com/send?phone=573112945754&text=Hola%20,quisiera%20mas%20informacion,%20gracias."
                            class="btb btn-info" target="_blank"><img src="img/whatsapp.svg" style="width: 26px;">
                            Chatea con nosotros </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mb-3" data-aos="zoom-in-left">
                <div class="card text-white shadow bg-dark">
                    <div class="card-body">
                        <img src="img/img2.jpg" alt="" class="card-img-top">
                        <h5 class="card-title" style="text-align: center;text-decoration: underline;">Arepa de pollo
                        </h5>
                        <p class="card-text">Arepa hecha de maiz organico rellena con pollo, queso y huevos de codorniz.
                        </p>
                        <p class="precio">Precio: <strong><span> $6.000</span></strong> </p>
                        <a style="text-align: center;"
                            href="https://api.whatsapp.com/send?phone=573112945754&text=Hola%20,quisiera%20mas%20informacion,%20gracias."
                            class="btb btn-info" target="_blank"><img src="img/whatsapp.svg" style="width: 26px;">
                            Chatea con nosotros </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mb-3 " data-aos="zoom-in-right">
                <div class="card text-white shadow bg-dark">
                    <div class="card-body">
                        <img src="img/img3.jpg" alt="" class="card-img-top">
                        <h5 class="card-title" style="text-align: center;text-decoration: underline;">Arepa mixta</h5>
                        <p class="card-text">Arepa hecha de maiz organico rellena con pollo,carne,queso y huevos de
                            codorniz.</p>
                        <p class="precio">Precio: <strong><span> $8.000</span></strong> </p>
                        <a style="text-align: center;"
                            href="https://api.whatsapp.com/send?phone=573112945754&text=Hola%20,quisiera%20mas%20informacion,%20gracias."
                            class="btb btn-info" target="_blank"><img src="img/whatsapp.svg" style="width: 26px;">
                            Chatea con nosotros </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mb-3" data-aos="fade-right">
                <div class="card shadow text-white bg-dark">
                    <div class="card-body">
                        <img src="img/img4.jpg" alt="" class="card-img-top">
                        <h5 class="card-title" style="text-align: center;text-decoration: underline;">Arepa con todo
                        </h5>
                        <p class="card-text">Arepa hecha de maiz organico rellena con
                            carne, pollo, mollejas, chorizo, tocineta, maiz, queso, huevo de codrniz y chicharrón.</p>
                        <p class="precio">Precio: <strong><span> $10.000</span></strong> </p>
                        <a style="text-align: center;"
                            href="https://api.whatsapp.com/send?phone=573112945754&text=Hola%20,quisiera%20mas%20informacion,%20gracias."
                            class="btb btn-info" target="_blank"><img src="img/whatsapp.svg" style="width: 26px;">
                            Chatea con nosotros </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mb-3" data-aos="fade-left">
                <div class="card shadow text-white bg-dark">
                    <div class="card-body ">
                        <img src="img/img5.jpg" alt="" class="card-img-top">
                        <h5 class="card-title" style="text-align: center;text-decoration: underline;">Arepa hawaiana
                        </h5>
                        <p class="card-text">Arepa hecha de maiz organico rellena con piña, jamon y queso doble crema.
                        </p>
                        <p class="precio">Precio: <strong><span> $7.000</span></strong> </p>
                        <a style="text-align: center;"
                            href="https://api.whatsapp.com/send?phone=573112945754&text=Hola%20,quisiera%20mas%20informacion,%20gracias."
                            class="btb btn-info" target="_blank"><img src="img/whatsapp.svg" style="width: 26px;">
                            Chatea con nosotros </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mb-3" data-aos="flip-left">
                <div class="card shadow text-white bg-dark">
                    <div class="card-body ">
                        <img src="img/img9.jpg" alt="" class="card-img-top">
                        <h5 class="card-title" style="text-align: center;text-decoration: underline;">Jugo de Lulo</h5>
                        <p class="card-text">Jugos totalmente artesanales hechos de frutas frescas y preparado con leche o agua.
                        </p>
                        <p class="precio">Precio en leche: <strong><span> $6.000</span></strong></p>
                        <p class="precio">Precio en agua: <strong><span> $5.000</span></strong></p>
                        <a style="text-align: center;"
                            href="https://api.whatsapp.com/send?phone=573112945754&text=Hola%20,quisiera%20mas%20informacion,%20gracias."
                            class="btb btn-info" target="_blank"><img src="img/whatsapp.svg" style="width: 26px;">
                            Chatea con nosotros </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mb-3" data-aos="flip-down">
                <div class="card shadow text-white bg-dark">
                    <div class="card-body ">
                        <img src="img/img10.jpg" alt="" class="card-img-top">
                        <h5 class="card-title" style="text-align: center;text-decoration: underline;">Jugo de Mora</h5>
                        <p class="card-text">Jugos totalmente artesanales hechos de frutas frescas y preparado con leche o agua.
                        </p>
                        <p class="precio">Precio en leche: <strong><span> $6.000</span></strong></p>
                        <p class="precio">Precio en agua: <strong><span> $5.000</span></strong></p>
                        <a style="text-align: center;"
                            href="https://api.whatsapp.com/send?phone=573112945754&text=Hola%20,quisiera%20mas%20informacion,%20gracias."
                            class="btb btn-info" target="_blank"><img src="img/whatsapp.svg" style="width: 26px;">
                            Chatea con nosotros </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mb-3" data-aos="flip-up">
                <div class="card shadow text-white bg-dark">
                    <div class="card-body ">
                        <img src="img/img11.jpg" alt="" class="card-img-top">
                        <h5 class="card-title" style="text-align: center;text-decoration: underline;">Jugo de Maracuya</h5>
                        <p class="card-text">Jugos totalmente artesanales hechos de frutas frescas y preparado con leche o agua.
                        </p>
                        <p class="precio">Precio en leche: <strong><span> $6.000</span></strong></p>
                        <p class="precio">Precio en agua: <strong><span> $5.000</span></strong></p>
                        <a style="text-align: center;"
                            href="https://api.whatsapp.com/send?phone=573112945754&text=Hola%20,quisiera%20mas%20informacion,%20gracias."
                            class="btb btn-info" target="_blank"><img src="img/whatsapp.svg" style="width: 26px;">
                            Chatea con nosotros </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mb-3" data-aos="slide-left">
                <div class="card shadow text-white bg-dark">
                    <div class="card-body ">
                        <img src="img/img12.jpg" alt="" class="card-img-top">
                        <h5 class="card-title" style="text-align: center;text-decoration: underline;">Jugo de Fresa</h5>
                        <p class="card-text">Jugos totalmente artesanales hechos de frutas frescas y preparado con leche o agua.
                        </p>
                        <p class="precio">Precio en leche: <strong><span> $6.000</span></strong></p>
                        <p class="precio">Precio en agua: <strong><span> $5.000</span></strong></p>
                        <a style="text-align: center;"
                            href="https://api.whatsapp.com/send?phone=573112945754&text=Hola%20,quisiera%20mas%20informacion,%20gracias."
                            class="btb btn-info" target="_blank"><img src="img/whatsapp.svg" style="width: 26px;">
                            Chatea con nosotros </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mb-3" data-aos="flip-right">
                <div class="card shadow text-white bg-dark">
                    <div class="card-body ">
                        <img src="img/img13.jpg" alt="" class="card-img-top">
                        <h5 class="card-title" style="text-align: center;text-decoration: underline;">Jugo de Guanabana</h5>
                        <p class="card-text">Jugos totalmente artesanales hechos de frutas frescas y preparado con leche o agua.
                        </p>
                        <p class="precio">Precio en leche: <strong><span> $6.000</span></strong></p>
                        <p class="precio">Precio en agua: <strong><span> $5.000</span></strong></p>
                        <a style="text-align: center;"
                            href="https://api.whatsapp.com/send?phone=573112945754&text=Hola%20,quisiera%20mas%20informacion,%20gracias."
                            class="btb btn-info" target="_blank"><img src="img/whatsapp.svg" style="width: 26px;">
                            Chatea con nosotros </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mb-3" data-aos="slide-up">
                <div class="card shadow text-white bg-dark">
                    <div class="card-body ">
                        <img src="img/img14.png" alt="" class="card-img-top">
                        <h5 class="card-title" style="text-align: center;text-decoration: underline;">Jugo de Mango</h5>
                        <p class="card-text">Jugos totalmente artesanales hechos de frutas frescas y preparado con leche o agua.</p>
                        <p class="precio">Precio en leche: <strong><span> $6.000</span></strong></p>
                        <p class="precio">Precio en agua: <strong><span> $5.000</span></strong></p>
                        <a style="text-align: center;"
                            href="https://api.whatsapp.com/send?phone=573112945754&text=Hola%20,quisiera%20mas%20informacion,%20gracias."
                            class="btb btn-info" target="_blank"><img src="img/whatsapp.svg" style="width: 26px;">
                            Chatea con nosotros 
                        </a>
                    </div>
                </div>
            </div>

<!---------------------------Estructura para contactanos------------------------------------------>            

            <div class="content" id="contact" data-aos="zoom-in-up">
                <h1 class="logo">Contact <span>Us</span></h1>
                <div class="contact-wrapper animated bounceInUp">
                    <div class="contact-form">
                        <h3>Contact us</h3>
                        <form action="enviarEmail.php" method="post">
                            <p>
                                <label>Nombre</label>
                                <input type="text" name="nombre" required>
                            </p>
                            <p>
                                <label>Email</label>
                                <input type="email" name="email" required>
                            </p>
                            <p>
                                <label>Telefono</label>
                                <input type="tel" name="telefono" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                            </p>
                            <p>
                                <label>Asunto</label>
                                <input type="text" name="asunto" required>
                            </p>
                            <p class="block">
                                <label>Mensage</label>
                                <textarea style="resize: none;" name="mensage" rows="3" required></textarea>
                            </p>
                            <p class="block">
                                <button type="submit">
                                    Enviar
                                </button>
                            </p>
                        </form>
                    </div>
                    <div class="contact-info">
                        <h4>Mas Informacion</h4>
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i> Restrepo Meta <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5785.050094152275!2d-73.56875261614393!3d4.261215631084232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3fd383d9e5e08b%3A0x8f53af65aa33ac89!2sCl.%207%20%235-65%2C%20Restrepo%2C%20Meta!5e0!3m2!1ses!2sco!4v1688524461141!5m2!1ses!2sco"
                                    width="250" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe></li>
                            <li><i class="fas fa-phone"></i> (+57) 313 812 1128</li>
                            <li><i class="fas fa-envelope-open-text"></i> sandramgm88@gmail.com</li>
                        </ul>
                        <p>Aceptamos pagos por tranferencia a través de Nequi y Daviplata 3138121128-3193328963</p>
                        <p>Company.com</p>
                    </div>
                    
                </div>

            </div>
            <div class="row">
                <footer class="py-3 my-4">
                    <ul class="nav justify-content-center">
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
                    </ul>
                    <p class="text-center text-muled">© <span id="currentYear"></span> RO&CA Todos los derechos
                        reservados
                    </p>
                </footer>
                
            </div>
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!--codigo para implementar los efectos de desvanecido a las tarjetas--> 
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
				easing: 'ease-out-back',
				duration: 2000
			});
    </script>
    <!----------------------------------------------------------------------->
</body>

</html>