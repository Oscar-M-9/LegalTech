@extends('layouts.app')

@section('content')

{{--  @section('currentUrl', 'Cursos IA')  --}}

    <script>
        const listaEnlaces = document.querySelectorAll('ul li a');

        // Itera sobre cada elemento 'a' y elimina el atributo 'id'
        listaEnlaces.forEach((enlace) => {
            enlace.removeAttribute('id');
        });

        $('.menu-courses-ia').attr('id', 'active');

    </script>

<style>
    .heading-primary {
        font-size: 2em;
        padding: 2em;
        text-align: center;
    }

    .accordion dl,
    .accordion-list {
        border: 1px solid #ddd;
        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -ms-border-radius: 5px;
        -o-border-radius: 5px;
    }
    /* .accordion dl:after,
    .accordion-list:after {
        content: "";
        display: block;
        height: 1em;
        width: 100%;
        background-color: #0A2E4D;
    } */

    .accordion dd,
    .accordion__panel {
        background-color: #fff;
        font-size: 1em;
        line-height: 1.5em;
    }

    .accordion p {
        padding: 1em 2em 1em 2em;
    }

    .accordion {
        position: relative;
        /* background-color: #eee; */
    }

    /* .container {
        max-width: 960px;
        margin: 0 auto;
        padding: 2em 0 2em 0;
    } */

    .accordionTitle,
    .accordion__Heading {
        background-color: #e9e9e9ea;
        text-align: center;
        font-weight: 700;
        padding: 1em;
        display: block;
        text-decoration: none;
        color: #000000;
        transition: background-color 0.5s ease-in-out;
        border-bottom: 1px solid #e9e9e9ea;
    }
    .accordionTitle:before,
    .accordion__Heading:before {
        content: "+";
        font-size: 1.5em;
        line-height: 0.5em;
        float: left;
        transition: transform 0.3s ease-in-out;
    }
    .accordionTitle:hover,
    .accordion__Heading:hover {
        background-color: #0A2E4D;
        color: #FFF;
    }

    .accordionTitleActive,
    .accordionTitle.is-expanded {
        background-color: #0A2E4D;
        color: #FFF;
    }
    .accordionTitleActive:before,
    .accordionTitle.is-expanded:before {
        transform: rotate(-225deg);
    }

    .accordionItem {
        height: auto;
        overflow: hidden;
        /* max-height: 50em; */
        transition: max-height 1s;
    }
    @media screen and (min-width: 48em) {
        .accordionItem {
            /* max-height: 15em; */
            transition: max-height 0.5s;
        }
    }

    .accordionItem.is-collapsed {
        max-height: 0;
    }

    .no-js .accordionItem.is-collapsed {
        max-height: auto;
    }

    .animateIn {
        -webkit-animation: accordionIn 0.45s normal ease-in-out both 1;
                animation: accordionIn 0.45s normal ease-in-out both 1;
    }

    .animateOut {
        -webkit-animation: accordionOut 0.45s alternate ease-in-out both 1;
                animation: accordionOut 0.45s alternate ease-in-out both 1;
    }

    @-webkit-keyframes accordionIn {
        0% {
            opacity: 0;
            transform: scale(0.9) rotateX(-60deg);
            transform-origin: 50% 0;
        }
        100% {
            opacity: 1;
            transform: scale(1);
        }
    }

    @keyframes accordionIn {
        0% {
            opacity: 0;
            transform: scale(0.9) rotateX(-60deg);
            transform-origin: 50% 0;
        }
        100% {
            opacity: 1;
            transform: scale(1);
        }
    }
    @-webkit-keyframes accordionOut {
        0% {
            opacity: 1;
            transform: scale(1);
        }
        100% {
            opacity: 0;
            transform: scale(0.9) rotateX(-60deg);
        }
    }
    @keyframes accordionOut {
        0% {
            opacity: 1;
            transform: scale(1);
        }
        100% {
            opacity: 0;
            transform: scale(0.9) rotateX(-60deg);
        }
    }

    .accordion-content button,
    .accordion-content a{
        text-wrap: wrap;
        text-align: start;
    }

    .menu-course{
        max-height: 500px;
        overflow-y: auto;
    }
