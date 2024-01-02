<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LegalTech</title>
    <link rel="shortcut icon" href="{{ asset('assets/icons/temis_legal bot ia.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">
    {{--  <link rel="shortcut icon" href="/assets/icons/temis_legal bot ia.png" type="image/x-icon">  --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="{{ asset('assets/assets/js/tinymce54/tinymce.min.js') }}" type="text/javascript"></script>

    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />

</head>
<body>
    <div class="menu">
        <ion-icon name="menu-outline"></ion-icon>
        <ion-icon name="close-outline"></ion-icon>
    </div>

    <div class="barra-lateral">
        <div>
            <div class="nombre-pagina">
                <img src="/assets/icons/temis_legal bot ia.png" width="30" alt="LegalTech">
                <span style="color: #fff;">LegalTech</span>
            </div>
        </div>

        <nav class="navegacion">
            <ul>
                <li>
                    <a href="{{ route('home') }}" class="menu-home">
                        <ion-icon name="browsers"></ion-icon>
                        <span>Asistencia IA</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('jurisprudencia') }}" class="menu-jurisprudencia">
                        <ion-icon name="logo-buffer"></ion-icon>
                        <span> Jurisprudencia </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('courses') }}" class="menu-courses-ia">
                        <ion-icon name="images"></ion-icon>
                        <span> Cursos IA </span>
                    </a>
                </li>

                 {{--  <li>
                    <a id="active" href="index.html">
                        <ion-icon name="cloud-upload-outline"></ion-icon>
                        <span>Gestionar <br> Conocimiento</span>
                    </a>
                </li>
                <li>
                    <a href="escrito_final.html">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span>Generar Escrito <br> Final</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="trash-outline"></ion-icon>
                        <span>Test</span>
                    </a>
                </li>   --}}
            </ul>
        </nav>

        {{--  <div>
            <div class="linea"></div>

            <div class="modo-oscuro">
                <div class="info">
                    <ion-icon name="moon-outline"></ion-icon>
                    <span>Dark Mode</span>
                </div>
                <div class="switch">
                    <div class="base">
                        <div class="circulo">

                        </div>
                    </div>
                </div>
            </div>


        </div>   --}}

    </div>

    <main>

        @yield('content')

    </main>

    {{--  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>  --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.9.359/pdf.min.js"
        integrity="sha512-U5C477Z8VvmbYAoV4HDq17tf4wG6HXPC6/KM9+0/wEXQQ13gmKY2Zb0Z2vu0VNUWch4GlJ+Tl/dfoLOH4i2msw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mammoth/1.0.1/mammoth.browser.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('/assets/js/script.js') }} "></script>

    <script>
        const playerCourse = new Plyr('#videoTag');
    </script>
</body>
</html>
