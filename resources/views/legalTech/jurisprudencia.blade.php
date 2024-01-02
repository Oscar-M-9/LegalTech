@extends('layouts.app')

@section('content')

{{--  @section('currentUrl', 'Jurisprudencia')  --}}

    <script>
        const listaEnlaces = document.querySelectorAll('.navegacion ul li a');

        // Itera sobre cada elemento 'a' y elimina el atributo 'id'
        listaEnlaces.forEach((enlace) => {
            enlace.removeAttribute('id');
        });
        $('.menu-jurisprudencia').attr('id', 'active');

    </script>


<div class="content">
    <div class="animated fadeIn">
        <div class="row px-3">

            <div class="col-md-12 card" style="border: none; border-radius: 5px">

                <div class="mt-4 px-3">
                    <h3 class="text-black mb-3 " style="font-weight: 700;">
                        Jurisprudencia
                    </h3>
                    <hr style="border-top: 2px solid rgba(0,0,0,.1) !important;">
                </div>

                <div class="d-flex flex-wrap justify-content-around mt-3">
                    <div class="card card-hover" style="max-width: 300px; border: none;">
                        <a href="https://jurisprudencia.pj.gob.pe/jurisprudenciaweb/faces/page/inicio.xhtml" target="_blank">
                            <div class="card-body ">
                                <center>
                                    <img class="img-fluid" loading="lazy" src="{{ asset('/assets/icons/Juridisprudencia Nacional Sistematizada.png') }}" alt="Juridisprudencia Nacional Sistematizada">
                                </center>
                                <div class="mt-4">
                                    <h6 class="fw-bolder text-secondary" style="font-weight: 700;">
                                        Buscador de Jurisprudencia
                                    </h6>
                                    <p class="text-justify small mt-2">
                                        Acceso a la información actualizada y sistematizada de la jurisprudencia del poder judicial.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="card card-hover" style="max-width: 300px; border: none;">
                        <a href="https://jurisprudencia.sedetc.gob.pe/sistematizacion-jurisprudencial/busqueda" target="_blank">
                            <div class="card-body ">
                                <center>
                                    <img class="img-fluid" loading="lazy" src="{{ asset('/assets/icons/Buscador de Jurisprudencia Tribunal Constitucional.png') }}" alt="Buscador de Jurisprudencia Tribunal Constitucional">
                                </center>
                                <div class="mt-4">
                                    <h6 class="fw-bolder text-secondary" style="font-weight: 700;">
                                        Buscador de Jurisprudencia
                                    </h6>
                                    <p class="text-justify small mt-2">
                                        Acceso a la información actualizada y sistematizada de la jurisprudencia del tribunal constitucional.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="card card-hover" style="max-width: 300px; border: none;">
                        <a href="https://jurisprudencia.sedetc.gob.pe/jurisprudencia-comparada"target="_blank">
                            <div class="card-body ">
                                <center>
                                    <img class="img-fluid" loading="lazy" src="{{ asset('/assets/icons/jurisprudencia comparada_Mesa de trabajo 1 copia 2.png') }}" alt="Jurisprudencia Comparada">
                                </center>
                                <div class="mt-4">
                                    <h6 class="fw-bolder text-secondary" style="font-weight: 700;">
                                        Jurisprudencia Comparada
                                    </h6>
                                    <p class="text-justify small mt-2">
                                        Acceso a la información actualizada y sistematizada de la jurisprudencia internacional.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>


            </div>

        </div>
    </div>
</div>




@endsection