</style>

<div class="content">
    <div class="animated fadeIn">
        <div class="row px-3">

            <div class="col-md-12 card" style="border: none; border-radius: 5px">

                <div class="mt-4 px-3">
                    <h3 class="text-black mb-3 " style="font-weight: 700;">
                        Cursos IA
                    </h3>
                    <hr style="border-top: 2px solid rgba(0,0,0,.1) !important;">
                </div>

                <div class="d-flex flex-wrap justify-content-around mt-3">
                    <div class="card card-hover" style="max-width: 300px; border: none;">
                        <a data-toggle="modal" data-target="#my-cursos" style="cursor: pointer;">
                            <div class="card-body ">
                                <center>
                                    <img class="img-fluid" loading="lazy" src="{{ asset('/assets/icons/cursos.jpg') }}" alt="Juridisprudencia Nacional Sistematizada">
                                </center>
                                <div class="mt-4">
                                    <h6 class="fw-bolder text-secondary" style="font-weight: 700;">
                                        Inteligencia artificial para abogados
                                    </h6>
                                    <p class="text-justify small mt-2">
                                        Explora el impacto de la IA en el derecho, desde algoritmos hasta ética,
                                        capacitando para utilizar estas herramientas en la práctica legal con eficiencia y precisión.
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


<div class="modal fade" id="my-cursos" tabindex="-1" role="dialog" aria-labelledby="my-cursos-label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-cursosTitle">Inteligencia artificial para abogados</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="mb-3 row">
                        <div class="col-md-8 px-lg-3 px-0">
                            <div class="container-video-embed">
                                <h6 class="my-2" id="video-name">IA ABOGADOS, BIENVENIDA.mp4</h6>
                                <video id="videoTag" playsinline controls poster="https://cdn.pixabay.com/photo/2017/04/19/13/16/computer-2242264_1280.jpg" {{-- width="640" height="360" --}}>
                                    <source id="videoSource" src="https://ingytal.temisperu.com/storage/CURSO INTELIGENCIA ARTIFICIAL PARA ABOGADOS/MODULO 1 INTRUCCIONES Y BIENVENIDA/IA ABOGADOS, BIENVENIDA.mp4" type="video/mp4" />
                                    Tu navegador no soporta HTML5 Video
                                </video>
                            </div>
                        </div>
                        <div class="col-md-4 mt-3">

                            <div class="container pr-0 menu-course">
                                {{-- <h1 class="heading-primary">CSS Responsive Animated Accordion</h1> --}}
                                <div class="accordion">
                                  <dl>
                                    <dt>
                                      <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger">
                                        Módulo 1 Intrucciones y bienvenida
                                    </a>
                                    </dt>
                                    <dd class="accordion-content accordionItem is-collapsed mb-0" id="accordion1" aria-hidden="true">
                                        <button class="btn-block w-100 btn btn-light m-0 btn-curso" data-video="MODULO 1 INTRUCCIONES Y BIENVENIDA/IA ABOGADOS, BIENVENIDA.mp4" style="border-radius: 0px !important;">
                                            IA abogados, bienvenida
                                        </button>
                                    </dd>

                                    <dt>
                                      <a href="#accordion2" aria-expanded="false" aria-controls="accordion2" class="accordion-title accordionTitle js-accordionTrigger">
                                        Módulo 2 Introducción al uso de inteligencia artificial en procesos penales
                                      </a>
                                    </dt>
                                    <dd class="accordion-content accordionItem is-collapsed mb-0" id="accordion2" aria-hidden="true">
                                        <button class="btn-block w-100 btn btn-light m-0 btn-curso" data-video="MODULO 2 INTRODUCCION AL USO DE INTELIGENCIA ARTIFICIAL EN PROCESOS PENALES/1. Machine Learning, ejemplos y casos practicos.mp4" style="border-radius: 0px !important;">
                                            1. Machine Learning, ejemplos y casos practicos
                                        </button>
                                        <button class="btn-block w-100 btn btn-light m-0 btn-curso" data-video="MODULO 2 INTRODUCCION AL USO DE INTELIGENCIA ARTIFICIAL EN PROCESOS PENALES/2. Deep Learning, ejemplos y casos practicos.mp4" style="border-radius: 0px !important;">
                                            2. Deep Learning, ejemplos y casos practicos
                                        </button>
                                        <button class="btn-block w-100 btn btn-light m-0 btn-curso" data-video="MODULO 2 INTRODUCCION AL USO DE INTELIGENCIA ARTIFICIAL EN PROCESOS PENALES/3. Blockchain y Mineria de Datos.mp4" style="border-radius: 0px !important;">
                                            3. Blockchain y Mineria de Datos
                                        </button>
                                        <button class="btn-block w-100 btn btn-light m-0 btn-curso" data-video="MODULO 2 INTRODUCCION AL USO DE INTELIGENCIA ARTIFICIAL EN PROCESOS PENALES/4. Diferentes usos de la ciencia de datos.mp4" style="border-radius: 0px !important;">
                                            4. Diferentes usos de la ciencia de datos
                                        </button>
                                    </dd>

                                    <dt>
                                      <a href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                                        Módulo 3 Impacto de la inteligencia artificial en procesos penales
                                      </a>
                                    </dt>
                                    <dd class="accordion-content accordionItem is-collapsed mb-0" id="accordion3" aria-hidden="true">
                                        <button class="btn-block w-100 btn btn-light m-0 btn-curso" data-video="MODULO 3 IMPACTO DE LA INTELIGENCIA ARTIFICIAL EN PROCESOS PENALES/1. IA y tutela jurisdiccional efectiva- Debido proceso.mp4" style="border-radius: 0px !important;">
                                            1. IA y tutela jurisdiccional efectiva- Debido proceso
                                        </button>
                                        <button class="btn-block w-100 btn btn-light m-0 btn-curso" data-video="MODULO 3 IMPACTO DE LA INTELIGENCIA ARTIFICIAL EN PROCESOS PENALES/2. Análisis del caso Loomis vs. Wisconsin.mp4" style="border-radius: 0px !important;">
                                            2. Análisis del caso Loomis vs. Wisconsin
                                        </button>
                                        <button class="btn-block w-100 btn btn-light m-0 btn-curso" data-video="MODULO 3 IMPACTO DE LA INTELIGENCIA ARTIFICIAL EN PROCESOS PENALES/3. IA y Presunción de inocencia-Derecho a la defensa-Derecho a la prueba.mp4" style="border-radius: 0px !important;">
                                            3. IA y Presunción de inocencia-Derecho a la defensa-Derecho a la prueba
                                        </button>
                                        <button class="btn-block w-100 btn btn-light m-0 btn-curso" data-video="MODULO 3 IMPACTO DE LA INTELIGENCIA ARTIFICIAL EN PROCESOS PENALES/4. Conclusiones del Impacto de la IA en los Derechos Procesales en el Perú.mp4" style="border-radius: 0px !important;">
                                            4. Conclusiones del Impacto de la IA en los Derechos Procesales en el Perú
                                        </button>
                                    </dd>

                                    <dt>
                                      <a href="#accordion4" aria-expanded="false" aria-controls="accordion4" class="accordion-title accordionTitle js-accordionTrigger">
                                        Módulo 4 Analisis de casos con chatGPT
                                      </a>
                                    </dt>
                                    <dd class="accordion-content accordionItem is-collapsed mb-0" id="accordion4" aria-hidden="true">
                                        <button class="btn-block w-100 btn btn-light m-0 btn-curso" data-video="MODULO 4 ANALISIS DE CASOS CON CHATGPT/1. ChatGPT y análisis de Prisión Preventiva, PARTE 1.mp4" style="border-radius: 0px !important;">
                                            1. ChatGPT y análisis de Prisión Preventiva, PARTE 1
                                        </button>
                                        <button class="btn-block w-100 btn btn-light m-0 btn-curso" data-video="MODULO 4 ANALISIS DE CASOS CON CHATGPT/2. ChatGPT y análisis de Prisión Preventiva, PARTE 2.mp4" style="border-radius: 0px !important;">
                                            2. ChatGPT y análisis de Prisión Preventiva, PARTE 2
                                        </button>
                                        <button class="btn-block w-100 btn btn-light m-0 btn-curso" data-video="MODULO 4 ANALISIS DE CASOS CON CHATGPT/3. ChatGPT y análisis de Informes Periciales (Dosaje etílico).mp4" style="border-radius: 0px !important;">
                                            3. ChatGPT y análisis de Informes Periciales (Dosaje etílico)
                                        </button>
                                        <button class="btn-block w-100 btn btn-light m-0 btn-curso" data-video="MODULO 4 ANALISIS DE CASOS CON CHATGPT/4. ChatGPT y análisis de Informes Periciales (Accidente de transito).mp4" style="border-radius: 0px !important;">
                                            4. ChatGPT y análisis de Informes Periciales (Accidente de transito)
                                        </button>
                                    </dd>

                                    <dt>
                                      <a href="#accordion5" aria-expanded="false" aria-controls="accordion5" class="accordion-title accordionTitle js-accordionTrigger">
                                        Módulo 5 Analisis de casos con otras herramientas IA
                                      </a>
                                    </dt>
                                    <dd class="accordion-content accordionItem is-collapsed mb-0" id="accordion5" aria-hidden="true">
                                        <button class="btn-block w-100 btn btn-light m-0 btn-curso" data-video="MODULO 5 ANALISIS DE CASOS CON OTRAS HERRAMIENTAS IA/1. ChatPDF y análisis de Sentencia Absolutoria.mp4" style="border-radius: 0px !important;">
                                            1. ChatPDF y análisis de Sentencia Absolutoria
                                        </button>
                                        <button class="btn-block w-100 btn btn-light m-0 btn-curso" data-video="MODULO 5 ANALISIS DE CASOS CON OTRAS HERRAMIENTAS IA/2. BING, busqueda de Jurisprdencias Relevantes sobre casos en el Perú.mp4" style="border-radius: 0px !important;">
                                            2. BING, busqueda de Jurisprdencias Relevantes sobre casos en el Perú
                                        </button>
                                        <button class="btn-block w-100 btn btn-light m-0 btn-curso" data-video="MODULO 5 ANALISIS DE CASOS CON OTRAS HERRAMIENTAS IA/3. Azzy.ia y análisis de casos (Lesiones Dolosas).mp4" style="border-radius: 0px !important;">
                                            3. Azzy.ia y análisis de casos (Lesiones Dolosas)
                                        </button>
                                        <button class="btn-block w-100 btn btn-light m-0 btn-curso" data-video="MODULO 5 ANALISIS DE CASOS CON OTRAS HERRAMIENTAS IA/4. Perplexity y BARD, como herramientas en el campo jurídico.mp4" style="border-radius: 0px !important;">
                                            4. Perplexity y BARD, como herramientas en el campo jurídico
                                        </button>
                                    </dd>

                                    <dt>
                                      <a href="#accordion6" aria-expanded="false" aria-controls="accordion6" class="accordion-title accordionTitle js-accordionTrigger">
                                        Módulo 6 Chat GPT en decisiones judiciales
                                      </a>
                                    </dt>
                                    <dd class="accordion-content accordionItem is-collapsed mb-0" id="accordion6" aria-hidden="true">
                                        <button class="btn-block w-100 btn btn-light m-0 btn-curso" data-video="MODULO 6 CHAT GPT EN DECISIONES JUDICIALES/1. Por qué hablamos hoy de ChatGPT en Decisiones Judiciales.mp4" style="border-radius: 0px !important;">
                                            1. Por qué hablamos hoy de ChatGPT en Decisiones Judiciales
                                        </button>
                                        <button class="btn-block w-100 btn btn-light m-0 btn-curso" data-video="MODULO 6 CHAT GPT EN DECISIONES JUDICIALES/2. Qué es ChatGPT para no expertos.mp4" style="border-radius: 0px !important;">
                                            2. Qué es ChatGPT para no expertos
                                        </button>
                                        <button class="btn-block w-100 btn btn-light m-0 btn-curso" data-video="MODULO 6 CHAT GPT EN DECISIONES JUDICIALES/3. Uso de ChatGPT en Desiciones Judiciales.mp4" style="border-radius: 0px !important;">
                                            3. Uso de ChatGPT en Desiciones Judiciales
                                        </button>
                                        <button class="btn-block w-100 btn btn-light m-0 btn-curso" data-video="MODULO 6 CHAT GPT EN DECISIONES JUDICIALES/4. Uso de ChatGPT en casos reales.mp4" style="border-radius: 0px !important;">
                                            4. Uso de ChatGPT en casos reales
                                        </button>
                                        <button class="btn-block w-100 btn btn-light m-0 btn-curso" data-video="MODULO 6 CHAT GPT EN DECISIONES JUDICIALES/5. ChatGPT tu asistente experto.mp4" style="border-radius: 0px !important;">
                                            5. ChatGPT tu asistente experto
                                        </button>
                                    </dd>

                                    <dt>
                                      <a href="#accordion7" aria-expanded="false" aria-controls="accordion7" class="accordion-title accordionTitle js-accordionTrigger">
                                        Módulo 7 ChatGPT vs la corte suprema
                                      </a>
                                    </dt>
                                    <dd class="accordion-content accordionItem is-collapsed mb-0" id="accordion7" aria-hidden="true">
                                        <button class="btn-block w-100 btn btn-light m-0 btn-curso" data-video="MODULO 7 CHATGPT VS LA CORTE SUPREMA/1. ChatGPT vs. Corte Supréma (Como generar Resolución Judicial).mp4" style="border-radius: 0px !important;">
                                            1. ChatGPT vs. Corte Supréma (Como generar Resolución Judicial)
                                        </button>
                                        <button class="btn-block w-100 btn btn-light m-0 btn-curso" data-video="MODULO 7 CHATGPT VS LA CORTE SUPREMA/2. ChatGPT vs. Corte Supréma (Interpretación Normativa y motivación de Resolución Judicial) PARTE 1.mp4" style="border-radius: 0px !important;">
                                            2. ChatGPT vs. Corte Supréma (Interpretación Normativa y motivación de Resolución Judicial) PARTE 1
                                        </button>
                                        <button class="btn-block w-100 btn btn-light m-0 btn-curso" data-video="MODULO 7 CHATGPT VS LA CORTE SUPREMA/3. ChatGPT vs. Corte Supréma (Interpretación Normativa y motivación de Resolución Judicial) PARTE 2.mp4" style="border-radius: 0px !important;">
                                            3. ChatGPT vs. Corte Supréma (Interpretación Normativa y motivación de Resolución Judicial) PARTE 2
                                        </button>
                                    </dd>

                                    <dt>
                                      <a href="#accordion8" aria-expanded="false" aria-controls="accordion8" class="accordion-title accordionTitle js-accordionTrigger">
                                        Módulo 8 Analisis de casos con ChatGPT
                                      </a>
                                    </dt>
                                    <dd class="accordion-content accordionItem is-collapsed mb-0" id="accordion8" aria-hidden="true">
                                        <button class="btn-block w-100 btn btn-light m-0 btn-curso" data-video="MODULO 8 ANALISIS DE CASOS CON CHTGPT/1 ChatGPT, analisis de caso, Nulidad de Matrimonio.mp4" style="border-radius: 0px !important;">
                                            1 ChatGPT, analisis de caso, Nulidad de Matrimonio
                                        </button>
                                        <button class="btn-block w-100 btn btn-light m-0 btn-curso" data-video="MODULO 8 ANALISIS DE CASOS CON CHTGPT/2. ChatGPT, analisis del caso Tenencia y Regimen de visitas.mp4" style="border-radius: 0px !important;">
                                            2. ChatGPT, analisis del caso Tenencia y Regimen de visitas
                                        </button>
                                    </dd>

                                    <dt>
                                      <a href="#accordion9" aria-expanded="false" aria-controls="accordion9" class="accordion-title accordionTitle js-accordionTrigger">
                                        Módulo 9  Comandos en herramientas IA (Recursos)
                                      </a>
                                    </dt>
                                    <dd class="accordion-content accordionItem is-collapsed mb-0" id="accordion9" aria-hidden="true">
                                        <a href="storage/CURSO INTELIGENCIA ARTIFICIAL PARA ABOGADOS/MODULO 9  COMANDOS EN HERRAMIENTAS IA/Promts/1. LISTA DE PROMPRT PARA ABOGADOS (1).docx" class="btn-block w-100 btn btn-light m-0" target="_blank" style="border-radius: 0px !important;">
                                            <i class="fa fa-file-text-o pr-2" aria-hidden="true"></i>
                                            1. LISTA DE PROMPRT PARA ABOGADOS (1).docx
                                        </a>
                                        <a href="storage/CURSO INTELIGENCIA ARTIFICIAL PARA ABOGADOS/MODULO 9  COMANDOS EN HERRAMIENTAS IA/Promts/1. LISTA DE PROMPRT PARA ABOGADOS (1).txt" class="btn-block w-100 btn btn-light m-0" target="_blank" style="border-radius: 0px !important;">
                                            <i class="fa fa-file-text-o pr-2" aria-hidden="true"></i>
                                            1. LISTA DE PROMPRT PARA ABOGADOS (1).txt
                                        </a>
                                        <a href="storage/CURSO INTELIGENCIA ARTIFICIAL PARA ABOGADOS/MODULO 9  COMANDOS EN HERRAMIENTAS IA/Promts/2. LISTA DE PROMPT PARA DESARROLLAR LIBROS.docx" class="btn-block w-100 btn btn-light m-0" target="_blank" style="border-radius: 0px !important;">
                                            <i class="fa fa-file-text-o pr-2" aria-hidden="true"></i>
                                            2. LISTA DE PROMPT PARA DESARROLLAR LIBROS.docx
                                        </a>
                                        <a href="storage/CURSO INTELIGENCIA ARTIFICIAL PARA ABOGADOS/MODULO 9  COMANDOS EN HERRAMIENTAS IA/Promts/2. COMANDOS PARA LOS ENFOQUES EN LA APLICACIÓN.txt" class="btn-block w-100 btn btn-light m-0" target="_blank" style="border-radius: 0px !important;">
                                            <i class="fa fa-file-text-o pr-2" aria-hidden="true"></i>
                                            2. COMANDOS PARA LOS ENFOQUES EN LA APLICACIÓN.txt
                                        </a>
                                        <a href="storage/CURSO INTELIGENCIA ARTIFICIAL PARA ABOGADOS/MODULO 9  COMANDOS EN HERRAMIENTAS IA/Promts/3. LISTA DE PROMPRT PARA DOCENTES.docx" class="btn-block w-100 btn btn-light m-0" target="_blank" style="border-radius: 0px !important;">
                                            <i class="fa fa-file-text-o pr-2" aria-hidden="true"></i>
                                            3. LISTA DE PROMPRT PARA DOCENTES.docx
                                        </a>
                                        <a href="storage/CURSO INTELIGENCIA ARTIFICIAL PARA ABOGADOS/MODULO 9  COMANDOS EN HERRAMIENTAS IA/Promts/3. COMANDOS CON EXPERTOS EN DIVERSAS PROFESIONES.txt" class="btn-block w-100 btn btn-light m-0" target="_blank" style="border-radius: 0px !important;">
                                            <i class="fa fa-file-text-o pr-2" aria-hidden="true"></i>
                                            3. COMANDOS CON EXPERTOS EN DIVERSAS PROFESIONES.txt
                                        </a>
                                        <a href="storage/CURSO INTELIGENCIA ARTIFICIAL PARA ABOGADOS/MODULO 9  COMANDOS EN HERRAMIENTAS IA/Promts/4. LISTA DE PROMPRT PARA CHATGPT.docx" class="btn-block w-100 btn btn-light m-0" target="_blank" style="border-radius: 0px !important;">
                                            <i class="fa fa-file-text-o pr-2" aria-hidden="true"></i>
                                            4. LISTA DE PROMPRT PARA CHATGPT.docx
                                        </a>
                                        <a href="storage/CURSO INTELIGENCIA ARTIFICIAL PARA ABOGADOS/MODULO 9  COMANDOS EN HERRAMIENTAS IA/Promts/4. COMANDOS DE CONVERSIÓN EN LA APLICACIÓN.txt" class="btn-block w-100 btn btn-light m-0" target="_blank" style="border-radius: 0px !important;">
                                            <i class="fa fa-file-text-o pr-2" aria-hidden="true"></i>
                                            4. COMANDOS DE CONVERSIÓN EN LA APLICACIÓN.txt
                                        </a>
                                        <a href="storage/CURSO INTELIGENCIA ARTIFICIAL PARA ABOGADOS/MODULO 9  COMANDOS EN HERRAMIENTAS IA/Promts/5. COMANDOS PARA PROFESIONALES DE VÍDEO.txt" class="btn-block w-100 btn btn-light m-0" target="_blank" style="border-radius: 0px !important;">
                                            <i class="fa fa-file-text-o pr-2" aria-hidden="true"></i>
                                            5. COMANDOS PARA PROFESIONALES DE VÍDEO.txt
                                        </a>
                                        <a href="storage/CURSO INTELIGENCIA ARTIFICIAL PARA ABOGADOS/MODULO 9  COMANDOS EN HERRAMIENTAS IA/Promts/6. COMANDOS PARA PROFESIONALES DE SEO.txt" class="btn-block w-100 btn btn-light m-0" target="_blank" style="border-radius: 0px !important;">
                                            <i class="fa fa-file-text-o pr-2" aria-hidden="true"></i>
                                            6. COMANDOS PARA PROFESIONALES DE SEO.txt
                                        </a>
                                    </dd>

                                    <dt>
                                      <a href="#accordion10" aria-expanded="false" aria-controls="accordion10" class="accordion-title accordionTitle js-accordionTrigger">
                                        Módulo 10 Uso de otras herramientas
                                      </a>
                                    </dt>
                                    <dd class="accordion-content accordionItem is-collapsed mb-0" id="accordion10" aria-hidden="true">
                                        <button class="btn-block w-100 btn btn-light m-0 btn-curso" data-video="MODULO 10 USO DE OTRAS HERRAMIENTAS/1. Transcripcion de voz y audio a texto - Subtitulos.mp4" style="border-radius: 0px !important;">
                                            1. Transcripcion de voz y audio a texto - Subtitulos
                                        </button>
                                        <button class="btn-block w-100 btn btn-light m-0 btn-curso" data-video="MODULO 10 USO DE OTRAS HERRAMIENTAS/2. convierte texto escrito a mano en digital.mp4" style="border-radius: 0px !important;">
                                            2. convierte texto escrito a mano en digital
                                        </button>
                                        <button class="btn-block w-100 btn btn-light m-0 btn-curso" data-video="MODULO 10 USO DE OTRAS HERRAMIENTAS/3. El mejor grabador de pantalla.mp4" style="border-radius: 0px !important;">
                                            3. El mejor grabador de pantalla
                                        </button>
                                        <button class="btn-block w-100 btn btn-light m-0 btn-curso" data-video="MODULO 10 USO DE OTRAS HERRAMIENTAS/11. Integrando la IA en YouTube (Convertir voz en texto).mp4" style="border-radius: 0px !important;">
                                            11. Integrando la IA en YouTube (Convertir voz en texto)
                                        </button>
                                        <button class="btn-block w-100 btn btn-light m-0 btn-curso" data-video="MODULO 10 USO DE OTRAS HERRAMIENTAS/12. Integrando la IA en Transmisiones en Vivo.mp4" style="border-radius: 0px !important;">
                                            12. Integrando la IA en Transmisiones en Vivo
                                        </button>
                                    </dd>



                                  </dl>
                                </div>
                              </div>

                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div> --}}
        </div>
    </div>
