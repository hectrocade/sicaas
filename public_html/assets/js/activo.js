const selectactivo = document.getElementById('selectactivo');
const datos = document.getElementById('datoactivo');

selectactivo.addEventListener ('change', ()=>{

    if (selectactivo.value == 0 || selectactivo.value == 1 || selectactivo.value == 5 || selectactivo.value == 6) {
        datos.style.display = "none";
    }else{
        datos.style.display = "block";
    }

});

function ocultar(){
    if (selectactivo.value == 0) {
        datos.style.display = "none";
    }
}