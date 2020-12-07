function sucess(mensaje){
  // swal("titulo que se mostrara", "subtitulo!", "tipo de alerta (warning,error,success,info")");
  swal(mensaje, "", "success");
}
function error(mensaje){
  // swal("titulo que se mostrara", "subtitulo!", "tipo de alerta (warning,error,success,info")");
  swal(mensaje, "", "error");
}
function confirmacion(){
  swal({
    title: "esta seguro de esta acción?",
    text: "",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      swal("accion completada", {
        icon: "success",
      });
    } else {
      swal("accion cancelada!");
    }
  });
}
