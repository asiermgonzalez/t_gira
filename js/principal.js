//Eliminar mensaje de alerta
  function desactivarAlert() {

    console.log("desactivarAlert()");
    setTimeout(() => {

        document.getElementById('alert').style.display="none";

    }, 2000);
}