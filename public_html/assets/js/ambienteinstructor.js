

const selectop = document.getElementById('selectoption');
const datos = document.getElementById('dato');

selectop.addEventListener ('change', ()=>{

    if (selectop.value==2 || selectop.value==3) {
        datos.style.display = "block";
    }else{
        datos.style.display = "none";
    }

})