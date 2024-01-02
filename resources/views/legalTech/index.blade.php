@extends('dashboard.layouts.app')

@section('content')

@section('currentUrl', 'Asistencia IA')

    <script>
        $(document).ready(function () {
            $('#nav-dropdown-legaltech').addClass('show');
            $('#nav-dropdown-legaltech ul').addClass('show');

            $("#nav-menu-asistencia").attr('style', "color: #ffcf40 !important; font-weight: 600;");
            $('#nav-menu-asistencia').prev('i').attr('style', 'color: #ffcf40!important;');
        })
    </script>

<style>
    .img-fluid{
        max-height: 120px;
    }
</style>

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

                    <div class="card" style="max-width: 280px; border: none;">
                        <div class="card-body ">
                            <center>
                                <a href="https://www.chatpdf.com/" target="_blank">
                                    <img class="img-fluid" src="{{ asset('/assets/icons/temis_chat pdf.png') }}" loading="lazy" alt="Chat PDF">
                                </a>
                            </center>
                            <div class="mt-4">
                                <a href="https://www.chatpdf.com/" target="_blank">
                                    <h6 class="fw-bolder text-secondary" style="font-weight: 700;">
                                        Análisis de Expediente
                                    </h6>
                                </a>
                                <p class="text-justify small mt-2">
                                    Simplifica la revisión de documentos PDF.
                                    Carga tus archivos y deja que Temis identifique los puntos clave,
                                    facilitando un análisis rápido y eficiente.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card" style="max-width: 280px; border: none;">
                        <div class="card-body ">
                            <center>
                                <a href="{{ route('prompts') }}" target="_blank">
                                    <img class="img-fluid" src="{{ asset('/assets/icons/temis_legal bot ia.png') }}" loading="lazy" alt="Asistente Legal con AI">
                                </a>
                            </center>
                            <div class="mt-4">
                                <a href="{{ route('prompts') }}" target="_blank">
                                    <h6 class="fw-bolder text-secondary" style="font-weight: 700;">
                                        Asistente Legal con AI
                                    </h6>
                                </a>
                                <p class="text-justify small mt-2">
                                    Tu asistente legal personalizado. Accede a más de 1000 prompts legales,
                                    categorizados para respuestas rápidas y precisas.
                                    Consulta tus dudas en cualquier momento.
                                </p>
                            </div>
                        </div>
                    </div>



                    <div class="card" style="max-width: 280px; border: none;">
                        <div class="card-body ">
                            <center>
                                <a href="{{ route('legalBot.escrito_final') }}" target="_blank">
                                    <img class="img-fluid" src="{{ asset('/assets/icons/temis_generacion de escritos.png') }}" loading="lazy" alt="Redacción Perfeccionada">
                                </a>
                            </center>
                            <div class="mt-4">
                                <a href="{{ route('legalBot.escrito_final') }}" target="_blank">
                                    <h6 class="fw-bolder text-secondary" style="font-weight: 700;">
                                        Redacción Perfeccionada
                                    </h6>
                                </a>
                                <p class="text-justify small mt-2">
                                    Agiliza la creación de documentos legales con
                                    plantillas inteligentes y sugerencias contextuales.
                                    Garantiza escritos de alta calidad en menos tiempo.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card" style="max-width: 280px; border: none;">
                        <div class="card-body ">
                            <center>
                                <a href="{{ route('legalBot.conocimiento') }}" target="_blank">
                                    <img class="img-fluid" src="{{ asset('/assets/icons/temis_entrenamiento.png') }}" loading="lazy" alt="Entrena tu Asistente legal">
                                </a>
                            </center>
                            <div class="mt-4">
                                <a href="{{ route('legalBot.conocimiento') }}" target="_blank">
                                    <h6 class="fw-bolder text-secondary" style="font-weight: 700;">
                                        Entrena tu Asistente legal
                                    </h6>
                                </a>
                                <p class="text-justify small mt-2">
                                    Personaliza las respuestas de tu chatbot
                                    cargando documentos de tu especialidad.
                                    Mejora la asistencia legal adaptada a tus necesidades específicas.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>




@endsection
