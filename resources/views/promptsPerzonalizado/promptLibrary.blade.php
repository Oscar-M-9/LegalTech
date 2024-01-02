
@extends('layouts.app')

@section('content')

{{--  @section('currentUrl', 'Asistente Legal con AI')  --}}

    <script>
        const listaEnlaces = document.querySelectorAll('ul li a');

        // Itera sobre cada elemento 'a' y elimina el atributo 'id'
        listaEnlaces.forEach((enlace) => {
            enlace.removeAttribute('id');
        });

        $('.menu-home').attr('id', 'active');

    </script>

    <style>

        .new{
                font-size: 12px;
        }

        .card{

            padding: 20px;
            border:none;
            border-radius: 5px;

        }

        #card_chat{
            height: 70vh;
            max-height: 600px;
            overflow-y: auto;
        }

        .card-prompt{
            cursor: pointer;
            border-radius: 2rem;
        }

        .card-prompt:hover{
            background-color: #c8c9ce4e;
        }


        .inputs{

            position: relative;

        }

        /* .form-control {
                text-indent: 15px;
            border: none;
            height: 45px;
            border-radius: 0px;
            border-bottom: 1px solid #eee;
        }

        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #eee;
            outline: 0;
            box-shadow: none;
            border-bottom: 1px solid blue;
            }


            .form-control:focus  {
                color: blue;
            } */

        .inputs i{

                position: absolute;
            top: 14px;
            left: 4px;
            color: #b8b9bc;
        }

        .star{

            height: 40px;
            width: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #eee;
            margin-right: 10px;
            border-radius: 5px;

        }

        .time-text{

                font-size: 12px;
                color: #989898;
        }

        .dots{

            height: 7px;
            width: 7px;
            background-color: #eee;
            display: flex;
            border-radius: 50%;
            margin-left:7px;
            margin-right: 7px;
        }

        .yellow{

            color: #ffab2e;
        }

        .content-text-1{

            height: 40px;
            width: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            background-color: #ffe7cc;
            color: #ffa03a;
            font-weight: 700;

        }


        .blue{

            color: #6ecce6;
        }


        .content-text-2{

            height: 40px;
            width: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            background-color: #e2f5fa;
            color: #6ecce6;
            font-weight: 700;

        }


        .dark-blue{

            color: #572ce8;
        }


        .content-text-3{

            height: 40px;
            width: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            background-color:#572ce86b;
            color: #572ce8;
            font-weight: 700;

        }

        /*--------------*/
        .chat-online {
            color: #34ce57
        }

        .chat-offline {
            color: #e4606d
        }

        .chat-messages {
            display: flex;
            flex-direction: column;
            /*max-height: 800px;*/
        }

        .chat-message-left,
        .chat-message-right {
            display: flex;
            flex-shrink: 0
        }

        .chat-message-left {
            margin-right: auto
        }

        .chat-message-right {
            flex-direction: row-reverse;
            margin-left: auto
        }

        .user-message{
            text-align: end;
        }

        .message-error{
            color: #e4606d;
        }

        .header-chat{
            background-color: #0A2E4D;
            color: #FFCF40;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
        }

        .foto_bot{
            width: 40px
        }

        /*@media (min-width: 768px) and (max-width: 991px) {
            .flotante {
                position: fixed;
                width:100%;
                max-width: 21rem;
            }
        }
        @media (min-width: 992px) and (max-width: 1200px) {
            .flotante{
            position: fixed;
            width:100%;
            max-width: 29rem;
            }
        }

        @media (min-width: 1200px) {
            .flotante{
            position: fixed;
            width:100%;
            max-width: 30rem;
            }
        }*/

    </style>


    <div class="content">
        <div class="animated fadeIn">
            <div class="row px-3 ">

                <div class="col-md-12 px-0 card" style="border: none; border-radius: 5px">
                    <div class="mt-4 px-3">
                        <h3 class="text-black mb-3 " style="font-weight: 700;">
                            Asistencia IA
                        </h3>
                        <hr style="border-top: 2px solid rgba(0,0,0,.1) !important;">
                    </div>


                    <div class="container px-0">

                        <div class="row d-flex justify-content-center mt-2 ">
                            <div class="col-md-6 col-12 col-lg-6 mb-4 mb-lg-0">
                                <div class="flotante shadow mt-4">
                                    <div class="chat-messages p-3 text-center header-chat">
                                        <h4 class="m-0">LegalBot</h4>

                                    </div>

                                    <div class="card p-0 mb-0 " id="card_chat">

                                        {{-- <div class="chat-messages overflow-auto p-4">
                                            <div class="chat-message-right pb-4">
                                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3" style="text-align: right;">
                                                    <div class="font-weight-bold mb-1 d-flex justify-content-end">Tú</div>
                                                    <p class="input_prompt">
                                                    Lorem ipsum dolor sit amet, vis erat denique in, dicunt prodesset te vix.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>--}}
                                        {{-- <div class="chat-message-left p-4">
                                            <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                                <div class="font-weight-bold mb-1">Sharon Lessman</div>
                                                Sed pulvinar, massa vitae interdum pulvinar, risus lectus porttitor magna, vitae commodo lectus mauris et velit.
                                                Proin ultricies placerat imperdiet. Morbi varius quam ac venenatis tempus.
                                            </div>
                                        </div> --}}

                                        <div class="chat-message-left p-3">
                                            <div>
                                                <img width="20" src="{{ asset('/assets/icons/temis_legal bot ia 2.png')}}" class="rounded-circle border border-secondary foto_bot" alt="legalBot">
                                            </div>
                                            <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                                <div class="font-weight-bold mb-1">LegalBot</div>
                                                <p class="input_prompt" style="white-space: pre-line">
                                                    Yo seré tu asistente virtual, selecciona un prompt del panel del lado o escribe el tuyo y haz click en enviar.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mt-1">
                                        <!--<input id="input_chatgpt" type="text" class="form-control" placeholder="Type your message">-->
                                        <textarea id="input_chatgpt" name="text" class="form-control" style="height: auto;" placeholder="Escribe tu consulta..." rows="3"></textarea>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" id="btn_chatgpt" >Enviar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12 col-lg-6">

                                <div class="card shadow">

                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="font-weight-bold">Prompts</span>
                                    </div>

                                    <form method="get" action="{{ route('prompts') }}">
                                        <div class="mt-3 inputs">
                                            <div class="row mb-4">
                                                <i class="fa fa-search"></i>
                                                <div class="col-12 col-lg-12">
                                                    <div class="input-group barra-busqueda p-0">
                                                        <input type="search" name="texto" id="texto" class="form-control" value="{{$text}}" placeholder="Buscar" aria-label="Search" />
                                                        <div class="input-group-append">
                                                            <button class="btn btn-primary" id="search-addon">
                                                                Buscar
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <select class="form-control col-12 col-lg-12 mb-4" name="categoria" id="select_categoria">
                                                @if (app('request')->input('categoria') == 'categoria' || is_null(app('request')->input('categoria')))
                                                    <option value="categorias" selected>Categorias</option>
                                                @else
                                                    <option value="categorias">Categorias</option>
                                                @endif

                                                @foreach ($categorias as $categoria)
                                                    @if (app('request')->input('categoria') == $categoria->id)
                                                    <option selected value="{{ $categoria->id }}">{{ $categoria->name }}</option>
                                                    @else
                                                    <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </form>

                                    <div id="lista"></div>


                                    {{-- <div class="d-flex justify-content-center mt-4">
                                        {!! $promptList->onEachSide(1)->links('pagination::bootstrap-4') !!}
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

        {{--  <script type='text/javascript'>
            var myLink = document.querySelector('a[href="#"]');
            myLink.addEventListener('click', function(e) {
                e.preventDefault();
            });
        </script>  --}}

        <script type="text/javascript">
            let input = document.getElementById('input_chatgpt');

            function pickPrompt(card){
                // let cardBody = document.querySelector('.card-prompt');
                let title = card.querySelector('.card-title').innerText;
                let content = card.querySelector('.card-text').innerText;

                input.value = content;
                console.log(input);
                console.log(content);
            }


            /*
            input.addEventListener("change", function(){
                if(input.innerText.trim().length > 0)
                {
                    this.style.height = ""; this.style.height = this.scrollHeight + "px";
                };

            }, false);
            */
        </script>

        <script type="text/javascript">

            function askChatgpt(){
                let input = document.getElementById('input_chatgpt');

                if (input.value.trim().length<1){
                    input.classList.add("is-invalid");
                    return;
                }else{
                    input.classList.remove("is-invalid");
                }

                let card_chat = document.getElementById('card_chat');
                let message_div = document.createElement('div');
                message_div.classList.add("chat-messages", "p-2");
                message_div.innerHTML = `<div class="chat-message-right p-3">
                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3 user-message">
                                    <div class="font-weight-bold mb-1">Tú</div>
                                    <p class="input_prompt" style="white-space: pre-line">
                                        `+ input.value +`
                                    </p>
                                </div>
                            </div>`;
                card_chat.appendChild(message_div);

                let data = {
                    "model":"gpt-3.5-turbo-1106",
                    "messages": [
                        {
                            "role": "system",
                            "content": "You are a helpful assistant."
                        },
                        {
                            "role":"user",
                            "content": input.value
                        }
                    ]
                };

                mostrar_carga();

                fetch("https://api.openai.com/v1/chat/completions",{
                    body: JSON.stringify(data),
                    headers: {
                        Authorization: "Bearer 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",
                        "Content-Type": "application/json"
                    },
                    method: "POST"
                })
                .then(response => response.json())
                .then(data => {
                    console.log(data.choices[0].message.content);
                    let text = data.choices[0].message.content;

                    let card_chat = document.getElementById('card_chat');
                    let div = document.createElement('div');
                    div.classList.add("chat-messages", "p-2");
                    div.innerHTML = `<div class="chat-message-left p-3">
                                <div><img src="{{ asset('/assets/icons/temis_legal bot ia 2.png')}}" class="rounded-circle border border-secondary foto_bot" alt="">
                                </div>
                                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                        <div class="font-weight-bold mb-1">LegalBot</div>
                                        <p class="input_prompt" style="white-space: pre-line">
                                            `+ text +`
                                        </p>
                                    </div>
                                </div>`;
                    card_chat.appendChild(div);
                    cerrar_carga();
                })
                .catch((err) => {

                    let card_chat = document.getElementById('card_chat');
                    let div_error = document.createElement('div');
                    div_error.classList.add("chat-messages", "p-2");
                    div_error.innerHTML = `<div class="chat-message-left p-4">
                                <div><img src="{{ asset('/assets/icons/temis_legal bot ia.png')}}" class="rounded-circle border border-secondary foto_bot" alt="">
                                </div>
                                    <div class="flex-shrink-1 bg-light rounded message-error py-2 px-3 ml-3">
                                        <div class="font-weight-bold mb-1">LegalBot</div>
                                        <p class="input_prompt" style="white-space: pre-line">
                                            Perdón, no puedo contestar por el momento.
                                        </p>
                                    </div>
                                </div>`;
                    card_chat.appendChild(div_error);
                    cerrar_carga()
                    console.log(err);
                });


                input.value="";
                card_chat.scrollTop = card_chat.scrollHeight;
                console.log("inside function");
            }

            $(document).ready (function()
            {
                $("#btn_chatgpt").on("click",askChatgpt);
            });

        </script>

        <script type="text/javascript">
            //Funcion Spinner
            let miSweetAlert;

            function mostrar_carga() {
                alerta_carga = Swal.fire({
                    title: 'Cargando...',
                    allowOutsideClick: false,
                    showConfirmButton: false, // Oculta el botón de confirmación
                    html: '<div class="spinner-border m-3 hidespinner style" role="status" ><span class="visually-hidden"></span></div>',
                });
            }

            function cerrar_carga() {
                // Cierra la alerta utilizando la instancia almacenada en la variable
                if (alerta_carga) {
                    alerta_carga.close();
                }
            }
        </script>

<script type="text/javascript">

    $(document).ready(function() {

        cargarLista();

        function cargarLista(page = 1) {
            var texto = $('#texto').val();
            var categoria = $('#select_categoria').val();
            $.ajax({
                url: "{{ route('prompts') }}?page=" + page,
                type: "GET",
                data: {texto: texto, categoria: categoria},
                success: function(response) {
                    // Actualiza el contenido de la lista con el HTML de la vista parcial
                    $('#lista').html(response.lista_resultados_html);
                },
                error: function(error) {
                    console.error('Error en la solicitud AJAX:', error);
                }
            });
        }

        $('#search-addon').click(function(event) {
            event.preventDefault();
            cargarLista();
        });

        $(document).on('click', '.pagination a', function(event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            cargarLista(page);
        });
    });

</script>

@endsection
