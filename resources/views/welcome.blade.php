@extends('layouts.app')

@section('content')

    <script>
        const listaEnlaces = document.querySelectorAll('ul li a');

        // Itera sobre cada elemento 'a' y elimina el atributo 'id'
        listaEnlaces.forEach((enlace) => {
            enlace.removeAttribute('id');
        });

        $('.menu-home').attr('id', 'active');

    </script>

    <div class="content">
        <div class="animated fadeIn">
            <div class="row px-3">

                <div class="col-md-12 card" style="border: none; border-radius: 5px">
                    <div class="mt-4 px-3">
                        <h3 class="text-black mb-3 " style="font-weight: 700;">
                            Asistencia IA
                        </h3>
                        <hr style="border-top: 2px solid rgba(0,0,0,.1) !important;">
                    </div>

                    <div class="d-flex flex-wrap justify-content-around mt-3">

                        <div class="card card-hover" style="max-width: 280px; border: none;">
                            <a href="https://www.chatpdf.com/" target="_blank">
                                <div class="card-body ">
                                    <center>
                                        <img class="img-fluid" src="{{ asset('/assets/icons/temis_chat pdf.png') }} " loading="lazy" alt="Chat PDF">
                                    </center>
                                    <div class="mt-4">
                                        <h6 class="fw-bolder text-secondary" style="font-weight: 700;">
                                            Análisis de Expediente
                                        </h6>
                                        <p class="text-justify small mt-2">
                                            Simplifica la revisión de documentos PDF.
                                            Carga tus archivos y deja que Temis identifique los puntos clave,
                                            facilitando un análisis rápido y eficiente.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="card card-hover" style="max-width: 280px; border: none;">
                            <a href="{{ route('prompts') }}" target="_self">
                                <div class="card-body ">
                                    <center>
                                        <img class="img-fluid" src="{{ asset('/assets/icons/temis_legal bot ia 2.png') }} " loading="lazy" alt="Asistente Legal con AI">
                                    </center>
                                    <div class="mt-4">
                                        <h6 class="fw-bolder text-secondary" style="font-weight: 700;">
                                            Asistente Legal con AI
                                        </h6>
                                        <p class="text-justify small mt-2">
                                            Tu asistente legal personalizado. Accede a más de 1000 prompts legales,
                                            categorizados para respuestas rápidas y precisas.
                                            Consulta tus dudas en cualquier momento.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>



                        <div class="card card-hover" style="max-width: 280px; border: none;">
                            <a href="{{ route('legalBot.escrito_final') }}" target="_self">
                                <div class="card-body ">
                                    <center>
                                        <img class="img-fluid" src="{{ asset('/assets/icons/temis_generacion de escritos.png') }} " loading="lazy" alt="Redacción Perfeccionada">
                                    </center>
                                    <div class="mt-4">
                                        <h6 class="fw-bolder text-secondary" style="font-weight: 700;">
                                            Redacción Perfeccionada
                                        </h6>
                                        <p class="text-justify small mt-2">
                                            Agiliza la creación de documentos legales con
                                            plantillas inteligentes y sugerencias contextuales.
                                            Garantiza escritos de alta calidad en menos tiempo.
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="card card-hover" style="max-width: 280px; border: none;">
                            <a href="{{ route('legalBot.conocimiento') }}" target="_self">
                                <div class="card-body ">
                                    <center>
                                        <img class="img-fluid" src="{{ asset('/assets/icons/temis_entrenamiento.png') }} " loading="lazy" alt="Entrena tu Asistente legal">
                                    </center>
                                    <div class="mt-4">
                                        <h6 class="fw-bolder text-secondary" style="font-weight: 700;">
                                            Entrena tu Asistente legal
                                        </h6>
                                        <p class="text-justify small mt-2">
                                            Personaliza las respuestas de tu chatbot
                                            cargando documentos de tu especialidad.
                                            Mejora la asistencia legal adaptada a tus necesidades específicas.
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
