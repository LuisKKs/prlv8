@extends('layouts.app')

@section('title')
    Tamales
@endsection
@section('content')
    <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" height="373.8px" src="https://cdn.shortpixel.ai/spai/w_977+q_glossy+ret_img+to_webp/https://www.bankmycell.com/blog/wp-content/uploads/2018/07/phone-world.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" height="373.8px"src="https://skin.mobilesentrix.ca/frontend/base/default/images/svg/ip11/ip11-01.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" height="373.8px" src="https://mercaditovecino.udg.mx/img/publicaciones/5558/galeria/1592442420.png" alt="Third slide">
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
        <br>
        <div class="row">
            <div class="col-sm card small">
                <div class="card-header">
                    <h6>Telefonia</h6>
                </div>
                <div class="card-body">
                    <p class=" text-justify">
                        El teléfono inteligente (del inglés smartphone) es un dispositivo móvil que combina las funciones de un teléfono celular y de una computadora u ordenador de bolsillo. Estos dispositivos funcionan sobre una plataforma informática móvil, con mayor capacidad de almacenar y capaz de realizar tareas simultáneamente, tareas que realiza una computadora, y con una mayor conectividad que un teléfono convencional. Debido a ello, estos teléfonos reciben el nombre de inteligente, que se utiliza más bien con fines comerciales para distinguir de los teléfonos celulares básicos. El antecedente más cercano de estos dispositivos son los PDA.
                    </p>
                </div>
            </div>
            <div class="col-sm card small">
                <div class="card-header">
                    <h6>Refacciones</h6>
                </div>
                <div class="card-body">
                    <p class=" text-justify">Las refacciones para celulares son indispensables ya que te permiten arreglar cualquier daño en la pantalla, en el micrófono, en la batería, en las unidades de almacenamiento o en otras partes del sistema. Además, los repuestos te brindan la posibilidad de mejorar las capacidades de tu smartphone al máximo.</p>
                </div>
            </div>
            <div class="col-sm card small">
                <div class="card-header">
                    <h6>Accesorios</h6>
                </div>
                <div class="card-body">
                    <p class=" text-justify">
                        Los Accesorios para celulares son artículos indispensables actualmente, pues el hecho de contar con algún objeto electrónico, ya sea el móvil, el pc y otro implica tener que cuidarlo y adquirir la mayor cantidad de elementos para su cuidado y así poder mantenerlos como nuevos sin importar los años que lleven junto a nosotros.
                        <br>
                        Entre los más usado o comprados por los usuarios son los accesorios para celular pues nuestro aparato móvil es el que nos acompaña a todos lado, por lo que es el que más expuesto está a sufrir accidente o daños y eso algo que no podemos permitir ya que es nuestra mayor herramienta de trabajo y comunicación.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
