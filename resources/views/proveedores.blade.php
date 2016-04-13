@extends('layouts.master')

@section('titulo', 'Home')

@section('contenido')
    <!-- About -->
    <!--
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Tu solicitud de presupuesto le llegará a los proveedores de tu zona.</h2>
                    <p class="lead">Podrás comunicarte con ellos, acordar un precio, y finalmente contratar gratuitamente.</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>CUIDA TU CASA</h2>
                    <p>Tenemos mucho que ofrecerte...</p>
                    <a href="#" class="btn btn-lg btn-dark">...a tí, proveedor</a>
                    <a href="#" class="btn btn-lg btn-dark">...a tí, cliente</a>
                    <!--<p class="lead">Podrás comunicarte con ellos, acordar un precio, y finalmente contratar gratuitamente.</p>-->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->   
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Nuestros servicios</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-wrench fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Todos los servicios</strong>
                                </h4>
                                <p>Aquí podrás pedir multitud de presupuestos de una sola vez</p>
                                <a href="#" class="btn btn-light">saber más</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-credit-card fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>A precio cerrado</strong>
                                </h4>
                                <p>Materiales, mano de obra, desplazamientos e IVA incluidos</p>
                                <a href="#" class="btn btn-light">saber más</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-life-saver fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Garantía y seguridad</strong>
                                </h4>
                                <p>Garantía mínima de servicio de 6 meses y plataforma de pago encriptada</p>
                                <a href="#" class="btn btn-light">saber más</a>
                            </div>
                        </div>
                        <!--
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-shield fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Service Name</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Aquí te damos una idea de los servicios que puedes contratar</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="assets/img/servicios/Albanileria-300x200.jpg">
                                </a>    
                                <p>ALBAÑILERIA > Aislamientos, Cambiar Azulejos, Cambiar Bañera, Cambiar Plato de Ducha, Panel de Pladur, Reformar Baño, Reformar Cocina</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="assets/img/servicios/Calefaccion-300x199.jpg">
                                </a>
                                <p>CALEFACCIÓN > Inspección Oficial, Instalación de Calderas, Instalación de Calentadores, Radiadores, Reparación de Calderas, Reparación de Calentadores</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="assets/img/servicios/Pintura-300x200.jpg">
                                </a>
                                <p>PINTURA > Pintar, Quitar Gotelé</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="assets/img/servicios/Fontaneria-300x200.jpg">
                                </a>
                                <p>FONTANERÍA > Bañeras, Cisternas, Filtraciones, Fregaderos, Grifos, Humedades, Latiguillos, Llaves de Paso, Mamparas de Baño, Platos de Ducha, Lavabos, Inodoros, Radiador, Sifones, Tuberías</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="assets/img/servicios/Cerrajeria-300x199.jpg">
                                </a>    
                                <p>CERRAJERÍA > Bombín, Cerraduras</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="assets/img/servicios/Cristaleria-300x198.jpg">
                                </a>
                                <p>CRISTALERÍA > Acristalamiento Locales y Oficinas, Espejos, Mampara Baño, Puerta Cristal, Ventana</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="assets/img/servicios/Electricidad-300x200.jpg">
                                </a>
                                <p>ELECTRICIDAD > Antenas, Apliques de Luz, Cuadro Electrico, Enchufes, Instalación Electrica, Nuevos Puntos de Luz, Timbres, Proyecto Led</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="assets/img/servicios/ControlPlagas-300x199.jpg">
                                </a>
                                <p>CONTROL DE PLAGAS > Control de Plagas</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="assets/img/servicios/AireAcondicionado-300x200.jpg">
                                </a>    
                                <p>CLIMATIZACIÓN > Instalación Aire Acondicionado, Reparación Aire Acondicionado</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="assets/img/servicios/Parquet-300x200.jpg">
                                </a>
                                <p>PARQUET > Acuchillar Parquet, Instalar Parquet o Tarima, Reparar Parquet o Tarima</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="assets/img/servicios/Puertas-300x200.jpg">
                                </a>
                                <p>PUERTAS > Instalar Puertas Interiores, Reparar Puertas Interiores, Puertas de Exterior, Blindadas o Acorazadas</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="assets/img/servicios/Toldos-300x200.jpg">
                                </a>
                                <p>TOLDOS > Instalar Toldos, Reparar Toldos</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- /.row (nested) -->
                    <a href="#" class="btn btn-dark">Ver más servicios</a>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Callout -->
    <aside class="callout">
        <div class="text-vertical-center">
            <h1>100% Seguro, rápido, sencillo y eficiente.</h1>
        </div>
    </aside>

    <!-- Call to Action -->
    <!--
    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>The buttons below are impossible to resist.</h3>
                    <a href="#" class="btn btn-lg btn-light">Click Me!</a>
                    <a href="#" class="btn btn-lg btn-dark">Look at Me!</a>
                </div>
            </div>
        </div>
    </aside>
    -->
 
    <!-- Map -->
    <!--
    <section id="contact" class="map">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
        <br />
        <small>
            <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
        </small>
        </iframe>
    </section>
    -->
@endsection