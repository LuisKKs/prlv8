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
                        El tel??fono inteligente (del ingl??s smartphone) es un dispositivo m??vil que combina las funciones de un tel??fono celular y de una computadora u ordenador de bolsillo. Estos dispositivos funcionan sobre una plataforma inform??tica m??vil, con mayor capacidad de almacenar y capaz de realizar tareas simult??neamente, tareas que realiza una computadora, y con una mayor conectividad que un tel??fono convencional. Debido a ello, estos tel??fonos reciben el nombre de inteligente, que se utiliza m??s bien con fines comerciales para distinguir de los tel??fonos celulares b??sicos. El antecedente m??s cercano de estos dispositivos son los PDA.
                    </p>
                </div>
            </div>
            <div class="col-sm card small">
                <div class="card-header">
                    <h6>Refacciones</h6>
                </div>
                <div class="card-body">
                    <p class=" text-justify">Las refacciones para celulares son indispensables ya que te permiten arreglar cualquier da??o en la pantalla, en el micr??fono, en la bater??a, en las unidades de almacenamiento o en otras partes del sistema. Adem??s, los repuestos te brindan la posibilidad de mejorar las capacidades de tu smartphone al m??ximo.</p>
                </div>
            </div>
            <div class="col-sm card small">
                <div class="card-header">
                    <h6>Accesorios</h6>
                </div>
                <div class="card-body">
                    <p class=" text-justify">
                        Los Accesorios para celulares son art??culos indispensables actualmente, pues el hecho de contar con alg??n objeto electr??nico, ya sea el m??vil, el pc y otro implica tener que cuidarlo y adquirir la mayor cantidad de elementos para su cuidado y as?? poder mantenerlos como nuevos sin importar los a??os que lleven junto a nosotros.
                        <br>
                        Entre los m??s usado o comprados por los usuarios son los accesorios para celular pues nuestro aparato m??vil es el que nos acompa??a a todos lado, por lo que es el que m??s expuesto est?? a sufrir accidente o da??os y eso algo que no podemos permitir ya que es nuestra mayor herramienta de trabajo y comunicaci??n.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
