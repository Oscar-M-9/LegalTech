
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

                    <main class="p-3">
                        <div class="row">
                            <div class="col-12">
                                <h2>Grupos de Conocimiento</h2>
                                <hr>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <button type="button" data-toggle="modal" data-target="#staticBackdrop" class="btn btn-primary btn-icon btn-color-primary"> <ion-icon class="icon-btn" name="add-circle-outline"></ion-icon><span>Agregar grupo de conocimiento</span></button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre del Grupo</th>
                                        <th scope="col">Fecha de Registro</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Elemento -->
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Respuesta sobre leyes</td>
                                            <td>19/12/2023</td>
                                            <td>
                                                <a href="{{ route('legalBot.conocimiento') }}" class="btn btn-info btn-actions"> <ion-icon class="icon-actions" name="eye-outline"></ion-icon></a>
                                                <button data-id-registro="1" class="btn btn-danger btn-actions btn-eliminar"> <ion-icon class="icon-actions" name="trash-outline"></ion-icon></button>
                                            </td>
                                        </tr>
                                        <!-- Elemento -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </main>


                </div>
            </div>
        </div>
    </div>


        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Nuevo Grupo de Conocimiento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <!-- Crear grupo form -->
                    <form id="crearGrupoForm">
                        <div class="form-group">
                          <label for="nombre-grupo" class="col-form-label">Nombre:</label>
                          <input type="text" class="form-control" id="nombre-grupo">
                        </div>
                      </form>
                    <!-- Crear grupo form -->
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" id="btnCrearGrupo" class="btn btn-primary btn-color-primary">Crear Grupo</button>
                </div>
            </div>
            </div>
        </div>
        <!-- Modal -->

        <script>
            document.getElementById('btnCrearGrupo').addEventListener('click', function () {
                // Obtener el valor del campo de texto
                mostrar_carga();
                var nombreGrupo = document.getElementById('nombre-grupo').value;


                // Realizar la solicitud POST con el valor del campo de texto
                fetch('/ruta-del-servidor', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        // Campos del método
                        nombre_grupo: nombreGrupo
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    // Manejar la respuesta del servidor si es necesario
                    console.log(data);
                    // Cerrar el modal si la respuesta es exitosa
                    if (data.status === 'success') {
                        $('#staticBackdrop').modal('hide');
                    }

                    if (data.status === 'success') {
                        cerrar_carga();
                        Swal.fire('Registrado', 'El grupo ha sido creado', 'success');
                    }
                })
                .catch((error) => {
                    cerrar_carga();
                    console.error('Error:', error);
                    Swal.fire('Error', 'Ocurrió un error al intentar crear el elemento', 'error');
                });
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
            // Obtener todos los botones de eliminar
            var btnEliminarList = document.querySelectorAll('.btn-eliminar');

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
                            var urlEliminar = 'tu-url-de-eliminacion'; // Reemplaza con la URL

                            mostrar_carga();
                            // Realizar la solicitud POST para eliminar
                            fetch(urlEliminar, {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                },
                                body: JSON.stringify({
                                    id: idRegistro
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
                                        Swal.fire('Eliminado', 'El grupo ha sido eliminado', 'success');
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
        </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.9.359/pdf.min.js"
        integrity="sha512-U5C477Z8VvmbYAoV4HDq17tf4wG6HXPC6/KM9+0/wEXQQ13gmKY2Zb0Z2vu0VNUWch4GlJ+Tl/dfoLOH4i2msw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mammoth/1.0.1/mammoth.browser.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    {{--  <script src="{{ asset('assets/js/legalBot-script.js') }}"></script>  --}}

@endsection
