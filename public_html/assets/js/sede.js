const selectsede = document.getElementById('selectsede');
const datos = document.getElementById('datosede');

selectsede.addEventListener ('change', ()=>{

    if (selectsede.value==1 || selectsede.value==3) {
        datos.style.display = "none";
    }else{
        datos.style.display = "block";
    }

})