</div>



<script>
    $(document).ready(function () {
        $(".btn-curso").click(function() {
            const urlTemis = 'https://ingytal.temisperu.com';
            const url = "/storage/CURSO INTELIGENCIA ARTIFICIAL PARA ABOGADOS/";
            var nuevoVideo = $(this).data('video');
            var partesRuta = nuevoVideo.split('/');
            var nombreVideo = partesRuta[partesRuta.length - 1];

            $('#video-name').text(nombreVideo);
            $('#videoSource').attr('src', urlTemis + url + nuevoVideo);
            $('#videoTag')[0].load();
            $('#videoTag')[0].play();
        })

        // $('#videoTag').on('loadeddata', function() {
        //     this.play();
        // });

        $('#my-cursos').on('hidden.bs.modal', function (e) {
            $('#videoTag')[0].pause();
        });

    })
</script>

<script>
    //uses classList, setAttribute, and querySelectorAll
    //if you want this to work in IE8/9 youll need to polyfill these
    (function(){
        var d = document,
        accordionToggles = d.querySelectorAll('.js-accordionTrigger'),
        setAria,
        setAccordionAria,
        switchAccordion,
    touchSupported = ('ontouchstart' in window),
    pointerSupported = ('pointerdown' in window);

    skipClickDelay = function(e){
        e.preventDefault();
        e.target.click();
    }

            setAriaAttr = function(el, ariaType, newProperty){
            el.setAttribute(ariaType, newProperty);
        };
        setAccordionAria = function(el1, el2, expanded){
            switch(expanded) {
        case "true":
            setAriaAttr(el1, 'aria-expanded', 'true');
            setAriaAttr(el2, 'aria-hidden', 'false');
            break;
        case "false":
            setAriaAttr(el1, 'aria-expanded', 'false');
            setAriaAttr(el2, 'aria-hidden', 'true');
            break;
        default:
                    break;
            }
        };
    //function
    switchAccordion = function(e) {
        e.preventDefault();
        var thisAnswer = e.target.parentNode.nextElementSibling;
        var thisQuestion = e.target;
        if(thisAnswer.classList.contains('is-collapsed')) {
            setAccordionAria(thisQuestion, thisAnswer, 'true');
        } else {
            setAccordionAria(thisQuestion, thisAnswer, 'false');
        }
        thisQuestion.classList.toggle('is-collapsed');
        thisQuestion.classList.toggle('is-expanded');
            thisAnswer.classList.toggle('is-collapsed');
            thisAnswer.classList.toggle('is-expanded');

        thisAnswer.classList.toggle('animateIn');
        };
        for (var i=0,len=accordionToggles.length; i<len; i++) {
            if(touchSupported) {
        accordionToggles[i].addEventListener('touchstart', skipClickDelay, false);
        }
        if(pointerSupported){
        accordionToggles[i].addEventListener('pointerdown', skipClickDelay, false);
        }
        accordionToggles[i].addEventListener('click', switchAccordion, false);
    }
    })();
</script>


@endsection
