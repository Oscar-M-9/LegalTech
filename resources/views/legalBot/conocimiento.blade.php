
@extends('layouts.app')

@section('content')

{{--  @section('currentUrl', 'Entrena tu Asistente legal')  --}}

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
                            <h2>Conocimientos:</h2>
                            <hr>
                        </div>
                    </div>
                    <div class="row mb-3 d-flex justify-content-center">
                        <div class="col-lg-11 col-12 cont-lista rounded p-3">
                            <div class="row d-flex mb-3">
                                <div class="col-12">
                                    <button type="button" data-toggle="modal" data-target="#staticBackdrop1"
                                        class="btn btn-primary btn-icon btn-color-primary"> <ion-icon class="icon-btn"
                                            name="document-text-outline"></ion-icon><span>Agregar Archivo</span></button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <!--<th scope="col">Nombre</th>-->
                                                <th scope="col">Archivo</th>
                                                <th scope="col">Fecha de Registro</th>
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody id="table_body_archivos">
                                            <!-- Elemento
                                            <tr>

                                                <th scope="row">1</th>
                                                <td>Nombre de Conocimiento</td>
                                                <td><a href="">Examenes.pdf</a></td>
                                                <td>19/12/2023</td>
                                                <td>
                                                    <button class="btn btn-primary btn-info btn-actions btn-editar"
                                                        data-toggle="modal" data-target="#modal_editar_archivo"
                                                        data-id-registro="1"> <ion-icon class="icon-actions"
                                                            name="create-outline"></ion-icon></button>
                                                    <button data-id-registro="1"
                                                        class="btn btn-primary btn-eliminar btn-danger btn-actions"> <ion-icon
                                                            class="icon-actions" name="trash-outline"></ion-icon></button>
                                                </td>
                                            </tr>
                                             Elemento -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-11 col-12 cont-lista rounded p-3">
                            <div class="row d-flex mb-3">
                                <div class="col-12">
                                    <button type="button" data-toggle="modal" data-target="#staticBackdrop2"
                                        class="btn btn-warning btn-icon btn-color-secondary"> <ion-icon class="icon-btn"
                                            name="text-outline"></ion-icon><span>Agregar Texto</span></button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Fecha de Registro</th>
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody id="table_body_texto">
                                            <!-- Elemento
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Nombre de Conocimiento </td>
                                                <td>19/12/2023</td>
                                                <td>
                                                    <button class="btn btn-primary btn-info btn-actions btn_editar_texto"
                                                        data-toggle="modal" data-target="#modal_editar_texto" data-id-registro="1">
                                                        <ion-icon class="icon-actions" name="create-outline"></ion-icon></button>
                                                    <button data-id-registro="1"
                                                        class="btn btn-primary btn-eliminar btn-danger btn-actions"> <ion-icon
                                                            class="icon-actions" name="trash-outline"></ion-icon></button>
                                                </td>
                                            </tr>
                                             Elemento -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


    <!-- Modal Archivo -->
    <div class="modal fade" id="staticBackdrop1" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Nuevo Conocimiento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Crear archivo form -->
                    <form id="crearGrupoForm" class="row px-3">

                        <div class="col-lg-7 col-12">
                            <div class="form-group">
                                <!--<label for="nombre_conocimiento_archivo" class="col-form-label">Nombre:</label>
                                <input type="text" class="form-control" id="nombre_conocimiento_archivo">
                                -->
                                <!-- Oculto -->
                                <input type="text" class="form-control d-none" id="id_asistent_archivo" value="asst_AvvL1BpYtzB6yUG6NGXreth9">
                                <!-- Oculto -->
                            </div>
                            <div class="form-group">
                                <div class="col-12 px-0">
                                    <label>Archivo Seleccionado:</label>
                                </div>
                                <div class="col-12 px-0">
                                    <label id="nombre_archivo">Ninguno</label>
                                </div>
                            </div>


                        </div>
                        <div class="col-lg-5 col-12">
                            <div class="form-group">
                                <label for="archivo" class="col-form-label">Archivo:</label>
                                <div class="input-group d-flex justify-content-center">
                                    <input type="file" class="form-control" id="archivo" style="display: none;">
                                    <label for="archivo" class="input-group-text input-subir row h-100">
                                        <div class="col-12">
                                            <ion-icon name="cloud-upload-outline"></ion-icon>
                                        </div>
                                        <div class="col-12">
                                            <span>Subir archivo (.pdf, .txt, .docx)</span>

                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>

                    </form>
                    <!-- Crear archivo form -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" id="btn_subir_archivo" disabled class="btn btn-primary btn-color-primary">Crear
                        Conocimiento</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Archivo -->

    <!-- Modal Texto -->
    <div class="modal fade" id="staticBackdrop2" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Nuevo Conocimiento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Crear texto form -->
                    <form id="form_texto">
                        <div class="form-group">
                            <label for="nombre_conocimiento_texto" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre_conocimiento_texto">
                            <!-- Oculto -->
                            <input type="text" class="form-control d-none" id="id_asistent_texto" value="asst_AvvL1BpYtzB6yUG6NGXreth9">
                            <!-- Oculto -->
                        </div>
                        <div class="form-group">
                            <label for="contenido_conocimiento" class="col-form-label">Contenido:</label>
                            <textarea class="form-control" id="contenido_conocimiento" rows="10"></textarea>
                        </div>
                    </form>
                    <!-- Crear texto form -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" id="btn_subir_texto" class="btn btn-primary btn-color-primary">Crear Conocimiento</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Texto -->

    <!-- Modal Editar Archivo -->
    <div class="modal fade" id="modal_editar_archivo" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="modalEditarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditarLabel">Editar Conocimiento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Editar archivo form -->
                    <form class="row">

                        <div class="col-lg-7 col-12">
                            <div class="form-group">
                                <label for="editar_nombre_conocimiento_archivo" class="col-form-label">Nombre:</label>
                                <input type="text" class="form-control" id="editar_nombre_conocimiento_archivo">
                                <!-- Oculto -->
                                <input type="text" class="form-control d-none" id="id_asistent">
                                <input type="text" class="form-control d-none" id="editar_id_registro">
                                <!-- Oculto -->
                            </div>
                            <div class="form-group">
                                <div class="col-12 px-0">
                                    <label>Archivo Seleccionado:</label>
                                </div>
                                <div class="col-12 px-0">
                                    <label id="editar_nombre_archivo">Ninguno</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-12">
                            <div class="form-group">
                                <label for="archivo" class="col-form-label">Archivo:</label>
                                <div class="input-group d-flex justify-content-center">
                                    <input type="file" class="form-control" id="editar_archivo" style="display: none;">
                                    <label for="editar_archivo" class="input-group-text input-subir row h-100">
                                        <div class="col-12">
                                            <ion-icon name="cloud-upload-outline"></ion-icon>
                                        </div>
                                        <div class="col-12">
                                            <span>Subir archivo (.pdf, .txt, .docx)</span>

                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>

                    </form>
                    <!-- Editar archivo form -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" id="btn_guardar_cambios" disabled class="btn btn-primary btn-color-primary">Guardar
                        cambios</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Editar Archivo -->


    <!-- Modal Editar Texto -->
    <div class="modal fade" id="modal_editar_texto" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="modalEditarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditarLabel">Editar Conocimiento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Editar texto form -->
                    <form id="form_texto">
                        <div class="form-group">
                            <label for="editar_nombre_conocimiento_texto" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" id="editar_nombre_conocimiento_texto">
                            <!-- Oculto -->
                            <input type="text" class="form-control d-none" id="id_asistent_texto">
                            <input type="text" class="form-control d-none" id="editar_id_registro_texto">
                            <!-- Oculto -->
                        </div>
                        <div class="form-group">
                            <label for="editar_contenido_conocimiento" class="col-form-label">Contenido:</label>
                            <textarea class="form-control" id="editar_contenido_conocimiento" rows="10"></textarea>
                        </div>
                    </form>
                    <!-- Editar texto form -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" id="btn_guardar_cambios_texto" class="btn btn-primary btn-color-primary">Guardar
                        cambios</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Editar Texto -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var inputArchivo = document.getElementById('archivo');

            inputArchivo.addEventListener('change', function () {
                var nombreArchivoSeleccionado = document.getElementById('nombre_archivo');
                var btnSubir = document.getElementById('btn_subir_archivo');

                // Limpiar el contenido anterior
                nombreArchivoSeleccionado.innerHTML = 'Ninguno';
                btnSubir.disabled = true;

                // Verificar si se seleccionó un archivo
                if (inputArchivo.files.length > 0) {
                    // Obtener el nombre del archivo
                    var nombreArchivo = inputArchivo.files[0].name;

                    var extension = nombreArchivo.split('.').pop().toLowerCase();

                    if (['pdf', 'txt', 'docx'].indexOf(extension) !== -1) {

                        btnSubir.disabled = false;
                        // Actualizar el contenido del label asociado al input
                        nombreArchivoSeleccionado.innerHTML = nombreArchivo;

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

    <script>
        document.getElementById('btn_subir_archivo').addEventListener('click', function () {
            // Obtener el valor del campo
            //var nombreGrupo = document.getElementById('nombre_conocimiento_archivo').value;
            var id_asistent = document.getElementById('id_asistent_archivo').value;
            var archivoInput = document.getElementById('archivo');
            var archivo = archivoInput.files[0];

            if (!archivo) {
                // Mostrar mensaje de validación con Bootstrap
                Swal.fire('Falta de archivo.', 'Cargue un archivo antes de registrar.', 'warning');
                return;
            }

            if (archivo.size > 500 * 1024 * 1024 || archivo.size < 2 * 1024) {
                // Mostrar mensaje de validación con Bootstrap
                Swal.fire('Tamaño de archivo incorrecto.', 'El archivo debe ser menor a 500 MB y mayor a 2 KB.', 'warning');
                return;
            }


            var formData = new FormData();
            //formData.append('nombre_conocimiento', nombreGrupo);
            formData.append('id_assistant', id_asistent);
            formData.append('file', archivo);

            mostrar_carga();

            // Realizar la solicitud POST
            fetch('https://chatbotv2.ingytal.com:8083/chatbot_admin/upload-file', {
                method: 'POST',
                body: formData,
            })
                .then(response => response.json())
                .then(data => {
                    // Manejar la respuesta del servidor
                    console.log(data);
                    // Cerrar el modal si es exitosa
                    if (data.status === 'success') {
                        $('#staticBackdrop1').modal('hide');
                    }

                    if (data.status === 'success') {
                        cerrar_carga();
                        Swal.fire('Registrado', 'Conocimiento registrado correctamente.', 'success')
                        .then((result) => {

                            location.reload();
                        });
                    }
                })
                .catch((error) => {
                    cerrar_carga();
                    console.error('Error:', error);
                    Swal.fire('Error', 'Ocurrió un error al intentar registrar el conocimiento', 'error');
                });
        });
    </script>

    <script>
        document.getElementById('btn_subir_texto').addEventListener('click', function () {
            // Obtener el valor del campo
            var nombreGrupo = document.getElementById('nombre_conocimiento_texto').value;
            var contenido = document.getElementById('contenido_conocimiento').value;
            var id_asistent = document.getElementById('id_asistent_texto').value;


            // Validar que el campo de nombre no esté vacío
            if (!nombreGrupo.trim() || !contenido.trim()) {
                // Mostrar mensaje de validación con Bootstrap
                if (!nombreGrupo.trim()) {
                    $('#nombre_conocimiento_texto').addClass('is-invalid');
                }
                if (!contenido.trim()) {
                    $('#contenido_conocimiento').addClass('is-invalid');
                }
                return;
            } else {
                // Remover la clase de invalidación si el campo está lleno
                $('#nombre_conocimiento_texto').removeClass('is-invalid');
                $('#contenido_conocimiento').removeClass('is-invalid');
            }

            var formData = new FormData();
            formData.append('name', nombreGrupo);
            formData.append('id_assistant', id_asistent);
            formData.append('text', contenido);


            mostrar_carga();


            // Realizar la solicitud POST
            fetch('https://chatbotv2.ingytal.com:8083/chatbot_admin/add-response/text', {
                method: 'POST',
                body: formData,
            })
                .then(response => response.json())
                .then(data => {
                    // Manejar la respuesta del servidor
                    console.log(data);
                    // Cerrar el modal si es exitosa
                    if (data.status === 'success') {
                        $('#staticBackdrop2').modal('hide');
                    }

                    if (data.status === 'success') {
                        cerrar_carga();
                        Swal.fire('Registrado', 'Conocimiento registrado correctamente.', 'success')
                        .then(() => location.reload());
                    }
                })
                .catch((error) => {
                    cerrar_carga();
                    console.error('Error:', error);
                    Swal.fire('Error', 'Ocurrió un error al intentar registrar el conocimiento', 'error');
                });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var inputArchivo = document.getElementById('editar_archivo');

            inputArchivo.addEventListener('change', function () {
                var nombreArchivoSeleccionado = document.getElementById('editar_nombre_archivo');
                var btnSubir = document.getElementById('btn_guardar_cambios');

                // Limpiar el contenido anterior
                nombreArchivoSeleccionado.innerHTML = 'Ninguno';
                btnSubir.disabled = true;

                // Verificar si se seleccionó un archivo
                if (inputArchivo.files.length > 0) {
                    // Obtener el nombre del archivo
                    var nombreArchivo = inputArchivo.files[0].name;

                    var extension = nombreArchivo.split('.').pop().toLowerCase();

                    if (['pdf', 'txt', 'docx'].indexOf(extension) !== -1) {

                        btnSubir.disabled = false;
                        // Actualizar el contenido del label asociado al input
                        nombreArchivoSeleccionado.innerHTML = nombreArchivo;

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

    <script>
        // Evento al hacer clic en el botón de editar texto
        /*document.addEventListener('click', function (event) {
            if (event.target.classList.contains('btn_editar_texto')) {
                let idRegistro = event.target.getAttribute('data-id-registro');
                let contenido = event.target.getAttribute('data-contenido');
                let id_assistant = event.target.getAttribute('data-id-assistant');
                let nombre = event.target.getAttribute('data-nombre');

                let campo_nombre = document.getElementById('editar_nombre_conocimiento_texto');
                let campo_contenido = document.getElementById('editar_contenido_conocimiento');
                let campo_id_asistente = document.getElementById('id_asistent_texto');
                let campo_id_registro = document.getElementById('editar_id_registro_texto');

                // Llenar el formulario con los datos existentes

                campo_nombre.value=nombre;
                campo_id_asistente.value=id_assistant;
                campo_id_registro.value=idRegistro;
                campo_contenido.value=contenido;

                // Abrir el modal de edición
                $('#modalEditar').modal('show');
            }
        });*/

        // Evento al hacer clic en el botón de guardar cambios
        document.getElementById('btn_guardar_cambios_texto').addEventListener('click', function () {
            let campo_nombre = document.getElementById('editar_nombre_conocimiento_texto').value;
            let campo_contenido = document.getElementById('editar_contenido_conocimiento').value;
            let campo_id_asistente = document.getElementById('id_asistent_texto').value;
            let campo_id_registro = document.getElementById('editar_id_registro_texto').value;

            // Validar que el campo de nombre no esté vacío
            if (!campo_nombre.trim() || !campo_contenido.trim()) {
                // Mostrar mensaje de validación con Bootstrap
                if (!campo_nombre.trim()) {
                    $('#editar_nombre_conocimiento_texto').addClass('is-invalid');
                }
                if (!campo_contenido.trim()) {
                    $('#editar_contenido_conocimiento').addClass('is-invalid');
                }
                return;
            }else {
                // Remover la clase de invalidación si el campo está lleno
                $('#editar_nombre_conocimiento_texto').removeClass('is-invalid');
                $('#editar_contenido_conocimiento').removeClass('is-invalid');
            }

                // Método POST
                var formData = new FormData();
                formData.append('name', campo_nombre);
                formData.append('text', campo_contenido);
                formData.append('id_assistant', campo_id_asistente);
                formData.append('id', campo_id_registro);

                mostrar_carga();

                // Realizar la solicitud POST
                fetch('https://chatbotv2.ingytal.com:8083/chatbot_admin/knowledge/text/edit', {
                    method: 'POST',
                    body: formData,
                })
                    .then(response => response.json())
                    .then(data => {
                        // Manejar la respuesta del servidor si es necesario
                        console.log(data);
                        // Cerrar el modal si la respuesta es exitosa
                        if (data.status === 'success') {
                            cerrar_carga();
                            Swal.fire('Editado', 'Se ha editado correctamente.', 'success')
                            .then(() => {
                                location.reload();
                            });

                        }
                    })
                    .catch((error) => {
                        cerrar_carga();
                        console.error('Error:', error);
                        Swal.fire('Error', 'Ocurrió un error al intentar editar.', 'error');
                    });
            });
    </script>

    <script>
        window.onload = (event) => {
            let id_assistant = 'asst_AvvL1BpYtzB6yUG6NGXreth9';
            mostrar_carga();

            let url = 'https://chatbotv2.ingytal.com:8083/chatbot_admin/list-knowledge-text?id_assistant='+id_assistant;
            fetch(url,{
                method: 'GET'
            })
            .then(response => response.json())
            .then(data => {

                let table = document.getElementById("table_body_texto");

                data.data.knowledge.forEach(function(element){

                    let row = document.createElement("tr");
                    let c1 = document.createElement("td");
                    let c2 = document.createElement("td");
                    let c3 = document.createElement("td");
                    let c4 = document.createElement("td");

                    c1.innerText = element.id;
                    c2.innerText = element.name;
                    c3.innerText = element.date;
                    c4.innerHTML = `<button class="btn btn-primary btn-info btn-actions btn_editar_texto"
                                            data-toggle="modal" data-target="#modal_editar_texto" data-id-registro="`+ element.id +`"
                                            data-nombre="`+element.name+`"
                                            data-contenido="`+element.conocimiento+`" data-id-assistant="`+element.id_assistant+`">
                                            <ion-icon class="icon-actions" name="create-outline"></ion-icon></button>
                                        <button data-id-registro="`+ element.id +`"
                                            class="btn btn-primary btn-eliminar-texto btn-danger btn-actions"> <ion-icon
                                                class="icon-actions" name="trash-outline"></ion-icon></button>`;

                    row.appendChild(c1);
                    row.appendChild(c2);
                    row.appendChild(c3);
                    row.appendChild(c4);

                    table.appendChild(row);

                    cerrar_carga();
                });
            })
            .then(() => {

                $('.btn_editar_texto').click(function(e){
                    var idRegistro = $(this).attr('data-id-registro');
                    var contenido = $(this).attr('data-contenido');
                    var id_assistant = $(this).attr('data-id-assistant');
                    var nombre = $(this).attr('data-nombre');
                    console.log(idRegistro)
                    console.log(contenido)
                    console.log(id_assistant)
                    console.log(nombre)

                    $('#modal_editar_texto').modal('show');

                    $('#editar_nombre_conocimiento_texto').val(nombre);
                    $('#editar_contenido_conocimiento').val(contenido);
                    $('#id_asistent_texto').val(id_assistant);
                    $('#editar_id_registro_texto').val(idRegistro);

                });
                    // Obtener todos los botones de eliminar
                    var btnEliminarList = document.querySelectorAll('.btn-eliminar-texto');

                    // Agregar un listener a cada botón
                    btnEliminarList.forEach(function (btnEliminar) {
                        btnEliminar.addEventListener('click', function () {
                            // Obtener el ID del registro desde el botón
                            var idRegistro = btnEliminar.getAttribute('data-id-registro');



                            // Mostrar SweetAlert
                            Swal.fire({
                                title: '¿Estás seguro?',
                                text: 'Esta acción no se puede deshacer',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#d33',
                                cancelButtonColor: '#3085d6',
                                confirmButtonText: 'Sí, eliminarlo',
                                cancelButtonText: 'Cancelar'
                            }).then((result) => {
                                // Si se confirma
                                if (result.isConfirmed) {
                                    // Obtener la URL de eliminación
                                    var urlEliminar = 'https://chatbotv2.ingytal.com:8083/chatbot_admin/knowledge/text/delete'; // Reemplaza con la URL

                                    mostrar_carga();
                                    // Realizar la solicitud POST para eliminar
                                    fetch(urlEliminar, {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/json',
                                        },
                                        body: JSON.stringify({
                                            id: idRegistro,
                                            id_assistant: id_assistant
                                            // Otros datos adicionales
                                        }),
                                    })
                                        .then(response => response.json())
                                        .then(data => {
                                            // Manejar la respuesta del servidor si es necesario
                                            console.log(data);

                                            // Cerrar el modal si la respuesta es exitosa
                                            if (data.status === 'success') {
                                                cerrar_carga();
                                                Swal.fire('Eliminado', 'El grupo ha sido eliminado', 'success')
                                                .then(()=> location.reload());
                                                // Puedes recargar la página o actualizar la tabla de ser necesario


                                            }
                                        })
                                        .catch((error) => {
                                            cerrar_carga();
                                            console.error('Error:', error);
                                            Swal.fire('Error', 'Ocurrió un error al intentar eliminar el elemento', 'error');
                                        });
                                }
                            });
                        });
                    });
            });

            //---------------------------------------

            let url_files = 'https://chatbotv2.ingytal.com:8083/chatbot_admin/list-knowledge-files?id_assistant='+id_assistant;
            fetch(url_files,{
                method: 'GET'
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);

                let table = document.getElementById("table_body_archivos");

                data.data.forEach(function(element){

                    let row = document.createElement("tr");
                    let c1 = document.createElement("td");
                    let c2 = document.createElement("td");
                    let c3 = document.createElement("td");
                    let c4 = document.createElement("td");

                    c1.innerText = element.nro;
                    c2.innerHTML = `<a href="`+element.url+`">`+element.name+`</a>`;
                    c3.innerText = element.date;
                    c4.innerHTML = `<button data-id-registro="`+element.id+`"
                                            class="btn btn-primary btn-eliminar-archivo btn-danger btn-actions"> <ion-icon
                                                class="icon-actions" name="trash-outline"></ion-icon></button>`;

                    row.appendChild(c1);
                    row.appendChild(c2);
                    row.appendChild(c3);
                    row.appendChild(c4);

                    table.appendChild(row);
                });
            })
            .then(() => {
                // Obtener todos los botones de eliminarlet id
                var btnEliminarList = document.querySelectorAll('.btn-eliminar-archivo');
                let id_assistant = 'asst_AvvL1BpYtzB6yUG6NGXreth9';

                // Agregar un listener a cada botón
                btnEliminarList.forEach(function (btnEliminar) {
                    btnEliminar.addEventListener('click', function () {
                        // Obtener el ID del registro desde el botón
                        var idRegistro = btnEliminar.getAttribute('data-id-registro');
                        // Mostrar SweetAlert
                        Swal.fire({
                            title: '¿Estás seguro?',
                            text: 'Esta acción no se puede deshacer',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#d33',
                            cancelButtonColor: '#3085d6',
                            confirmButtonText: 'Sí, eliminarlo',
                            cancelButtonText: 'Cancelar'
                        }).then((result) => {
                            // Si se confirma
                            if (result.isConfirmed) {
                                // Obtener la URL de eliminación
                                var urlEliminar = 'https://chatbotv2.ingytal.com:8083/chatbot_admin/knowledge/file/delete'; // Reemplaza con la URL

                                mostrar_carga();
                                // Realizar la solicitud POST para eliminar
                                fetch(urlEliminar, {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                    },
                                    body: JSON.stringify({
                                        id: idRegistro,
                                        id_assistant: id_assistant
                                        // Otros datos adicionales
                                    }),
                                })
                                    .then(response => response.json())
                                    .then(data => {
                                        // Manejar la respuesta del servidor si es necesario
                                        console.log(data);

                                        // Cerrar el modal si la respuesta es exitosa
                                        if (data.status === 'success') {
                                            cerrar_carga();

                                            Swal.fire('Eliminado', 'El grupo ha sido eliminado', 'success')
                                            .then((result) => {

                                                location.reload();
                                            });
                                        }



                                    })
                                    .catch((error) => {
                                        cerrar_carga();
                                        console.error('Error:', error);
                                        Swal.fire('Error', 'Ocurrió un error al intentar eliminar el elemento', 'error');
                                    });
                            }
                        });
                    });
                });
            });

        };
    </script>

    {{--  <script src="{{ asset('assets/js/legalBot-script.js') }}"></script>  --}}

@endsection
