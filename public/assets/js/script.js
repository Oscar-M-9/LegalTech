
const cloud = document.getElementById("cloud");
const barraLateral = document.querySelector(".barra-lateral");
const spans = document.querySelectorAll("span");
const palanca = document.querySelector(".switch");
const circulo = document.querySelector(".circulo");
const menu = document.querySelector(".menu");
const main = document.querySelector("main");

menu.addEventListener("click",()=>{
    barraLateral.classList.toggle("max-barra-lateral");
    if(barraLateral.classList.contains("max-barra-lateral")){
        menu.children[0].style.display = "none";
        menu.children[1].style.display = "block";
    }
    else{
        menu.children[0].style.display = "block";
        menu.children[1].style.display = "none";
    }
    if(window.innerWidth<=320){
        barraLateral.classList.add("mini-barra-lateral");
        main.classList.add("min-main");
        spans.forEach((span)=>{
            span.classList.add("oculto");
        })
    }
});

// palanca.addEventListener("click",()=>{
//     let body = document.body;
//     body.classList.toggle("dark-mode");
//     body.classList.toggle("");
//     circulo.classList.toggle("prendido");
// });

// cloud.addEventListener("click",()=>{
//     barraLateral.classList.toggle("mini-barra-lateral");
//     main.classList.toggle("min-main");
//     spans.forEach((span)=>{
//         span.classList.toggle("oculto");
//     });
// });


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
