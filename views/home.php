<?php
$template = '
<section id="carousell">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="./public/img/slide/slide1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="./public/img/slide/slide2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="./public/img/slide/slide3.jpg" alt="Third slide">
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<section id="products">
    <div class="content-product bg-yellow-100 p-y-180 text-center">
        <div class="container">
            <div class="content-subtitle text-blue-100">
                <h2>PRODUCTOS</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid" src="./public/img/products.jpg" alt="">
                </div>
                <div class="col-md-6 p-y-30 text-justify text-blue-100">
                    <p class="m-y-120">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla auctor pretium ex id pharetra. Nam sit amet sodales libero. Nam gravida vestibulum libero. Donec magna elit, pellentesque eu tellus sed, ultrices congue orci. Donec porta magna eget nulla mattis ornare. Proin vitae commodo magna.</p>
                    <a class="btn-content" href=""><img class="img-fluid" src="./public/img/bt_products.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact">
    <div class="content-contact bg-pink-100 p-y-180 text-center">
        <div class="container">
            <div class="content-subtitle text-white">
                <h2>CONTACTO</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form class="m-y-60">
                        <div class="row">
                            <div class="col">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" id="lastname" name=""lastname"" placeholder="Apellido">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Correo Electrónico">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Asunto">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="message" name="message" rows="3" placeholder="Mensaje"></textarea>
                        </div>
                        <button type="submit" class="btn btn-submit1">Enviar</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="./public/img/ubicacion.jpg" alt="">
                    <div class="text-white m-y-60">
                        <p> Gonzalo Salazar Oe3-183 y Carlos Guarderas</p>
                        <p><a class="text-white" href="mailto:hola@felicidadenuncono.com">hola@felicidadenuncono.com</a></p>
                        <p><a class="text-white" href="tel:593973323211">0973323211</a></p>
                        <a class="btn-content" href=""><img class="img-fluid" src="./public/img/googl-maps.jpg" alt=""></a>
                        <div class="p-y-30">
                            <a class="text-white" href="https://facebook.com/" target="_blank"><i class="fab fa-facebook-square"></i></a>
                            <a class="text-white" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram-square"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
';

print(
    $template
);
?>