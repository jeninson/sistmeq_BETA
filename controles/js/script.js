$('#flogin').on('submit', function () {
    let usu = $("#user").val()
    let clave = $("#pass").val()
    let pass = md5(clave)
    let men="Los datos del Usuario ("+usu+") No coinciden"
    let info = {USUARIO: usu, KEY: pass}
    $.ajax({
        method: "GET",
        url: "../controles/validarlogin.php",
        data: info
    }).done(function( msg ) {       
        if(msg=="1"){
            men="Bienvenido "+usu
            window.location.href="panel.php"
        }else{alert(men)}        
    });
    return false
})

function menu (n) {
   // alert(n)
   if(n!=""){
    $("#informacion_principal").html("Cargando... <br><h1 class='fa-solid fa-spinner fa-spin-pulse'></h1>").hide("slow")
    $.ajax({
        method: "GET",
        url: n
    }).done(function(msg){
        $("#informacion_principal").html(msg).show("slow")
       });
    }
}

function salir(){
    window.location.href = "cerrar_sesion.php";
}

function guardar_equipo(){
    alert("Enviando datos del Nuevo Equipo")
}

function editar_equipo(id){
    alert("El ID del Equipo seleccionado es: "+id)
}

