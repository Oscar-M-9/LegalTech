
@extends('layouts.app')

@section('content')

{{--  @section('currentUrl', 'Redacción Perfeccionada')  --}}

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

                <div class="p-3">
                    <div class="row">
                        <div class="col-12">
                            <h2>Generar Escrito Final</h2>
                            <hr>
                        </div>
                    </div>


                    <div class="row mt-3">
                        <div class="col-lg-6 col-12 mb-3 mb-lg-0">
                            <div class="row mb-3">
                                <div class="col-12">
                                    <!-- Formulario para subir archivos -->
                                    <form enctype="multipart/form-data" method="POST" id="formularioSubida">
                                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" accept=".pdf, .txt, .docx"
                                                    for="customFile">Selecciona el archivo (.pdf ,.txt, .docx)</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="text-prompt">Ingresar Prompt:</label>
                                            <textarea class="form-control" id="text-prompt" rows="2">Genérame un alegato de respuesta para la resolución que te adjunto. Mi cliente es [Tu cliente].</textarea>
                                        </div>
                                        <button type="button" id="btn_subir" class="btn btn-primary btn-color-primary" disabled
                                            onclick="mostrarArchivo()">Subir
                                            Archivo</button>
                                    </form>
                                </div>
                            </div>
                            <div class="row d-none" id="area-tiny">
                                <div class="col-12">
                                    <textarea id="miEditor"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3 d-flex justify-content-between align-items-center"><button id="btn_anterior"
                                    class="btn btn-info d-none">Anterior</button> <span class="d-none" id="control-pdf">Page: <span
                                        id="page_num"></span> / <span id="page_count"></span> </span> <button id="btn_siguiente"
                                    class="btn btn-info d-none">Siguiente</button></div>
                            <div id="nombreArchivoSeleccionado"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


    <script>
        function mostrarArchivo() {
            var inputArchivo = document.getElementById('customFile');
            var nombreArchivoSeleccionado = document.getElementById('nombreArchivoSeleccionado');
            var area_tiny = document.getElementById('area-tiny');

            var contador_span = document.getElementById('page_num');
            var total_span = document.getElementById('page_count');

            var area_prompt = document.getElementById('text-prompt');

            // Validar que el textarea no esté vacío
            if (area_prompt.value.trim() === '') {
                // Mostrar un mensaje de error o realizar alguna acción en caso de que esté vacío
                Swal.fire({
                    icon: 'error',
                    title: 'Campo Vacío',
                    text: 'Por favor, ingrese contenido en el campo de prompt.',
                });
                return;
            }

            if (inputArchivo.files.length > 0) {

                var nombreArchivo = inputArchivo.files[0].name;
                var extension = nombreArchivo.split('.').pop().toLowerCase();

                // Hacer Post/GET y guardar texto
                // Hacer Post/GET y guardar texto

                area_tiny.classList.remove('d-none');

                const formData = new FormData();
                const fileField = document.getElementById('customFile');
                let field_data = fileField.files[0];

                formData.append("id_assistant", "asst_AvvL1BpYtzB6yUG6NGXreth9");
                formData.append("prompt", area_prompt.value);
                formData.append("file", field_data);

                mostrar_carga();

                fetch('https://chatbotv2.ingytal.com:8083/chatbot_admin/generate-allegation', {
                    method: "POST",
                    body: formData//JSON.stringify(formData),
                })
                .then(response => response.json())
                .then(function(response){
                    // Destruir el editor existente si hay uno
                    if (tinymce.get('miEditor')) {
                        tinymce.get('miEditor').remove();
                    }
                    tinymce.init({
                        selector: '#miEditor', // ID del textarea
                        height: 422, // Altura del editor
                        language: 'es',
                        plugins: 'autolink lists link image charmap print preview anchor',
                        toolbar: 'undo redo | formatselect | bold italic backcolor | \
                        alignleft aligncenter alignright alignjustify | \
                        bullist numlist outdent indent | removeformat | help',
                        init_instance_callback: function (editor) {
                            // Contenido que se establecerá al inicializar

                            //Asignar Contenido
                            var contenidoInicial = '<p>'+response.alegato+'</p>';
                            //Asignar Contenido

                            // Establecer el contenido inicial del editor
                            editor.setContent(contenidoInicial);
                        }
                    });

                    cerrar_carga();
                });

                /*
                tinymce.init({
                    selector: '#miEditor', // ID del textarea
                    height: 422, // Altura del editor
                    language: 'es',
                    plugins: 'autolink lists link image charmap print preview anchor',
                    toolbar: 'undo redo | formatselect | bold italic backcolor | \
                    alignleft aligncenter alignright alignjustify | \
                    bullist numlist outdent indent | removeformat | help',
                    init_instance_callback: function (editor) {
                        // Contenido que se establecerá al inicializar

                        //Asignar Contenido
                        var contenidoInicial = '<p>¡Hola! Este es el contenido inicial del editor.</p>';
                        //Asignar Contenido

                        // Establecer el contenido inicial del editor
                        editor.setContent(contenidoInicial);
                    }
                });
                */

                if (extension == 'docx') {
                    var archivo = inputArchivo.files[0];
                    var reader = new FileReader();

                    reader.onload = function (event) {
                        var arrayBuffer = event.target.result;

                        mammoth.convertToHtml({ arrayBuffer: arrayBuffer })
                            .then(function (result) {
                                nombreArchivoSeleccionado.innerHTML = result.value;
                            })
                            .catch(function (err) {
                                console.error(err);
                            });
                    };

                    reader.readAsArrayBuffer(archivo);
                } else if (extension == 'txt') {
                    var archivo = inputArchivo.files[0];
                    var reader = new FileReader();

                    reader.onload = function (event) {
                        var contenido = event.target.result;
                        nombreArchivoSeleccionado.innerHTML = contenido;
                    };

                    reader.readAsText(archivo);
                } else if (extension == 'pdf') {

                    var archivo = inputArchivo.files[0];
                    var reader = new FileReader();
                    document.getElementById('control-pdf').classList.remove('d-none');;
                    document.getElementById('btn_anterior').classList.remove('d-none');;
                    document.getElementById('btn_siguiente').classList.remove('d-none');;

                    reader.onload = function (event) {
                        var arrayBuffer = event.target.result;

                        // Cargar el visor de PDF
                        pdfjsLib.getDocument({ data: arrayBuffer }).promise.then(function (pdf) {
                            // Puedes personalizar el visor según tus necesidades
                            var pageNumber = 1;
                            var numPages = pdf.numPages;
                            total_span.textContent = numPages
                            contador_span.textContent = pageNumber;

                            function renderPage(pageNumber) {
                                pdf.getPage(pageNumber).then(function (page) {
                                    var scale = 1.3;
                                    var viewport = page.getViewport({ scale: scale });

                                    // Crear un lienzo para el PDF
                                    var canvas = document.createElement('canvas');
                                    var context = canvas.getContext('2d');
                                    canvas.height = viewport.height;
                                    canvas.width = viewport.width;
                                    canvas.style.width = '100%';
                                    nombreArchivoSeleccionado.innerHTML = ''; // Limpiar cualquier contenido anterior
                                    nombreArchivoSeleccionado.appendChild(canvas);

                                    // Renderizar la página en el lienzo
                                    page.render({
                                        canvasContext: context,
                                        viewport: viewport,
                                        intent: 'default', // Puedes probar con 'print' u otros valores
                                        background: 'rgb(255, 255, 255)' // Puedes ajustar el color de fondo si es necesario
                                    });
                                });
                            }

                            // Inicializar la primera página
                            renderPage(pageNumber);

                            // Agregar controles para navegar entre las páginas
                            var prevButton = document.getElementById('btn_anterior');
                            prevButton.textContent = 'Anterior';
                            prevButton.addEventListener('click', function () {
                                if (pageNumber > 1) {
                                    pageNumber--;
                                    contador_span.textContent = pageNumber;
                                    renderPage(pageNumber);
                                }
                            });

                            var nextButton = document.getElementById('btn_siguiente');
                            nextButton.textContent = 'Siguiente';
                            nextButton.addEventListener('click', function () {
                                if (pageNumber < numPages) {
                                    pageNumber++;
                                    contador_span.textContent = pageNumber;
                                    renderPage(pageNumber);
                                }
                            });

                        }).catch(function (err) {
                            console.error(err);
                        });
                    };

                    reader.readAsArrayBuffer(archivo);
                }
            }
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var inputArchivo = document.getElementById('customFile');

            inputArchivo.addEventListener('change', function () {
                var nombreArchivoSeleccionado = document.getElementById('nombreArchivoSeleccionado');
                var btnSubir = document.getElementById('btn_subir');

                // Limpiar el contenido anterior
                nombreArchivoSeleccionado.innerHTML = '';
                var area_tiny = document.getElementById('area-tiny');
                area_tiny.classList.add('d-none');
                document.getElementById('control-pdf').classList.add('d-none');
                document.getElementById('btn_anterior').classList.add('d-none');
                document.getElementById('btn_siguiente').classList.add('d-none');

                btnSubir.disabled = true;

                // Verificar si se seleccionó un archivo
                if (inputArchivo.files.length > 0) {
                    // Obtener el nombre del archivo
                    var nombreArchivo = inputArchivo.files[0].name;

                    var extension = nombreArchivo.split('.').pop().toLowerCase();

                    if (['pdf', 'txt', 'docx'].indexOf(extension) !== -1) {

                        btnSubir.disabled = false;
                        // Actualizar el contenido del label asociado al input
                        var labelCustomFile = document.querySelector('.custom-file-label');
                        labelCustomFile.innerHTML = nombreArchivo;

                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Formato de archivo no válido',
                            text: 'Por favor, selecciona un archivo PDF, TXT o DOCX.',
                        });
                    }
                } else {
                    // Limpiar el contenido si no se seleccionó ningún archivo
                    var labelCustomFile = document.querySelector('.custom-file-label');
                    labelCustomFile.innerHTML = 'Selecciona el archivo (.pdf ,.txt, .docx)';
                }
            });
        });
    </script>

    {{--  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>  --}}
    {{--  <script src="{{ asset('assets/js/legalBot-script.js') }}"></script>  --}}

@endsection

